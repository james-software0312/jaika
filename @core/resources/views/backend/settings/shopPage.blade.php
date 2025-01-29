@extends('backend.admin-master')
@section('site-title')
    {{__('Shop Page Settings')}}
@endsection
@section('content')
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-top-40"></div>
                <x-msg.success/>
                <x-msg.error/>
            </div>
            <div class="col-lg-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">{{__('Shop Page Settings')}}</h4>
                        <form action="{{ route('admin.page.settings.shop.page') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="default_item_count">{{ __('Number of Products to show by default') }}</label>
                                <input type="text" name="default_item_count" class="form-control" value="{{ get_static_option('default_item_count') }}">
                            </div>
                            <div class="form-group">
                                <label for="shop_column_count">{{ __('Number of Columns') }}</label>
                                <input type="text" name="shop_column_count" class="form-control" value="{{ get_static_option('shop_column_count') }}">
                            </div>
                            <div class="form-col">
                                <label for="sidebar_visibility">{{ __('Sidebar Visibility') }}</label>
                                <label class="switch">
                                    <input type="checkbox" id="sidebar_visibility" name="sidebar_visibility" @if(!empty(get_static_option('sidebar_visibility'))) checked @endif>
                                    <span class="slider"></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="sidebar_position">{{ __('Sidebar Position') }}</label>
                                @php $sidebar_position = get_static_option('sidebar_position'); @endphp
                                <select name="sidebar_position" id="sidebar_position" class="form-control">
                                    <option value="right" @if ($sidebar_position == 'right') selected @endif>{{ __('Right') }}</option>
                                    <option value="left" @if ($sidebar_position == 'left') selected @endif>{{ __('Left') }}</option>
                                </select>
                            </div>

                            <div class="form-col">
                                <label for="shop_product_search">{{ __('Search Product') }}</label>
                                <label class="switch">
                                    <input type="checkbox" id="shop_product_search" name="shop_product_search" @if(!empty(get_static_option('shop_product_search'))) checked @endif>
                                    <span class="slider"></span>
                                </label>
                            </div>
                            <div class="form-col">
                                <label for="shop_filter_by_price">{{ __('Filter by price') }}</label>
                                <label class="switch">
                                    <input type="checkbox" id="shop_filter_by_price" name="shop_filter_by_price" @if(!empty(get_static_option('shop_filter_by_price'))) checked @endif>
                                    <span class="slider"></span>
                                </label>
                            </div>
                            <div class="form-col">
                                <label for="shop_filter_by_category">{{ __('Filter by category') }}</label>
                                <label class="switch">
                                    <input type="checkbox" id="shop_filter_by_category" name="shop_filter_by_category" @if(!empty(get_static_option('shop_filter_by_category'))) checked @endif>
                                    <span class="slider"></span>
                                </label>
                            </div>
                            <div class="form-col">
                                <label for="shop_filter_by_attributes">{{ __('Filter by attributes') }}</label>
                                <label class="switch">
                                    <input type="checkbox" id="shop_filter_by_attributes" name="shop_filter_by_attributes" @if(!empty(get_static_option('shop_filter_by_attributes'))) checked @endif>
                                    <span class="slider"></span>
                                </label>
                            </div>
                            <div class="form-col">
                                <label for="shop_filter_by_average_rating">{{ __('Filter by average rating') }}</label>
                                <label class="switch">
                                    <input type="checkbox" id="shop_filter_by_average_rating" name="shop_filter_by_average_rating" @if(!empty(get_static_option('shop_filter_by_average_rating'))) checked @endif>
                                    <span class="slider"></span>
                                </label>
                            </div>
                            <div class="form-col">
                                <label for="shop_filter_by_tags">{{ __('Filter by tags') }}</label>
                                <label class="switch">
                                    <input type="checkbox" id="shop_filter_by_tags" name="shop_filter_by_tags" @if(!empty(get_static_option('shop_filter_by_tags'))) checked @endif>
                                    <span class="slider"></span>
                                </label>
                            </div>
                            <button class="btn btn-primary">{{ __('Save Settings') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
