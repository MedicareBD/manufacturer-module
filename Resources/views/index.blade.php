@extends('layouts.admin.app')

@section('title', __('Manage Manufacturer'))

@section('content')
    <div class="row">
        <div class="col-md-12 col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>@lang('Manufacturer List')</h4>
                    <div class="card-header-action">
                        <a href="{{ route('admin.manufacturer.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> @lang('Add Manufacturer')</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        {{ $dataTable->table() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('pageScripts')
    {{ $dataTable->scripts() }}
@endpush
