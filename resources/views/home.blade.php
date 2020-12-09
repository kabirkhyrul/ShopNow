@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">

                    @if (Auth::user()->isSuperAdmin())
                    <div class="row">
                        <div class="col-sm-4 ">
                            <div class="card my-2 shadow-sm">
                                <div class="card-body">
                                    <h4 class="card-title">Pending Order</h4>
                                    <p class="card-text">

                                        {{$orders->where('status', 'pending')->count()}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 ">
                            <div class="card my-2 shadow-sm">
                                <div class="card-body">
                                    <h4 class="card-title">Processing Order</h4>
                                    <p class="card-text">

                                        {{$orders->where('status', 'processing')->count()}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 ">
                            <div class="card my-2 shadow-sm">
                                <div class="card-body">
                                    <h4 class="card-title">Delivered Order</h4>
                                    <p class="card-text">

                                        {{$orders->where('status', 'delivered')->count()}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 ">
                            <div class="card my-2 shadow-sm">
                                <div class="card-body">
                                    <h4 class="card-title">Total Order</h4>
                                    <p class="card-text">

                                        {{$orders->count()}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 ">
                            <div class="card my-2 shadow-sm">
                                <div class="card-body">
                                    <h4 class="card-title">Total Sold</h4>
                                    <p class="card-text">

                                        {{$orders->sum('total')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 ">
                            <div class="card my-2 shadow-sm">
                                <div class="card-body">
                                    <h4 class="card-title">Total Profit</h4>
                                    <p class="card-text">

                                        {{$orders->sum('profit')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 ">
                            <div class="card my-2 shadow-sm">
                                <div class="card-body">
                                    <h4 class="card-title">Unsold Product</h4>
                                    <p class="card-text">

                                        {{$products->count() - $orderDetails->groupBy('product_id')->count()}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 ">
                            <div class="card my-2 shadow-sm">
                                <div class="card-body">
                                    <h4 class="card-title">Total Customer</h4>
                                    <p class="card-text">

                                        {{$orders->groupBy('user_id')->count()}}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    @else
                    <div class="card-deck">

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Total Order</h4>
                                <p class="card-text">{{\App\Models\Order::count()}}</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pending Order</h4>
                                <p class="card-text">
                                    {{\App\Models\Order::where('status','pending')->count()}}
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Delivered Order</h4>
                                <p class="card-text">
                                    {{\App\Models\Order::where('status','delivered')->count()}}
                                </p>
                            </div>
                        </div>
                    </div>

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection