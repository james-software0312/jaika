<ul class="sub-menu mega-menu-inner">
    <li class="mega-menu-single-section">
        <ul class="mega-menu-main">
            <li>
                <h5 class="menu-title">{{ html_entity_decode($title) }}</h5>
            </li>
            @foreach($mega_menu_items as $item)
                <li>
                    <a href="blog-grid-travel.html">{{ html_entity_decode($item->title) }}</a>
                </li>
            @endforeach
        </ul>
    </li>
</ul>