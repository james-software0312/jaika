@if ($all_user_shipping)
    @foreach ($all_user_shipping as $user_shipping)
        <div class="card mb-3 user_shipping_address" data-id="{{ $user_shipping->id }}">
            <div class="card-body">
                <div class="h5">{{ $user_shipping->name }}</div>
                <p>{{ $user_shipping->address }}</p>
            </div>
        </div>
    @endforeach
@endif
