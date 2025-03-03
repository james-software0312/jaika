@if(!empty(get_static_option('site_gdpr_cookie_enabled')))
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery.ihavecookies.css') }}">
    <script src="{{asset('assets/frontend/js/jquery.ihavecookies.min.js')}}"></script>
    @php $gdpr_cookie_link = str_replace('{url}',url('/'),get_static_option('site_gdpr_cookie_more_info_link')) @endphp
    <script>
        $(document).ready(function () {
            var delayTime = "{{get_static_option('site_gdpr_cookie_delay')}}";
            delayTime = delayTime ? delayTime : 4000;

            $('body').ihavecookies({
                title: "Polityka Prywatności",
                message: "Strona korzysta z plików cookies zgodnie z Polityką Prywatności w celu realizacji usług. Korzystanie z witryny oznacza, że będą one umieszczane w Twoim urządzeniu końcowym. Możesz określić warunki przechowywania lub dostępu do plików cookies w Twojej przeglądarce",
                expires: "{{get_static_option('site_gdpr_cookie_expire')}}",
                link: "{{$gdpr_cookie_link}}",
                delay: delayTime,
                moreInfoLabel: "  ",
                acceptBtnLabel: "Akceptuje",
                advancedBtnLabel: "Odrzuć wszystko"
            });
            $('body').on('click', '#gdpr-cookie-close', function (e) {
                e.preventDefault();
                $(this).parent().remove();
            });
        });
        // advancedBtnLabel: "{{get_static_option('site_gdpr_cookie_decline_button_label')}}"
        // title: "{{get_static_option('site_gdpr_cookie_title')}}",
        // message: "{{get_static_option('site_gdpr_cookie_message')}}",
        // moreInfoLabel: "{{get_static_option('site_gdpr_cookie_more_info_label')}}",
        // acceptBtnLabel: "{{get_static_option('site_gdpr_cookie_accept_button_label')}}",
        </script>
@endif