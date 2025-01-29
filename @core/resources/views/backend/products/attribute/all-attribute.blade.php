@extends('backend.admin-master')
@section('style')
    <x-datatable.css />
    <x-bulk-action.css />
@endsection
@section('site-title')
    {{__('All Product Attributes')}}
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
                       <div class="header-wrap d-flex justify-content-between align-items-center">
                           <div class="left">
                               <h4 class="header-title">{{__('All Product Attributes')}}</h4>
                               @can('product-attribute-delete')
                               <x-bulk-action.dropdown />
                               @endcan
                           </div>
                           @can('product-attribute-create')
                           <div class="btn-wrapper">
                               <a href="{{ route('admin.products.attributes.store') }}" class="btn btn-primary">{{ __('Add New Attribute') }}</a>
                           </div>
                           @endcan
                       </div>
                        <div class="table-wrap table-responsive">
                            <table class="table table-default" id="all_blog_table">
                                <thead>
                                <x-bulk-action.th />
                                <th>{{__('ID')}}</th>
                                <th>{{__('Title')}}</th>
                                <th>{{__('Terms')}}</th>
                                <th>{{__('Action')}}</th>
                                </thead>
                                <tbody>
                                    @foreach($all_attributes as $attribute)
                                    <tr>
                                        <x-bulk-action.td :id="$attribute->id" />
                                        <td>{{ $loop->iteration }}</td> 
                                        <td>{{ $attribute->title }}</td>
                                        <td>
                                            <ul>
                                                @foreach(json_decode($attribute->terms) as $term)
                                                    <li>{{ $term }}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td>
                                            @can('product-attribute-edit')
                                            <x-table.btn.edit :route="route('admin.products.attributes.edit', $attribute->id)" />
                                            @endcan
                                            @can('product-attribute-delete')
                                            <x-delete-popover :url="route('admin.products.attributes.delete', $attribute->id)"/>
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
        </div>
    </div>
@endsection

@section('script')
    <x-datatable.js />
    @can('product-attribute-delete')
    <x-bulk-action.js :route="route('admin.products.attributes.bulk.action')" />
    @endcan
    <x-table.btn.swal.js />
@endsection
