@extends('backend.admin-master')
@section('site-title')
    {{__('Product Tag')}}
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
                        <h4 class="header-title">{{__('All Product Tags')}}</h4>
                        @can('product-tag-delete')
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
                                    @foreach($all_tag as $tag)
                                    <tr>
                                        <x-bulk-action.td :id="$tag->id" />
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$tag->tag_text}}</td>
                                        <td>
                                            @can('product-tag-delete')
                                            <x-delete-popover :url="route('admin.products.tag.delete', $tag->id)"/>
                                            @endcan
                                            @can('product-tag-edit')
                                            <a href="#"
                                                data-toggle="modal"
                                                data-target="#tag_edit_modal"
                                                class="btn btn-primary btn-xs mb-3 mr-1 tag_edit_btn"
                                                data-id="{{$tag->id}}"
                                                data-name="{{$tag->tag_text}}""
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
            @can('product-tag-create')
            <div class="col-lg-5 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">{{__('Add New Tag')}}</h4>
                        <form action="{{route('admin.products.tag.new')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">{{__('Name')}}</label>
                                <input type="text" class="form-control"  id="name" name="title" placeholder="{{__('Name')}}">
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">{{__('Add New')}}</button>
                        </form>
                    </div>
                </div>
            </div>
            @endcan
        </div>
    </div>
    @can('product-tag-edit')
    <div class="modal fade" id="tag_edit_modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{__('Update Tag')}}</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                </div>
                <form action="{{route('admin.products.tag.update')}}"  method="post">
                    <input type="hidden" name="id" id="tag_id">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="edit_name">{{__('Name')}}</label>
                            <input type="text" class="form-control"  id="edit_name" name="title" placeholder="{{__('Name')}}">
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
    @can('product-tag-delete')
    <x-bulk-action.js :route="route('admin.products.tag.bulk.action')" />
    @endcan

    <script>
        $(document).ready(function () {
            $(document).on('click','.tag_edit_btn',function(){
                let el = $(this);
                let id = el.data('id');
                let name = el.data('name');
                let modal = $('#tag_edit_modal');

                modal.find('#tag_id').val(id);
                modal.find('#edit_name').val(name);

                modal.show();
            });
        });
    </script>

@endsection
