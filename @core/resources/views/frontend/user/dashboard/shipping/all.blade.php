@extends('frontend.user.dashboard.user-master')
@section('section')
    @if($all_shipping_address && $all_shipping_address->count())
        <h4 class="mb-5">{{ __('My Shipping Address') }}</h4>
        <div class="text-right mb-3">
            <a href="{{ route('user.shipping.address.new') }}" class="btn btn-primary">{{ __('Add Shipping Address') }}</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('Address') }}</th>
                    <th>{{ __('Action') }}</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($all_shipping_address as $address)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $address->name }}</td>
                        <td>{{ $address->address }}</td>
                        <td>
                            <a class="btn btn-danger btn-xs mb-3 mr-1 edit_shipping" data-id="{{ $address->id }}" data-name="{{ $address->name }}" data-address="{{ $address->address }}">
                                <i class="las la-edit"></i>
                            </a>
                            <x-table.btn.swal.delete :route="route('shipping.address.delete', $address->id)" :class="'las la-trash'" />
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="alert alert-warning">
            {{__('No Shipping Address Found. ')}}
            <a class="btn btn-link" href="{{ route('user.shipping.address.new') }}">{{ __('Create New?') }}</a>
        </div>
    @endif

    <div class="modal fade" id="edit_shipping_modal" tabindex="-1" role="dialog" aria-labelledby="edit_shipping_modal_label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="edit_shipping_modal_label">{{ __('Edit Shipping') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route("user.shipping.address.edit") }}" method="POST" id="new_user_shipping_address_form">
                        @csrf
                        <input type="hidden" class="form-control" name="id" id="edit_id">
                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>
                            <input type="text" class="form-control" name="name" id="edit_name">
                        </div>
                        <div class="form-group">
                            <label for="address">{{ __('Address') }}</label>
                            <textarea name="address" id="edit_address" class="form-control" cols="30" rows="5"></textarea>
                        </div>
                        <div class="text-right">
                            <button class="default-btn default-theme-btn">{{ __('Submit') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{asset('assets/backend/js/sweetalert2.js')}}"></script>
    <x-table.btn.swal.js />
    <script>
        (function ($) {
            $(document).ready(function () {
                $('.edit_shipping').on('click', function (e) {
                    e.preventDefault();
                    $('#edit_id').val($(this).data('id'));
                    $('#edit_name').val($(this).data('name'));
                    $('#edit_address').val($(this).data('address'));
                    $('#edit_shipping_modal').modal('show');
                });
                $(document).on('click', '.mobile_nav', function(e) {
                    e.preventDefault();
                    $(this).parent().toggleClass('show');
                });
            })
        })(jQuery)
    </script>
@endsection
