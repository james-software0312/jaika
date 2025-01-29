@extends('backend.admin-master')
@section('site-title')
    {{__('Sitemap Settings')}}
@endsection
@section('content')
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-12 mt-5">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @include('backend.partials.message')
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">{{__("Sitemap Settings")}}</h4>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4 margin-bottom-40"
                                    data-toggle="modal"
                                    data-target="#user_change_password_modal"
                            >{{__('Generate Sitemap')}}</button>
                        <table class="table table-default">
                            <thead>
                            <th>{{__('Name')}}</th>
                            <th>{{__('Date')}}</th>
                            <th>{{__('Size')}}</th>
                            <th>{{__('Action')}}</th>
                            </thead>
                            <tbody>
                            @foreach($all_sitemap as $data)
                                <tr>
                                    <td>{{basename($data)}}</td>
                                    <td>{{date('j F Y - h:m:s',filectime($data)) }}</td>
                                    <td>@if(trim(formatBytes(filesize($data))) === 'NAN') {{__('0 Byte')}} @else {{formatBytes(filesize($data))}} @endif</td>
                                    <td>
                                        <a class="btn btn-xs text-white btn-danger mb-3 mr-1 delete_sitemap_xml_file_btn">
                                            <i class="ti-trash"></i>
                                        </a>
                                         <form method='post' class="d-none delete_sitemap_file_form"  action='{{route("admin.general.sitemap.settings.delete")}}'>
                                               @csrf
                                            <input type='hidden' name='sitemap_name' value='{{$data}}'>
                                            <input type='submit' class='btn btn-danger btn-xs' value='{{__('Yes, Please')}}'>
                                        </form>
                                        
                                        <a href="{{asset('sitemap')}}/{{basename($data)}}" download class="btn btn-primary btn-sm mb-3 mr-1"> <i class="fa fa-download"></i> </a>
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

    <div class="modal fade" id="user_change_password_modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{__('Generate Sitemap')}}</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                </div>
                <form action="{{route('admin.general.sitemap.settings')}}" id="user_password_change_modal_form" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title">{{__('TItle')}}</label>
                            <input type="text" class="form-control" name="title" placeholder="{{__('Enter URL')}}">
                        </div>
                        <div class="form-group">
                            <label for="site_url">{{__('URL')}}</label>
                            <input type="text" class="form-control" name="site_url" placeholder="{{__('Enter URL')}}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Close')}}</button>
                        <button type="submit" class="btn btn-primary">{{__('Submit')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script>
    (function($){
        "use strict";
        
        $(document).on('click','.delete_sitemap_xml_file_btn',function(e){
                e.preventDefault();
                Swal.fire({
                    title: '{{__("Are you sure to delete it?")}}',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Delete It!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $(this).next('.delete_sitemap_file_form').find('input[type="submit"]').trigger('click');
                    }
                });
            });
        
    })(jQuery);
</script>
@endsection
