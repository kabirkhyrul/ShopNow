<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart($id)
    {
        $product = Product::find($id);
        if (!$product) {
            abort(404);
        }
        $cart = session()->get('cart');
        // if cart is empty then this the first product
        if (!$cart) {
            $cart = [
                $id => [
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->special_price ? $product->special_price : $product->price,
                    "photo" => $product->photo
                ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if cart not empty then check if this product exist then increment quantity
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->special_price ? $product->special_price : $product->price,
            "photo" => $product->photo
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function remove($id)
    {
        if ($id) {
            $cart = session()->get('cart');
            if (isset($cart[$id])) {
                unset($cart[$id]);
                session()->put('cart', $cart);
            }
            return redirect()->back()->with('success', 'Product removed successfully!');
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $products = $request->except('coupon');
        $coupon = $request->coupon;

        if (count($products) > 0 && $coupon == null) {
            $cart = session()->get('cart');
            foreach ($products as $key => $value) {
                $cart[$key]["quantity"] = $value;
            }
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Cart updated successfully!');
        } else {
            $cart = session()->get('cart');
            foreach ($products as $key => $value) {
                $cart[$key]["quantity"] = $value;
            }
            session()->put('cart', $cart);
            $discount = Coupon::where('code', $coupon)->where('expired_date', '>', Carbon::now())->where('start_date', '<', Carbon::now())->first();

            if (!$discount) {
                return redirect()->back()->with('error', 'Invalid Coupon!');
            }
            session()->put('discount', $discount);
            return redirect()->back()->with('success', 'Coupon applied successfully!');
        }
    }
}
