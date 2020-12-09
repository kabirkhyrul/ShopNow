@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('general-settings.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.general_settings.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.general_settings.inputs.name')</h5>
                    <span>{{ $generalSetting->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.general_settings.inputs.phone')</h5>
                    <span>{{ $generalSetting->phone ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.general_settings.inputs.address')</h5>
                    <span>{{ $generalSetting->address ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.general_settings.inputs.logo')</h5>
                    <span>{{ $generalSetting->logo ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.general_settings.inputs.email')</h5>
                    <span>{{ $generalSetting->email ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.general_settings.inputs.facebook')</h5>
                    <span>{{ $generalSetting->facebook ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.general_settings.inputs.twitter')</h5>
                    <span>{{ $generalSetting->twitter ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.general_settings.inputs.instagram')</h5>
                    <span>{{ $generalSetting->instagram ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.general_settings.inputs.pinterest')</h5>
                    <span>{{ $generalSetting->pinterest ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.general_settings.inputs.top_bar_offer')</h5>
                    <span>{{ $generalSetting->top_bar_offer ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.general_settings.inputs.currency')</h5>
                    <span>{{ $generalSetting->currency ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.general_settings.inputs.shipping_cost')</h5>
                    <span>{{ $generalSetting->shipping_cost ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a
                    href="{{ route('general-settings.index') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\GeneralSetting::class)
                <a
                    href="{{ route('general-settings.create') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
