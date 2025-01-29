@extends('backend.admin-master')
@section('site-title')
    {{__('Product Category')}}
@endsection
@section('style')
    <x-media.css />
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
                        <h4 class="header-title">{{__('All Products Categories')}}</h4>
                        @can('product-category-delete')
                        <x-bulk-action.dropdown />
                        @endcan
                        <div class="table-wrap table-responsive">
                            <table class="table table-default">
                                <thead>
                                    <x-bulk-action.th />
                                    <th>{{__('ID')}}</th>
                                    <th>{{__('Name')}}</th>
                                    <th>{{__('Status')}}</th>
                                    <th>{{__('Image')}}</th>
                                    <th>{{__('Action')}}</th>
                                </thead>
                                <tbody>
                                    @foreach($all_category as $category)
                                    <tr>
                                        <x-bulk-action.td :id="$category->id" />
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$category->title}}</td>
                                        <td>
                                            <div class="img-wrap">
                                                @php
                                                    $event_img = get_attachment_image_by_id($category->image, 'thumbnail', true);
                                                    $img_url = $event_img['img_url'];
                                                @endphp
                                                @if (!empty($event_img))
                                                    {!! render_attachment_preview_for_admin($category->image) !!}
                                                @endif
                                            </div>
                                        </td>
                                        <td>
                                            <x-status-span :status="$category->status"/>
                                        </td>
                                        <td>
                                            @can('product-category-delete')
                                            <x-delete-popover :url="route('admin.products.category.delete', $category->id)"/>
                                            @endcan

                                            @can('product-category-edit')
                                            <a href="#"
                                                data-toggle="modal"
                                                data-target="#category_edit_modal"
                                                class="btn btn-primary btn-xs mb-3 mr-1 category_edit_btn"
                                                data-id="{{$category->id}}"
                                                data-name="{{$category->title}}"
                                                data-status="{{$category->status}}"
                                                data-imageid="{{$category->image}}"
                                                data-image="{{$img_url}}"
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
            @can('product-category-create')
            <div class="col-lg-5 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">{{__('Add New Category')}}</h4>
                        <form action="{{route('admin.products.category.new')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">{{__('Name')}}</label>
                                <input type="text" class="form-control"  id="name" name="title" placeholder="{{__('Name')}}">
                            </div>
                            <x-media-upload :title="__('Image')" :name="'image'" :dimentions="'200x200'"/>
                            <div class="form-group">
                                <label for="status">{{__('Status')}}</label>
                                <select name="status" class="form-control" id="status">
                                    <option value="publish">{{__("Publish")}}</option>
                                    <option value="draft">{{__("Draft")}}</option>
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
    @can('product-category-edit')
    <div class="modal fade" id="category_edit_modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{__('Update Category')}}</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                </div>
                <form action="{{route('admin.products.category.update')}}"  method="post">
                    <input type="hidden" name="id" id="category_id">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="edit_name">{{__('Name')}}</label>
                            <input type="text" class="form-control"  id="edit_name" name="title" placeholder="{{__('Name')}}">
                        </div>
                        <x-media-upload :title="__('Image')" :name="'image'" :dimentions="'200x200'"/>
                        <div class="form-group">
                            <label for="edit_status">{{__('Status')}}</label>
                            <select name="status" class="form-control" id="edit_status">
                                <option value="draft">{{__("Draft")}}</option>
                                <option value="publish">{{__("Publish")}}</option>
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
    <x-media.markup />
@endsection
@section('script')
    <x-datatable.js />
    <x-media.js />
    <x-table.btn.swal.js />
    @can('product-category-delete')
    <x-bulk-action.js :route="route('admin.products.category.bulk.action')" />
    @endcan

    <script>
        $(document).ready(function () {
            $(document).on('click','.category_edit_btn',function(){
                let el = $(this);
                let id = el.data('id');
                let name = el.data('name');
                let status = el.data('status');
                let modal = $('#category_edit_modal');

                modal.find('#category_id').val(id);
                modal.find('#edit_status option[value="'+status+'"]').attr('selected',true);
                modal.find('#edit_name').val(name);

                let image = el.data('image');
                let imageid = el.data('imageid');

                if (imageid != '') {
                    modal.find('.media-upload-btn-wrapper .img-wrap').html('<div class="attachment-preview"><div class="thumbnail"><div class="centered"><img class="avatar user-thumb" src="'+image+'" > </div></div></div>');
                    modal.find('.media-upload-btn-wrapper input').val(imageid);
                    modal.find('.media-upload-btn-wrapper .media_upload_form_btn').text('Change Image');
                }

            });
        });
    </script>

@endsection
