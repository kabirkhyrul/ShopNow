@extends('web.layouts.layout')
@section('content')
@php
$total = 0;
if (session('cart')) {
foreach(session('cart') as $id => $details){
$total += $details['price'] * $details['quantity'] ;
}
}
@endphp
<!-- Shoping Cart Section Begin -->
<section class="mb-5">
    <div class="container">
        <form action="{{route('update.cart')}}" method="get">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(session('cart'))
                                @foreach(session('cart') as $id => $details)
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="{{ $details['photo'] ? \Storage::url($details['photo']) : '' }}"
                                            alt="{{$details['name']}}" class="img-thumbnail w-25">
                                        <h5>{{$details['name']}}</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        {{$settings->currency ?? "Set Currency"}}{{$details['price']}}
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" name="{{$id}}" value="{{$details['quantity']}}">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        {{$settings->currency ?? "Set Currency"}}{{$details['quantity'] * $details['price']}}
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <a href="{{route('remove.cart',$id)}}"><span class="icon_close"></span></a>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td class="shoping__cart__item" colspan="5">
                                        <h5>Empty!</h5>
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="{{route('web')}}" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <button type="submit" class="btn primary-btn cart-btn cart-btn-right"><span
                                class="icon_loading"></span>
                            Upadate Cart</button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <input type="text" name="coupon" placeholder="Enter your coupon code"
                                class="form-control mb-2" @if(session('discount')) value="{{session('discount')->code}}"
                                @endif>
                            <button type="submit" class="site-btn">APPLY COUPON</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Subtotal <span>{{$settings->currency ?? "Set Currency"}}{{$total}}</span></li>
                            <li>Total
                                <span>{{$settings->currency ?? "Set Currency"}}
                                    @if(session('discount'))
                                    {{session('discount')->discount_type == 'Amount' ?  ($total-session('discount')->amount) : ($total- (($total * session('discount')->amount)/100))}}
                                    @else
                                    {{$total}}
                                    @endif
                                </span>
                            </li>
                        </ul>
                        <a href="{{route('shop.checkout')}}" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- Shoping Cart Section End -->
@endsection