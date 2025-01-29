@extends('backend.admin-master')
@section('site-title')
    {{__('Product Inventory')}}
@endsection
@section('style')
    <link rel="stylesheet" href="{{asset('assets/backend/css/nice-select.css')}}">
    <style>
        .margin-top-35 {
            margin-top: 35px;
        }
    </style>
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
            @can('product-category-edit')
            <div class="col-lg-12 mt-5">
                <div class="card">
                    <div class="card-body" x-data="inventoryDetails()">
                        <h4 class="header-title">{{__('Edit Product Inventory')}}</h4>
                        <div class="text-right">
                            <a href="{{ route('admin.products.inventory.all') }}" type="button" class="btn btn-primary">{{ __('All Product Stock') }}</a>
                        </div>
                        <form>
                            @csrf
                            <input type="hidden" name="id" value="{{ $inventory->id }}">
                            <div class="form-group">
                                <label for="product">{{ __('Product Name') }}</label>
                                <select name="product_id" id="product_id" class="form-control nice-select wide">
                                    @foreach ($all_products as $product)
                                        <option value="{{ $product->id }}" @if($inventory->product_id == $product->id) selected @endif>{{ $product->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mt-5">
                                <label for="sku">{{ __('SKU') }}</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">{{ __('SKU -') }}</div>
                                    </div>
                                    <input type="text" class="form-control" id="sku" name="sku" placeholder="{{ __('SKU Text') }}" value="{{ str_replace('SKU-', '', $inventory->sku) }}" x-model="inventory.sku">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="stock_count">{{ __('Stock Count') }}</label>
                                <input type="number" name="stock_count" class="form-control" placeholder="{{ __('Stock Count') }}" value="{{ $inventory->stock_count }}" x-model="inventory.stock_count">
                            </div>

                            <p class="h6 mt-5" x-bind:class="inventory.details.length ? 'd-block' : 'd-none'">{{ __('Stock Details') }}</p>

                            <template x-for="[details_key, details] in Object.entries(inventory.details)">
                                <div class="row attribute_row">   
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="attribute_id">{{ __('Attribute Name') }}</label>
                                            <select name="attribute_id" class="form-control attribute_name"
                                                @change="setData($event.target.value, attributes, details_key)"
                                            >
                                                <template x-for="attribute in attributes">
                                                    <option x-value="attribute.id " x-bind:data-id="attribute.id" x-text="attribute.title"></option>
                                                </template>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="attribute_values">{{ __('Attribute Value') }}</label>
                                            <select name="attribute_values" id="attribute_values" class="form-control attribute_value">
                                                <template x-for="value in present_attribute_value[details_key]">
                                                    <option x-value="value" x-text="value"></option>
                                                </template>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-row">
                                            <div class="col">
                                                <label for="stock_count">{{ __('Stock Count') }}</label>
                                                <input type="number" class="form-control stock_count" name="stock_count">
                                            </div>
                                            <div class="col-auto">
                                                <div class="margin-top-35">
                                                    <a tabindex="0" class="btn btn-danger btn-xs mb-3 mr-1" @click="deleteDetails(details)">
                                                        <i class="ti-trash"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </template>

                            <div class="text-right">
                                <button type="button" @click="submitForm()" class="btn btn-primary">
                                    <i class="ti-check-box submit-btn"></i>
                                    {{ __('Update Inventory Details') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endcan
        </div>
    </div>
@endsection
@section('script')
    <x-datatable.js />
    <x-table.btn.swal.js />
    <script src="{{ asset('assets/backend/js/jquery.nice-select.min.js') }}"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script>
        function inventoryDetails() {
            return {
                inventory: {
                    product_id: undefined,
                    sku: '{{ $inventory->sku }}',
                    stock_count: {{ $inventory->stock_count }},
                    details: [
                        @foreach($inventory->details as $details)
                            {
                                id: {{ $details->id }},
                                attribute_id: {{ $details->attribute_id }},
                                attribute_value: '{{ $details->attribute_value }}',
                                stock_count: '{{ $details->stock_count }}',
                            },
                        @endforeach
                    ],
                },
                attributes: {!! $all_attributes->toJson() !!},
                present_attribute_value: [
                    @foreach($inventory->details as $details)
                        {!! $all_attributes->find($details->attribute_id)->terms !!},
                    @endforeach
                ],
                addRow() {
                    let attribute = this.attributes[0];
                    this.inventory.details.push({
                        attribute_id: attribute.id,
                        attribute_value: '',
                        stock_count: 0,
                    });
                },
                setData(attribute_value, all_attribute, key) {
                    let present_detail = Object.entries(this.inventory.details)[key];
                    selected_attribute = all_attribute.filter(e => e.title == attribute_value);
                    this.setPresentAttrVal(selected_attribute[0].terms, present_detail, key);
                },
                setPresentAttrVal(data, details, key) {
                    this.present_attribute_value[key] = JSON.parse(data);
                },
                deleteDetails(details) {
                    Swal.fire({
                        title: "{{ __('Do you want to delete this item?') }}",
                        showCancelButton: true,
                        confirmButtonText: 'Delete',
                        confirmButtonColor: '#dd3333',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            let route = '{{ route("admin.products.inventory.delete") }}';
                            $.post(route, {_token: '{{ csrf_token() }}', id: details.id}).then(function (data) {
                                if (data) {
                                    Swal.fire('Deleted!', '', 'success');
                                    setTimeout(function () {
                                        location.reload();
                                    }, 1000);
                                }
                            });
                        }
                    });
                },
                submitForm() {
                    this.inventory.product_id = $('#product_id').val();
                    let all_attributes = $('.attribute_row');
                    let result = {
                        _token : '{{ csrf_token() }}',
                        id: '{{ $inventory->id }}',
                        product_id: this.inventory.product_id,
                        sku: this.inventory.sku,
                        stock_count: this.inventory.stock_count,
                        inventory_details: []
                    };

                    for (let i = 0; i < all_attributes.length; i++) {
                        result.inventory_details.push({
                            attribute_id: $($('.attribute_name')[i]).find(':selected').data('id'),
                            attribute_value: $($('.attribute_value')[i]).val(),
                            stock_count: $($('.stock_count')[i]).val(),
                        });
                    };

                    $.ajax({
                        url: `{{ route('admin.products.inventory.update') }}`,
                        method: 'POST',
                        data: result,
                        success: data => {
                            if (data.type == 'success') {
                                Swal.fire('Success!', '', 'success');
                                setTimeout(() => {
                                    location.reload();
                                }, 1000);
                            }
                        },
                        error: err => {
                            if (err.responseJSON.errors) {
                                let err_msg = '';
                                Object.values(err.responseJSON.errors).map(e => {
                                    err_msg += e[0] + '<br>';
                                });
                                Swal.fire(err_msg, '', 'error');
                            }
                        }
                    });
                },
            };
        }
    </script>

    <script>
        (function ($) {
            'user script'
            $(document).ready(function () {
                if ($('.nice-select').length > 0) {
                    $('.nice-select').niceSelect();
                }

                let all_attributes = $('.attribute_row');

                @foreach($inventory->details as $key => $details)
                    $($('.attribute_name')[{{ $key }}]).val('{{ $all_attributes->find($details->attribute_id)->title }}');
                    $($('.stock_count')[{{ $key }}]).val({{ $details->stock_count }});
                @endforeach
            });
        })(jQuery)
    </script>

@endsection
