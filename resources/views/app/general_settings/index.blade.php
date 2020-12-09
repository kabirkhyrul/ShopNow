@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div style="display: flex; justify-content: space-between;">
                <h4 class="card-title">
                    @lang('crud.general_settings.index_title')
                </h4>
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
                        @can('create', App\Models\GeneralSetting::class)
                        <a
                            href="{{ route('general-settings.create') }}"
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
                            <th>@lang('crud.general_settings.inputs.name')</th>
                            <th>@lang('crud.general_settings.inputs.phone')</th>
                            <th>
                                @lang('crud.general_settings.inputs.address')
                            </th>
                            <th>@lang('crud.general_settings.inputs.logo')</th>
                            <th>@lang('crud.general_settings.inputs.email')</th>
                            <th>
                                @lang('crud.general_settings.inputs.facebook')
                            </th>
                            <th>
                                @lang('crud.general_settings.inputs.twitter')
                            </th>
                            <th>
                                @lang('crud.general_settings.inputs.instagram')
                            </th>
                            <th>
                                @lang('crud.general_settings.inputs.pinterest')
                            </th>
                            <th>
                                @lang('crud.general_settings.inputs.top_bar_offer')
                            </th>
                            <th>
                                @lang('crud.general_settings.inputs.currency')
                            </th>
                            <th>
                                @lang('crud.general_settings.inputs.shipping_cost')
                            </th>
                            <th class="text-center">
                                @lang('crud.common.actions')
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($generalSettings as $generalSetting)
                        <tr>
                            <td>{{ $generalSetting->name ?? '-' }}</td>
                            <td>{{ $generalSetting->phone ?? '-' }}</td>
                            <td>{{ $generalSetting->address ?? '-' }}</td>
                            <td>{{ $generalSetting->logo ?? '-' }}</td>
                            <td>{{ $generalSetting->email ?? '-' }}</td>
                            <td>{{ $generalSetting->facebook ?? '-' }}</td>
                            <td>{{ $generalSetting->twitter ?? '-' }}</td>
                            <td>{{ $generalSetting->instagram ?? '-' }}</td>
                            <td>{{ $generalSetting->pinterest ?? '-' }}</td>
                            <td>{{ $generalSetting->top_bar_offer ?? '-' }}</td>
                            <td>{{ $generalSetting->currency ?? '-' }}</td>
                            <td>{{ $generalSetting->shipping_cost ?? '-' }}</td>
                            <td class="text-center" style="width: 134px;">
                                <div
                                    role="group"
                                    aria-label="Row Actions"
                                    class="btn-group"
                                >
                                    @can('update', $generalSetting)
                                    <a
                                        href="{{ route('general-settings.edit', $generalSetting) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-create"></i>
                                        </button>
                                    </a>
                                    @endcan @can('view', $generalSetting)
                                    <a
                                        href="{{ route('general-settings.show', $generalSetting) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-eye"></i>
                                        </button>
                                    </a>
                                    @endcan @can('delete', $generalSetting)
                                    <form
                                        action="{{ route('general-settings.destroy', $generalSetting) }}"
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
                            <td colspan="13">
                                @lang('crud.common.no_items_found')
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="13">
                                {!! $generalSettings->render() !!}
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
