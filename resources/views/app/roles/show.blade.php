@extends('layouts.app') 

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('roles.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.roles.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.roles.inputs.name')</h5>
                    <span>{{ $role->name ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.permissions.name')</h5>
                    <div>
                        @forelse ($role->permissions as $permission)
                            <div class="badge badge-primary">{{ $permission->name }}</div>
                            <br>
                        @empty
                            -
                        @endforelse
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('roles.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i> @lang('crud.common.back')
                </a>

                <a href="{{ route('roles.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.roles.index_title')
                </a>
            </div>
        </div>
    </div>
</div>
@endsection