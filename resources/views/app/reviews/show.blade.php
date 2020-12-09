@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('reviews.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.reviews.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.reviews.inputs.product_id')</h5>
                    <span>{{ optional($review->product)->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.reviews.inputs.user_id')</h5>
                    <span>{{ optional($review->user)->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.reviews.inputs.body')</h5>
                    <span>{{ $review->body ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.reviews.inputs.ratings')</h5>
                    <span>{{ $review->ratings ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('reviews.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Review::class)
                <a href="{{ route('reviews.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
