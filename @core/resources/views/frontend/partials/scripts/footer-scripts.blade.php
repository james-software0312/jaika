
<script>
    $(document).on("click",".product_filter_style_two",function (){
        $(".product-filter-style-two-product-wrapper .row").hide();
        $(".product_filter_style_two").removeClass("active");
        $(this).addClass("active");

        let beforeSend = ".product-filter-style-two-product-wrapper .lds-ellipsis",
            successResponse = "",
            data = {style: "two"};

        if($(this).attr("data-filter") == 'campaign'){
            send_ajax_response_get_response("post","{{ route("frontend.products.filter.campaign") }}",beforeSend,successResponse);
        }else if($(this).attr("data-filter") == 'new-items'){
            send_ajax_response_get_response("post","{{ route("frontend.products.filter.new") }}",beforeSend,successResponse);
        }else if($(this).attr("data-filter") == 'top-rated'){
            send_ajax_response_get_response("post","{{ route("frontend.products.filter.top.rated") }}",beforeSend,successResponse);
        }else if($(this).attr("data-filter") == 'top-selling'){
            send_ajax_response_get_response("post","{{ route("frontend.products.filter.top.selling") }}",beforeSend,successResponse);
        }else if($(this).attr("data-filter") == 'discounted'){
            send_ajax_response_get_response("post","{{ route("frontend.products.filter.discounted") }}",beforeSend,successResponse);
        }

    });

    function send_ajax_response_get_response(type,url,data){
        $.ajax({
            url: url,
            type: type,
            data: {
                style: "two",
                limit: $(".product-filter-style-two-product-wrapper").attr("data-item-limit")
            },
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}",//$('meta[name="csrf-token"]').attr('content')
            },
            beforeSend:function (){
                $(".filter-two-main-container").attr("style","height:912px");
                $(".filter-style-block-preloader.lds-ellipsis").show();
            },
            success: function (data) {
                $(".filter-style-block-preloader.lds-ellipsis").hide(300);
                $(".filter-two-main-container").removeAttr("style");
                $(".product-filter-style-two-product-wrapper").html(data).removeAttr("style");

                if(data.success == false){
                    toastr.warning('There something is wrong please try again');
                }
            },
            erorr: function (err) {
                $(".filter-two-main-container").removeAttr("style");
                $(".filter-style-block-preloader.lds-ellipsis").hide(300);
                toastr.error('{{ __("An error occurred") }}');
            }
        });
    }

    (function ($) {
        'use strict'

        let site_currency_symbol = '{{ site_currency_symbol() }}';

        $(document).ready(function () {
            refreshShippingDropdown();
            refreshWishlistDropdown();

            $(document).on('click', '.add_to_cart_ajax', function (e) {
                e.preventDefault();
                let product_id = $(this).data('id');
                $.ajax({
                    url: '{{ route("frontend.products.add.to.cart.ajax") }}',
                    type: 'POST',
                    data: {
                        product_id: product_id,
                        quantity: 1,
                        product_attributes: [],
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (data) {
                        if (data.quantity_msg) {
                            toastr.warning(data.quantity_msg)
                        } else {
                            toastr.success(data.msg);
                        }
                        refreshShippingDropdown();
                    },
                    erorr: function (err) {
                        toastr.error('{{ __("something went wrong!! try again") }}');
                    }
                });
            });

            $(document).on('click', '.add_to_buy_now_ajax', function (e) {
                e.preventDefault();

                if($(this).data("attributes") == 1){
                    toastr.warning("All attributes must be selected before added to cart");

                    setTimeout(function () {
                        location.href = $(this).data("route");
                    }, 1000);
                }else{
                    let product_id = $(this).data('id');
                    $.ajax({
                        url: '{{ route("frontend.products.add.to.cart.ajax") }}',
                        type: 'POST',
                        data: { 
                            product_id: product_id,
                            quantity: 1,
                            product_attributes: [],
                            _token: '{{ csrf_token() }}'
                        },
                        success: function (data) {
                            if (data.quantity_msg) {
                                toastr.warning(data.quantity_msg)
                            } else {
                                toastr.success(data.msg);
                            }
                            setTimeout(function () {
                                location.href = '{{ route("frontend.checkout") }}';
                            }, 1000);
                            refreshShippingDropdown();
                        },
                        erorr: function (err) {
                            toastr.error('{{ __("something went wrong!! try again") }}');
                        }
                    });
                }
            });

            $(document).on('click', '.single-thumb', function () {
                let attribute_img_el = $('#attribute_img');
                attribute_img_el.attr('src', '');
                attribute_img_el.prev().show();
            });

            $('.thumb-link img').on('click', function (e) {
                let source = $(this).attr('src');
                let key = $(this).parent().data('key');
                let attribute_img_el = $('.attribute_img');
                $('.magnific[data-key="'+key+'"]').closest('.single-main-image').find('.attribute_img').attr('src', source);
                attribute_img_el.hide();
                attribute_img_el.prev().show();
            })

            $('.attribute input[type=radio]').on('click', function () {
                let attribute_img_el = $('.attribute_img');
                let total_extra = 0;
                let main_price = Number($('#price').data('mainPrice'));
                let all_checked = $('.attribute input[type=radio]:checked');

                // image
                if ($(this).data('attrImage')) {
                    attribute_img_el.attr('src', $(this).data('attrImage')).show();
                    attribute_img_el.closest('.single-main-image').find('.magnific').attr('href', $(this).data('attrImage'));
                    attribute_img_el.prev().hide();
                } else {
                    // attribute_img_el.attr('src', '');
                    attribute_img_el.attr('src',$("#product-image").val());
                    // attribute_img_el.hide();
                    // attribute_img_el.prev().show();
                }

                //price
                for (let i = 0; i < all_checked.length; i++) {
                    total_extra += Number($(all_checked[i]).siblings('span').data('extra'));
                }
                let new_price = main_price + total_extra;
                $('#price').text(site_currency_symbol + parseFloat(new_price).toFixed(2));
            });

            $(document).on('click', '.add_to_wishlist_ajax', function (e) {
                e.preventDefault();
                let product_id = $(this).data('id');
                $.ajax({
                    url: '{{ route("frontend.products.add.to.wishlist.ajax") }}',
                    type: 'POST',
                    data: {
                        product_id: product_id,
                        quantity: 1,
                        product_attributes: [],
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (data) {
                        toastr.success(data.msg);
                        refreshWishlistDropdown();
                    },
                    erorr: function (err) {
                        toastr.error('{{ __("An error occurred") }}');
                    }
                });
            });

            $('.nav_search_btn').on('click', function (e) {
                e.preventDefault();
                if ($('.search_bar .form-group .form-control').val().length) {
                    $('#product_search_form').trigger('submit');
                } else {
                    $('.search_bar .form-group').toggle('fast', 'swing');
                }
            });

            $('body').on('click', '.quick-view', function (e) {
                e.preventDefault();
                let data = $(this).data();
                let rating = $(this).data('rating');
                let stock_msg = "{{ __('Item is not available in stock') }}";
                let stock_class = 'text-danger';
                let badge = $(this).data('badge');
                let campaignPercentage = $(this).data('campaignpercentage');;

                $('#productview a.add-to-cart').data('id', data['id']);

                $('#productview .title').text(data['title']);
                $('#productview .info').text(data['summary']);
                $('#productview .sale_price').text(data['salePrice']);
                $('.price.sale_price').attr("data-item-price",data['mainPrice']);
                $('#productview .main_price').text('');
                var parserPrice = parseFloat(data['price'].replace(/[^0-9]/g,''));
                if(parserPrice){
                    $('#productview .main_price').text(data['price']);
                }
                $('#add_to_cart_info .quantity').attr('value', data['unitconverter']);
                $('#productview .product_category').text(data['category']);
                $('#productview .product_category').attr('href', data['categoryUrl']);
                $('#productview .product-img img').attr('src', data['image']);
                $('#product-image-model').val(data["image"]);

                $('#productview .product-img .discount-tag').remove();
                $('#productview .product-img .sale').remove();
                //badge 
                if(campaignPercentage !== undefined){
                      $('#productview .product-img').append('<span class="discount-tag">-'+campaignPercentage+'%</span>');
                }
                 if(badge !== undefined){
                      $('#productview .product-img').append('<span class="sale">'+badge+'</span>');
                }
                
                $('#productview .sku_wrapper .sku').text(data['inventory']);

                if (data['inStock']) {
                    stock_msg = "{{ __('Item is available in stock') }}";
                    stock_class = 'text-success';
                }

                $('#productview .is_available').removeClass('text-success');
                $('#productview .is_available').removeClass('text-danger');

                $('#productview .is_available').text(stock_msg);
                $('#productview .is_available').addClass(stock_class);

                if (data['inventory'] && data['inventory'].length) {
                    $('#productview .sku_wrapper').show();
                }

                let subcategory_html = '';
                let subcategory = data['subcategory'];

                for (let i = 0; i < subcategory.length; i++) {
                    let comma = '';

                    if (i < subcategory.length - 1) {
                        comma += ', ';
                    }

                    subcategory_html += '<a href="'+subcategory[i]['url']+'" class="product_subcategory" rel="tag">'+subcategory[i]['name']+'</a>' + comma;
                }

                $('#product_subcategory_links').html(subcategory_html);

                if (!subcategory_html.length) {
                    $('.productview_subcategory').hide();
                } else {
                    $('.productview_subcategory').show()
                }

                let rating_html = '';

                for (let i = 0; i < Number(rating); i++) {
                    rating_html += '<i class="las la-star icon"></i>';
                }

                for (let i = Math.ceil(Number(rating)); i < 5; i++) {
                    rating_html += '<i class="lar la-star icon"></i>';
                }

                $('#productview .ratings').html(rating_html);

                if (Number(rating)) {
                    $('#productview .ratings').show()
                } else {
                    $('#productview .ratings').hide()
                }

                $('#productview').addClass('show');
            });

            $(document).on('click', '.add_to_compare_ajax', function (e) {
                e.preventDefault();
                let product_id = $(this).data('id');
                $.ajax({
                    url: '{{ route("frontend.products.add.to.compare") }}',
                    type: 'POST',
                    data: {
                        product_id: product_id,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (data) {
                        if (data) {
                            toastr.success('{{ __("Item added to compare") }}');
                        }
                    },
                    erorr: function (err) {
                        toastr.error('{{ __("An error occurred") }}');
                    }
                });
            });

            $('#product_filter_featured_products').on('click', function (e) {
                let url = '{{ route("frontend.products.filter.top.rated") }}';
                loadFilterData(url);
            });
            $('#product_filter_top_selling').on('click', function (e) {
                let url = '{{ route("frontend.products.filter.top.selling") }}';
                loadFilterData(url);
            });
            $('#product_filter_new_products').on('click', function (e) {
                let url = '{{ route("frontend.products.filter.new") }}';
                loadFilterData(url);
            });

            $(document).on('click', '#quickview', function (e) {
                e.preventDefault();
                loadProductAttributeHtml($(this).data('slug'));
            });

            $(document).on('click', '.remove_cart_item', function (e) {
                e.preventDefault();
                let id = $(this).data('id');
                let attributes = $(this).data('attr');
                $('.lds-ellipsis').show();

                $.ajax({
                    url: '{{ route("frontend.products.cart.ajax.remove") }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: id,
                        product_attributes: attributes
                    },
                    success: function (data) {
                        $('.lds-ellipsis').hide(300);
                        $('#cart-container').html(data);
                        refreshShippingDropdown();
                    },
                    error: function (err) {
                        console.log(err);
                        toastr.error('{{ __("An error occurred") }}');
                        $('.lds-ellipsis').hide(300);
                    }
                });
            });

            $(document).on('click', '.buy_now', function (e) {
                e.preventDefault();

                let product_id = $(this).data('id');
                let quantity = Number($(this).closest('.add_to_cart_info').find('input.quantity').val().trim());
                let price = $('#price').text().split(site_currency_symbol)[1];
                let attributes = {};

                // get attributes
                let rendered_attributes = $('.attribute_row');
                for (let i = 0; i < rendered_attributes.length; i++) {
                    let name = $(rendered_attributes[i]).find('.name').text();
                    let selected_attribute = $(rendered_attributes[i]).find('input.checkbox:checked').next().text();
                    attributes[name] = selected_attribute;
                }

                attributes['price'] = price;

                let selected_attributes_arr = [];
                let all_selected_attributes = $('.attribute_row input.checkbox:checked');
                all_selected_attributes.map(function (k, v) {
                    selected_attributes_arr.push($(v).data('attr'));
                });

                $.ajax({
                    url: '{{ route("frontend.products.add.to.cart.ajax") }}',
                    type: 'POST',
                    data: {
                        product_id: product_id,
                        quantity: quantity,
                        // product_attributes: selected_attributes_arr,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (data) {
                        if (data.quantity_msg) {
                            toastr.warning(data.quantity_msg)
                        } else {
                            toastr.success(data.msg);
                        }
                        setTimeout(function () {
                            location.href = '{{ route("frontend.checkout") }}';
                        }, 1000);
                    },
                    erorr: function (err) {
                        toastr.error('{{ __("An error occurred") }}');
                    }
                });
            });

            $(document).on('click', '#productview .modal_add_to_cart', function (e) {
                e.preventDefault();
                let site_currency_symbol = '{{ site_currency_symbol() }}';
                let product_id = $(this).data('id');
                let quantity = Number($('.quantity').val().trim());
                let price = Number($('#productview .price.sale_price').text().split(site_currency_symbol)[1].trim())
                let attributes = {};

                // get attributes
                let rendered_attributes = $('.attribute_row');
                for (let i = 0; i < rendered_attributes.length; i++) {
                    let name = $(rendered_attributes[i]).find('.name').text();
                    let selected_attributes_arr = [];
                    let selected_attribute = $(rendered_attributes[i]).find('input.checkbox:checked').next().text();
                    attributes[name] = selected_attribute;
                }

                attributes['price'] = price;

                let selected_attributes_arr = [];
                let all_selected_attributes = $('.attribute_row input.checkbox:checked');
                all_selected_attributes.map(function (k, v) {
                    selected_attributes_arr.push($(v).data('attr'));
                });

                if (attributeSelected(attributes)) {
                    $.ajax({
                        url: '{{ route("frontend.products.add.to.cart.ajax") }}',
                        type: 'POST',
                        data: {
                            product_id: product_id,
                            quantity: quantity,
                            product_attributes: selected_attributes_arr,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function (data) {
                            if (data.quantity_msg) {
                                toastr.warning(data.quantity_msg)
                            } else {
                                toastr.success(data.msg);
                            }
                            refreshShippingDropdown();
                        },
                        erorr: function (err) {
                            toastr.error('{{ __("An error occurred") }}');
                        }
                    });
                } else {
                    toastr.error('{{ __("Select all attribute to proceed") }}');
                }
            });

            $(document).on('change', '#langchange', function(e) {
                $.ajax({
                    url : "{{ route('frontend.langchange') }}",
                    type: "GET",
                    data:{
                        'lang' : $(this).val()
                    },
                    success:function (data) {
                        location.reload();
                    }
                });
            });
        });

        function refreshShippingDropdown() {
            $.ajax({
                url: '{{ route("frontend.products.cart.info.ajax") }}',
                type: 'GET',
                success: function (data) {
                    $('#cart_badge').text(data.item_total);
                    $('#top_minicart_container').html(data.cart);
                },
                erorr: function (err) {
                    toastr.error('{{ __("An error occurred") }}');
                }
            });
        }

        function refreshWishlistDropdown() {
            // sync changes in details page
            $.ajax({
                url: '{{ route("frontend.products.wishlist.total") }}',
                type: 'GET',
                success: function (data) {
                    $('#wishlist_badge').text(data.total);
                },
                erorr: function (err) {
                    toastr.error('{{ __("An error occurred") }}');
                }
            });
        }

        function loadFilterData(url) {
            $('.lds-ellipsis').show();
            $.ajax({
                url: url,
                type: 'GET',
                success: function (data) {
                    if (data) {
                        $('#product_filter_section').html(data);
                        $('.lds-ellipsis').hide(300);
                    }
                },
                erorr: function (err) {
                    toastr.error('{{ __("An error occurred") }}');
                    $('.lds-ellipsis').hide(300);
                }
            });
        }

        function loadProductAttributeHtml(slug) {
            let url = "{{ route('frontend.products.attribute.html') }}";
            $('.lds-ellipsis').show();
            $.ajax({
                url: url,
                type: 'GET',
                data: {slug: slug},
                success: function (data) {
                    if (data) {
                        
                        $('.lds-ellipsis').hide(300);
                        $('#productview .cart-option').html(data);
                    }
                },
                erorr: function (err) {
                    toastr.error('{{ __("An error occurred") }}');
                    $('.lds-ellipsis').hide(300);
                }
            });
        }

        $(document).on("click",".search-open",function (){
            $(".search-bar").addClass("active");
        });

        $(document).on("click",".search-close",function (){
            $(".search-bar").removeClass("active");
        });
    })(jQuery)

    function attributeSelected(attribute) {
        let attribute_rows = $('.attribute_row');
        let attr_names = [];
        let attr_selected = [];

        $('.attribute_row .attribute input[type=radio]').map(function (k, v) {
            if (attr_names.indexOf($(v).attr('name')) == -1) {
                attr_names.push($(v).attr('name'))
            }
        });

       attr_names.map(function (k, v) {
            if ($('input[name="'+k+'"]:checked').val()) {
                attr_selected.push($('input[name="'+k+'"]:checked').val());
            }
        });

        return attr_names.length == attr_selected.length;
    }

    let site_currency_symbol = '{{ site_currency_symbol() }}';

    $(document).on("click",".clear-quick-view-attributes",function (){
        $(".quickViewCheckbox").removeAttr("checked");
        $(".attribute_img").attr("src",$("#product-image-model").val());

        $(".sale_price").html(site_currency_symbol + parseFloat($(".sale_price").data("item-price")).toFixed(2));
        showAndHideClearButton($(".quickViewCheckbox:checked").length);
    })

    $(document).on("click",".quickViewCheckbox",function (){
        showAndHideClearButton($(".quickViewCheckbox:checked").length);
    });

    // this function will show and hide clear button
    function showAndHideClearButton(length,where = $(".clear-quick-view-attributes")){
        if(length < 1){
            where.fadeOut();
        }else{
            where.fadeIn();
        }
    }

    // global quick view attribute
    // if attributes selected and additional price exists than main price will update instate
    $(document).on("click",".quickViewCheckbox",function (){
        let mainPrice = parseFloat($(".price.sale_price").data('item-price'));
        let additionalPrice = 0;
        $('.quickViewCheckbox:checked').each(function (i){
            let attr = JSON.parse($(this).attr('data-attr'));

            additionalPrice = additionalPrice + parseFloat(attr.additional_price);
        })

        let attributes = $(this).data("attr");

        if(attributes.attribute_image != null){
            $(".attribute_img").attr("src",attributes.attribute_image)
        }else{
            $(".attribute_img").attr("src",$("#product-image-model").val());
        }

        $(".price.sale_price").html(site_currency_symbol + parseFloat((mainPrice + additionalPrice)).toFixed(2));
    });

    function addslashes(str) {
        return (str + '').replace(/[\\"']/g, '\\$&').replace(/\u0000/g, '\\0');
    }
</script>
