
@extends('backend.admin-master')
@section('site-title')
    {{__('All Pages')}}
@endsection
@section('style')
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"
          href="//cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <style>
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            padding: 0 !important;
        }

        div.dataTables_wrapper div.dataTables_length select {
            width: 60px;
            display: inline-block;
        }
    </style>
@endsection
@section('content')
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-top-40"></div>
                <x-msg.error/>
                <x-msg.flash/>
            </div>
            <div class="col-lg-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">{{__('All Pages')}}</h4>
                        <div class="bulk-delete-wrapper">
                            <div class="select-box-wrap">
                                <select name="bulk_option" id="bulk_option">
                                    <option value="">{{{__('Bulk Action')}}}</option>
                                    <option value="delete">{{{__('Delete')}}}</option>
                                </select>
                                <button class="btn btn-primary btn-sm" id="bulk_delete_btn">{{__('Apply')}}</button>
                            </div>
                        </div>
                        <div class="table-wrap table-responsive">
                            <table class="table table-default">
                                <thead>
                                    <th class="no-sort">
                                        <div class="mark-all-checkbox">
                                            <input type="checkbox" class="all-checkbox">
                                        </div>
                                    </th>
                                    <th>{{__('ID')}}</th>
                                    <th>{{__('Title')}}</th>
                                    <th>{{__('Date')}}</th>
                                    <th>{{__('Status')}}</th>
                                    <th>{{__('Action')}}</th>
                                </thead>
                                <tbody>
                                    @php $home_page = $home_page ?? (object) ['id' => null]; @endphp
                                @foreach($all_pages as $page)
                                    <tr>
                                        <td>
                                            <div class="bulk-checkbox-wrapper">
                                                <input type="checkbox" class="bulk-checkbox"
                                                        name="bulk_delete[]" value="{{$page->id}}">
                                            </div>
                                        </td>
                                        <td>{{$page->id}}</td>
                                        <td>{{$page->title}} {!! $home_page->id == $page->id ? "<strong class='text-info'> - Home Page</strong>" : '' !!}</td>
                                        <td>{{$page->created_at->diffForHumans()}}</td>
                                        <td>
                                            @if($page->status === 'publish')
                                                <span class="alert alert-success">{{__('Publish')}}</span>
                                            @else
                                                <span class="alert alert-warning">{{__('Draft')}}</span>
                                            @endif
                                        </td>
                                        <td>

                                            @if($home_page->id != $page->id)
                                                <x-delete-popover :url="route('admin.page.delete',$page->id)"/>
                                            @endif
                                            <a class="btn btn-xs btn-primary btn-sm mb-3 mr-1"
                                                href="{{route('admin.page.edit',$page->id)}}">
                                                <i class="ti-pencil"></i>
                                            </a>

                                            @if($home_page->id != $page->id)
                                                <a class="btn btn-xs btn-info btn-sm mb-3 mr-1" target="_blank"
                                                    href="{{route('frontend.dynamic.page', ['slug' => $page->slug, 'id' => $page->id])}}">
                                                    <i class="ti-eye"></i>
                                                </a>
                                            @endif
                                            @if(!empty($page->page_builder_status))
                                                <a href="{{route('admin.dynamic.page.builder',['type' =>'dynamic-page','id' => $page->id])}}"
                                                    target="_blank"
                                                    class="btn btn-xs btn-secondary mb-3 mr-1">{{__('Open Page Builder')}}</a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- Start datatable js -->
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="//cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="//cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {

            $(document).on('click', '#bulk_delete_btn', function (e) {
                e.preventDefault();

                var bulkOption = $('#bulk_option').val();
                var allCheckbox = $('.bulk-checkbox:checked');
                var allIds = [];
                allCheckbox.each(function (index, value) {
                    allIds.push($(this).val());
                });
                if (allIds != '' && bulkOption == 'delete') {
                    $(this).text('{{__('Deleting...')}}');
                    $.ajax({
                        'type': "POST",
                        'url': "{{route('admin.page.bulk.action')}}",
                        'data': {
                            _token: "{{csrf_token()}}",
                            ids: allIds
                        },
                        success: function (data) {
                            location.reload();
                        }
                    });
                }

            });

            $('.all-checkbox').on('change', function (e) {
                e.preventDefault();
                var value = $('.all-checkbox').is(':checked');
                var allChek = $(this).parent().parent().parent().parent().parent().find('.bulk-checkbox');
                if (value == true) {
                    allChek.prop('checked', true);
                } else {
                    allChek.prop('checked', false);
                }
            });


            $('.table-wrap > table').DataTable({
                "order": [[1, "desc"]],
                'columnDefs': [{
                    'targets': 'no-sort',
                    'orderable': false
                }]
            });
        });
    </script>
@endsection
