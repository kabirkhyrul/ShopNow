@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div style="display: flex; justify-content: space-between;">
                <h4 class="card-title">@lang('crud.products.index_title')</h4>
            </div>

            <div class="searchbar mt-4 mb-5">
                <div class="row">
                    <div class="col-md-6">
                        <form>
                            <div class="input-group">
                                <input
                                    id="indexSearch"
                                    type="text"
                                    name="search"
                                    placeholder="{{ __('crud.common.search') }}"
                                    value="{{ $search ?? '' }}"
                                    class="form-control"
                                    autocomplete="off"
                                />
                                <div class="input-group-append">
                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                    >
                                        <i class="icon ion-md-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 text-right">
                        @can('create', App\Models\Product::class)
                        <a
                            href="{{ route('products.create') }}"
                            class="btn btn-primary"
                        >
                            <i class="icon ion-md-add"></i>
                            @lang('crud.common.create')
                        </a>
                        @endcan
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-borderless table-hover">
                    <thead>
                        <tr>
                            <th>@lang('crud.products.inputs.category_id')</th>
                            <th>@lang('crud.products.inputs.name')</th>
                            <th>@lang('crud.products.inputs.price')</th>
                            <th>@lang('crud.products.inputs.cost_price')</th>
                            <th>@lang('crud.products.inputs.quantity')</th>
                            <th>@lang('crud.products.inputs.shipping')</th>
                            <th>@lang('crud.products.inputs.weight')</th>
                            <th>@lang('crud.products.inputs.special_price')</th>
                            <th>@lang('crud.products.inputs.total_sale')</th>
                            <th>@lang('crud.products.inputs.rating')</th>
                            <th>@lang('crud.products.inputs.is_featured')</th>
                            <th>@lang('crud.products.inputs.free_shipping')</th>
                            <th>@lang('crud.products.inputs.status')</th>
                            <th>@lang('crud.products.inputs.photo')</th>
                            <th class="text-center">
                                @lang('crud.common.actions')
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($products as $product)
                        <tr>
                            <td>
                                {{ optional($product->category)->name ?? '-' }}
                            </td>
                            <td>{{ $product->name ?? '-' }}</td>
                            <td>{{ $product->price ?? '-' }}</td>
                            <td>{{ $product->cost_price ?? '-' }}</td>
                            <td>{{ $product->quantity ?? '-' }}</td>
                            <td>{{ $product->shipping ?? '-' }}</td>
                            <td>{{ $product->weight ?? '-' }}</td>
                            <td>{{ $product->special_price ?? '-' }}</td>
                            <td>{{ $product->total_sale ?? '-' }}</td>
                            <td>{{ $product->rating ?? '-' }}</td>
                            <td>{{ $product->is_featured ?? '-' }}</td>
                            <td>{{ $product->free_shipping ?? '-' }}</td>
                            <td>{{ $product->status ?? '-' }}</td>
                            <td>
                                <img
                                    src="{{ $product->photo ? \Storage::url($product->photo) : '' }}"
                                    style="object-fit: cover; width: 50px; height: 50px; border: 1px solid #ccc;"
                                />
                            </td>
                            <td class="text-center" style="width: 134px;">
                                <div
                                    role="group"
                                    aria-label="Row Actions"
                                    class="btn-group"
                                >
                                    @can('update', $product)
                                    <a
                                        href="{{ route('products.edit', $product) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-create"></i>
                                        </button>
                                    </a>
                                    @endcan @can('view', $product)
                                    <a
                                        href="{{ route('products.show', $product) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-eye"></i>
                                        </button>
                                    </a>
                                    @endcan @can('delete', $product)
                                    <form
                                        action="{{ route('products.destroy', $product) }}"
                                        method="POST"
                                        onsubmit="return confirm('{{ __('crud.common.are_you_sure') }}')"
                                    >
                                        @csrf @method('DELETE')
                                        <button
                                            type="submit"
                                            class="btn btn-light text-danger"
                                        >
                                            <i class="icon ion-md-trash"></i>
                                        </button>
                                    </form>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="15">
                                @lang('crud.common.no_items_found')
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="15">{!! $products->render() !!}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
