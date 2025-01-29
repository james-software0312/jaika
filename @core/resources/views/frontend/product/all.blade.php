@extends('frontend.frontend-page-master')

@section('page-title')
    @if(!empty(request()->cat))
        {!! getSingleCategoryMarkup(request()->cat,true) !!}
    @endif
    @if(!empty(request()->subcat))
       @if(!empty(request()->cat)) -> @endif   {!! getSingleSubCategoryMarkup(request()->subcat,true) !!}
    @endif
    @if(empty(request()->cat) && empty(request()->subcat))
    {{ __("All Products") }}
    @endif
@endsection

@section('style')

@endsection

@php
    $sidebar_visibility = !empty(get_static_option('sidebar_visibility'));
    $product_section_width = $sidebar_visibility ? 'col-lg-9' : 'col-lg-12';
    $sidebar_section_width = $sidebar_visibility ? 'col-lg-3' : 'col-lg-0';
    $item_style = 'grid';
    if (isset(request()->s) && request()->s == 'list') {
        $item_style = 'list';
    }

    $sidebar_position = get_static_option('sidebar_position') == 'right' ?: 'order-md-2';

    $product_column = 'col-md-3';
    $product_column_count = (int) get_static_option('shop_column_count');
    if ($product_column_count) {
        $col_class = 12 / $product_column_count;
        $product_column = 'col-md-' . $col_class;
    }
@endphp

