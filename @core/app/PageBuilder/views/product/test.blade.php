{{--
    [
        'title' => $formatted_section_title,
        'padding_top' => $padding_top,
        'padding_bottom' => $padding_bottom,
        'all_products' => $all_products
    ]
--}}

<section data-padding-top="{{$padding_top}}" data-padding-bottom="{{$padding_bottom}}">
    <h1>{{ $title }}</h1>
    <p>
        {{ json_encode($all_products) }}
    </p>
</section>
