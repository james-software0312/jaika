@extends('backend.admin-master')
@section('site-title')
    {{__('Product Inventory')}}
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
                        <h4 class="header-title">{{__('Product Inventory')}}</h4>
                        @can('product-inventory-delete')
                        <x-bulk-action.dropdown />
                        @endcan
                        <div class="table-wrap table-responsive">
                            <table class="table table-default">
                                <thead>
                                    <x-bulk-action.th />
                                    <th>{{__('ID')}}</th>
                                    <th>{{__('Name')}}</th>
                                    <th>{{__('SKU')}}</th>
                                    <th>{{__('Stock')}}</th>
                                    <th>{{__('Sold')}}</th>
                                    <th>{{__('Action')}}</th>
                                </thead>
                                <tbody>
                                    @foreach($all_inventory_products as $inventory)
                                    <tr>
                                        <x-bulk-action.td :id="$inventory->id" />
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ optional($inventory->product)->title }}</td>
                                        <td>{{ $inventory->sku }}</td>
                                        <td>{{ $inventory->stock_count ?? 0 }}</td>
                                        <td>{{ $inventory->sold_count ?? 0 }}</td>
                                        <td>
                                            @can('product-inventory-delete')
                                            <x-delete-popover :url="route('admin.products.inventory.delete', $inventory->id)"/>
                                            @endcan
                                            @can('product-inventory-edit')
                                            <x-table.btn.edit :route="route('admin.products.inventory.edit', $inventory->id)" />
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
    @can('product-inventory-delete')
    <x-bulk-action.js :route="route('admin.products.inventory.bulk.action')" />
    @endcan
@endsection
