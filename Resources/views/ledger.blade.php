@extends('core::layouts.admin.app')

@section('title', __('Manufacturer Ledger'))

@section('content')
    <div class="row">
        <div class="col-md-12 col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>@lang('Manufacturer Ledger')</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <form action="" class="form-inline" method="post">
                                <div class="input-group mb-2 mr-sm-2 list-width">
                                    <select name="customer_id" class="form-control select2" id="customer_id"  tabindex="-1" aria-hidden="true">
                                        <option value="">@lang('Select Manufacturer Name')</option>
                                        <option value="102030000001">Abrar</option>
                                        <option value="102030000002">Rabbi</option>
                                    </select>
                                </div>

                                <label class="sr-only" for="from_date">@lang('Start Date')</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">@lang('Start Date')</div>
                                    </div>
                                    <input type="text" class="form-control datepicker" name="from_date" id="from_date" placeholder="{{ __('Start Date') }}" value="2022-08-15">
                                </div>

                                <label class="sr-only" for="to_date">@lang('End Date')</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">@lang('End Date')</div>
                                    </div>
                                    <input type="text" class="form-control datepicker" id="to_date" name="to_date" placeholder="@lang('End Date')" value="2022-08-15">
                                </div>
                                <button type="submit" class="btn btn-primary mb-2"><i class="fa fa-search" aria-hidden="true"></i> @lang('Find')</button>
                            </form>
                        </div>

                    </div>
                    <h4 class="prbalance py-2">
                        @lang('Pre Balance') : 0.00 <br>
                        @lang('Current Balance') : 0.00
                    </h4>

                    <table class="table" width="99%" align="center" cellpadding="5" cellspacing="5" border="2">
                        <thead>
                            <tr align="center" class="">
                                <td colspan="7">
                                    <font size="+1">
                                        <strong>@lang('Manufacturer Ledger - Account Payable') ( <span class="text-">2022-08-15</span> To <span class="text"> 2022-08-15</span>)</strong>
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td height="25" align="center"><strong>@lang('S/N')</strong></td>
                                <td align="center"><strong>@lang('Date')</strong></td>
                                <td align="center"><strong>@lang('Description')</strong></td>
                                <td align="right"><strong>@lang('Debit')</strong></td>
                                <td align="right"><strong>@lang('Credit')</strong></td>
                                <td align="right"><strong>@lang('Balance')</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="6" class="text-center text-danger">
                                    <h4>@lang('No Record Found')</h4>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
