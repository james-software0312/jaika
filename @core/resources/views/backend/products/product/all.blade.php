@extends('backend.admin-master')
@section('site-title')
    {{__('All Product')}}
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
            <div class="col-lg-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">{{__('All Products')}}</h4>
                        <!-- @can('product-list')
                        <div class="text-right">
                            <a href="{{ route('admin.products.new') }}" class="btn btn-primary">{{ __('Add New Product') }}</a>
                        </div>
                        @endcan -->
                        @can('product-delete')
                        <x-bulk-action.dropdown />
                        @endcan
                        <div class="table-wrap table-responsive">
                            <table class="table table-default">
                                <thead>
                                    <x-bulk-action.th />
                                    <th>{{__('ID')}}</th>
                                    <th>{{__('Name')}}</th>
                                    <th>{{__('Category')}}</th>
                                    <th>{{__('Supplier')}}</th>
                                    <th>{{__('Price')}}</th>
                                    <th>{{__('Status')}}</th>
                                    <th>{{__('Image')}}</th>
                                    <th>{{__('Action')}}</th>
                                </thead>
                                <tbody>
                                    @foreach($all_products as $product)
                                    <tr>
                                        <x-bulk-action.td :id="$product->id" />
                                        <td>
                                            {{ $loop->iteration }}
                                        </td>
                                        <td>
                                            <h6>{{ html_entity_decode($product->title) }}</h6>
                                            @if(!empty($product->inventory))
                                                <small><strong>{{__('Stock')}}:</strong> {{optional($product->inventory)->quantity}}</small>
                                                <small><strong>{{__('Sold')}}:</strong> {{optional($product->inventory)->quantity}}</small>
                                            @endif
                                        </td>
                                        <td>{{ optional($product->category)->title }}</td>
                                        <td>
                                            @foreach ($contact_users as $user)
                                                @if($user->id == $product->contact_id)
                                                {{$user->name;}}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>{{ amount_with_currency_symbol($product->sale_price) }}</td>
                                        <td>

                                            <x-status-span :status="$product->status"/>
                                        </td>
                                        <x-table.td-image :image="$product->image" />
                                        <td>
                                            @can('product-delete')
                                            <x-delete-popover :url="route('admin.products.delete', $product->id)"/>
                                            @endcan
                                            @can('product-edit')
                                            <x-table.btn.edit :route="route('admin.products.edit', $product->id)" />
                                            @endcan
                                            @can('product-clone')
                                            <x-table.btn.clone :route="route('admin.products.clone', $product->id)" :id="$product->id" />
                                            @endcan
                                            @can('product-view')
                                            <x-table.btn.view :route="route('frontend.products.single', $product->slug)" />
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
