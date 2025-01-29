@extends('backend.admin-master')
@section('site-title')
    {{__('All Tickets')}}
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
                <x-msg.flash/>
                <x-msg.error/>
            </div>
            <div class="col-lg-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="top-wrapp d-flex justify-content-between">
                            <div class="left-part">
                                <h4 class="header-title">{{__('All Tickets')}}</h4>
                                <x-bulk-action.dropdown />
                            </div>
                            @can('support-ticket-create')
                            <div class="btn-wrapper"><a href="{{route('admin.support.ticket.new')}}" class="btn btn-primary">{{__('New Ticket')}}</a></div>
                            @endcan
                        </div>
                        <div class="table-wrap table-responsive">
                            <table class="table table-default">
                                <thead>
                                    <x-bulk-action.th />
                                    <th>{{__('ID')}}</th>
                                    <th>{{__('Title')}}</th>
                                    <th>{{__('Department')}}</th>
                                    <th>{{__('User')}}</th>
                                    <th>{{__('Priority')}}</th>
                                    <th>{{__('Status')}}</th>
                                    <th>{{__('Action')}}</th>
                                </thead>
                                <tbody>
                                    @foreach($all_tickets as $data)
                                    <tr>
                                        <x-bulk-action.td :id="$data->id" />
                                        <td>#{{$data->id}}</td>
                                        <td>{{$data->title}}</td>
                                        <td>{{$data->department->name ?? __('anonymous')}}</td>
                                        <td>
                                            {{$data->user->name ?? __('anonymous')}}
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="{{$data->priority}} dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    {{$data->priority}}
                                                </button>
                                                @can('support-ticket-priority-change')
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item change_priority" data-id="{{$data->id}}" data-val="low" href="#">{{__('Low')}}</a>
                                                    <a class="dropdown-item change_priority" data-id="{{$data->id}}" data-val="high" href="#">{{__('High')}}</a>
                                                    <a class="dropdown-item change_priority" data-id="{{$data->id}}" data-val="medium" href="#">{{__('Medium')}}</a>
                                                    <a class="dropdown-item change_priority" data-id="{{$data->id}}" data-val="urgent" href="#">{{__('Urgent')}}</a>
                                                </div>
                                                @endcan
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="status-{{$data->status}} dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    {{$data->status}}
                                                </button>
                                                @can('support-ticket-status-change')
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item status_change" data-id="{{$data->id}}" data-val="open" href="#">{{__('Open')}}</a>
                                                    <a class="dropdown-item status_change" data-id="{{$data->id}}" data-val="close" href="#">{{__('Close')}}</a>
                                                </div>
                                                @endcan
                                            </div>
                                        </td>
                                        <td>
                                            @can('support-ticket-delete')
                                            <x-delete-popover :url="route('admin.support.ticket.delete',$data->id)"/>
                                            @endcan
                                            @can('support-ticket-view')
                                            <x-view-icon :url="route('admin.support.ticket.view',$data->id)"/>
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
        </div>
    </div>
@endsection

@section('script')
    <x-bulk-action.js :route="route('admin.support.ticket.bulk.action')" />
    <x-datatable.js />

    <script>
        (function (){
            "use strict";

            $('.table-wrap table').DataTable( {
                "order": [[ 1, "desc" ]],
                'columnDefs' : [{
                    'targets' : 'no-sort',
                    'orderable' : false
                }]
            } );

            $(document).on('click','.change_priority',function (e){
               e.preventDefault();
               //get value
                var priority = $(this).data('val');
                var id = $(this).data('id');
                var currentPriority =  $(this).parent().prev('button').text();
                currentPriority = currentPriority.trim();
                $(this).parent().prev('button').removeClass(currentPriority).addClass(priority).text(priority);
               //ajax call
                $.ajax({
                    'type': 'post',
                    'url' : "{{route('admin.support.ticket.priority.change')}}",
                    'data' : {
                        _token : "{{csrf_token()}}",
                        priority : priority,
                        id : id,
                    },
                    success: function (data){
                        $(this).parent().find('button.'+currentPriority).removeClass(currentPriority).addClass(priority).text(priority);
                    }
                })
            });
            $(document).on('click','.status_change',function (e){
                e.preventDefault();
                //get value
                var status = $(this).data('val');
                var id = $(this).data('id');
                var currentStatus =  $(this).parent().prev('button').text();
                currentStatus = currentStatus.trim();
                $(this).parent().prev('button').removeClass('status-'+currentStatus).addClass('status-'+status).text(status);
                //ajax call
                $.ajax({
                    'type': 'post',
                    'url' : "{{route('admin.support.ticket.status.change')}}",
                    'data' : {
                        _token : "{{csrf_token()}}",
                        status : status,
                        id : id,
                    },
                    success: function (data){
                        $(this).parent().prev('button').removeClass(currentStatus).addClass(status).text(status);
                    }
                })
            });


        })(jQuery);
    </script>
@endsection
