@foreach ($categories as $category)
@php
    $isSelected = isCategorySelected($category, $selectedCat);
@endphp
    <div class="card p-0 border-0 custom-category-list">
        <div class="card-header p-0" id="heading-{{$category->id}}">
            <h5 class="mb-0">
                <div class="single-checkbox-wrap">
                    <label>
                        <input type="radio" name="product_cat" class="radio"
                               @if($selectedCat == $category->id) checked @endif
                               value="{{ $category->id }}">
                        <span class="checkmark">{{ $category->title }}</span>
                    </label>

                    @if($category->children->isNotEmpty())
                        <button class="sub-category-btn py-0 px-0 m-0" data-toggle="collapse"
                                data-target="#collapse-{{ $category->id }}"
                                aria-expanded="{{ $isSelected ? 'true' : 'false' }}"
                                aria-controls="collapse-{{ $category->id }}">
                                +
                        </button>
                    @endif
                </div>
            </h5>
        </div>

        @if($category->children->isNotEmpty())
            <div id="collapse-{{ $category->id }}" class="collapse {{ $isSelected ? 'show' : '' }}"
                 aria-labelledby="heading-{{ $category->id }}" data-parent="#accordion">
                <div class="card-body p-0">
                    <div class="widget-check-box checkbox-catagory ml-4">
                        @include('frontend.product.category-tree', ['categories' => $category->children, 'selectedCat' => $selectedCat])
                    </div>
                </div>
            </div>
        @endif
    </div>
@endforeach
