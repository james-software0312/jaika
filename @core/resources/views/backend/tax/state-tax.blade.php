@extends('backend.admin-master')
@section('site-title')
    {{__('State Tax')}}
@endsection
@section('style')
    <x-datatable.css />
    <x-bulk-action.css />
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
                        <h4 class="header-title">{{__('All State Tax')}}</h4>
                        @can('state-tax-delete')
                        <x-bulk-action.dropdown />
                        @endcan
                        <div class="table-wrap table-responsive">
                            <table class="table table-default">
                                <thead>
                                    <x-bulk-action.th />
                                    <th>{{__('ID')}}</th>
                                    <th>{{__('Name')}}</th>
                                    <th>{{__('Tax')}}</th>
                                    <th>{{__('Action')}}</th>
                                </thead>
                                <tbody>
                                    @foreach($all_state_tax as $tax)
                                    <tr>
                                        <x-bulk-action.td :id="$tax->id" />
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ optional($tax->state)->name }}</td>
                                        <td>{{ $tax->tax_percentage }}</td>
                                        <td>
                                            @can('state-tax-delete')
                                            <x-delete-popover :url="route('admin.tax.state.delete',$tax->id)"/>
                                            @endcan
                                            @can('state-tax-edit')
                                            <a href="#"
                                                data-toggle="modal"
                                                data-target="#state_tax_edit_modal"
                                                class="btn btn-primary btn-xs mb-3 mr-1 state_tax_edit_btn"
                                                data-id="{{$tax->id}}"
                                                data-state_id="{{$tax->state_id}}"
                                                data-tax_percentage="{{$tax->tax_percentage}}"
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
            @can('state-tax-create')
            <div class="col-lg-5 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">{{__('Add New State Tax')}}</h4>
                        <form action="{{route('admin.tax.state.new')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="country_id">{{__('Country')}}</label>
                                <select name="country_id" class="form-control" id="country_id">
                                    @foreach ($all_country as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="state_id">{{__('State')}}</label>
                                <select name="state_id" class="form-control" id="state_id">
                                    <option value="">{{ __('Select Country first') }}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tax_percentage">{{__('Tax Percentage')}}</label>
                                <input type="number" class="form-control" step="0.01" id="tax_percentage" name="tax_percentage" placeholder="{{__('Tax Percentage')}}">
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">{{__('Add New')}}</button>
                        </form>
                    </div>
                </div>
            </div>
            @endcan
        </div>
    </div>
    @can('state-tax-edit')
    <div class="modal fade" id="state_tax_edit_modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{__('Update State Tax')}}</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                </div>
                <form action="{{route('admin.tax.state.update')}}"  method="post">
                    <input type="hidden" name="id" id="state_tax_id">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="edit_state_id">{{__('state')}}</label>
                            <select name="state_id" class="form-control" id="edit_state_id">
                                @foreach ($all_states as $state)
                                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="edit_tax_percentage">{{__('Tax Percentage')}}</label>
                            <input type="number" class="form-control" step="0.01" id="edit_tax_percentage" name="tax_percentage" placeholder="{{__('Tax Percentage')}}">
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
    <x-table.btn.swal.js />
    <x-bulk-action.js :route="route('admin.tax.state.bulk.action')" />

    <script>
        $(document).ready(function () {
            $(document).on('click','.state_tax_edit_btn',function(){
                let el = $(this);
                let id = el.data('id');
                let state_id = el.data('state_id');
                let tax_percentage = el.data('tax_percentage');
                let modal = $('#state_tax_edit_modal');

                modal.find('#state_tax_id').val(id);
                modal.find('#edit_state_id').val(state_id);
                modal.find('#edit_tax_percentage').val(tax_percentage);
            });

            $('#country_id').on('change', function () {
                let id = $(this).val();
                $.get('{{ route("admin.state.by.country") }}', {id:id}).then(function (data) {
                    $('#state_id').html('');
                    for (const state of data) {
                        $('#state_id').append('<option value="'+state.id+'">'+state.name+'</option>');
                    }
                });
            });
        });
    </script>
@endsection
