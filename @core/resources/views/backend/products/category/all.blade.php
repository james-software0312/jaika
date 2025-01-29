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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.3.12/themes/default/style.min.css" />
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
                        <div id="jstree"></div>
                    </div>
                </div>
            </div>
            @can('product-category-create')
            <div class="col-lg-5 mt-5">
                <div class="card" id="add_panel">
                    <div class="card-body">
                        <h4 class="header-title">{{__('Add New Category')}}</h4>
                        <form action="{{route('admin.products.category.new')}}" method="post" enctype="multipart/form-data" id="add_form">
                            @csrf
                            <input type="hidden" id="parent_id" />
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
                <div class="card" id="update_panel" style="display: block">
                    <div class="card-body">
                        <h4 class="header-title">{{__('Update Category')}}</h4>
                        <form action="{{route('admin.products.category.update')}}" method="post" enctype="multipart/form-data" id="edit_form">
                            @csrf
                            <input type="hidden" id="edit_id" name="edit_id" />
                            <div class="form-group">
                                <label for="name">{{__('Name')}}</label>
                                <input type="text" class="form-control"  id="edit_name" name="title" placeholder="{{__('Name')}}">
                            </div>
                            <x-media-upload :title="__('Image')" :name="'image'" :dimentions="'200x200'"/>
                            <div class="form-group">
                                <label for="status">{{__('Status')}}</label>
                                <select name="status" class="form-control" id="status">
                                    <option value="publish">{{__("Publish")}}</option>
                                    <option value="draft">{{__("Draft")}}</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">{{__('Save Change')}}</button>
                        </form>
                    </div>
                </div>
            </div>
            @endcan
        </div>
    </div>
    <x-media.markup />
@endsection
@section('script')
    <script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.3.12/jstree.min.js"></script>
    <x-datatable.js />
    <x-media.js />
    <x-table.btn.swal.js />
    @can('product-category-delete')
    <x-bulk-action.js :route="route('admin.products.category.bulk.action')" />
    @endcan

    <script>
        $(document).ready(function () {
            const $tree = $('#jstree')
            $tree.jstree({
                core: {
                    data: function (node, callback) {
                        $.ajax({
                            url: "{{ route('admin.products.category.get.list') }}",
                            dataType: "json",
                            success: function (data) {
                                // Transform `parent_id` to `parent`
                                const transformedData = data.map(item => ({
                                    id: item.id,
                                    text: item.title,
                                    image: item.path,
                                    parent: item.parent_id === null ? "#" : item.parent_id,
                                    state: {
                                        opened: true // This opens all layers initially
                                    }
                                }));
                                callback(transformedData);
                            }
                        });
                    },
                    check_callback: true, // Allows CRUD operations
                },
                plugins: ["contextmenu", "dnd", "state", "types"], // Add necessary plugins);
                contextmenu: {
                items: function ($node) {
                    return {
                        Create: {
                            label: "Create",
                            action: function () {
                                $("#parent_id").val($node.id);
								$("#add_panel").css("display", "block");
                                $("#update_panel").css("display", "none");
                            }
                        },
                        Rename: {
                            label: "Rename",
                            action: function () {
                                $("#add_panel").css("display", "none");
                                $("#update_panel").css("display", "block");
								$("#edit_id").val($node.id);
								$("#edit_name").val($node.text);
                                // Assuming `data.node.original.image` contains the image URL
                                const newImageSrc = '{!!env("MEDIA_UPLOADER_URL")!!}' + $node.original.image; // URL of the new image
                                const newImageId = $node.original.id; // Optional: ID of the image
                                const wrapper = $("#edit_form");
                                wrapper.find('.media-upload-btn-wrapper .img-wrap').html('<div class="attachment-preview"><div class="thumbnail"><div class="centered"><img class="avatar user-thumb" src="'+newImageSrc+'" > </div></div></div>');
                                wrapper.find('.media-upload-btn-wrapper input').val(newImageId);
                                wrapper.find('.media-upload-btn-wrapper .media_upload_form_btn').text('Change Image');

                            }
                        },
                        Delete: {
                            label: "Delete",
                            action: function () {
								console.log($node)
								$("#delete_id").val($node.id);
                                const modal = new bootstrap.Modal($('#DeleteModal'));
								modal.show();
                            }
                        }
                    };
                }
            }
            });
        });
    </script>

@endsection
