@extends('backend.admin-master')
@section('site-title')
    {{ __('Support Department') }}
@endsection
@section('style')
    <x-datatable.css />
    <x-bulk-action.css />
@endsection
@section('content')
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-top-40"></div>
                <x-msg.flash />
                <x-msg.error />
            </div>
            <div class="col-lg-7 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4">{{ __('All Departments') }}</h4>
                        @can('support-ticket-department-delete')
                        <x-bulk-action.dropdown />
                        @endcan

                        <div class="table-wrap table-responsive">
                            <table class="table table-default">
                                <thead>
                                    <x-bulk-action.th />
                                    <th>{{ __('ID') }}</th>
                                    <th>{{ __('Name') }}</th>
                                    <th>{{ __('Status') }}</th>
                                    <th>{{ __('Action') }}</th>
                                </thead>
                                <tbody>
                                    @foreach ($all_category as $data)
                                        <tr>
                                            <x-bulk-action.td :id="$data->id" />
                                            <td>{{ $data->id }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>
                                                @if ('publish' == $data->status)
                                                    <span
                                                        class="btn btn-success btn-sm">{{ ucfirst(__($data->status)) }}</span>
                                                @else
                                                    <span
                                                        class="btn btn-warning btn-sm">{{ ucfirst(__($data->status)) }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                @can('support-ticket-department-delete')
                                                 <x-delete-popover :url="route('admin.support.ticket.department.delete',$data->id)"/>
                                                @endcan
                                                @can('support-ticket-department-edit')
                                                <a href="#" data-toggle="modal" data-target="#category_edit_modal"
                                                    class="btn btn-lg btn-primary btn-sm mb-3 mr-1 category_edit_btn"
                                                    data-id="{{ $data->id }}" data-name="{{ $data->name }}"
                                                    data-status="{{ $data->status }}">
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
            @can('support-ticket-department-create')
            <div class="col-lg-5 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">{{ __('Add New Department') }}</h4>
                        <form action="{{ route('admin.support.ticket.department') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">{{ __('Name') }}</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="{{ __('Name') }}">
                            </div>
                            <div class="form-group">
                                <label for="status">{{ __('Status') }}</label>
                                <select name="status" class="form-control" id="status">
                                    <option value="publish">{{ __('Publish') }}</option>
                                    <option value="draft">{{ __('Draft') }}</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">{{ __('Add New') }}</button>
                        </form>
                    </div>
                </div>
            </div>
            @endcan
        </div>
    </div>
    <div class="modal fade" id="category_edit_modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('Update Department') }}</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                </div>
                <form action="{{ route('admin.support.ticket.department.update') }}" method="post">
                    <input type="hidden" name="id" id="category_id">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="edit_name">{{ __('Name') }}</label>
                            <input type="text" class="form-control" id="edit_name" name="name"
                                placeholder="{{ __('Name') }}">
                        </div>
                        <div class="form-group">
                            <label for="edit_status">{{ __('Status') }}</label>
                            <select name="status" class="form-control" id="edit_status">
                                <option value="draft">{{ __('Draft') }}</option>
                                <option value="publish">{{ __('Publish') }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
                        <button type="submit" class="btn btn-primary">{{ __('Save Change') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <x-datatable.js />
    <x-bulk-action.js :route="route('admin.support.ticket.department.bulk.action')" />

    <script>
        $(document).ready(function() {
            $('.table-wrap > table').DataTable({
                "order": [
                    [1, "desc"]
                ],
                'columnDefs': [{
                    'targets': 'no-sort',
                    'orderable': false
                }]
            });

            $('.all-checkbox').on('change', function(e) {
                e.preventDefault();
                var value = $('.all-checkbox').is(':checked');
                var allChek = $(this).parent().parent().parent().parent().parent().find('.bulk-checkbox');
                //have write code here fr
                if (value == true) {
                    allChek.prop('checked', true);
                } else {
                    allChek.prop('checked', false);
                }
            });

            $(document).on('click', '.category_edit_btn', function() {
                var el = $(this);
                var id = el.data('id');
                var name = el.data('name');
                var status = el.data('status');
                var modal = $('#category_edit_modal');
                modal.find('#category_id').val(id);
                modal.find('#edit_status option[value="' + status + '"]').attr('selected', true);
                modal.find('#edit_name').val(name);
            });
        });
    </script>
@endsection
