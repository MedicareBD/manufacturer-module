@extends('core::layouts.admin.app')

@section('title', __('Edit Manufacturer'))

@section('content')
    <div class="row">
        <div class="col-md-12 col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>@lang('Edit Manufacturer')</h4>
                    <div class="card-header-action">
                        <div class="btn-group">
                            <a href="{{ route('admin.manufacturer.index') }}" class="btn btn-primary">
                                <i class="fas fa-align-justify"></i>
                                @lang('Manufacturer List')
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.manufacturer.update', $manufacturer->id) }}" method="post" class="instant_reload_form">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-sm-6 col-md-4 mb-3">
                                <label for="manufacturer_name" class="mb-0 required">@lang('Manufacturer Name')</label>
                                <input type="text" name="manufacturer_name" class="form-control" id="manufacturer_name" value="{{ $manufacturer->name }}" placeholder="@lang('Manufacturer Name')" required>
                            </div>
                            <div class="col-sm-6 col-md-4 mb-3">
                                <label for="manufacturer_mobile" class="mb-0 required">@lang('Mobile No') </label>
                                <input type="tel" name="manufacturer_mobile" class="form-control" id="manufacturer_mobile" value="{{ $manufacturer->mobile }}" placeholder="@lang('Mobile No')" required>
                            </div>
                            <div class="col-sm-6 col-md-4 mb-3">
                                <label for="manufacturer_email" class="mb-0 required">@lang('Email Address1')</label>
                                <input type="email" class="form-control" name="manufacturer_email" id="email" value="{{ $manufacturer->email }}" placeholder="Email" required>
                            </div>
                            <div class="col-sm-6 col-md-4 mb-3">
                                <label for="secondary_email" class="mb-0">@lang('Secondary Email Address')</label>
                                <input type="email" class="form-control" name="secondary_email" id="secondary_email" value="{{ $manufacturer->secondary_email }}" placeholder="@lang('Email Address')">
                            </div>
                            <div class="col-sm-6 col-md-4 mb-3">
                                <label for="phone" class="mb-0">@lang('Phone')</label>
                                <input class="form-control" id="phone" type="tel" name="phone" value="{{ $manufacturer->phone }}" placeholder="@lang('Phone')">
                            </div>
                            <div class="col-sm-6 col-md-4 mb-3">
                                <label for="contact" class="mb-0">@lang('Contact')</label>
                                <input class="form-control" id="contact" type="text" name="contact" value="{{ $manufacturer->contact }}" placeholder="@lang('Contact')">
                            </div>
                            <div class="col-sm-6 col-md-4 mb-3">
                                <label for="fax" class="mb-0">@lang('Fax')</label>
                                <input type="text" name="fax" class="form-control" id="fax" value="{{ $manufacturer->fax }}" placeholder="@lang('Fax')">
                            </div>
                            <div class="col-sm-6 col-md-4 mb-3">
                                <label for="city" class="mb-0">@lang('City')</label>
                                <input type="text" name="city" class="form-control" id="city" value="{{ $manufacturer->city }}" placeholder="@lang('City')">
                            </div>
                            <div class="col-sm-6 col-md-4 mb-3">
                                <label for="state" class="mb-0">@lang('State')</label>
                                <input type="text" name="state" class="form-control" id="state" value="{{ $manufacturer->state }}" placeholder="@lang('State')">
                            </div>
                            <div class="col-sm-6 col-md-4 mb-3">
                                <label for="zip" class="mb-0">@lang('Zip')</label>
                                <input name="zip" type="text" class="form-control" id="zip" value="{{ $manufacturer->zip }}" placeholder="@lang('Zip')">
                            </div>
                            <div class="col-sm-6 col-md-4 mb-3">
                                <label for="country" class="mb-0">@lang('Country')</label>
                                <input name="country" type="text" class="form-control" value="{{ $manufacturer->country }}" placeholder="@lang('Country')" id="country">
                            </div>
                            <div class="col-sm-6">
                                <label for="address1" class="mb-0">@lang('Address 1')</label>
                                <textarea name="address_1" id="address1" class="form-control" placeholder="@lang('Address 1')">{{ $manufacturer->address }}</textarea>
                            </div>
                            <div class="col-sm-6">
                                <label for="address2" class="mb-0">@lang('Address 2')</label>
                                <textarea name="address_2" id="address2" class="form-control" placeholder="@lang('Address 2')">{{ $manufacturer->address_2 }}</textarea>
                            </div>
                            <div class="col-12 mt-4 text-right">
                                <button type="submit" class="btn btn-primary submit-button"><i class="fas fa-save"></i> @lang('Update')</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
