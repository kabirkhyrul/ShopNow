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
<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="{{route('shop.cart')}}">Click here</a> to
                    enter your code
                </h6>
            </div>
        </div>
        <div class="checkout__form">
            <h4>Billing Details</h4>
            <form action="{{route('place.order')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="checkout__input__checkbox">
                            <label for="diff-acc">
                                Ship to a different address?
                                <input type="checkbox" id="diff-acc" name="different_ship">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkout__input">
                            <p>Name<span>*</span></p>
                            <input type="text" name="billing_name" value="{{Auth::user()->name}}">
                            @error('billing_name')
                            @include('components.inputs.partials.error')
                            @enderror
                        </div>
                        <div class="checkout__input">
                            <p>Address<span>*</span></p>
                            <input type="text" name="billing_address" placeholder="Address for curier delivery"
                                class="checkout__input__add" value="{{Auth::user()->address}}">
                            @error('billing_address')
                            @include('components.inputs.partials.error')
                            @enderror
                        </div>
                        <div class="checkout__input">
                            <p>Phone<span>*</span></p>
                            <input type="text" name="billing_mobile" placeholder="+88017XXXXXXXX"
                                value="{{Auth::user()->phone}}">
                            @error('billing_mobile')
                            @include('components.inputs.partials.error')
                            @enderror
                        </div>
                        <div id="diff-ship" class="d-none">
                            <h4>Shipping Address</h4>
                            <div class="checkout__input">
                                <p>Name<span>*</span></p>
                                <input type="text" name="shipping_name" placeholder="Enter receiver name">
                            </div>
                            <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                <input type="text" name="shipping_address" placeholder="Address for curier delivery"
                                    class="checkout__input__add">
                            </div>
                            <div class="checkout__input">
                                <p>Phone<span>*</span></p>
                                <input type="text" name="shipping_mobile" placeholder="+88017XXXXXXXX">
                            </div>
                        </div>
                        <h4>Order notes<span>*</span></h4>
                        <div class="checkout__input">
                            <input type="text" name="notes"
                                placeholder="Notes about your order, e.g. special notes for delivery.">
                            @error('notes')
                            @include('components.inputs.partials.error')
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="checkout__order">
                            <h4>Your Order</h4>
                            <div class="checkout__order__products">Products <span>Total</span></div>
                            <ul>
                                @if(session('cart'))
                                @foreach(session('cart') as $id => $details)
                                <li>{{$details['name']}}
                                    <span>{{$settings->currency ?? "Set Currency"}}{{$details['price']*$details['quantity']}}</span>
                                </li>
                                @endforeach
                                @else
                                <li>Empty! <span>{{$settings->currency ?? "Set Currency"}}0</span></li>
                                @endif
                            </ul>
                            <div class="checkout__order__subtotal">
                                Subtotal
                                <span>
                                    {{$settings->currency ?? "Set Currency"}}
                                    {{$total}}
                                </span>
                            </div>
                            <div class="checkout__order__total">
                                Shipping Cost
                                <span class="text-body">
                                    {{$settings->currency ?? "Set Currency"}}
                                    {{$settings->shipping_cost}}
                                </span>
                            </div>
                            @if(session('discount'))
                            <div class="checkout__order__total">
                                Discount
                                <span class="text-body">
                                    {{session('discount')->discount_type == 'Amount' ?  ($settings->currency . session('discount')->amount) : (session('discount')->amount . ' %')}}
                                </span>
                            </div>
                            @endif
                            <div class="checkout__order__total">
                                Total
                                <span>
                                    {{$settings->currency ?? "Set Currency"}}
                                    @if(session('discount'))
                                    {{session('discount')->discount_type == 'Amount' ?  (($total-session('discount')->amount) + $settings->shipping_cost)  : (($total- (($total * session('discount')->amount)/100)) + $settings->shipping_cost)}}
                                    @else
                                    {{$total}}
                                    @endif
                                </span>
                            </div>
                            <p>You will pay when you receive your product</p>
                            <button type="submit" class="site-btn">PLACE ORDER</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Checkout Section End -->

@endsection

@push('scripts')
<script>
    $("#diff-acc").change(function (e) { 
        e.preventDefault();
        
    ($("#diff-acc").is(':checked'))? $("#diff-ship").removeClass('d-none') : $('#diff-ship').addClass('d-none');;
    });
</script>
@endpush