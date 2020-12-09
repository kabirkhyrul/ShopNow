@php
    $latest_products= \App\Models\Product::orderBy('updated_at')->limit(6)->get();
@endphp
<div class="latest-product__text">
    <h4>Latest Products</h4>
    <div class="latest-product__slider owl-carousel">
        @foreach ($latest_products->chunk(3) as $chunked_item)
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