@php

$home_banner = \App\Models\Banner::where('top_position',0)->limit(2)->get();
$featured_category = \App\Models\Product::where('is_featured',1)->groupBy('category_id')->pluck('category_id');

$top_rated_products= \App\Models\Product::orderBy('total_sale')->limit(6)->get();
$rated_products=\App\Models\Product::orderBy('rating')->limit(6)->get();
@endphp
@extends('web.layouts.layout')
@section('content')
<!-- Categories Section Begin -->
<section class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                @foreach($categories as $category)
                <div class="col-lg-3">
                    <div class="categories__item set-bg"
                        data-setbg=" {{ $category->photo ? \Storage::url($category->photo) : '' }}">
                        <h5><a href="{{route('shop.category',$category->slug)}}">{{$category->name}}</a></h5>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->
<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Featured Product</h2>
                </div>
                <div class="featured__controls">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        @foreach($featured_category as $key=>$category)
                        @php $feature_category = \App\Models\Category::find($category); @endphp
                        <li data-filter=".{{$feature_category->slug}}">{{$feature_category->name}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            @foreach($featured_category as $category)
            @php $single_category = \App\Models\Category::find($category);@endphp
            @if ($single_category && $single_category->products)
            @foreach($single_category->products as $featured_product)
            <div class="col-lg-3 col-md-4 col-sm-6 mix {{$single_category->slug}}">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg"
                        data-setbg="{{ $featured_product->photo ? \Storage::url($featured_product->photo) : '' }}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="{{route('add.cart',$featured_product->id)}}"><i
                                        class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="{{route('shop.product',$featured_product->slug)}}">{{$featured_product->name}}</a>
                        </h6>
                        <h5>{{$settings->currency ?? "Set Currency"}}{{$featured_product->price}}</h5>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
            @endforeach
        </div>
    </div>
</section>
<!-- Featured Section End -->
<!-- Banner Begin -->
<div class="banner">
    <div class="container">
        <div class="row">
            @foreach ($home_banner as $item)
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="{{ $item->image ? \Storage::url($item->image) : '' }}" alt="">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Banner End -->
<!-- Latest Product Section Begin -->
<section class="latest-product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                @include('web.layouts.latest-product')
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Top Rated Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        @foreach ($top_rated_products->chunk(3) as $chunked_item)
                        <div class="latest-prdouct__slider__item">
                            @foreach ($chunked_item as $item)
                            <a href="{{route('shop.product',$item->slug)}}" class="latest-product__item row">
                                <div class="col-6 float-left">
                                    <img src="{{ $item->photo ? \Storage::url($item->photo) : '' }}" alt="">
                                </div>
                                <div class="latest-product__item__text col-6">
                                    <h6>{{$item->name}}</h6>
                                    <span>{{$settings->currency?? "Set Currency"}}{{$item->price}}</span>
                                </div>
                            </a>
                            @endforeach
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Review Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        @foreach ($rated_products->chunk(3) as $chunked_item)
                        <div class="latest-prdouct__slider__item">
                            @foreach ($chunked_item as $item)
                            <a href="{{route('shop.product',$item->slug)}}" class="latest-product__item row">
                                <div class="col-6 float-left">
                                    <img src="{{ $item->photo ? \Storage::url($item->photo) : '' }}" alt="">
                                </div>
                                <div class="latest-product__item__text col-6">
                                    <h6>{{$item->name}}</h6>
                                    <span>{{$settings->currency ?? "Set Currency"}}{{$item->price}}</span>
                                </div>
                            </a>
                            @endforeach
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Product Section End -->
@endsection