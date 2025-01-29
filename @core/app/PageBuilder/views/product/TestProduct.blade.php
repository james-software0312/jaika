{{--
    [
            'title' => $formatted_section_title,
            'padding_top' => $padding_top,
            'padding_bottom' => $padding_bottom,
            'all_products' => $all_products
        ]
 --}}

<section data-padding-bottom="{{ $padding_bottom }}" data-padding-top="{{ $padding_top }}">
    <h2> {{ $title }} </h2>
    <p>
        @foreach($all_products as $item)
            {{ $item->title }}
        @endforeach
    </p>
</section>