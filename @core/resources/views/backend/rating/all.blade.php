@extends('backend.admin-master')
@section('site-title')
    {{__('All Product Ratings')}}
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
                        <h4 class="header-title">{{__('Product Ratings')}}</h4>
                        @can('product-rating-delete')
                        <x-bulk-action.dropdown />
                        @endcan
                        <div class="table-wrap table-responsive">
                            <table class="table table-default">
                                <thead>
                                    <x-bulk-action.th />
                                    <th>{{ __('ID') }}</th>
                                    <th>{{ __('Product') }}</th>
                                    <th>{{ __('User') }}</th>
                                    <th>{{ __('Status') }}</th>
                                    <th>{{ __('Message') }}</th>
                                    <th>{{ __('Action') }}</th>
                                </thead>
                                <tbody>
                                    @foreach($all_ratings as $rating)
                                    <tr>
                                        <x-bulk-action.td :id="$rating->id" />
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ optional($rating->product)->name }}</td>
                                        <td>{{ optional($rating->user)->name }}</td>
                                        <td>
                                            @if($rating->status)
                                                <span class="alert alert-success text-capitalize">{{ __('Approved') }}</span>
                                            @else
                                                <span class="alert alert-warning text-capitalize">{{ __('Pending') }}</span>
                                            @endif
                                        </td>
                                        <td>{{ Str::limit($rating->review_msg, 20) }}</td>
                                        <td>
                                            <button class="btn btn-success btn-xs mb-3 mr-1 swal-approve" data-id="{{ $rating->id }}">
                                                <i class="ti-check-box"></i>
                                            </button>
                                            @can('product-rating-delete')
                                            <x-delete-popover :url="route('admin.products.ratings.delete', $rating->id)"/>
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
    @can('product-rating-delete')
    <x-bulk-action.js :route="route('admin.products.ratings.bulk.action')" />
    @endcan
    <script>
        (function ($) {
            "use strict"
            $(document).ready(function () {
                $('.swal-approve').on('click', function () {
                    let id = $(this).data('id');
                    Swal.fire({
                        title: "{{ __('Do you want to approve this review?') }}",
                        showCancelButton: true,
                        confirmButtonText: 'Approve',
                        // confirmButtonColor: '#33dd33',
                        }).then((result) => {
                        if (result.isConfirmed) {
                            $.post('{{ route("admin.products.ratings.approve") }}', {_token: '{{ csrf_token() }}', id: id})
                                .then(function (data) {
                                    if (data) {
                                        Swal.fire(data['msg'], '', data['type']);
                                        setTimeout(function () {
                                            location.reload();
                                        }, 1000);
                                    }
                                });
                        }
                    });
                });
            });
        })(jQuery)
        </script>
@endsection
