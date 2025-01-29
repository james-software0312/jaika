@extends('backend.admin-master')
@section('site-title')
    {{__('All Slider')}}
@endsection
@section('style')
    <x-datatable.css />
    <x-bulk-action.css />
    <x-media.css/>
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
            <div class="col-lg-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">{{__('All Sliders')}}</h4>
                        
                        <table class="table">
                            <tr>
                                <th>{{__('Slider Title')}}</th>
                                <th>{{__('Slider Image')}}</th>
                                <th>{{__('Action')}}</th>
                            </tr>
                            @foreach($slider as $item)
                                <tr>
                                    <td>{{ $item->title }}</td>
                                    <td class="image-width-150">{!! render_image_markup_by_attachment_id($item->image) !!}</td>
                                    <td>
                                        @can('slider-delete')
                                            <x-delete-popover :url="route('admin.slider.delete',$item->id)"/>
                                        @endcan
                                        @can('slider-edit')
                                            <x-edit-icon :url="route('admin.slider.edit',$item->id)"/>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <x-datatable.js />
    <x-table.btn.swal.js />
    <x-bulk-action.js :route="route('admin.products.bulk.action')" />

    <script>
        $(document).ready(function () {
            $(document).on('click','.product_edit_btn',function(){
                let el = $(this);
                let id = el.data('id');
                let name = el.data('name');
                let modal = $('#product_edit_modal');

                modal.find('#product_id').val(id);
                modal.find('#edit_name').val(name);

                modal.show();
            });
        });
    </script>

@endsection
