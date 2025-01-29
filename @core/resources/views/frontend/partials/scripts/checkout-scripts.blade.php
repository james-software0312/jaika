<script>
    
    
    (function($) {
        'use strict';
    
    let site_currency_symbol = '{{ site_currency_symbol() }}';
        $(document).ready(function() {
            
            if ($('input[name=coupon]').val() != undefined && $('input[name=coupon]').val().length) {
                $('.coupon_section').removeClass('d-none');
            }

            if ($('.discount-coupon input[name=coupon]').val().length) {
                submitCoupon('{{ route("frontend.checkout.apply.coupon") }}', $('.discount-coupon input[name=coupon]').val());
            }

            $('.toggle_coupon').on('click', function(e) {
                e.preventDefault();
                if ($('.coupon_section').hasClass('d-none')) {
                    $('.coupon_section').removeClass('d-none').hide().slideDown(500);
                } else {
                    $('.coupon_section').slideUp(500);
                    setTimeout(function() {
                        $('.coupon_section').addClass('d-none');
                        $('input[name=coupon]').val('');
                    }, 600);
                }
            });

            $('#toggle_login').on('click', function(e) {
                e.preventDefault();
                if ($('#login_container').hasClass('d-none')) {
                    $('#login_container').removeClass('d-none').hide().slideDown(500);
                } else {
                    $('#login_container').slideUp(500);
                    setTimeout(function() {
                        $('#login_container').addClass('d-none');
                    }, 600);
                }
            });

            $('#create_account').on('change', function() {
                if ($(this).is(':checked')) {
                    $('#username').parent().fadeIn(500);
                    $('#password').parent().fadeIn(500);
                    $('#confirm_password').parent().fadeIn(500);
                } else {
                    $('#username').parent().fadeOut(500);
                    $('#password').parent().fadeOut(500);
                    $('#confirm_password').parent().fadeOut(500);
                }
            });

            $('#country').on('change', function() {
                let id = $(this).val();
                $.get('{{ route('country.info.ajax') }}', {id: id}).then(function(data) {
                    $('#state').html('<option value="">{{ __('Select State') }}</option>');
                    data.states.map(function(e) {
                        $('#state').append('<option value="' + e.id + '">' + e.name + '</option>');
                    });
                    $('#tax_amount').text(site_currency_symbol + Number(data.tax).toFixed(2));
                    $('#tax_amount').data('tax-percentage', Number(data.tax_percentage));

                    $('.shipping-option-container').html('');

                    let default_shipping_id = undefined;
                    let default_shipping_select = '';
                    let minimum_amount_text = "";

                    if (data.default_shipping.id) {
                        let default_shipping = data.default_shipping;
                        default_shipping_id = default_shipping['id'];

                        // country default options
                        if (default_shipping['available_options']['minimum_order_amount']) {
                            let coupon_text = '';
                            if (default_shipping['available_options']['setting_preset'] == 'min_order_and_coupon') {
                                coupon_text += ' {{ __("And coupon needed.") }}';
                            } else if (default_shipping['available_options']['setting_preset'] == 'min_order_or_coupon') {
                                coupon_text += ' {{ __("Or coupon needed.") }}';
                            }
                            minimum_amount_text = '<small class="min-order-text">{{ __("Minimum order amount: ") }}';
                            minimum_amount_text += default_shipping['available_options']['minimum_order_amount'];
                            minimum_amount_text += coupon_text;
                            minimum_amount_text += '</small>';
                        }

                        default_shipping_select = '<div class="cost-name-amount all-shipping-options">\
                                <span class="same sub">\
                                    <input type="radio" checked class="mr-2 mt-1 d-inline-block shipping-option shipping_option" \
                                            data-minimum-amt="'+default_shipping['available_options']['minimum_order_amount']+'" \
                                            data-amount="'+default_shipping['available_options']['cost']+'" \
                                            data-tax-status="'+default_shipping['available_options']['tax_status']+'"\
                                            name="display_shipping_option" value="'+default_shipping['id']+'">'+default_shipping['name']+'\
                                    '+minimum_amount_text+'\
                                </span>\
                                <span class="same sub-amount">'+site_currency_symbol+default_shipping['available_options']['cost']+'</span>\
                            </div>';
                        $('.shipping-option-container').append(default_shipping_select);
                        $('#shipping_charge').text(site_currency_symbol + default_shipping['available_options']['cost']);
                        $('input[name=selected_shipping_option]').val(default_shipping['id']);
                    }
                    // set shipping options
                    if (data.shipping_options.length) {
                        // country available options
                        data.shipping_options.map(function (shipping_data) {
                            if (shipping_data['available_options']['minimum_order_amount']) {
                                let coupon_text = '';
                                if (shipping_data['available_options']['setting_preset'] == 'min_order_and_coupon') {
                                    coupon_text += ' {{ __("And coupon needed.") }}';
                                } else if (shipping_data['available_options']['setting_preset'] == 'min_order_or_coupon') {
                                    coupon_text += ' {{ __("Or coupon needed.") }}';
                                }

                                minimum_amount_text = '<small class="min-order-text">{{ __("Minimum order amount: ") }}';
                                minimum_amount_text += shipping_data['available_options']['minimum_order_amount'];
                                minimum_amount_text += coupon_text; // shipping_options
                                minimum_amount_text += '</small>';
                            }

                            if (shipping_data['id'] != default_shipping_id) {
                                let option = '<div class="cost-name-amount all-shipping-options">\
                                    <span class="same sub">\
                                        <input type="radio" class="mr-2 mt-1 d-inline-block shipping-option shipping_option" \
                                                data-minimum-amt="'+shipping_data['available_options']['minimum_order_amount']+'" \
                                                data-amount="'+shipping_data['available_options']['cost']+'" \
                                                data-tax-status="'+shipping_data['available_options']['tax_status']+'"\
                                                name="display_shipping_option" value="'+shipping_data['id']+'">'+shipping_data['name']+'\
                                        '+minimum_amount_text+'\
                                    </span>\
                                    <span class="same sub-amount">'+site_currency_symbol+shipping_data['available_options']['cost']+'</span>\
                                </div>';
                                $('.shipping-option-container').append(option);
                            }
                        });
                    } else {
                        $('#shipping_charge').text(site_currency_symbol + Number(data.default_shipping_cost));
                    }
                });
                
                syncPrices();
            });

            $(document).on('change', '.shipping-option', function () {
                let amount = $(this).data('amount');
                $('#shipping_charge').text(site_currency_symbol + amount);
            });

            $(document).on('change', 'input.shipping_option', function (event) {
                let subtotal = Number($('#subtotal').data('amount'));
                let min_order_amt = Number($(this).data('minimumAmt'));
                if (subtotal == min_order_amt) {
                    $('#shipping_charge').text(site_currency_symbol + Number($(this).data('amount')));
                }
                let shipping_option = $(this).val();
                $('input[name=selected_shipping_option]').val(shipping_option);
                validateShipping(this, event);
                syncPrices();
            });

            $('#state').on('change', function() {
                let id = $(this).val();
                
                $.get('{{ route('state.info.ajax') }}', {id: id}).then(function(data) {
                    $('#tax_amount').data('tax-percentage', Number(data.tax_percentage));

                    $('.shipping-option-container').html('');

                    let default_shipping_id = undefined;
                    let default_shipping_select = '';
                    let minimum_amount_text = "";

                    if (data.default_shipping.id) {
                        let default_shipping = data.default_shipping;
                        default_shipping_id = default_shipping['id'];

                        if (default_shipping['available_options']['minimum_order_amount']) {
                            let coupon_text = '';
                            if (default_shipping['available_options']['setting_preset'] == 'min_order_and_coupon') {
                                coupon_text += ' {{ __("And coupon needed.") }}';
                            } else if (default_shipping['available_options']['setting_preset'] == 'min_order_or_coupon') {
                                coupon_text += ' {{ __("Or coupon needed.") }}';
                            }

                            minimum_amount_text = '<small class="min-order-text">{{ __("Minimum order amount: ") }}';
                            minimum_amount_text += default_shipping['available_options']['minimum_order_amount'];
                            minimum_amount_text += coupon_text;
                            minimum_amount_text += '</small>';
                        }

                        default_shipping_select = '<div class="cost-name-amount all-shipping-options">\
                                <span class="same sub">\
                                    <input type="radio" checked class="mr-2 mt-1 d-inline-block shipping-option shipping_option" \
                                            data-minimum-amt="'+default_shipping['available_options']['minimum_order_amount']+'" \
                                            data-amount="'+default_shipping['available_options']['cost']+'" \
                                            data-tax-status="'+default_shipping['available_options']['tax_status']+'"\
                                            name="display_shipping_option" value="'+default_shipping['id']+'">'+default_shipping['name']+'\
                                        '+minimum_amount_text+'\
                                </span>\
                                <span class="same sub-amount">'+site_currency_symbol+default_shipping['available_options']['cost']+'</span>\
                            </div>';
                        $('.shipping-option-container').append(default_shipping_select);
                        $('#shipping_charge').text(site_currency_symbol + default_shipping['available_options']['cost']);
                        $('input[name=selected_shipping_option]').val(default_shipping['id'])
                    }
                    // set shipping options
                    if (data.shipping_options.length) {
                        data.shipping_options.map(function (shipping_data) {
                            if (shipping_data['available_options']['minimum_order_amount']) {
                                let coupon_text = '';
                                if (shipping_data['available_options']['setting_preset'] == 'min_order_and_coupon') {
                                    coupon_text += ' {{ __("And coupon needed.") }}';
                                } else if (shipping_data['available_options']['setting_preset'] == 'min_order_or_coupon') {
                                    coupon_text += ' {{ __("Or coupon needed.") }}';
                                }

                                minimum_amount_text = '<small class="min-order-text">{{ __("Minimum order amount: ") }}';
                                minimum_amount_text += shipping_data['available_options']['minimum_order_amount'];
                                minimum_amount_text += coupon_text;
                                minimum_amount_text += '</small>';
                            }

                            if (shipping_data['id'] != default_shipping_id) {
                                let option = '<div class="cost-name-amount all-shipping-options">\
                                    <span class="same sub">\
                                        <input type="radio" class="mr-2 mt-1 d-inline-block shipping-option shipping_option" \
                                                data-minimum-amt="'+shipping_data['available_options']['minimum_order_amount']+'" \
                                                data-amount="'+shipping_data['available_options']['cost']+'" \
                                                data-tax-status="'+shipping_data['available_options']['tax_status']+'"\
                                                name="display_shipping_option" value="'+shipping_data['id']+'">'+shipping_data['name']+'\
                                        '+minimum_amount_text+'\
                                    </span>\
                                    <span class="same sub-amount">'+site_currency_symbol+shipping_data['available_options']['cost']+'</span>\
                                </div>';
                                $('.shipping-option-container').append(option);
                            }
                        });
                    } else {
                        $('#shipping_charge').text(site_currency_symbol + Number(data.default_shipping_cost));
                    }

                    syncPrices();
                });
            });

            $(document).on('click', '#login_btn', function(e) {
                e.preventDefault();
                var formContainer = $('#login_form_order_page');
                var el = $(this);
                var username = formContainer.find('input[name="username"]').val();
                var password = formContainer.find('input[name="password"]').val();
                var remember = formContainer.find('input[name="remember"]').val();

                el.text('Please Wait');

                $.ajax({
                    type: 'post',
                    url: "{{ route('user.ajax.login') }}",
                    data: {
                        _token: "{{ csrf_token() }}",
                        username: username,
                        password: password,
                        remember: remember,
                    },
                    success: function(data) {
                        if (data.status == 'invalid') {
                            el.text('Login')
                            formContainer.find('.error-wrap').html(
                                '<div class="alert alert-danger">' + data.msg +
                                '</div>');
                        } else {
                            formContainer.find('.error-wrap').html('');
                            el.text('Login Success.. Redirecting ..');
                            location.reload();
                        }
                    },
                    error: function(data) {
                        var response = data.responseJSON.errors;
                        formContainer.find('.error-wrap').html(
                            '<ul class="alert alert-danger"></ul>');
                        $.each(response, function(value, index) {
                            formContainer.find('.error-wrap ul').append('<li>' +
                                index + '</li>');
                        });
                        el.text('Login');
                    }
                });
            });

            $(document).on('click', '.payment-gateway-wrapper > ul > li', function(e) {
                e.preventDefault();
                var gateway = $(this).data('gateway');

                $('.manual_payment_transaction_field').hide();
                $('.bank_payment_transaction_field').hide();
                $('.cheque_payment_transaction_field').hide();

                if (gateway == 'manual_payment') {
                    $('.manual_payment_transaction_field').show();
                } else if (gateway == 'bank_payment') {
                    $('.bank_payment_transaction_field').show();
                } else if (gateway == 'cheque_payment') {
                    $('.cheque_payment_transaction_field').show();
                }

                $(this).addClass('selected').siblings().removeClass('selected');
                $('.payment-gateway-wrapper').find(('input')).val(gateway);
            });

            $('#ship_another_address').on('change', function() {
                if ($('#ship_another_address').is(':checked')) {
                    $('#user_shipping_address_container').slideDown(500);
                } else {
                    $('#user_shipping_address_container').slideUp(500);
                }
            });

            $('.user_shipping_address').on('click', function() {
                $('#shipping_address_id').val($(this).data('id'))
            });

            $('#new_user_shipping_address_form_submit_btn').on('click', function(e) {
                e.preventDefault();
                $('.lds-ellipsis').show();
                $.ajax({
                    url: '{{ route('frontend.add.user.shipping.address') }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        name: $('#user_shipping_name').val(),
                        address: $('#user_shipping_address').val(),
                    },
                    success: function(data) {
                        $('#all_user_shipping_address_container').html(data);
                        $('.lds-ellipsis').hide();
                        $('#user_shipping_name').val('');
                        $('#user_shipping_address').val('');
                    },
                    error: function(err) {
                        toastr.error('{{ __('An error occurred') }}');
                        $('.lds-ellipsis').hide();
                    }
                });
            });

            $('.discount-coupon').on('submit', function(e) {
                e.preventDefault();
                let url = $(this).attr('action');
                let coupon = $(this).find('input[name=coupon]').val();

                $('.lds-ellipsis').show();
                $('#coupon_code').val(coupon); // for shipping code
                $('#discount_summery').hide();
                $('#discount_summery #coupon_amount').html(site_currency_symbol + 0);

                submitCoupon(url, coupon);
            });

            $(document).on('click', 'input[name=display_shipping_option]', function (e) {
                syncPrices();
            });
        });
        
    })(jQuery)

    function syncPrices() {
        // if shipping is taxable, include shipping in calculation
        let country = $('#country').val();
        let state = $('#state').val();
        let coupon = $('.discount-coupon input[name=coupon]').val();
        let selected_shipping_option = $('input[name=display_shipping_option]:checked').val();
        console.log(selected_shipping_option);
        $('.lds-ellipsis').show();

        $.get('{{ route("frontend.checkout.calculate") }}', {
            country: country,
            state: state,
            coupon: coupon,
            selected_shipping_option: selected_shipping_option,
        }).then(function (data) {
            $('.lds-ellipsis').hide();

            if (data.type && data.type == 'danger') {
                return toastr.error(data.msg);
            }

            if (data.subtotal != undefined) {
                $('#subtotal').text(site_currency_symbol + data.subtotal);
            }

            if (data.selected_shipping_cost != undefined) {
                $('#shipping_charge').text(site_currency_symbol + data.selected_shipping_cost);
            }

            if (data.tax_amount != undefined) {
                $('#tax_amount').text(site_currency_symbol + data.tax_amount);
            }

            if (data.coupon_amount != undefined) {
                $('#coupon_amount').text(site_currency_symbol + data.coupon_amount);
            }

            if (data.total != undefined) {
                $('#total_amount').text(site_currency_symbol + data.total);
            }
        }).catch(function (err) {
            $('.lds-ellipsis').hide();

            if (err.responseJSON.errors != undefined) {
                Object.keys(err.responseJSON.errors).forEach(function(i) {
                    if (Array.isArray(err.responseJSON.errors[i])) {
                        toastr.error(err.responseJSON.errors[i][0]);
                    }
                });
            }
        });
    }

    function submitCoupon(url, coupon) {
        $.ajax({
            url: url,
            type: 'GET',
            data: {
                coupon: coupon,
            },
            success: function(data) {
                $('.lds-ellipsis').hide();
                if (data.type == 'success') {
                    toastr.success('{{ __('Coupon applied') }}');
                    $('#coupon_amount').text(site_currency_symbol + data.coupon_amount);
                    $('#coupon_code').val(coupon);
                    $('#discount_summery').show();
                } else {
                    toastr.error('{{ __('Coupon invalid') }}');
                }
                calculateTotal();
            },
            error: function(err) {
                $('.lds-ellipsis').hide();
                toastr.error('{{ __('Something went wrong') }}');
            }
        });
    }

    function calculateTotal() {
        let subtotal = Number($('#subtotal').text().trim().replace(site_currency_symbol, ''));
        let shipping_charge = Number($('#shipping_charge').text().trim().replace(site_currency_symbol, ''));
        let tax_amount = Number($('#tax_amount').text().trim().replace(site_currency_symbol, ''));
        let coupon_amount = Number($('#coupon_amount').text().trim().replace(site_currency_symbol, '').replace('(-)', ''));
        let total_amount = Number($('#total_amount').text().trim().replace(site_currency_symbol, ''));

        total_amount = subtotal + shipping_charge + tax_amount - coupon_amount;

        $('#total_amount').text(site_currency_symbol + total_amount.toFixed(2));
        $('input[name=tax_amount]').val(tax_amount);
    }

    function validateShipping(context) {
        let data = $(context).data();
        let subtotal = Number($('#subtotal').text().trim().replace(site_currency_symbol, ''));
        
        if (subtotal < data['minimumAmt']) {
            toastr.error('{{ get_static_option("shipping_option_invalid_msg") }}');
        }
    }

    function capitalize(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }

    function submitCheckout() {
        let data = {
            name: $('input[name=name]').val(),
            email: $('input[name=email]').val(),
            phone: $('input[name=phone]').val(),
            address: $('input[name=address]').val(),
            city: $('input[name=city]').val(),
            zipcode: $('input[name=zipcode]').val(),
            order_note: $('textarea[name=order_note]').val()
        }
    }
</script>