@section('content')
    <div class="shop-area-wrapper grid-only" id="shop">
        <div class="container">
            <div class="row">
                <div class="{{ $product_section_width }} {{ $sidebar_position }}">
                    <div class="toolbox-wrapper">
                        <div class="toolbox-left">
                            <div class="toolbox-item toolbox-layout">
                                <ul class="layout-list">
                                    <li class="layout-item">
                                        <a href="{{ route('frontend.products.all', ['s' => 'grid']) }}"
                                           data-style="grid"
                                           class="grid-layout @if($item_style == 'grid') current @endif">
                                            <i class="las la-border-all icon"></i>
                                        </a>
                                    </li>
                                    <li class="layout-item">
                                        <a href="{{ route('frontend.products.all', ['s' => 'list']) }}"
                                           data-style="list"
                                           class="list-layout @if($item_style == 'list') current @endif">
                                            <i class="las la-list icon"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="toolbox-right">
                            <div class="toolbox-item toolbox-show">
                                <label for="set_item_to_show">{{ __('show') }}:</label>
                                <select id="set_item_to_show" class="select-box">
                                    <option value="8"
                                            @if ($display_item_count == 8) selected @endif>{{ __('8') }}</option>
                                    <option value="12"
                                            @if ($display_item_count == 12) selected @endif>{{ __('12') }}</option>
                                    <option value="16"
                                            @if ($display_item_count == 16) selected @endif>{{ __('16') }}</option>
                                    <option value="20"
                                            @if ($display_item_count == 20) selected @endif>{{ __('20') }}</option>
                                </select>
                            </div>
                            <div class="toolbox-item toolbox-sort">
                                <label for="set_item_sort_by">{{ __('sort by') }}:</label>
                                <select id="set_item_sort_by" class="select-box">
                                    <option value="default"
                                            @if($sort_by == 'default') selected @endif>{{ __('Default sorting') }}</option>
                                    <option value="popularity"
                                            @if($sort_by == 'popularity') selected @endif>{{ __('Sort by popularity') }}</option>
                                    <option value="latest"
                                            @if($sort_by == 'latest') selected @endif>{{ __('Sort by latest') }}</option>
                                    <option value="price_low"
                                            @if($sort_by == 'price_low') selected @endif>{{ __('Sort by pric: low to high') }}</option>
                                    <option value="price_high"
                                            @if($sort_by == 'price_high') selected @endif>{{ __('Sort by pric: high to low') }}</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    @if(isset($style) && $style == 'list')
                        <div class="product-wrap">
                            @foreach ($all_products as $product)
                                <x-frontend.product.product-list :product="$product"/>
                            @endforeach
                        </div>
                    @else
                        <div class="row">
                            @foreach ($all_products as $product)
                                <x-frontend.product.product-card :product="$product" :column="$product_column"/>
                            @endforeach
                        </div>
                    @endif
                    @if($all_products->count())
                        <div class="row justify-content-center mb-3">
                            <div class="col-lg-6">
                                <div class="pagination-default">
                                    {!! $all_products->links() !!}
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="alert alert-danger d-flex justify-content-between">{{__('no products found')}}
                            <a href="{{route('frontend.products.all')}}" class="btn btn-warning btn-xs">
                                {{ __('reset filter') }}
                            </a>
                        </div>
                    @endif
                </div>

                <div class="col-lg-3">
                    <div class="widget-area-wrapper">
                        @if (get_static_option('shop_product_search'))
                            <div class="widget widget-search">
                                <h5 class="widget-title">{{ __('Product Search') }}</h5>
                                <form class="form-inline" id="search_form">
                                    <div class="form-group">
                                        <input type="search" class="form-control" id="search_query" name="search_query"
                                               placeholder="{{ __('search...') }}" value="{{ request()->q ?? '' }}">
                                    </div>
                                    <button type="submit" class="form-btn-1"><i class="las la-search"></i></button>
                                </form>
                            </div>
                        @endif

                        @if (get_static_option('shop_filter_by_price'))
                            <div class="widget widget-range">
                                <h5 class="widget-title">{{ __('filter by price') }}</h5>
                                <div id="slider-range"></div>
                                <div class="range">
                                    <div class="range-details">
                                        <span class="min_filter_price min">{{amount_with_currency_symbol($min_price)}}</span>
                                        <span class="max_filter_price max">{{amount_with_currency_symbol($max_price)}}</span>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if (get_static_option('shop_filter_by_category'))
                            <div class="widget widget-category">
                                <h5 class="widget-title">{{ __('category') }}</h5>
                                @php
									// Helper function to check if a category or its children is selected
									function isCategorySelected($category, $selectedCat) {
										if ($category->id == $selectedCat) {
											return true;
										}

										foreach ($category->children as $child) {
											if (isCategorySelected($child, $selectedCat)) {
												return true;
											}
										}

										return false;
									}
								@endphp
								<div class="widget-check-box checkbox-catagory">
									<div id="accordion">
										@foreach ($categories as $category)
											@php
												$isSelected = isCategorySelected($category, request()->cat);
											@endphp
											<div class="card p-0 border-0 custom-category-list">
												<div class="card-header p-0" id="heading-{{$category->id}}">
													<h5 class="mb-0">
														<div class="single-checkbox-wrap">
															<label>
																<input type="radio" name="product_cat" class="radio"
																	@if(request()->cat == $category->id) checked @endif
																	value="{{ $category->id }}">
																<span class="checkmark">{{ $category->title }}</span>
															</label>
								
															@if($category->children->isNotEmpty())
																<button class="sub-category-btn py-0 px-0 m-0" 
																		data-toggle="collapse"
																		data-target="#collapse-{{ $category->id }}"
																		aria-expanded="{{ $isSelected ? 'true' : 'false' }}"
																		aria-controls="collapse-{{ $category->id }}">
																		+
																</button>
															@endif
														</div>
													</h5>
												</div>
								
												@if($category->children->isNotEmpty())
													<div id="collapse-{{ $category->id }}" 
															class="collapse {{ $isSelected ? 'show' : '' }}" 
															aria-labelledby="heading-{{ $category->id }}">
														<div class="card-body p-0">
															<div class="widget-check-box checkbox-catagory ml-4">
																@include('frontend.product.category-tree', ['categories' => $category->children, 'selectedCat' => request()->cat])
															</div>
														</div>
													</div>
												@endif
											</div>
										@endforeach
									</div>
								</div>
                                    
                                @endif

                                @if (get_static_option('shop_filter_by_attributes'))
                                    @foreach ($all_attributes as $attribute)
                                        @php
                                            $attributes = json_decode($attribute, true);
                                            $attribute_terms = json_decode($attributes['terms'], true);
                                            // selected attributes for filter
                                            $selected_attrbutes = [];
                                            if (request()->attr) {
                                                $filter_attributes = json_decode(request()->attr, true);
                                                if (is_array($filter_attributes)) {
                                                    foreach ($filter_attributes as $key => $attr) {
                                                        if (isset($attr['id']) && isset($attr['attribute'])) {
                                                            $selected_attrbutes[$attr['id']] = $attr['attribute'];
                                                        }
                                                    }
                                                }
                                            }
                                        @endphp
                                        @if ($attribute_terms && count($attribute_terms))
                                            <div class="widget widget-color mt-4">
                                                <h5 class="widget-title">{{ $attribute->title }}</h5>
                                                <div class="checkbox-size">
                                                    @foreach ($attribute_terms as $term)
                                                        <div class="single-checkbox-wrap attribute">
                                                            <label>
                                                                <input type="radio" name="{{ $attribute->title }}"
                                                                       class="checkbox attribute_item"
                                                                       data-attr-type="{{ $attribute->id }}"
                                                                       value="{{ $term }}"
                                                                       @if (count($selected_attrbutes) && isset($selected_attrbutes[$attribute->id]) && $selected_attrbutes[$attribute->id] == $term)
                                                                       checked
                                                                        @endif
                                                                >
                                                                <span class="size-code">{{ $term }}</span>
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                                @if (get_static_option('shop_filter_by_average_rating'))
                                    <div class="widget widget-rating">
                                        <h5 class="widget-title">{{ __('Average Rating') }}</h5>
                                        @php
                                            $searched_rating = 0;
                                                if(isset(request()->rt) && request()->rt > 0 && request()->rt < 6) {
                                                    $searched_rating = request()->rt;
                                                }
                                        @endphp
                                        <div class="widget-check-box checkbox-rating">
                                            <div class="single-checkbox-wrap">
                                                <label>
                                                    <input type="radio" name="filter_rating" data-value="5"
                                                           class="checkbox filter_rating"
                                                           @if($searched_rating == 5) checked @endif>
                                                    <span class="checkmark">
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                    </span>
                                                </label>
                                            </div>
                                            <div class="single-checkbox-wrap">
                                                <label>
                                                    <input type="radio" name="filter_rating" data-value="4"
                                                           class="checkbox filter_rating"
                                                           @if($searched_rating == 4) checked @endif>
                                                    <span class="checkmark">
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="lar la-star"></i>
                                    </span>
                                                </label>
                                            </div>
                                            <div class="single-checkbox-wrap">
                                                <label>
                                                    <input type="radio" name="filter_rating" data-value="3"
                                                           class="checkbox filter_rating"
                                                           @if($searched_rating == 3) checked @endif>
                                                    <span class="checkmark">
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="lar la-star"></i>
                                        <i class="lar la-star"></i>
                                    </span>
                                                </label>
                                            </div>
                                            <div class="single-checkbox-wrap">
                                                <label>
                                                    <input type="radio" name="filter_rating" data-value="2"
                                                           class="checkbox filter_rating"
                                                           @if($searched_rating == 2) checked @endif>
                                                    <span class="checkmark">
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="lar la-star"></i>
                                        <i class="lar la-star"></i>
                                        <i class="lar la-star"></i>
                                    </span>
                                                </label>
                                            </div>
                                            <div class="single-checkbox-wrap">
                                                <label>
                                                    <input type="radio" name="filter_rating" data-value="1"
                                                           class="checkbox filter_rating"
                                                           @if($searched_rating == 1) checked @endif>
                                                    <span class="checkmark">
                                        <i class="las la-star"></i>
                                        <i class="lar la-star"></i>
                                        <i class="lar la-star"></i>
                                        <i class="lar la-star"></i>
                                        <i class="lar la-star"></i>
                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @if (get_static_option('shop_filter_by_tags'))
                                    <div class="widget widget-tag">
                                        <h5 class="widget-title">{{ __('tags') }}</h5>
                                        <div class="tag">
                                            @foreach ($all_tags as $tag)
                                                <a href="#"
                                                   class="tag-btn @if(request()->t == $tag->tag_text) selected @endif">{{ $tag->tag_text }}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form action="" id="sort_form" style="display: none">
            <input type="hidden" id="count" name="count" value="{{ request()->count ?? '' }}">
            <input type="hidden" id="sort" name="sort" value="{{ request()->sort ?? '' }}">
            <input type="hidden" id="pr" name="pr" value="{{ request()->pr ?? '' }}">
            <input type="hidden" id="pr_min" name="pr_min" value="{{ request()->pr_min ?? '' }}">
            <input type="hidden" id="pr_max" name="pr_max" value="{{ request()->pr_max ?? '' }}">
            <input type="hidden" id="s" name="s" value="{{ request()->s ? request()->s : '' }}">
            <input type="hidden" id="q" name="q" value="{{ request()->q ? request()->q : '' }}">
            <input type="hidden" id="cat" name="cat" value="{{ request()->cat ? request()->cat : '' }}">
            <input type="hidden" id="subcat" name="subcat" value="{{ request()->subcat ? request()->subcat : '' }}">
            <input type="hidden" id="attr" name="attr" value="{{ request()->attr ? request()->attr : '' }}">
            <input type="hidden" id="rt" name="rt" value="{{ request()->rt ? request()->rt : '' }}">
            <input type="hidden" id="t" name="t" value="{{ request()->t ? request()->t : '' }}">
            <input type="hidden" id="page" name="page" value="{{ request()->page ? request()->page : '' }}">
        </form>
        @endsection

        @section('scripts')

            <link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery-ui.min.css') }}">
            <script src="{{ asset('assets/common/js/jquery-ui.min.js') }}"></script>

            <script>
                (function ($) {
                    $(document).ready(function () {
                        $("#slider-range").slider({
                            range: true,
                            min: 0,
                            max: "{{$maximum_available_price}}",
                            values: ["{{$min_price}}", "{{$max_price}}"],
                            slide: function (event, ui) {
                                var min_price = ui.values[0];
                                var max_price = ui.values[1];
                                var siteGlobalCurrency = "{{site_currency_symbol()}}";
                                $('.min_filter_price').text(siteGlobalCurrency + min_price);
                                $('.max_filter_price').text(siteGlobalCurrency + max_price);
                                $('#pr_min').val(min_price);
                                $('#pr_max').val(max_price);
                            },
                            stop: function (event, ui) {
                                $('#sort_form').trigger('submit');
                            }
                        });

                        $('#set_item_to_show').on('change', function () {
                            let val = $(this).val();
                            $('#count').val(val);
                            $('#sort_form').trigger('submit');
                        });

                        $('#set_item_sort_by').on('change', function () {
                            let val = $(this).val();
                            $('#sort').val(val);
                            $('#sort_form').trigger('submit');
                        });

                        $('#search_query').on('change', function () {
                            let val = $(this).val();
                            $('#q').val(val);
                        });

                        $('input[name=product_cat]').on('change', function (e) {
                            let val = $('input[name=product_cat]:checked').val();
                            $('#cat').val(val);
                            $('#sort_form').trigger('submit');
                        });

                        $('input[name=product_subcat]').on('change', function (e) {
                            let val = $('input[name=product_subcat]:checked').val();
                            $('#subcat').val(val);
                            $('#sort_form').trigger('submit');
                        });

                        $('.attribute_item').on('change', function () {
                            let selected_attributes = $('.attribute_item:checked');
                            let selected_attributes_arr = [];
                            let selected_attributes_json = '';
                            for (let i = 0; i < selected_attributes.length; i++) {
                                selected_attributes_arr.push({
                                    id: $(selected_attributes[i]).data('attr-type'),
                                    attribute: $(selected_attributes[i]).val()
                                });
                            }
                            selected_attributes_json = JSON.stringify(selected_attributes_arr);
                            $('#attr').val(selected_attributes_json);
                            $('#sort_form').trigger('submit');
                        });

                        $('.filter_rating').on('change', function () {
                            let seletected_rating = $('.filter_rating:checked').data('value');
                            $('#rt').val(seletected_rating);
                            $('#sort_form').trigger('submit');
                        });

                        $('.tag-btn').on('click', function (e) {
                            e.preventDefault();
                            let seletected_tag = $(this).text();
                            $('#t').val(seletected_tag);
                            $('#sort_form').trigger('submit');
                        });

                        $('.grid-layout').on('click', function (e) {
                            e.preventDefault();
                            let display_style = $(this).data('style')
                            $('#s').val(display_style);
                            $('#sort_form').trigger('submit');
                        });

                        $('.list-layout').on('click', function (e) {
                            e.preventDefault();
                            let display_style = $(this).data('style')
                            $('#s').val(display_style);
                            $('#sort_form').trigger('submit');
                        });

                        $(document).on('submit', '#search_form', function (e) {
                            e.preventDefault();
                            $('#sort_form').trigger('submit');
                        });
                    });
                })(jQuery)
            </script>
@endsection
