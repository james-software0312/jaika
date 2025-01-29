@extends('backend.admin-master')
@section('site-title')
    {{__('All Category Menus')}}
@endsection
@section('content')
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-top-40"></div>
                <x-msg.error/>
                <x-msg.success/>
            </div>
            <div class="col-lg-6 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">{{__('All Category Menus')}}</h4>

                        <table class="table table-default">
                            <thead>
                            <th>{{__('ID')}}</th>
                            <th>{{__('Title')}}</th>
                            <th>{{__('Created At')}}</th>
                            <th>{{__('Action')}}</th>
                            </thead>
                            <tbody>
                            @foreach($all_menu as $data)
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->title}}</td>
                                    <td>{{$data->created_at->diffForHumans()}}</td>
                                    <td>
                                        @can('appearance-menu-manage-delete')
                                            @if($data->status != 'default')
                                                <x-delete-popover :url="route('admin.category.menu.delete',$data->id)"/>
                                            @endif
                                        @endcan
                                        @can('appearance-menu-manage-edit')
                                            <a class="btn btn-lg btn-primary btn-sm mb-3 mr-1"
                                               href="{{route('admin.category.menu.edit',$data->id)}}">
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
            @can('appearance-menu-manage-create')
                <div class="col-lg-6 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">{{__('Add New Menu')}}</h4>
                            <form action="{{route('admin.category.menu.new')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="title">{{__('Title')}}</label>
                                            <input type="text" class="form-control" id="title" name="title"
                                                   placeholder="{{__('Title')}}">
                                        </div>
                                        <div class="form-group">
                                            <button id="submit" type="submit"
                                                    class="btn btn-primary mt-4 pr-4 pl-4">{{__('Create Category Menu')}}</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endcan
        </div>
    </div>
@endsection

@section('script')
    <script>
        <x-btn.submit/>
    </script>
@endsection
