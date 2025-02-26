@extends('backend.admin-master')
@section('site-title')
{{__('Edit Product')}}
@endsection
@section('style')
<x-media.css />
<x-product.more-info.css />
<x-summernote.css />
<x-niceselect.css />
<link rel="stylesheet" href="{{asset('assets/backend/css/bootstrap-tagsinput.css')}}">
<style>
    #attribute_price_container {
        /* display: none; */
    }
</style>
@endsection
@section('content')
<div class="col-lg-12 col-ml-12 padding-bottom-30" id="app">
    <div class="row">
        <div class="col-lg-12">
            <div class="margin-top-40">
                <x-msg.error />
                <x-msg.flash />
            </div>
        </div>
        <div class="col-lg-12">
            <div class="text-right mb-5">
                <a href="{{ route('admin.products.all') }}" class="btn btn-primary">{{ __('All Products') }}</a>
            </div>
            <form action="{{ route('admin.products.update', $product->id) }}" method="POST">
                @csrf
                <div class="row mt-3">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body p-5">
                                <h5 class="mb-5">{{ __('Product Information') }}</h5>
                                <div class="form-group">
                                    <label for="title">{{ __('Name') }}</label>
                                    <input type="text" name="title" id="title" class="form-control" value="{{ html_entity_decode($product->title) }}">
                                </div>
                                <div class="form-group">
                                    <label for="slug">{{ __('Slug') }}</label>
                                    <input type="text" name="slug" id="slug" class="form-control" value="{{ $product->slug }}">
                                </div>
                                <div class="form-group">
                                    <label for="supplier">{{ __('Supplier') }}</label>
                                    <select class="form-control" name="contactid" id="contactid">
                                        @foreach ($contact_users as $user)
                                        <option value="{{$user->id}}" @if($user->id == $product->contact_id) selected @endif;>{{$user->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="summary">{{ __('Summary') }}</label>
                                    <textarea class="form-control" name="summary" id="summary" cols="30" rows="3">{{ $product->summary }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="description">{{ __('Description') }}</label>
                                    <textarea class="form-control summernote" name="description" id="description" cols="30" rows="10">{{ $product->description }}</textarea>
                                </div>
                                <div class="form-group " id="blog_tag_list">
                                    @php
                                    $tags = $product->tags;
                                    $tags_str = "";
                                    if ($tags) {
                                    foreach ($tags as $key => $product_tag) {
                                    $seperator = $key != count($tags) - 1 ? "," : "";
                                    $tags_str .= $product_tag->tag . $seperator;
                                    }
                                    }
                                    @endphp
                                    <label for="title">{{__('Tag')}}</label>
                                    <input type="text" class="form-control tags_filed" data-role="tagsinput"
                                        name="tags" value=" {{ $tags_str }}">

                                    <div id="show-autocomplete" style="display: none;">
                                        <ul class="autocomplete-warp"></ul>
                                    </div>
                                </div>
                                <div id="attribute_price_container">
                                    <h5 class="my-3">{{ __('Attributes') }}</h5>
                                    @php
                                    $all_attributes = json_decode($product->attributes, true);
                                    @endphp
                                    @if(is_array($all_attributes))
                                    @forelse ($all_attributes as $attribute_id => $attributes)
                                    @foreach ($attributes as $attribute)
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="">{{ __('Attribute') }}</label>
                                                <input type="hidden" name="attribute_id[]" value="{{ $attribute_id }}" />
                                                <input type="hidden" name="attribute_selected[]" value="{{ $attribute['name'] }}" />
                                                <input type="hidden" name="attribute_name[]" value="{{ $attribute['type'] }}" />
                                                <input type="text" class="form-control font-weight-bold" value="{{ $attribute['type'] }}: {{ $attribute['name'] }}" disabled="">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="">{{ __('Additional price amount') }}</label>
                                                <input type="number" class="form-control" name="attr_additional_price[]" value="{{ $attribute['additional_price'] }}">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <x-media-upload :title="__('Attribute Image')" :id="$attribute['attribute_image'] ?? ''" :name="'attribute_image[]'" :dimentions="'1280x1280'" />
                                        </div>
                                        <div class="col-auto">
                                            <button class="btn btn-sm btn-danger margin-top-30 remove_attribute">-</button>
                                        </div>
                                    </div>
                                    @endforeach
                                    @empty
                                    <span id="no_attributes">{{ __('No Attributes') }}</span>
                                    @endforelse
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-body px-5 pb-5">
                                <div class="additional_info_container">
                                    <h5 class="mb-5">{{ __('Additional Information') }}</h5>
                                    <div class="additional_info">
                                        @if ($product->additionalInfo)
                                        @foreach ($product->additionalInfo as $additional_info)
                                        <x-product.more-info.repeater :infoTitle="$additional_info->title" :infoText="$additional_info->text" />
                                        @endforeach
                                        <x-product.more-info.repeater :isFirst="true" />
                                        @else
                                        <x-product.more-info.repeater :isFirst="true" />
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        {{-- <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="mb-5 mt-3">{{ __('Stock Information') }}</h5>
                                <div class="form-group">
                                    <label for="sku">{{ __('Product SKU') }}</label>
                                    <input type="text" id="sku" name="sku" class="form-control" required value="{{ optional($product->inventory)->sku ?? '' }}">
                                </div>
                                <div class="form-group">
                                    <label for="stock_count">{{ __('Items in Stock') }}</label>
                                    <input type="number" id="stock_count" name="stock_count" class="form-control" required value="{{ optional($product->inventory)->stock_count ?? 0 }}">
                                </div>
                            </div>
                        </div> --}}
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mb-5 mt-3">{{ __('More Information') }}</h5>
                                <div class="form-row mb-3">
                                    <div class="col">
                                        <label for="price">{{ __('Regular Price') }}</label>
                                        <input type="number" name="price" id="price" class="form-control" step="0.01" value="{{ $product->price }}">
                                    </div>
                                    <div class="col">
                                        <label for="sale_price">{{ __('Sale Price') }}</label>
                                        <input type="number" name="sale_price" id="sale_price" step="0.01" class="form-control" value="{{ $product->sale_price }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="size">{{ __('Size') }}</label>
                                            <div class="form-row">
                                                <div class="col">
                                                    <select class="form-control" name="size" id="size">
                                                        {{-- <option value=" {{ $product['size'] }} " selected>{{ $product['size'] }}</option> --}}
                                                        @foreach ($all_size as $size)
                                                        <option value="{{ $size->name }}" data-terms="{{ $size->name }}" @if($size->name == $product->size) selected @endif>{{ $size->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="attributes_options">{{ __('Color') }}</label>
                                        <div class="form-row">
                                            <div class="col">
                                                <select class="form-control" name="color" id="color">
                                                    {{-- <option value="{{$product['color']}}" selected>{{ $product['color']}}</option> --}}
                                                    @foreach ($all_color as $color)
                                                    <option value="{{ $color->name }}" data-terms="{{ $color->name }}" @if($color->name == $product->color) selected @endif>{{ $color->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="form-group">
                                        <label for="attributes_options">{{ __('Attributes') }}</label>
                                <div class="form-row">
                                    <div class="col">
                                        <select class="form-control" name="attributes_options" id="attributes_options">
                                            <option value="">{{ __('Select Attribute') }}</option>
                                            @foreach ($all_attribute as $attribute)
                                            <option value="{{ $attribute->id }}" data-terms="{{ $attribute->terms }}">{{ $attribute->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div> --}}
                            <div id="attribute_container"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="category_id">{{ __('Category') }}</label>
                                        <select class="form-control" name="category_id" id="category_id">
                                            @foreach ($all_category as $category)
                                            <option value="{{ $category->id }}" @if($product->category_id == $category->id) selected @endif>{{ $category->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="stock_count">{{ __('Items in Stock') }}</label>
                                        <input disabled type="text" id="stock_count" name="stock_count" class="form-control"  value="{{ $stock->quantity_website }}">
                                    </div>
                                </div>

                            </div>
                            <span class="text-secondary">({{ __('Press ') }} <kbd>{{ __('Ctrl') }}</kbd> {{ __(' and Click to select multiple options') }})</span>
                            <div class="form-group">
                                <label for="sub_category_id">{{ __('Sub-category') }}</label>
                                @php
                                $subcategories = json_decode($product->sub_category_id, true);
                                @endphp
                                @if ($subcategories)
                                <select class="form-control nice-select wide" name="sub_category_id[]" id="sub_category_id" multiple>
                                    @foreach ($all_sub_category as $subcategory)
                                    <option value="{{ $subcategory->id }}" @if(in_array($subcategory->id, $subcategories)) selected @endif>{{ $subcategory->title }}</option>
                                    @endforeach
                                </select>
                                @else
                                <select class="form-control nice-select wide" name="sub_category_id[]" id="sub_category_id" multiple>
                                    <option value="">{{ __("Select Sub-category") }}</option>
                                    @foreach ($all_sub_category as $subcategory)
                                    <option value="{{ $subcategory->id }}">{{ $subcategory->title }}</option>
                                    @endforeach
                                </select>
                                @endif
                            </div>
                            <x-media-upload :title="__('Image')" :id="$product->image" :name="'image'" :dimentions="'1280x1280'" :multiple="true" :galleryImages="$product->product_image_gallery" />
                            <div class="form-group">
                                <label for="badge">{{ __('Badge') }}</label>
                                <input type="text" name="badge" id="badge" class="form-control" value="{{ $product->badge }}">
                            </div>
                            <div class="form-group">
                                <label for="status">{{ __('Status') }}</label>
                                <select class="form-control" name="status" id="status">
                                    <option value="draft" @if($product->status == 'draft') selected @endif>{{ __('Draft') }}</option>
                                    <option value="publish" @if($product->status == 'publish') selected @endif>{{ __('Publish') }}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="set_news">{{__('Set News')}}</label>
                                <ul class=" form-control notification-area pull-right">
                                    <li><label class="switch yes">
                                            <input id="darkmode" type="checkbox" name="set_news" id="set_news">
                                            <span class="slider-yes-no darkmode onff"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="text-center mt-5">
                                <button class="btn btn-primary">{{ __('Update Product') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
</div>
<x-media.markup />
@endsection
@section('script')
<x-media.js />
<x-product.more-info.js />
<x-niceselect.js />
<x-summernote.js />
<script src="{{asset('assets/backend/js/bootstrap-tagsinput.js')}}"></script>
<script src="{{asset('assets/common/js/typeahead.bundle.min.js')}}"></script>
<script>
    (function($) {
        "use strict"
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 500, //set editable area's height
                codemirror: { // codemirror options
                    theme: 'monokai'
                },
                callbacks: {
                    onChange: function(contents, $editable) {
                        $(this).prev('input').val(contents);
                    }
                }
            });

            if ($('.nice-select').length) {
                $('.nice-select').niceSelect();
            }

            $('#attributes_options').on('change', function() {
                let title = $('#attributes_options').find(':selected').text();
                let title_id = $('#attributes_options').val();
                let terms = $('#attributes_options').find(':selected').data('terms');
                let options = '';

                terms.forEach(e => {
                    options += `<option value="${e}">${e}</option>`;
                });

                let html = `<div class="form-group">
                               <label>${title}</label>
                               <select class="form-control" data-attr-id="${title_id}" data-attr-name="${title}" multiple>
                                   ${options}
                               </select>
                               <small class="text-secondary">{{ __('Double click on an option to add') }}</small>
                            </div>`;

                $('#attribute_container').html(html);
            });

            $('input[name="slug"]').on('keyup', function() {
                let title_text = $(this).val();
                $('input[name="slug"]').val(convertToSlug(title_text))
            });

            $(document).on('click', '.remove_attribute', function() {
                $(this).closest('.row').remove();
                if ($('#attribute_price_container .row').length < 1) {
                    $('#attribute_price_container').hide();
                }
            });

            $(document).on('dblclick', '#attribute_container select option', function(e) {
                let attribute_title = $(e.target).parent().data('attrName');
                let attribute_id = $(e.target).parent().data('attrId');
                let selected_attribute_value = e.target.value;

                if ($('#no_attributes').length) {
                    $('#no_attributes').remove();
                }

                $('#attribute_price_container').append(
                    `<div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">{{ __('Attribute') }}</label>
                                <input type="hidden" name="attribute_id[]" value="${attribute_id}" />
                                <input type="hidden" name="attribute_selected[]" value="${selected_attribute_value}" />
                                <input type="hidden" name="attribute_name[]" value="${attribute_title}" />
                                <input type="text" class="form-control font-weight-bold" value="${attribute_title}: ${selected_attribute_value}" disabled="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">{{ __('Additional price amount') }}</label>
                                <input type="number" class="form-control" name="attr_additional_price[]" value="0">
                            </div>
                        </div>
                        <div class="col">
                            <x-media-upload :title="__('Attribute Image')" :name="'attribute_image[]'" :dimentions="'1280x1280'" />
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-sm btn-danger margin-top-30 remove_attribute">-</button>
                        </div>
                    </div>`);

                if ($('#attribute_price_container .row').length > 0) {
                    $('#attribute_price_container').show();
                }
            });

            let all_tags = {!! json_encode($all_tags->pluck('tag_text')) !!};
            let bindCarList = function() {
                // Call TagsInput on the input, and set the typeahead source to our data
                $('#tags').tagsinput({
                    typeahead: {
                        source: all_tags
                    }
                });

                $('#tags').on('itemAdded', function(event) {
                    // Hide the suggestions menu
                    $('.typeahead.dropdown-menu').css('display', 'none')
                    // Clear the typed text after a tag is added
                    $('.bootstrap-tagsinput > input').val("");
                });
            }

            function convertToSlug(slug) {
                let finalSlug = slug.replace(/[^a-zA-Z0-9]/g, ' ');
                //remove multiple space to single
                finalSlug = slug.replace(/  +/g, ' ');
                // remove all white spaces single or multiple spaces
                finalSlug = slug.replace(/\s/g, '-').toLowerCase().replace(/[^\w-]+/g, '-');
                return finalSlug;
            }

            var blogTagInput = $('#blog_tag_list .tags_filed');
            var oldTag = '';
            blogTagInput.tagsinput();

            //For Tags
            $(document).on('keyup', '#blog_tag_list .bootstrap-tagsinput input[type="text"]', function(e) {
                e.preventDefault();
                var el = $(this);
                var inputValue = $(this).val();
                $.ajax({
                    type: 'get',
                    url: "{{ route('admin.products.tag.get.ajax') }}",
                    async: false,
                    data: {
                        query: inputValue
                    },

                    success: function(data) {
                        oldTag = inputValue;
                        let html = '';
                        var showAutocomplete = '';
                        $('#show-autocomplete').html('<ul class="autocomplete-warp"></ul>');
                        if (el.val() != '' && data.markup != '') {


                            data.result.map(function(tag, key) {
                                html += '<li class="tag_option" data-id="' + tag.id + '" data-val="' + tag.tag + '">' + tag.tag + '</li>'
                            })

                            $('#show-autocomplete ul').html(html);
                            $('#show-autocomplete').show();


                        } else {
                            $('#show-autocomplete').hide();
                            oldTag = '';
                        }

                    },
                    error: function(res) {

                    }
                });
            });

            $(document).on('click', '.tag_option', function(e) {
                e.preventDefault();

                let id = $(this).data('id');
                let tag = $(this).data('val');
                blogTagInput.tagsinput('add', tag);
                $(this).parent().remove();
                blogTagInput.tagsinput('remove', oldTag);
            });
        });
    })(jQuery)
</script>
@endsection