@extends('backend.admin-master')
@section('site-title')
    {{__('Shipping Zones')}}
@endsection
@section('style')
    <x-datatable.css />
    <x-bulk-action.css />
    <x-niceselect.css />
@endsection
@section('content')
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-top-40">
                    <x-msg.error />
                    <x-msg.flash />
                </div>
            </div>
            <div class="col-lg-7 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">{{__('All Shipping Zones')}}</h4>
                        @can('shipping-zone-delete')
                        <x-bulk-action.dropdown />
                        @endcan
                        <div class="table-wrap table-responsive">
                            <table class="table table-default">
                                <thead>
                                    <x-bulk-action.th />
                                    <th>{{__('ID')}}</th>
                                    <th>{{__('Name')}}</th>
                                    <th>{{__('Action')}}</th>
                                </thead>
                                <tbody>
                                    @foreach($all_zones as $zone)
                                    <tr>
                                        <x-bulk-action.td :id="$zone->id" />
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$zone->name}}</td>
                                        <td>
                                            @can('shipping-zone-delete')
                                            <x-delete-popover :url="route('admin.shipping.zone.delete', $zone->id)"/>
                                            @endcan
                                            @can('shipping-zone-edit')
                                            <a href="#"
                                                data-toggle="modal"
                                                data-target="#shipping_zone_edit_modal"
                                                class="btn btn-primary btn-xs mb-3 mr-1 shipping_zone_edit_btn"
                                                data-id="{{$zone->id}}"
                                                data-name="{{$zone->name}}"
                                                data-country="{{optional($zone->region)->country}}"
                                                data-state="{{optional($zone->region)->state}}"
                                                data-toggle="tooltip"
                                                data-placement="right"
                                                title="Edit"
                                            >
                                                <i class="ti-pencil"></i>
                                            </a>
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @can('shipping-zone-create')
            <div class="col-lg-5 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">{{__('Add New Shipping Zone')}}</h4>
                        <form action="{{route('admin.shipping.zone.new')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">{{__('Name')}}</label>
                                <input type="text" class="form-control"  id="name" name="name" placeholder="{{__('Name')}}">
                            </div>
                            <div class="form-group">
                                <label for="country">{{ __('Country') }}</label>
                                <select name="country[]" id="country" class="form-control nice-select wide" multiple>
                                    @foreach ($all_countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="state">{{ __('State') }}</label>
                                <select name="state[]" id="state" class="form-control nice-select wide" multiple>
                                    @foreach ($all_states as $state)
                                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">{{__('Add New')}}</button>
                        </form>
                    </div>
                </div>
            </div>
            @endcan
        </div>
    </div>
    @can('shipping-zone-edit')
    <div class="modal fade" id="shipping_zone_edit_modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{__('Update Shipping Zone')}}</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                </div>
                <form action="{{route('admin.shipping.zone.update')}}"  method="post">
                    <input type="hidden" name="id" id="shipping_zone_id">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="edit_name">{{__('Name')}}</label>
                            <input type="text" class="form-control"  id="edit_name" name="name" placeholder="{{__('Name')}}">
                        </div>
                        <div class="form-group">
                            <select name="country[]" id="edit_country" class="form-control nice-select wide" multiple>
                                @foreach ($all_countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="state[]" id="edit_state" class="form-control nice-select wide" multiple>
                                @foreach ($all_states as $state)
                                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Close')}}</button>
                        <button type="submit" class="btn btn-primary">{{__('Save Change')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endcan
@endsection
@section('script')
    <x-datatable.js />
    <x-niceselect.js />
    <x-table.btn.swal.js />
    <x-bulk-action.js :route="route('admin.shipping.zone.bulk.action')" />

    <script>
    $(document).ready(function () {
        if ($('.nice-select').length) {
            $('.nice-select').niceSelect();
        }

        $(document).on('click','.shipping_zone_edit_btn',function(){
            let el = $(this);
            let id = el.data('id');
            let name = el.data('name');
            let country = el.data('country');
            let state = el.data('state');
            let modal = $('#shipping_zone_edit_modal');

            modal.find('#shipping_zone_id').val(id);
            modal.find('#edit_name').val(name);
            modal.find('#edit_country').val(country)
            modal.find('#edit_state').val(state)

            $('.nice-select').niceSelect("update");
        });
    });
    </script>

@endsection
