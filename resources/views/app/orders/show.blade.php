@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('orders.index') }}" class="mr-4"><i class="icon ion-md-arrow-back"></i></a>
                @lang('crud.orders.show_title')
            </h4>

            <div class="row">
                <div class="col-3 m-2">
                    <h5>@lang('crud.orders.inputs.user_id')</h5>
                    <span>{{ optional($order->user)->name ?? '-' }}</span>
                </div>
                <div class="col-3 m-2">
                    <h5>@lang('crud.orders.inputs.coupon_id')</h5>
                    <span>{{ optional($order->coupon)->code ?? '-' }}</span>
                </div>
                <div class="col-3 m-2">
                    <h5>@lang('crud.orders.inputs.status')</h5>
                    <span>{{ $order->status ?? '-' }}</span>
                </div>
                <div class="col-3 m-2">
                    <h5>@lang('crud.orders.inputs.billing_name')</h5>
                    <span>{{ $order->billing_name ?? '-' }}</span>
                </div>
                <div class="col-3 m-2">
                    <h5>@lang('crud.orders.inputs.billing_mobile')</h5>
                    <span>{{ $order->billing_mobile ?? '-' }}</span>
                </div>
                <div class="col-3 m-2">
                    <h5>@lang('crud.orders.inputs.billing_address')</h5>
                    <span>{{ $order->billing_address ?? '-' }}</span>
                </div>
                <div class="col-3 m-2">
                    <h5>@lang('crud.orders.inputs.shipping_name')</h5>
                    <span>{{ $order->shipping_name ?? '-' }}</span>
                </div>
                <div class="col-3 m-2">
                    <h5>@lang('crud.orders.inputs.shipping_mobile')</h5>
                    <span>{{ $order->shipping_mobile ?? '-' }}</span>
                </div>
                <div class="col-3 m-2">
                    <h5>@lang('crud.orders.inputs.shipping_address')</h5>
                    <span>{{ $order->shipping_address ?? '-' }}</span>
                </div>
                <div class="col-3 m-2">
                    <h5>@lang('crud.orders.inputs.notes')</h5>
                    <span>{{ $order->notes ?? '-' }}</span>
                </div>
                <div class="col-3 m-2">
                    <h5>@lang('crud.orders.inputs.sub_total')</h5>
                    <span>{{$settings->currency ?? "$"}}{{ $order->sub_total ?? '-' }}</span>
                </div>
                @if (Auth::user()->isSuperAdmin())

                <div class="col-3 m-2">
                    <h5>@lang('crud.orders.inputs.profit')</h5>
                    <span>{{$settings->currency ?? "$"}}{{ $order->profit ?? '-' }}</span>
                </div>
                @endif
                <div class="col-3 m-2">
                    <h5>@lang('crud.orders.inputs.total')</h5>
                    <span>{{$settings->currency ?? "$"}}{{ $order->total ?? '-' }}</span>
                </div>
            </div>
            <div class="row">
                <div class="col-12 table-responsive">
                    <table class="table table-striped  ">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->orderDetails as $item)

                            <tr>
                                <td scope="row">{{$item->product->name}}</td>
                                <td>{{$settings->currency ?? "$"}}{{$item->price}}</td>
                                <td>{{$item->quantity}}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('orders.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Order::class)
                <a href="{{ route('orders.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection