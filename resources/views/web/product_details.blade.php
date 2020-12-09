@php
$product = \App\Models\Product::whereSlug(request()->slug)->first();

@endphp
@extends('web.layouts.layout')
@section('content')
<!-- Product Details Section Begin -->
<section class="product-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__item">
                        <img class="product__details__pic__item--large"
                            src="{{ $product->photo ? \Storage::url($product->photo) : '' }}"
                            alt="{{$product->short_description ?? $product->name }}">
                    </div>

                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product__details__text">
                    <h3>{{$product->name ?? "404"}}</h3>
                    <div class="product__details__rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <span>({{count($product->reviews) ?? "0"}} reviews)</span>
                    </div>
                    <div class="product__details__price">{{$settings->currency}}{{$product->price ?? "404"}}</div>
                    <p>{{$product->short_description ?? "404"}}</p>
                    <a href="{{route('add.cart',$product->id)}}" class="primary-btn">ADD TO CART</a>
                    <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                    <ul>
                        <li><b>Availability</b> @if (($product->quantity -1) > 0) <span>In Stock</span> @else <samp>Out
                                of Stock</samp> @endif </li>
                        <li><b>Shipping</b> <span>{{$product->shipping ?? "01"}} day shipping.
                                @if($product->free_shipping)
                                <samp>Free pickup
                                    today</samp>
                                @endif </span></li>
                        <li><b>Weight</b> <span>{{$product->weight ?? "-"}}</span></li>
                        <li><b>Share on</b>
                            <div class="share">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="product__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                aria-selected="false">Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                aria-selected="false">Reviews <span>({{count($product->reviews) ?? 0}})</span></a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <h6>Products Description</h6>
                                <p>{{$product->description ?? "404"}}</p>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <h6>Products Infomation</h6>
                                <p>{{$product->information ?? "404"}}</p>

                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-3" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <h6>Reviews</h6>
                                @if (count($product->reviews)> 0)
                                @foreach ($product->reviews as $key=>$item)
                                <p><strong> {{$key+1}} . {{$item->user->name}}</strong> {{$item->body}}</p>
                                @endforeach
                                @else
                                <p> Not reviewed yet! </p>
                                @endif


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Details Section End -->

<!-- Related Product Section Begin -->
<section class="related-product">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title related__product__title">
                    <h2>Related Product</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($product->category->products->where('slug','!=',$product->slug)->sortBy('updated_at')->take(4) as
            $item)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg"
                        data-setbg="{{ $item->photo ? \Storage::url($item->photo) : '' }}">
                        <ul class="product__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="{{route('add.cart',$item->id)}}"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="{{route('shop.product',$item->slug)}}">{{ $item->name }} </a></h6>
                        <h5>{{$settings->currency}}{{ $item->price}}</h5>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
<!-- Related Product Section End -->
@endsection