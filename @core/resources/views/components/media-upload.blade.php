@php $id = isset($id) ? $id : null; @endphp
    <div class="form-group">
        <label for="{{$name}}">{{__($title)}}</label>
        @php $signature_image_upload_btn_label = __('Upload Image'); @endphp
        <div class="media-upload-btn-wrapper">
            <div class="img-wrap">
                @php
                    if (is_null($id)){
                        $id = get_static_option($name);
                    }
                    $signature_img = get_attachment_image_by_id($id,null,false);
                @endphp
                @if (!empty($signature_img))
                    <div class="rmv-span"><i class="fas fa-trash"></i></div>
                    <div class="attachment-preview">
                        <div class="thumbnail">
                            <div class="centered">
                                <img class="avatar user-thumb" src="{{$signature_img['img_url']}}" >
                            </div>
                        </div>
                    </div>
                    @php $signature_image_upload_btn_label = __('Change Image'); @endphp
                @endif
            </div>
            <br>
            <input type="hidden" name="{{$name}}" value="{{$id}}">
            <button type="button" class="btn btn-info media_upload_form_btn" data-btntitle="{{__('Select Image')}}" data-modaltitle="{{__('Upload Image')}}" data-imgid="{{$id ?? ''}}" data-toggle="modal" data-target="#media_upload_modal">
                {{__($signature_image_upload_btn_label)}}
            </button>
        </div>
        <small>{{__('Recommended image size is ')}} {{$dimentions ?? ''}}</small>
        @if(isset($hint) && is_string($hint))
        <small class="text-secondary"> ({{ $hint }})</small>
        @endif
    </div>

@if(isset($multiple) && $multiple)
    <div class="form-group ">
        <label for="image">{{__('Gallery Image')}}</label>
        <div class="media-upload-btn-wrapper">
            <div class="img-wrap">
                @if (isset($galleryImages))
                    @php $gallery_images = json_decode($galleryImages, true); @endphp
                    @if($gallery_images && $gallery_images != 'null')
                        @foreach($gallery_images as $gl_img)
                            @php $work_section_img = get_attachment_image_by_id($gl_img, null, true); @endphp
                            @if (!empty($work_section_img))
                                <div class="attachment-preview">
                                    <div class="thumbnail">
                                        <div class="centered">
                                            <img class="avatar user-thumb"
                                                src="{{$work_section_img['img_url']}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                @endif
            </div>
            <input type="hidden" name="image_gallery">
            <button type="button" class="btn btn-info media_upload_form_btn"
                    data-btntitle="{{__('Select Image')}}"
                    data-modaltitle="{{__('Upload Image')}}" data-toggle="modal"
                    data-mulitple="true"
                    data-target="#media_upload_modal">
                {{__('Upload Image')}}
            </button>
        </div>
    </div>
@endif
