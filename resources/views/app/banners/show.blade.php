@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('banners.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.banners.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.banners.inputs.bottom_string')</h5>
                    <span>{{ $banner->bottom_string ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.banners.inputs.middle_string')</h5>
                    <span>{{ $banner->middle_string ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.banners.inputs.url')</h5>
                    <span>{{ $banner->url ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.banners.inputs.image')</h5>
                    <img
                        src="{{ $banner->image ? \Storage::url($banner->image) : '' }}"
                        style="object-fit: cover; width: 150px; height: 150px; border: 1px solid #ccc;"
                    />
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.banners.inputs.top_string')</h5>
                    <span>{{ $banner->top_string ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.banners.inputs.top_position')</h5>
                    <span>{{ $banner->top_position ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('banners.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Banner::class)
                <a href="{{ route('banners.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
