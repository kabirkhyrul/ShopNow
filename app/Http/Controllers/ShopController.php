<?php

namespace App\Http\Controllers;

use App\Models\GeneralSetting;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\OrderStoreRequest;

class ShopController extends Controller
{
    public function place_order(OrderStoreRequest $request)
    {
        $validated = $request->validated();

        $order = new Order();
        $order->user_id = Auth::user()->id;
        if ($validated->different_ship == 'checked') {
            $order->shipping_name = $validated->shipping_name;
            $order->shipping_address = $validated->shipping_address;
            $order->shipping_mobile = $validated->shipping_mobile;
        } else {
            $order->shipping_name = $validated->billing_name;
            $order->shipping_address = $validated->billing_address;
            $order->shipping_mobile = $validated->billing_mobile;
        }
        $order->billing_name = $validated->billing_name;
        $order->billing_address = $validated->billing_address;
        $order->billing_mobile = $validated->billing_mobile;
        $order->notes = $validated->notes;
        $order->coupon_id = (session('discount')) ? session('discount')->id : null;
        $total = 0;
        $profit = 0;
        $cart = session()->get('cart');
        foreach ($cart as $id => $details) {
            $total += $details['price'] * $details['quantity'];
            $product = Product::find($id);
            $profit += $details['price'] * $details['quantity'] - ($product->cost_price * $details['quantity']);
        }
        $order->sub_total = $total;
        $order->profit = $profit;
        if (session('discount')) {
            $order->total = session('discount')->discount_type == 'Amount' ?
                (($total - session('discount')->amount) + GeneralSetting::first()->shipping_cost)
                : (($total - (($total * session('discount')->amount) / 100)) + GeneralSetting::first()->shipping_cost);
        } else {
            $order->total = ($total + floatval(GeneralSetting::first()->shipping_cost));
        }

        if ($order->save()) {



            foreach ($cart as $id => $details) {
                $order_product = new OrderDetail();
                $product = Product::find($id);
                $order_product->order_id = $order->id;
                $order_product->product_id = $id;
                $order_product->price = $details['price'];
                $order_product->quantity = $details['quantity'];
                $order_product->save();
                $product = Product::find($id);
                $product->quantity = $product->quantity - $details['quantity'];
                $product->total_sale += 1;
                $product->save();
            }
            $user = User::find(Auth::user()->id);
            $user->name = $validated->billing_name;
            $user->address = $validated->billing_address;
            $user->phone = $validated->billing_mobile;
            $user->save();
            Session()->forget('discount');
            Session()->forget('cart');
            return back()->with('success', 'Order Placed!');
        }
    }

    public function search(Request $request)
    {

        $q = $request->query('q');

        $products = Product::where('name', "LIKE", "%" . strtoupper($q) . "%")->paginate(10);

        return view('web.search', compact('q', 'products'));
    }
}
