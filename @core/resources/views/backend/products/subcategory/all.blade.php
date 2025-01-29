@extends('backend.admin-master')
@section('site-title')
    {{__('Product Sub-Category')}}
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
                        <h4 class="header-title">{{__('All Products Sub-Categories')}}</h4>
                        @can('product-subcategory-delete')
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
                                    @foreach($all_subcategory as $subcategory)
                                    <tr>
                                        <x-bulk-action.td :id="$subcategory->id" />
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$subcategory->title}}</td>
                                        <td>
                                            <x-status-span :status="$subcategory->status"/>
                                        </td>
                                        <td>
                                            <div class="img-wrap">
                                                @php
                                                    $event_img = get_attachment_image_by_id($subcategory->image, 'thumbnail', true);
                                                    $img_url = $event_img['img_url'];
                                                @endphp
                                                @if (!empty($event_img))
                                                    {!! render_attachment_preview_for_admin($subcategory->image) !!}
                                                @endif
                                            </div>
                                        </td>
                                        <td>
                                            @can('product-subcategory-delete')
                                            <x-delete-popover :url="route('admin.products.subcategory.delete', $subcategory->id)"/>
                                            @endcan
                                            @can('product-subcategory-edit')
                                            <a href="#"
                                                data-toggle="modal"
                                                data-target="#subcategory_edit_modal"
                                                class="btn btn-primary btn-xs mb-3 mr-1 subcategory_edit_btn"
                                                data-id="{{$subcategory->id}}"
                                                data-name="{{$subcategory->title}}"
                                                data-status="{{$subcategory->status}}"
                                                data-imageid="{{$subcategory->image}}"
                                                data-image="{{$img_url}}"
                                                data-category-id="{{$subcategory->category_id}}"
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
            @can('product-subcategory-create')
            <div class="col-lg-5 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">{{__('Add New Sub-Category')}}</h4>
                        <form action="{{route('admin.products.subcategory.new')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">{{__('Name')}}</label>
                                <input type="text" class="form-control"  id="name" name="title" placeholder="{{__('Name')}}">
                            </div>
                            <div class="form-group">
                                <label for="category_id">{{__('Category')}}</label>
                                <select class="form-control" id="category_id" name="category_id">
                                    <option>{{ __('Select Category') }}</option>
                                    @foreach ($all_category as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
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
    @can('product-subcategory-edit')
    <div class="modal fade" id="subcategory_edit_modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{__('Update Sub-Category')}}</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                </div>
                <form action="{{route('admin.products.subcategory.update')}}"  method="post">
                    <input type="hidden" name="id" id="subcategory_id">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="edit_name">{{__('Name')}}</label>
                            <input type="text" class="form-control"  id="edit_name" name="title" placeholder="{{__('Name')}}">
                        </div>
                        <div class="form-group">
                            <label for="category">{{__('Category')}}</label>
                            <select class="form-control" id="edit_category" name="category_id">
                                <option>{{ __('Select Category') }}</option>
                                @foreach ($all_category as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
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
    @can('product-subcategory-delete')
    <x-bulk-action.js :route="route('admin.products.subcategory.bulk.action')" />
    @endcan

    <script>
        $(document).ready(function () {
            $(document).on('click', '.subcategory_edit_btn', function () {
                let el = $(this);
                let id = el.data('id');
                let name = el.data('name');
                let status = el.data('status');
                let category_id = el.data('category-id');
                let modal = $('#subcategory_edit_modal');

                modal.find('#subcategory_id').val(id);
                modal.find('#edit_status option[value="'+status+'"]').attr('selected',true);
                modal.find('#edit_name').val(name);
                modal.find('#edit_category').val(category_id);

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
