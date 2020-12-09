<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->authorize('view-any', Order::class);
        $this->authorize('view-any', OrderDetail::class);
        $this->authorize('view-any', Product::class);
        $this->authorize('view-any', User::class);
        $orders = Order::all();
        $orderDetails = OrderDetail::all();
        $products = Product::all();
        $users = User::all();
        return view('home', compact('orders', 'products', 'users', 'orderDetails'));
    }
}
