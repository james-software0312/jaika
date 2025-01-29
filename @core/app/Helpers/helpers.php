<?php

use App\CaseCategory;
use App\Helpers\LanguageHelper;
use App\HowItWork;
use App\Language;
use App\StaticOption;
use App\MediaUpload;
use App\Menu;
use App\Page;
use App\Cases;
use App\Attorney;
use App\Blog;
use App\Campaign\CampaignProduct;
use App\Campaign\CampaignSoldProduct;
use App\PaymentGateway\PaymentGatewaySetup;
use App\PracticeArea;
use App\Product\Product;
use App\Product\ProductAttribute;
use App\Product\ProductCategory;
use App\Product\ProductSubCategory;
use App\Shipping\ShippingMethod;
use App\Shipping\UserShippingAddress;
use App\Shipping\ZoneRegion;
use Illuminate\Support\Str;
use Mews\Purifier\Facades\Purifier;




function getSingleCategoryMarkup($cat_id,$link = false){
    if(empty($cat_id)){
        return '';
    }
    $cat_details = ProductCategory::where('id', $cat_id)->first();
    if(!is_null($cat_details)){

        $link_markup = '<a href="'.route('frontend.products.category', $cat_details->id).'">'.$cat_details->title.'</a>';
        return $link ? $link_markup : $cat_details->title;
    }
    return '';
}

function getSingleSubCategoryMarkup($cat_id,$link = false){
    if(empty($cat_id)){
        return '';
    }
    $cat_details = ProductSubCategory::where('id', $cat_id)->first();
    if(!is_null($cat_details)){

        $link_markup = '<a href="'.route('frontend.products.subcategory', $cat_details->id).'">'.$cat_details->title.'</a>';
        return $link ? $link_markup : $cat_details->title;
    }
    return '';
}


function active_menu($url)
{
    return $url == request()->path() ? 'active' : '';
}
function active_menu_frontend($url)
{
    return $url == request()->path() ? 'current-menu-item' : '';
}
function check_image_extension($file)
{
    $extension = strtolower($file->getClientOriginalExtension());
    if ($extension != 'jpg' && $extension != 'jpeg' && $extension != 'png' && $extension = 'gif') {
        return false;
    }
    return true;
}
function render_image_markup_by_attachment_id($id, $class = null, $size = 'full')
{
    if (empty($id)) return '';
    $output = '';

    $image_details = get_attachment_image_by_id($id, $size);
    if (!empty($image_details)) {
        $class_list = !empty($class) ? 'class="' . $class . '"' : '';
        $output = '<img src="' . $image_details['img_url'] . '" ' . $class_list . ' alt="' . $image_details['img_alt'] . '"/>';
    }
    return $output;
}
function get_image_url($id, $size = 'full') {
    if (empty($id)) return '';
    return get_attachment_image_by_id($id, $size)['img_url'] ?? '';
}

function formatBytes($size, $precision = 2)
{
    $base = log($size, 1024);
    $suffixes = array('', 'KB', 'MB', 'GB', 'TB');

    return round(pow(1024, $base - floor($base)), $precision) . ' ' . $suffixes[floor($base)];
}
function sendEmail($to, $name, $subject, $message, $from = '')
{
    $template = get_static_option('site_global_email_template');
    $from = get_static_option('site_global_email');

    $headers = "From: " . $from . " \r\n";
    $headers .= "Reply-To: <$from> \r\n";
    $headers .= "Return-Path: " . ($from) . "\r\n";;
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $headers .= "X-Priority: 2\nX-MSmail-Priority: high";;
    $headers .= "X-Mailer: PHP" . phpversion() . "\r\n";

    $mm = str_replace("@username", $name, $template);
    $message = str_replace("@message", $message, $mm);
    $message = str_replace("@company", get_static_option('site_title'), $message);

    if (mail($to, $subject, $message, $headers)) {
        return true;
    }
}
function sendPlanEmail($to, $name, $subject, $message, $from)
{

    $headers = "From: " . $from . " \r\n";
    $headers .= "Reply-To: <$from> \r\n";
    $headers .= "Return-Path: " . ($from) . "\r\n";;
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $headers .= "X-Priority: 2\nX-MSmail-Priority: high";;
    $headers .= "X-Mailer: PHP" . phpversion() . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        return true;
    }
}


function set_static_option($key, $value)
{
    if (!StaticOption::where('option_name', $key)->first()) {
        StaticOption::create([
            'option_name' => $key,
            'option_value' => $value
        ]);
        return true;
    }
    return false;
}
function get_static_option($key,$default = null)
{
    global $option_name;
    $option_name = $key;
    $value = \Illuminate\Support\Facades\Cache::remember($option_name, 86400, function () {
        global $option_name;
        return StaticOption::where('option_name', $option_name)->first();
    });

    return !empty($value) ? $value->option_value : $default;
}

function get_default_language()
{
    $defaultLang = Language::where('default', 1)->first();
    return $defaultLang->slug;
}
function update_static_option($key, $value)
{
    if (!StaticOption::where('option_name', $key)->first()) {
        StaticOption::create([
            'option_name' => $key,
            'option_value' => $value
        ]);
        return true;
    } else {
        StaticOption::where('option_name', $key)->update([
            'option_name' => $key,
            'option_value' => $value
        ]);
        \Illuminate\Support\Facades\Cache::forget($key);
        return true;
    }
    return false;
}
function delete_static_option($key)
{
    if (!StaticOption::where('option_name', $key)->first()) {
        StaticOption::where('option_name', $key)->delete();
        return true;
    }
    return false;
}

function single_post_share($url, $title, $img_url)
{
    $output = '';
    //get current page url
    $encoded_url = urlencode($url);
    //get current page title
    $post_title = str_replace(' ', '%20', $title);

    $site_title = get_static_option('site_title');

    //all social share link generate
    $facebook_share_link = "https://www.facebook.com/sharer/sharer.php?u=$encoded_url";
    $twitter_share_link = "https://twitter.com/intent/tweet?text=$post_title&amp;url=$encoded_url&amp;via=$site_title";
    $linkedin_share_link = "https://www.linkedin.com/shareArticle?mini=true&url=$encoded_url&amp;title=$post_title";
    $pinterest_share_link = "https://pinterest.com/pin/create/button/?url=$encoded_url&amp;media=$img_url&amp;description=$post_title";
    $whatsapp_share_link = "https://api.whatsapp.com/send?text=*$post_title $encoded_url";
    $reddit_share_link = "https://reddit.com/submit?url=$encoded_url&title=$post_title";

    $output .= '<li class="list-item"><a target="_blank" href="' . $facebook_share_link . '"><i class="lab la-facebook-f icon"></i></a></li>';
    $output .= '<li class="list-item"><a target="_blank" href="' . $twitter_share_link . '"><i class="lab la-twitter icon"></i></a></li>';
    $output .= '<li class="list-item"><a target="_blank" href="' . $linkedin_share_link . '"><i class="lab la-linkedin-in icon"></i></a></li>';
    $output .= '<li class="list-item"><a target="_blank" href="' . $pinterest_share_link . '"><i class="lab la-pinterest-p icon"></i></a></li>';
    $output .= '<li class="list-item"><a target="_blank" href="' . $whatsapp_share_link . '"><i class="lab la-whatsapp icon"></i></a></li>';
    $output .= '<li class="list-item"><a target="_blank" href="' . $reddit_share_link . '"><i class="lab la-reddit icon"></i></a></li>';

    return $output;
}


function load_google_fonts()
{
    // google fonts link
    $fonts_url = 'https://fonts.googleapis.com/css2?family=';
    // body fonts
    $body_font_family = get_static_option('body_font_family') ?? 'Open Sans';
    $heading_font_family = get_static_option('heading_font_family') ??  'Montserrat';

    $load_body_font_family = str_replace(' ', '+', $body_font_family);
    $body_font_variant = get_static_option('body_font_variant');
    $body_font_variant_selected_arr = !empty($body_font_variant) ? unserialize($body_font_variant, ['class' => false]) : ['400'];
    $load_body_font_variant = is_array($body_font_variant_selected_arr) ? implode(';', $body_font_variant_selected_arr) : '400';

    $body_italic = '';
    preg_match('/1,/', $load_body_font_variant, $match);
    if (count($match) > 0) {
        $body_italic =  'ital,';
    } else {
        $load_body_font_variant = str_replace('0,', '', $load_body_font_variant);
    }

    $fonts_url .= $load_body_font_family . ':' . $body_italic . 'wght@' . $load_body_font_variant;
    $load_heading_font_family = str_replace(' ', '+', $heading_font_family);
    $heading_font_variant = get_static_option('heading_font_variant');
    $heading_font_variant_selected_arr = !empty($heading_font_variant) ? unserialize($heading_font_variant, ['class' => false]) : ['400'];
    $load_heading_font_variant = is_array($heading_font_variant_selected_arr) ? implode(';', $heading_font_variant_selected_arr) : '400';

    if (!empty(get_static_option('heading_font')) && $heading_font_family != $body_font_family) {

        $heading_italic = '';
        preg_match('/1,/', $load_heading_font_variant, $match);
        if (count($match) > 0) {
            $heading_italic =  'ital,';
        } else {
            $load_heading_font_variant = str_replace('0,', '', $load_heading_font_variant);
        }

        $fonts_url .= '&family=' . $load_heading_font_family . ':' . $heading_italic . 'wght@' . $load_heading_font_variant;
    }

    return sprintf('<link rel="preconnect" href="https://fonts.gstatic.com"> <link href="%1$s&display=swap" rel="stylesheet">', $fonts_url);
}

function render_background_image_markup_by_attachment_id($id, $size = 'full')
{
    if (empty($id)) return '';
    $output = '';

    $image_details = get_attachment_image_by_id($id, $size);
    if (!empty($image_details)) {
        $output = 'style="background-image: url(' . $image_details['img_url'] . ');"';
    }
    return $output;
}
function render_favicon_by_id($id)
{
    $site_favicon = get_attachment_image_by_id($id, "full", false);
    $output = '';
    if (!empty($site_favicon)) {
        $output .= '<link rel="icon" href="' . $site_favicon['img_url'] . '" type="image/png">';
    }
    return $output;
}
function get_attachment_image_by_id($id, $size = null, $default = false)
{
    //all mediaupload= '';
    $image_details = \Illuminate\Support\Facades\Cache::remember('media_image_details_'.$id,500,function () use ($id){
        return MediaUpload::find($id);
    });
    $return_val = [];
    $image_url = '';

    if (file_exists('assets/uploads/media-uploader/' . optional($image_details)->path)) {
        $image_url = asset('assets/uploads/media-uploader/' . optional($image_details)->path);
    }

    if (!empty($id) && !empty($image_details)) {
        switch ($size) {
            case "large":
                if (file_exists('assets/uploads/media-uploader/large-' . $image_details->path)) {
                    $image_url = asset('assets/uploads/media-uploader/large-' . $image_details->path);
                }
                break;
            case "grid":
                if (file_exists('assets/uploads/media-uploader/grid-' . $image_details->path)) {
                    $image_url = asset('assets/uploads/media-uploader/grid-' . $image_details->path);
                }
                break;
            case "thumb":
                if (file_exists('assets/uploads/media-uploader/thumb-' . $image_details->path)) {
                    $image_url = asset('assets/uploads/media-uploader/thumb-' . $image_details->path);
                }
                break;
            case "product":
                if (file_exists('assets/uploads/media-uploader/product-' . $image_details->path)) {
                    $image_url = asset('assets/uploads/media-uploader/product-' . $image_details->path);
                }
                break;
            default:
                if (file_exists('assets/uploads/media-uploader/' . $image_details->path)) {
                    $image_url = asset('assets/uploads/media-uploader/' . $image_details->path);
                }
                break;
        }
    }

    if (!empty($image_details)) {
        $return_val['image_id'] = $image_details->id;
        $return_val['path'] = $image_details->path;
        $return_val['img_url'] = $image_url;
        $return_val['img_alt'] = $image_details->alt;
    }
    elseif (empty($image_details) && $default) {
        $return_val['img_url'] = asset('assets/uploads/no-image.png');
    }

    return $return_val;
}

function get_user_lang()
{
    return   $lang = LanguageHelper::user_lang_slug();;
}

function get_user_lang_direction()
{
    $default = \App\Language::where('default', 1)->first();
    $user_direction = \App\Language::where('slug', session()->get('lang'))->first();
    return !empty(session()->get('lang')) ? $user_direction->direction : $default->direction;
}

function filter_static_option_value(string $index, array $array = [], $default = '')
{
    return $array[$index] ?? $default;
}
function render_og_meta_image_by_attachment_id($id, $size = 'full')
{
    if (empty($id)) return '';
    $output = '';
    $image_details = get_attachment_image_by_id($id, $size);
    if (!empty($image_details)) {
        $output = ' <meta property="og:image" content="' . $image_details['img_url'] . '" />';
    }
    return $output;
}


function setEnvValue(array $values)
{

    $envFile = app()->environmentFilePath();
    $str = file_get_contents($envFile);

    if (count($values) > 0) {
        foreach ($values as $envKey => $envValue) {

            $str .= "\n"; // In case the searched variable is in the last line without \n
            $keyPosition = strpos($str, "{$envKey}=");
            $endOfLinePosition = strpos($str, "\n", $keyPosition);
            $oldLine = substr($str, $keyPosition, $endOfLinePosition - $keyPosition);

            // If key does not exist, add it
            if (!$keyPosition || !$endOfLinePosition || !$oldLine) {
                $str .= "{$envKey}={$envValue}\n";
            } else {
                $str = str_replace($oldLine, "{$envKey}={$envValue}", $str);
            }
        }
    }

    $str = substr($str, 0, -1);
    if (!file_put_contents($envFile, $str)) return false;
    return true;
}
function get_language_by_slug($slug)
{
    $lang_details = \App\Language::where('slug', $slug)->first();
    return !empty($lang_details) ? $lang_details->name : '';
}
function site_currency_symbol($text = false)
{
    $all_currency = [
        'USD' => '$', 'EUR' => '€', 'INR' => '₹', 'IDR' => 'Rp', 'AUD' => 'A$', 'SGD' => 'S$', 'JPY' => '¥', 'GBP' => '£', 'MYR' => 'RM', 'PHP' => '₱', 'THB' => '฿', 'KRW' => '₩', 'NGN' => '₦', 'GHS' => 'GH₵', 'BRL' => 'R$',
        'BIF' => 'FBu', 'CAD' => 'C$', 'CDF' => 'FC', 'CVE' => 'Esc', 'GHP' => 'GH₵', 'GMD' => 'D', 'GNF' => 'FG', 'KES' => 'K', 'LRD' => 'L$', 'MWK' => 'MK', 'MZN' => 'MT', 'RWF' => 'R₣', 'SLL' => 'Le', 'STD' => 'Db', 'TZS' => 'TSh', 'UGX' => 'USh', 'XAF' => 'FCFA', 'XOF' => 'CFA', 'ZMK' => 'ZK', 'ZMW' => 'ZK', 'ZWD' => 'Z$',
        'AED' => 'د.إ', 'AFN' => '؋', 'ALL' => 'L', 'AMD' => '֏', 'ANG' => 'NAf', 'AOA' => 'Kz', 'ARS' => '$', 'AWG' => 'ƒ', 'AZN' => '₼', 'BAM' => 'KM', 'BBD' => 'Bds$', 'BDT' => '৳', 'BGN' => 'Лв', 'BMD' => '$', 'BND' => 'B$', 'BOB' => 'Bs', 'BSD' => 'B$', 'BWP' => 'P', 'BZD' => '$',
        'CHF' => 'CHf', 'CNY' => '¥', 'CLP' => '$', 'COP' => '$', 'CRC' => '₡', 'CZK' => 'Kč', 'DJF' => 'Fdj', 'DKK' => 'Kr', 'DOP' => 'RD$', 'DZD' => 'دج', 'EGP' => 'E£', 'ETB' => 'ብር', 'FJD' => 'FJ$', 'FKP' => '£', 'GEL' => 'ლ', 'GIP' => '£', 'GTQ' => 'Q',
        'GYD' => 'G$', 'HKD' => 'HK$', 'HNL' => 'L', 'HRK' => 'kn', 'HTG' => 'G', 'HUF' => 'Ft', 'ILS' => '₪', 'ISK' => 'kr', 'JMD' => '$', 'KGS' => 'Лв', 'KHR' => '៛', 'KMF' => 'CF', 'KYD' => '$', 'KZT' => '₸', 'LAK' => '₭', 'LBP' => 'ل.ل.', 'LKR' => 'ரூ', 'LSL' => 'L',
        'MAD' => 'MAD', 'MDL' => 'L', 'MGA' => 'Ar', 'MKD' => 'Ден', 'MMK' => 'K', 'MNT' => '₮', 'MOP' => 'MOP$', 'MRO' => 'MRU', 'MUR' => '₨', 'MVR' => 'Rf', 'MXN' => 'Mex$', 'NAD' => 'N$', 'NIO' => 'C$', 'NOK' => 'kr', 'NPR' => 'रू', 'NZD' => '$', 'PAB' => 'B/.', 'PEN' => 'S/', 'PGK' => 'K',
        'PKR' => '₨', 'PLN' => 'zł', 'PYG' => '₲', 'QAR' => 'QR', 'RON' => 'lei', 'RSD' => 'din', 'RUB' => '₽', 'SAR' => 'SR', 'SBD' => 'Si$', 'SCR' => 'SR', 'SEK' => 'kr', 'SHP' => '£', 'SOS' => 'Sh.so.', 'SRD' => '$', 'SZL' => 'E', 'TJS' => 'ЅM',
        'TRY' => '₺', 'TTD' => 'TT$', 'TWD' => 'NT$', 'UAH' => '₴', 'UYU' => '$U', 'UZS' => 'so\'m', 'VND' => '₫', 'VUV' => 'VT', 'WST' => 'WS$', 'XCD' => '$', 'XPF' => '₣', 'YER' => '﷼', 'ZAR' => 'R'
    ];

    $symbol = '$';
    $global_currency = get_static_option('site_global_currency');
    foreach ($all_currency as $currency => $sym) {
        if ($global_currency == $currency) {
            $symbol = $text ? $currency : $sym;
            break;
        }
    }
    return $symbol;
}
function amount_with_currency_symbol($amount, $text = false)
{
    $symbol = site_currency_symbol($text);
    $position = get_static_option('site_currency_symbol_position');

    if (empty($amount)) {
        $return_val = $symbol . $amount;
        if ($position == 'right') {
            $return_val = $amount . $symbol;
        }
    }

    $amount = $amount;

    $return_val = $symbol . $amount;

    if ($position == 'right') {
        $return_val = $amount . $symbol;
    }

    return $return_val;
}

function float_amount_with_currency_symbol($amount, $text = false)
{
    $symbol = site_currency_symbol($text);
    $position = get_static_option('site_currency_symbol_position');

    if (empty($amount)) {
        $return_val = $symbol . $amount;
        if ($position == 'right') {
            $return_val = $amount . $symbol;
        }
    }

    $amount = number_format((float)$amount, 2, '.', '');

    $return_val = $symbol . $amount;

    if ($position == 'right') {
        $return_val = $amount . $symbol;
    }

    return $return_val;
}

function get_footer_copyright_text()
{
    $footer_copyright_text = get_static_option('site_footer_copyright');
    $footer_copyright_text = str_replace(array('{copy}', '{year}'), array('&copy;', date('Y')), $footer_copyright_text);
    return $footer_copyright_text;
}

function get_country_field($name, $id, $class)
{
    return '<select style="height:50px;" name="' . $name . '" id="' . $id . '" class="' . $class . '"><option value="">' . __('Select Country') . '</option><option value="Afghanistan" >Afghanistan</option><option value="Albania" >Albania</option><option value="Algeria" >Algeria</option><option value="American Samoa" >American Samoa</option><option value="Andorra" >Andorra</option><option value="Angola" >Angola</option><option value="Anguilla" >Anguilla</option><option value="Antarctica" >Antarctica</option><option value="Antigua and Barbuda" >Antigua and Barbuda</option><option value="Argentina" >Argentina</option><option value="Armenia" >Armenia</option><option value="Aruba" >Aruba</option><option value="Australia" >Australia</option><option value="Austria" >Austria</option><option value="Azerbaijan" >Azerbaijan</option><option value="Bahamas" >Bahamas</option><option value="Bahrain" >Bahrain</option><option value="Bangladesh" >Bangladesh</option><option value="Barbados" >Barbados</option><option value="Belarus" >Belarus</option><option value="Belgium" >Belgium</option><option value="Belize" >Belize</option><option value="Benin" >Benin</option><option value="Bermuda" >Bermuda</option><option value="Bhutan" >Bhutan</option><option value="Bolivia" >Bolivia</option><option value="Bosnia and Herzegovina" >Bosnia and Herzegovina</option><option value="Botswana" >Botswana</option><option value="Bouvet Island" >Bouvet Island</option><option value="Brazil" >Brazil</option><option value="British Indian Ocean Territory" >British Indian Ocean Territory</option><option value="Brunei Darussalam" >Brunei Darussalam</option><option value="Bulgaria" >Bulgaria</option><option value="Burkina Faso" >Burkina Faso</option><option value="Burundi" >Burundi</option><option value="Cambodia" >Cambodia</option><option value="Cameroon" >Cameroon</option><option value="Canada" >Canada</option><option value="Cape Verde" >Cape Verde</option><option value="Cayman Islands" >Cayman Islands</option><option value="Central African Republic" >Central African Republic</option><option value="Chad" >Chad</option><option value="Chile" >Chile</option><option value="China" >China</option><option value="Christmas Island" >Christmas Island</option><option value="Cocos (Keeling) Islands" >Cocos (Keeling) Islands</option><option value="Colombia" >Colombia</option><option value="Comoros" >Comoros</option><option value="Cook Islands" >Cook Islands</option><option value="Costa Rica" >Costa Rica</option><option value="Croatia (Hrvatska)" >Croatia (Hrvatska)</option><option value="Cuba" >Cuba</option><option value="Cyprus" >Cyprus</option><option value="Czech Republic" >Czech Republic</option><option value="Democratic Republic of the Congo" >Democratic Republic of the Congo</option><option value="Denmark" >Denmark</option><option value="Djibouti" >Djibouti</option><option value="Dominica" >Dominica</option><option value="Dominican Republic" >Dominican Republic</option><option value="East Timor" >East Timor</option><option value="Ecuador" >Ecuador</option><option value="Egypt" >Egypt</option><option value="El Salvador" >El Salvador</option><option value="Equatorial Guinea" >Equatorial Guinea</option><option value="Eritrea" >Eritrea</option><option value="Estonia" >Estonia</option><option value="Ethiopia" >Ethiopia</option><option value="Falkland Islands (Malvinas)" >Falkland Islands (Malvinas)</option><option value="Faroe Islands" >Faroe Islands</option><option value="Fiji" >Fiji</option><option value="Finland" >Finland</option><option value="France" >France</option><option value="France, Metropolitan" >France, Metropolitan</option><option value="French Guiana" >French Guiana</option><option value="French Polynesia" >French Polynesia</option><option value="French Southern Territories" >French Southern Territories</option><option value="Gabon" >Gabon</option><option value="Gambia" >Gambia</option><option value="Georgia" >Georgia</option><option value="Germany" >Germany</option><option value="Ghana" >Ghana</option><option value="Gibraltar" >Gibraltar</option><option value="Greece" >Greece</option><option value="Greenland" >Greenland</option><option value="Grenada" >Grenada</option><option value="Guadeloupe" >Guadeloupe</option><option value="Guam" >Guam</option><option value="Guatemala" >Guatemala</option><option value="Guernsey" >Guernsey</option><option value="Guinea" >Guinea</option><option value="Guinea-Bissau" >Guinea-Bissau</option><option value="Guyana" >Guyana</option><option value="Haiti" >Haiti</option><option value="Heard and Mc Donald Islands" >Heard and Mc Donald Islands</option><option value="Honduras" >Honduras</option><option value="Hong Kong" >Hong Kong</option><option value="Hungary" >Hungary</option><option value="Iceland" >Iceland</option><option value="India" >India</option><option value="Indonesia" >Indonesia</option><option value="Iran (Islamic Republic of)" >Iran (Islamic Republic of)</option><option value="Iraq" >Iraq</option><option value="Ireland" >Ireland</option><option value="Isle of Man" >Isle of Man</option><option value="Israel" >Israel</option><option value="Italy" >Italy</option><option value="Ivory Coast" >Ivory Coast</option><option value="Jamaica" >Jamaica</option><option value="Japan" >Japan</option><option value="Jersey" >Jersey</option><option value="Jordan" >Jordan</option><option value="Kazakhstan" >Kazakhstan</option><option value="Kenya" >Kenya</option><option value="Kiribati" >Kiribati</option><option value="Korea, Democratic People\'s Republic of" >Korea, Democratic People\'s Republic of</option><option value="Korea, Republic of" >Korea, Republic of</option><option value="Kosovo" >Kosovo</option><option value="Kuwait" >Kuwait</option><option value="Kyrgyzstan" >Kyrgyzstan</option><option value="Lao People\'s Democratic Republic" >Lao People\'s Democratic Republic</option><option value="Latvia" >Latvia</option><option value="Lebanon" >Lebanon</option><option value="Lesotho" >Lesotho</option><option value="Liberia" >Liberia</option><option value="Libyan Arab Jamahiriya" >Libyan Arab Jamahiriya</option><option value="Liechtenstein" >Liechtenstein</option><option value="Lithuania" >Lithuania</option><option value="Luxembourg" >Luxembourg</option><option value="Macau" >Macau</option><option value="Madagascar" >Madagascar</option><option value="Malawi" >Malawi</option><option value="Malaysia" >Malaysia</option><option value="Maldives" >Maldives</option><option value="Mali" >Mali</option><option value="Malta" >Malta</option><option value="Marshall Islands" >Marshall Islands</option><option value="Martinique" >Martinique</option><option value="Mauritania" >Mauritania</option><option value="Mauritius" >Mauritius</option><option value="Mayotte" >Mayotte</option><option value="Mexico" >Mexico</option><option value="Micronesia, Federated States of" >Micronesia, Federated States of</option><option value="Moldova, Republic of" >Moldova, Republic of</option><option value="Monaco" >Monaco</option><option value="Mongolia" >Mongolia</option><option value="Montenegro" >Montenegro</option><option value="Montserrat" >Montserrat</option><option value="Morocco" >Morocco</option><option value="Mozambique" >Mozambique</option><option value="Myanmar" >Myanmar</option><option value="Namibia" >Namibia</option><option value="Nauru" >Nauru</option><option value="Nepal" >Nepal</option><option value="Netherlands" >Netherlands</option><option value="Netherlands Antilles" >Netherlands Antilles</option><option value="New Caledonia" >New Caledonia</option><option value="New Zealand" >New Zealand</option><option value="Nicaragua" >Nicaragua</option><option value="Niger" >Niger</option><option value="Nigeria" >Nigeria</option><option value="Niue" >Niue</option><option value="Norfolk Island" >Norfolk Island</option><option value="North Macedonia" >North Macedonia</option><option value="Northern Mariana Islands" >Northern Mariana Islands</option><option value="Norway" >Norway</option><option value="Oman" >Oman</option><option value="Pakistan" >Pakistan</option><option value="Palau" >Palau</option><option value="Palestine" >Palestine</option><option value="Panama" >Panama</option><option value="Papua New Guinea" >Papua New Guinea</option><option value="Paraguay" >Paraguay</option><option value="Peru" >Peru</option><option value="Philippines" >Philippines</option><option value="Pitcairn" >Pitcairn</option><option value="Poland" >Poland</option><option value="Portugal" >Portugal</option><option value="Puerto Rico" >Puerto Rico</option><option value="Qatar" >Qatar</option><option value="Republic of Congo" >Republic of Congo</option><option value="Reunion" >Reunion</option><option value="Romania" >Romania</option><option value="Russian Federation" >Russian Federation</option><option value="Rwanda" >Rwanda</option><option value="Saint Kitts and Nevis" >Saint Kitts and Nevis</option><option value="Saint Lucia" >Saint Lucia</option><option value="Saint Vincent and the Grenadines" >Saint Vincent and the Grenadines</option><option value="Samoa" >Samoa</option><option value="San Marino" >San Marino</option><option value="Sao Tome and Principe" >Sao Tome and Principe</option><option value="Saudi Arabia" >Saudi Arabia</option><option value="Senegal" >Senegal</option><option value="Serbia" >Serbia</option><option value="Seychelles" >Seychelles</option><option value="Sierra Leone" >Sierra Leone</option><option value="Singapore" >Singapore</option><option value="Slovakia" >Slovakia</option><option value="Slovenia" >Slovenia</option><option value="Solomon Islands" >Solomon Islands</option><option value="Somalia" >Somalia</option><option value="South Africa" >South Africa</option><option value="South Georgia South Sandwich Islands" >South Georgia South Sandwich Islands</option><option value="South Sudan" >South Sudan</option><option value="Spain" >Spain</option><option value="Sri Lanka" >Sri Lanka</option><option value="St. Helena" >St. Helena</option><option value="St. Pierre and Miquelon" >St. Pierre and Miquelon</option><option value="Sudan" >Sudan</option><option value="Suriname" >Suriname</option><option value="Svalbard and Jan Mayen Islands" >Svalbard and Jan Mayen Islands</option><option value="Swaziland" >Swaziland</option><option value="Sweden" >Sweden</option><option value="Switzerland" >Switzerland</option><option value="Syrian Arab Republic" >Syrian Arab Republic</option><option value="Taiwan" >Taiwan</option><option value="Tajikistan" >Tajikistan</option><option value="Tanzania, United Republic of" >Tanzania, United Republic of</option><option value="Thailand" >Thailand</option><option value="Togo" >Togo</option><option value="Tokelau" >Tokelau</option><option value="Tonga" >Tonga</option><option value="Trinidad and Tobago" >Trinidad and Tobago</option><option value="Tunisia" >Tunisia</option><option value="Turkey" >Turkey</option><option value="Turkmenistan" >Turkmenistan</option><option value="Turks and Caicos Islands" >Turks and Caicos Islands</option><option value="Tuvalu" >Tuvalu</option><option value="Uganda" >Uganda</option><option value="Ukraine" >Ukraine</option><option value="United Arab Emirates" >United Arab Emirates</option><option value="United Kingdom" >United Kingdom</option><option value="United States" >United States</option><option value="United States minor outlying islands" >United States minor outlying islands</option><option value="Uruguay" >Uruguay</option><option value="Uzbekistan" >Uzbekistan</option><option value="Vanuatu" >Vanuatu</option><option value="Vatican City State" >Vatican City State</option><option value="Venezuela" >Venezuela</option><option value="Vietnam" >Vietnam</option><option value="Virgin Islands (British)" >Virgin Islands (British)</option><option value="Virgin Islands (U.S.)" >Virgin Islands (U.S.)</option><option value="Wallis and Futuna Islands" >Wallis and Futuna Islands</option><option value="Western Sahara" >Western Sahara</option><option value="Yemen" >Yemen</option><option value="Zambia" >Zambia</option><option value="Zimbabwe" >Zimbabwe</option></select>';
}

function google_captcha_check($token)
{
    $captha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $captha_url);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query(array('secret' => get_static_option('site_google_captcha_v3_secret_key'), 'response' => $token)));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);

    $response = curl_exec($curl);
    curl_close($curl);
    $result = json_decode($response, true);
    return $result;
}
function get_field_by_type($type, $name, $placeholder, $options = [], $requried = null, $mimes = null)
{
    $markup = '';
    $required_markup_html = 'required="required"';
    $name = htmlspecialchars(strip_tags($name));
    $type = htmlspecialchars(strip_tags($type));
    $placeholder = htmlspecialchars(strip_tags($placeholder));

    switch ($type) {
        case ('email'):
            $required_markup = !empty($requried) ? $required_markup_html : '';
            $markup = ' <div class="form-group"> <input type="email" id="' . $name . '" name="' . $name . '" class="form-control" placeholder="' . __($placeholder) . '" ' . $required_markup . '></div>';
            break;
        case ('tel'):
            $required_markup = !empty($requried) ? $required_markup_html : '';
            $markup = ' <div class="form-group"> <input type="tel" id="' . $name . '" name="' . $name . '" class="form-control" placeholder="' . __($placeholder) . '" ' . $required_markup . '></div>';
            break;
        case ('date'):
            $required_markup = !empty($requried) ? $required_markup_html : '';
            $markup = ' <div class="form-group"> <input type="date" id="' . $name . '" name="' . $name . '" class="form-control" placeholder="' . __($placeholder) . '" ' . $required_markup . '></div>';
            break;
        case ('url'):
            $required_markup = !empty($requried) ? $required_markup_html : '';
            $markup = ' <div class="form-group"> <input type="url" id="' . $name . '" name="' . $name . '" class="form-control" placeholder="' . __($placeholder) . '" ' . $required_markup . '></div>';
            break;
        case ('textarea'):
            $required_markup = !empty($requried) ? $required_markup_html : '';
            $markup = ' <div class="form-group textarea"><textarea name="' . $name . '" id="' . $name . '" cols="30" rows="10" class="form-control" placeholder="' . __($placeholder) . '" ' . $required_markup . '></textarea></div>';
            break;
        case ('file'):
            $required_markup = !empty($requried) ? $required_markup_html : '';
            $mimes_type_markup = str_replace('mimes:', __('Accept File Type:') . ' ', $mimes);
            $markup = ' <div class="form-group file"> <label for="' . $name . '">' . __($placeholder) . '</label> <input type="file" id="' . $name . '" name="' . $name . '" ' . $required_markup . ' class="form-control" > <span class="help-info">' . $mimes_type_markup . '</span></div>';
            break;
        case ('checkbox'):
            $required_markup = !empty($requried) ? $required_markup_html : '';
            $markup = ' <div class="form-group checkbox">  <input type="checkbox" id="' . $name . '" name="' . $name . '" class="form-control" ' . $required_markup . '> <label for="' . $name . '">' . __($placeholder) . '</label></div>';
            break;
        case ('select'):
            $option_markup = '';
            $required_markup = !empty($requried) ? $required_markup_html : '';
            foreach ($options as $opt) {
                $option_markup .= '<option value="' . Str::slug(htmlspecialchars(strip_tags($opt))) . '">' .  htmlspecialchars(strip_tags($opt)) . '</option>';
            }
            $markup = ' <div class="form-group select"> <label for="' . $name . '">' . __($placeholder) . '</label> <select id="' . $name . '" name="' . $name . '" class="form-control" ' . $required_markup . '>' . $option_markup . '</select></div>';
            break;
        default:
            $required_markup = !empty($requried) ? $required_markup_html : '';
            $markup = ' <div class="form-group"> <input type="text" id="' . $name . '" name="' . $name . '" class="form-control" placeholder="' . __($placeholder) . '" ' . $required_markup . '></div>';
            break;
    }

    return $markup;
}

function render_form_field_for_frontend($form_content)
{
    if (empty($form_content)) {
        return;
    }
    $output = '';
    $form_fields = json_decode($form_content);
    $select_index = 0;
    $options = [];
    foreach ($form_fields->field_type as $key => $value) {
        if (!empty($value)) {
            if ($value == 'select') {
                $options = explode("\n", $form_fields->select_options[$select_index]);
            }
            $required = isset($form_fields->field_required->$key) ? $form_fields->field_required->$key : '';
            $mimes = isset($form_fields->mimes_type->$key) ? $form_fields->mimes_type->$key : '';
            $output .= get_field_by_type($value, $form_fields->field_name[$key], $form_fields->field_placeholder[$key], $options, $required, $mimes);
            if ($value == 'select') {
                $select_index++;
            };
        }
    }
    return $output;
}

function render_payment_gateway_for_form($cash_on_delivery = false)
{
    return PaymentGatewaySetup::renderFrontendFormContent($cash_on_delivery);
}

function render_payment_gateway_select()
{
    if (empty(get_static_option('site_payment_gateway'))) {
        return;
    }

    $all_gateway = PaymentGatewaySetup::gateway_list();
    $output = '';

    foreach ($all_gateway as $gateway) {
        $selected = (get_static_option('site_default_payment_gateway') == $gateway) ? 'selected' : '';
        if (!empty(get_static_option($gateway . '_gateway'))) {
            $output .= '<option value="' . $gateway . '" ' . $selected . '>' . ucfirst(str_replace('_', ' ', $gateway)) . '</option>';
        }
    }
    return $output;
}

function render_drag_drop_form_builder_markup($content = '')
{
    $output = '';

    $form_fields = json_decode($content);
    $output .= '<ul id="sortable" class="available-form-field main-fields">';
    if (!empty($form_fields)) {
        $select_index = 0;
        foreach ($form_fields->field_type as $key => $ftype) {
            $args = [];
            $required_field = '';
            if (property_exists($form_fields, 'field_required')) {
                $filed_requirement = (array)$form_fields->field_required;
                $required_field = !empty($filed_requirement[$key]) ? 'on' : '';
            }
            if ($ftype == 'select') {
                $args['select_option'] = isset($form_fields->select_options[$select_index]) ? $form_fields->select_options[$select_index] : '';
                $select_index++;
            }
            if ($ftype == 'file') {
                $args['mimes_type'] = isset($form_fields->mimes_type->$key) ? $form_fields->mimes_type->$key : '';
            }
            $output .= render_drag_drop_form_builder_field_markup($key, $ftype, $form_fields->field_name[$key], $form_fields->field_placeholder[$key], $required_field, $args);
        }
    } else {
        $output .= render_drag_drop_form_builder_field_markup('1', 'text', 'your-name', 'Your Name', '');
    }

    $output .= '</ul>';
    return $output;
}

function render_drag_drop_form_builder_field_markup($key, $type, $name, $placeholder, $required, $args = [])
{
    $required_check = !empty($required) ? 'checked' : '';
    $placeholder = htmlspecialchars(strip_tags($placeholder));
    $name = htmlspecialchars(strip_tags($name));
    $type = htmlspecialchars(strip_tags($type));
    $output = '<li class="ui-state-default">
                     <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                    <span class="remove-fields">x</span>
                    <a data-toggle="collapse" href="#fileds_collapse_' . $key . '" role="button"
                       aria-expanded="false" aria-controls="collapseExample">
                        ' . ucfirst($type) . ': <span
                                class="placeholder-name">' . $placeholder . '</span>
                    </a>';
    $output .= '<div class="collapse" id="fileds_collapse_' . $key . '">
            <div class="card card-body margin-top-30">
                <input type="hidden" class="form-control" name="field_type[]"
                       value="' . $type . '">
                <div class="form-group">
                    <label>' . __('Name') . '</label>
                    <input type="text" class="form-control " name="field_name[]"
                           placeholder="' . __('enter field name') . '"
                           value="' . $name . '" >
                </div>
                <div class="form-group">
                    <label>' . __('Placeholder/Label') . '</label>
                    <input type="text" class="form-control field-placeholder"
                           name="field_placeholder[]" placeholder="' . __('enter field placeholder/label') . '"
                           value="' . $placeholder . '" >
                </div>
                <div class="form-group">
                    <label ><strong>' . __('Required') . '</strong></label>
                    <label class="switch">
                        <input type="checkbox" class="field-required" ' . $required_check . ' name="field_required[' . $key . ']">
                        <span class="slider-yes-no"></span>
                    </label>
                </div>';
    if ($type == 'select') {
        $output .= '<div class="form-group">
                        <label>' . __('Options') . '</label>
                            <textarea name="select_options[]" class="form-control max-height-120" cols="30" rows="10"
                                required>' . strip_tags($args['select_option']) . '</textarea>
                           <small>' . __('separate option by new line') . '</small>
                    </div>';
    }
    if ($type == 'file') {
        $output .= '<div class="form-group"><label>' . __('File Type') . '</label><select name="mimes_type[' . $key . ']" class="form-control mime-type">';
        $output .= '<option value="mimes:jpg,jpeg,png"';
        if (isset($args['mimes_type']) && $args['mimes_type'] == 'mimes:jpg,jpeg,png') {
            $output .= "selected";
        }
        $output .= '>' . __('mimes:jpg,jpeg,png') . '</option>';

        $output .= '<option value="mimes:txt,pdf"';
        if (isset($args['mimes_type']) && $args['mimes_type'] == 'mimes:txt,pdf') {
            $output .= "selected";
        }
        $output .= '>' . __('mimes:txt,pdf') . '</option>';

        $output .= '<option value="mimes:doc,docx"';
        if (isset($args['mimes_type']) && $args['mimes_type'] == 'mimes:mimes:doc,docx') {
            $output .= "selected";
        }
        $output .= '>' . __('mimes:mimes:doc,docx') . '</option>';

        $output .= '</select></div>';
    }
    $output .= '</div></div></li>';

    return $output;
}

function is_paypal_supported_currency()
{
    $global_currency = get_static_option('site_global_currency');
    $supported_currency = ['AUD', 'BRL', 'CAD', 'CNY', 'CZK', 'DKK', 'EUR', 'HKD', 'HUF', 'INR', 'ILS', 'JPY', 'MYR', 'MXN', 'TWD', 'NZD', 'NOK', 'PHP', 'PLN', 'GBP', 'RUB', 'SGD', 'SEK', 'CHF', 'THB', 'USD'];
    return in_array($global_currency, $supported_currency);
}

function get_manual_payment_description($type = 'manual_payment')
{
    $payment_description = get_static_option('site_'.$type.'_description');
    $payment_description = str_replace(array('https://{url}', 'http://{url}'), array(url('/'), url('/')), $payment_description);
    return $payment_description;
}



function is_paytm_supported_currency()
{
    $global_currency = get_static_option('site_global_currency');
    $supported_currency = ['INR'];
    return in_array($global_currency, $supported_currency);
}

function is_razorpay_supported_currency()
{
    $global_currency = get_static_option('site_global_currency');
    $supported_currency = ['INR'];
    return in_array($global_currency, $supported_currency);
}

function is_mollie_supported_currency()
{
    $global_currency = get_static_option('site_global_currency');
    $supported_currency = ['AED', 'AUD', 'BGN', 'BRL', 'CAD', 'CHF', 'CZK', 'DKK', 'EUR', 'GBP', 'HKD', 'HRK', 'HUF', 'ILS', 'ISK', 'JPY', 'MXN', 'MYR', 'NOK', 'NZD', 'PHP', 'PLN', 'RON', 'RUB', 'SEK', 'SGD', 'THB', 'TWD', 'USD', 'ZAR'];
    return in_array($global_currency, $supported_currency);
}

function is_flutterwave_supported_currency()
{
    $global_currency = get_static_option('site_global_currency');
    $supported_currency = ['BIF', 'CAD', 'CDF', 'CVE', 'EUR', 'GBP', 'GHS', 'GMD', 'GNF', 'KES', 'LRD', 'MWK', 'MZN', 'NGN', 'RWF', 'SLL', 'STD', 'TZS', 'UGX', 'USD', 'XAF', 'XOF', 'ZMK', 'ZMW', 'ZWD'];
    return in_array($global_currency, $supported_currency);
}

function is_paystack_supported_currency()
{
    $global_currency = get_static_option('site_global_currency');
    $supported_currency = ['NGN', 'GHS'];
    return in_array($global_currency, $supported_currency);
}
function get_amount_in_usd($amount, $currency)
{
    $output = 0;
    $all_currency = [
        'USD' => '$', 'EUR' => '€', 'INR' => '₹', 'IDR' => 'Rp', 'AUD' => 'A$', 'SGD' => 'S$', 'JPY' => '¥', 'GBP' => '£', 'MYR' => 'RM', 'PHP' => '₱', 'THB' => '฿', 'KRW' => '₩', 'NGN' => '₦', 'GHS' => 'GH₵', 'BRL' => 'R$',
        'BIF' => 'FBu', 'CAD' => 'C$', 'CDF' => 'FC', 'CVE' => 'Esc', 'GHP' => 'GH₵', 'GMD' => 'D', 'GNF' => 'FG', 'KES' => 'K', 'LRD' => 'L$', 'MWK' => 'MK', 'MZN' => 'MT', 'RWF' => 'R₣', 'SLL' => 'Le', 'STD' => 'Db', 'TZS' => 'TSh', 'UGX' => 'USh', 'XAF' => 'FCFA', 'XOF' => 'CFA', 'ZMK' => 'ZK', 'ZMW' => 'ZK', 'ZWD' => 'Z$',
        'AED' => 'د.إ', 'AFN' => '؋', 'ALL' => 'L', 'AMD' => '֏', 'ANG' => 'NAf', 'AOA' => 'Kz', 'ARS' => '$', 'AWG' => 'ƒ', 'AZN' => '₼', 'BAM' => 'KM', 'BBD' => 'Bds$', 'BDT' => '৳', 'BGN' => 'Лв', 'BMD' => '$', 'BND' => 'B$', 'BOB' => 'Bs', 'BSD' => 'B$', 'BWP' => 'P', 'BZD' => '$',
        'CHF' => 'CHf', 'CNY' => '¥', 'CLP' => '$', 'COP' => '$', 'CRC' => '₡', 'CZK' => 'Kč', 'DJF' => 'Fdj', 'DKK' => 'Kr', 'DOP' => 'RD$', 'DZD' => 'دج', 'EGP' => 'E£', 'ETB' => 'ብር', 'FJD' => 'FJ$', 'FKP' => '£', 'GEL' => 'ლ', 'GIP' => '£', 'GTQ' => 'Q',
        'GYD' => 'G$', 'HKD' => 'HK$', 'HNL' => 'L', 'HRK' => 'kn', 'HTG' => 'G', 'HUF' => 'Ft', 'ILS' => '₪', 'ISK' => 'kr', 'JMD' => '$', 'KGS' => 'Лв', 'KHR' => '៛', 'KMF' => 'CF', 'KYD' => '$', 'KZT' => '₸', 'LAK' => '₭', 'LBP' => 'ل.ل.', 'LKR' => 'ரூ', 'LSL' => 'L',
        'MAD' => 'MAD', 'MDL' => 'L', 'MGA' => 'Ar', 'MKD' => 'Ден', 'MMK' => 'K', 'MNT' => '₮', 'MOP' => 'MOP$', 'MRO' => 'MRU', 'MUR' => '₨', 'MVR' => 'Rf', 'MXN' => 'Mex$', 'NAD' => 'N$', 'NIO' => 'C$', 'NOK' => 'kr', 'NPR' => 'रू', 'NZD' => '$', 'PAB' => 'B/.', 'PEN' => 'S/', 'PGK' => 'K',
        'PKR' => '₨', 'PLN' => 'zł', 'PYG' => '₲', 'QAR' => 'QR', 'RON' => 'lei', 'RSD' => 'din', 'RUB' => '₽', 'SAR' => 'SR', 'SBD' => 'Si$', 'SCR' => 'SR', 'SEK' => 'kr', 'SHP' => '£', 'SOS' => 'Sh.so.', 'SRD' => '$', 'SZL' => 'E', 'TJS' => 'ЅM',
        'TRY' => '₺', 'TTD' => 'TT$', 'TWD' => 'NT$', 'UAH' => '₴', 'UYU' => '$U', 'UZS' => 'so\'m', 'VND' => '₫', 'VUV' => 'VT', 'WST' => 'WS$', 'XCD' => '$', 'XPF' => '₣', 'YER' => '﷼', 'ZAR' => 'R'
    ];
    foreach ($all_currency as $cur => $symbol) {
        if ($cur == 'USD') {
            continue;
        }
        if ($cur == $currency) {
            $exchange_rate = get_static_option('site_' . strtolower($cur) . '_to_usd_exchange_rate');
            $output = $amount * $exchange_rate;
        }
    }

    return $output;
}

function get_amount_in_inr($amount, $currency)
{
    $output = 0;
    $all_currency = [
        'USD' => '$', 'EUR' => '€', 'INR' => '₹', 'IDR' => 'Rp', 'AUD' => 'A$', 'SGD' => 'S$', 'JPY' => '¥', 'GBP' => '£', 'MYR' => 'RM', 'PHP' => '₱', 'THB' => '฿', 'KRW' => '₩', 'NGN' => '₦', 'GHS' => 'GH₵', 'BRL' => 'R$',
        'BIF' => 'FBu', 'CAD' => 'C$', 'CDF' => 'FC', 'CVE' => 'Esc', 'GHP' => 'GH₵', 'GMD' => 'D', 'GNF' => 'FG', 'KES' => 'K', 'LRD' => 'L$', 'MWK' => 'MK', 'MZN' => 'MT', 'RWF' => 'R₣', 'SLL' => 'Le', 'STD' => 'Db', 'TZS' => 'TSh', 'UGX' => 'USh', 'XAF' => 'FCFA', 'XOF' => 'CFA', 'ZMK' => 'ZK', 'ZMW' => 'ZK', 'ZWD' => 'Z$',
        'AED' => 'د.إ', 'AFN' => '؋', 'ALL' => 'L', 'AMD' => '֏', 'ANG' => 'NAf', 'AOA' => 'Kz', 'ARS' => '$', 'AWG' => 'ƒ', 'AZN' => '₼', 'BAM' => 'KM', 'BBD' => 'Bds$', 'BDT' => '৳', 'BGN' => 'Лв', 'BMD' => '$', 'BND' => 'B$', 'BOB' => 'Bs', 'BSD' => 'B$', 'BWP' => 'P', 'BZD' => '$',
        'CHF' => 'CHf', 'CNY' => '¥', 'CLP' => '$', 'COP' => '$', 'CRC' => '₡', 'CZK' => 'Kč', 'DJF' => 'Fdj', 'DKK' => 'Kr', 'DOP' => 'RD$', 'DZD' => 'دج', 'EGP' => 'E£', 'ETB' => 'ብር', 'FJD' => 'FJ$', 'FKP' => '£', 'GEL' => 'ლ', 'GIP' => '£', 'GTQ' => 'Q',
        'GYD' => 'G$', 'HKD' => 'HK$', 'HNL' => 'L', 'HRK' => 'kn', 'HTG' => 'G', 'HUF' => 'Ft', 'ILS' => '₪', 'ISK' => 'kr', 'JMD' => '$', 'KGS' => 'Лв', 'KHR' => '៛', 'KMF' => 'CF', 'KYD' => '$', 'KZT' => '₸', 'LAK' => '₭', 'LBP' => 'ل.ل.', 'LKR' => 'ரூ', 'LSL' => 'L',
        'MAD' => 'MAD', 'MDL' => 'L', 'MGA' => 'Ar', 'MKD' => 'Ден', 'MMK' => 'K', 'MNT' => '₮', 'MOP' => 'MOP$', 'MRO' => 'MRU', 'MUR' => '₨', 'MVR' => 'Rf', 'MXN' => 'Mex$', 'NAD' => 'N$', 'NIO' => 'C$', 'NOK' => 'kr', 'NPR' => 'रू', 'NZD' => '$', 'PAB' => 'B/.', 'PEN' => 'S/', 'PGK' => 'K',
        'PKR' => '₨', 'PLN' => 'zł', 'PYG' => '₲', 'QAR' => 'QR', 'RON' => 'lei', 'RSD' => 'din', 'RUB' => '₽', 'SAR' => 'SR', 'SBD' => 'Si$', 'SCR' => 'SR', 'SEK' => 'kr', 'SHP' => '£', 'SOS' => 'Sh.so.', 'SRD' => '$', 'SZL' => 'E', 'TJS' => 'ЅM',
        'TRY' => '₺', 'TTD' => 'TT$', 'TWD' => 'NT$', 'UAH' => '₴', 'UYU' => '$U', 'UZS' => 'so\'m', 'VND' => '₫', 'VUV' => 'VT', 'WST' => 'WS$', 'XCD' => '$', 'XPF' => '₣', 'YER' => '﷼', 'ZAR' => 'R'
    ];
    foreach ($all_currency as $cur => $symbol) {
        if ($cur == 'INR') {
            continue;
        }
        if ($cur == $currency) {
            $exchange_rate = get_static_option('site_' . strtolower($cur) . '_to_inr_exchange_rate');
            $output = $amount * $exchange_rate;
        }
    }

    return $output;
}

function get_amount_in_ngn($amount, $currency)
{
    $output = 0;
    $all_currency = [
        'USD' => '$', 'EUR' => '€', 'INR' => '₹', 'IDR' => 'Rp', 'AUD' => 'A$', 'SGD' => 'S$', 'JPY' => '¥', 'GBP' => '£', 'MYR' => 'RM', 'PHP' => '₱', 'THB' => '฿', 'KRW' => '₩', 'NGN' => '₦', 'GHS' => 'GH₵', 'BRL' => 'R$',
        'BIF' => 'FBu', 'CAD' => 'C$', 'CDF' => 'FC', 'CVE' => 'Esc', 'GHP' => 'GH₵', 'GMD' => 'D', 'GNF' => 'FG', 'KES' => 'K', 'LRD' => 'L$', 'MWK' => 'MK', 'MZN' => 'MT', 'RWF' => 'R₣', 'SLL' => 'Le', 'STD' => 'Db', 'TZS' => 'TSh', 'UGX' => 'USh', 'XAF' => 'FCFA', 'XOF' => 'CFA', 'ZMK' => 'ZK', 'ZMW' => 'ZK', 'ZWD' => 'Z$',
        'AED' => 'د.إ', 'AFN' => '؋', 'ALL' => 'L', 'AMD' => '֏', 'ANG' => 'NAf', 'AOA' => 'Kz', 'ARS' => '$', 'AWG' => 'ƒ', 'AZN' => '₼', 'BAM' => 'KM', 'BBD' => 'Bds$', 'BDT' => '৳', 'BGN' => 'Лв', 'BMD' => '$', 'BND' => 'B$', 'BOB' => 'Bs', 'BSD' => 'B$', 'BWP' => 'P', 'BZD' => '$',
        'CHF' => 'CHf', 'CNY' => '¥', 'CLP' => '$', 'COP' => '$', 'CRC' => '₡', 'CZK' => 'Kč', 'DJF' => 'Fdj', 'DKK' => 'Kr', 'DOP' => 'RD$', 'DZD' => 'دج', 'EGP' => 'E£', 'ETB' => 'ብር', 'FJD' => 'FJ$', 'FKP' => '£', 'GEL' => 'ლ', 'GIP' => '£', 'GTQ' => 'Q',
        'GYD' => 'G$', 'HKD' => 'HK$', 'HNL' => 'L', 'HRK' => 'kn', 'HTG' => 'G', 'HUF' => 'Ft', 'ILS' => '₪', 'ISK' => 'kr', 'JMD' => '$', 'KGS' => 'Лв', 'KHR' => '៛', 'KMF' => 'CF', 'KYD' => '$', 'KZT' => '₸', 'LAK' => '₭', 'LBP' => 'ل.ل.', 'LKR' => 'ரூ', 'LSL' => 'L',
        'MAD' => 'MAD', 'MDL' => 'L', 'MGA' => 'Ar', 'MKD' => 'Ден', 'MMK' => 'K', 'MNT' => '₮', 'MOP' => 'MOP$', 'MRO' => 'MRU', 'MUR' => '₨', 'MVR' => 'Rf', 'MXN' => 'Mex$', 'NAD' => 'N$', 'NIO' => 'C$', 'NOK' => 'kr', 'NPR' => 'रू', 'NZD' => '$', 'PAB' => 'B/.', 'PEN' => 'S/', 'PGK' => 'K',
        'PKR' => '₨', 'PLN' => 'zł', 'PYG' => '₲', 'QAR' => 'QR', 'RON' => 'lei', 'RSD' => 'din', 'RUB' => '₽', 'SAR' => 'SR', 'SBD' => 'Si$', 'SCR' => 'SR', 'SEK' => 'kr', 'SHP' => '£', 'SOS' => 'Sh.so.', 'SRD' => '$', 'SZL' => 'E', 'TJS' => 'ЅM',
        'TRY' => '₺', 'TTD' => 'TT$', 'TWD' => 'NT$', 'UAH' => '₴', 'UYU' => '$U', 'UZS' => 'so\'m', 'VND' => '₫', 'VUV' => 'VT', 'WST' => 'WS$', 'XCD' => '$', 'XPF' => '₣', 'YER' => '﷼', 'ZAR' => 'R'
    ];
    foreach ($all_currency as $cur => $symbol) {
        if ($cur == 'NGN') {
            continue;
        }
        if ($cur == $currency) {
            $exchange_rate = get_static_option('site_' . strtolower($cur) . '_to_ngn_exchange_rate');
            $output = $amount * $exchange_rate;
        }
    }

    return $output;
}
function check_currency_support_by_payment_gateway($gateway)
{
    $output = false;
    if ($gateway == 'paypal') {
        $output = is_paypal_supported_currency();
    } elseif ($gateway == 'paytm') {
        $output = is_paytm_supported_currency();
    } elseif ($gateway == 'mollie') {
        $output = is_mollie_supported_currency();
    } elseif ($gateway == 'stripe') {
        $output = true;
    } elseif ($gateway == 'razorpay') {
        $output = is_razorpay_supported_currency();
    } elseif ($gateway == 'flutterwave') {
        $output = is_flutterwave_supported_currency();
    } elseif ($gateway == 'paystack') {
        $output = is_paystack_supported_currency();
    } else {
        $output = true;
    }

    return $output;
}
function custom_number_format($amount)
{
    return number_format((float)$amount, 2, '.', '');
}
function get_charge_currency($gateway)
{
    $output = 'USD';
    if ($gateway == 'paypal') {
        $output = 'USD';
    } elseif ($gateway == 'paytm') {
        $output = 'INR';
    } elseif ($gateway == 'mollie') {
        $output = 'USD';
    } elseif ($gateway == 'razorpay') {
        $output = 'INR';
    } elseif ($gateway == 'flutterwave') {
        $output = 'USD';
    } elseif ($gateway == 'paystack') {
        $output = 'NGN';
    }

    return $output;
}
function get_charge_amount($amount, $gateway)
{
    $output = 0;
    if ($gateway == 'paypal') {
        $output = get_amount_in_usd($amount, get_static_option('site_global_currency'));
    } elseif ($gateway == 'paytm') {
        $output = get_amount_in_inr($amount, get_static_option('site_global_currency'));
    } elseif ($gateway == 'mollie') {
        $output = get_amount_in_usd($amount, get_static_option('site_global_currency'));
    } elseif ($gateway == 'razorpay') {
        $output = get_amount_in_inr($amount, get_static_option('site_global_currency'));
    } elseif ($gateway == 'flutterwave') {
        $output = get_amount_in_usd($amount, get_static_option('site_global_currency'));
    } elseif ($gateway == 'paystack') {
        $output = get_amount_in_ngn($amount, get_static_option('site_global_currency'));
    }

    return $output;
}
function get_paypal_form_url()
{
    $output = 'https://secure.paypal.com/cgi-bin/webscr';
    $sandbox_enable = get_static_option('paypal_test_mode');
    if (!empty($sandbox_enable)) {
        $output = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
    }
    return $output;
}
function get_paytm_environment()
{
    $output = 'PROD';
    $sandbox_enable = get_static_option('paytm_test_mode');
    if (!empty($sandbox_enable)) {
        $output = 'TEST';
    }
    return $output;
}

function redirect_404_page()
{
    return view('frontend.pages.404');
}

function getVisIpAddr()
{

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}
function get_visitor_country()
{
    $return_val = 'NG';
    $ip = getVisIpAddr();
    $ipdat = @json_decode(file_get_contents(
        "http://www.geoplugin.net/json.gp?ip=" . $ip
    ));

    $ipdat = (array) $ipdat;
    $return_val = isset($ipdat['geoplugin_countryCode']) ? $ipdat['geoplugin_countryCode'] : $return_val;

    return $return_val;
}
function get_user_name_by_id($id)
{
    $user = \App\User::find($id);
    return $user;
}
function all_languages()
{
    return LanguageHelper::getAllLanguages();
}

function render_embed_google_map($address, $zoom = 10)
{
    if (empty($address)) {
        return;
    }
    printf(
        '<div class="elementor-custom-embed"><iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=%s&amp;t=m&amp;z=%d&amp;output=embed&amp;iwloc=near" aria-label="%s"></iframe></div>',
        rawurlencode($address),
        $zoom,
        $address
    );
}

function get_mege_menu_item_url($type, $slug, $id)
{
    $return_val = '';
    switch ($type) {
        case ('service_mega_menu'):
            $return_val = route('frontend.services.single', [purify_html($slug), $id]);
            break;
        case ('product_mega_menu'):
            $return_val =  route('frontend.products.single', [purify_html($slug), $id]);
            break;
        case ('blog_mega_menu'):
            $return_val =  route('frontend.blog.single', [purify_html($slug), $id]);
            break;
        default:
            break;
    }

    return $return_val;
}

function paypal_gateway()
{
    return \App\PaymentGateway\PaymentGatewaySetup::paypal();
}
function paytm_gateway()
{
    return \App\PaymentGateway\PaymentGatewaySetup::paytm();
}
function stripe_gateway()
{
    return \App\PaymentGateway\PaymentGatewaySetup::stripe();
}
function paystack_gateway()
{
    return \App\PaymentGateway\PaymentGatewaySetup::paystack();
}
function razorpay_gateway()
{
    return \App\PaymentGateway\PaymentGatewaySetup::razorpay();
}
function flutterwaverave_gateway()
{
    return \App\PaymentGateway\PaymentGatewaySetup::flutterwaverev();
}
function mollie_gateway()
{
    return \App\PaymentGateway\PaymentGatewaySetup::mollie();
}
function script_currency_list()
{
    return \App\PaymentGateway\GlobalCurrency::script_currency_list();
}
function render_footer_copyright_text()
{
    $footer_copyright_text = get_static_option('site_footer_copyright');
    $footer_copyright_text = str_replace('{copy}', '&copy;', $footer_copyright_text);
    $footer_copyright_text = str_replace('{year}', date('Y'), $footer_copyright_text);

    return purify_html_raw($footer_copyright_text);
}
function render_admin_panel_widgets_list()
{
    return \App\WidgetsBuilder\WidgetBuilderSetup::get_admin_panel_widgets();
}

function render_admin_saved_widgets($location)
{
    $output = '';
    $all_widgets = \App\Widgets::where(['widget_location' => $location])->orderBy('widget_order', 'asc')->get();
    foreach ($all_widgets as $widget) {
        $output .= \App\WidgetsBuilder\WidgetBuilderSetup::render_widgets_by_name_for_admin([
            'name' => $widget->widget_name,
            'id' => $widget->id,
            'type' => 'update',
            'order' => $widget->widget_order,
            'location' => $widget->widget_location
        ]);
    }

    return $output;
}

function get_admin_sidebar_list()
{
    return \App\WidgetsBuilder\WidgetBuilderSetup::get_admin_widget_sidebar_list();
}

function render_frontend_sidebar($location, $args = [])
{
    $output = '';
    $all_widgets = \App\Widgets::where(['widget_location' => $location])->orderBy('widget_order', 'ASC')->get();
    foreach ($all_widgets as $widget) {
        $output .= \App\WidgetsBuilder\WidgetBuilderSetup::render_widgets_by_name_for_frontend([
            'name' => $widget->widget_name,
            'location' => $location,
            'id' => $widget->id,
            'column' => $args['column'] ?? false
        ]);
    }
    return $output;
}
function get_all_language()
{
    $all_lang = Language::where('status', 'publish')->orderBy('default', 'DESC')->get();
    return $all_lang;
}
function get_language_name_by_slug($slug)
{
    $data = Language::where('slug', $slug)->first();
    return $data->name;
}
function get_blog_category_by_id($id, $type = '')
{
    $return_val = __('uncategorized');
    $blog_cat = \App\BlogCategory::find($id);
    if (!empty($blog_cat)) {
        $return_val = $blog_cat->name;
        if ($type == 'link') {
            $return_val = '<a href="' . route('frontend.blog.category', ['id' => $blog_cat->id, 'any' => Str::slug($blog_cat->name)]) . '">' . $blog_cat->name . '</a>';
        }
    }
    return $return_val;
}
function getAllBlogTags() : array
{
    $all_blog_tags = Blog::select('tags')->where('status', 'publish')->pluck('tags')->toArray();
    $tags = [];

    foreach ($all_blog_tags as $blog_tags) {
        $tags = array_merge($tags, explode(',', $blog_tags));
    }

    return array_unique($tags);
}

function custom_amount_with_currency_symbol($amount, $text = false)
{
    $amount = number_format((float) $amount, 0, '.', ',');
    $position = get_static_option('site_currency_symbol_position');
    $symbol = site_currency_symbol($text);
    $return_val = '<span class="sign">' . $symbol . '</span>' . $amount;
    if ($position == 'right') {
        $return_val = $amount . '<span class="sign">' . $symbol . '</span>';
    }
    return $return_val;
}
function admin_default_lang()
{
    $default_lang = Language::where(['default' => 1, 'status' => 'publish'])->first();
    return $default_lang->slug;
}
function front_default_lang()
{
    $default_lang = !empty(session()->get('lang')) ? session()->get('lang') : Language::where('default', 1)->first()->slug;
    return $default_lang;
}
function get_default_language_direction()
{
    $default_lang = Language::where('default', 1)->first();
    return !empty($default_lang) ? $default_lang->direction : 'ltr';
}
function multilang_field_display($fields, $field_name, $lang)
{
    foreach ($fields as $field) {
        if ($field->lang == $lang) {
            return $field->$field_name;
        }
    }
}

function get_image_category_name_by_id($id)
{
    $return_val = __('uncategorized');

    $category_details = \App\ImageGalleryCategory::find($id);
    if (!empty($category_details)) {
        $return_val = $category_details->title;
    }

    return $return_val;
}
function is_tax_enable()
{
    return get_static_option('product_tax') && get_static_option('product_tax_system') == 'exclusive'  ? true : false;
}
function render_ratings($ratings)
{
    $return_val = '';
    switch ($ratings) {
        case (1):
            $return_val = '<i class="las la-star"></i>';
            break;
        case (2):
            $return_val = '<i class="las la-star"></i><i class="las la-star"></i>';
            break;
        case (3):
            $return_val = '<i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>';
            break;
        case (4):
            $return_val = '<i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>';
            break;
        case (5):
            $return_val = '<i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>';
            break;
        default:
            break;
    }
    return $return_val;
}
function get_cart_items()
{
    $old_cart_item = session()->get('cart_item');
    $return_val = !empty($old_cart_item) ? $old_cart_item : [];

    return $return_val;
}
function get_attachment_url_by_id($id, $size = null)
{
    $return_val =  get_attachment_image_by_id($id, $size);
    return $return_val['image_id'] ?? '';
}
function get_cart_subtotal($currency_symbol = true)
{
    $total_cart_items = session()->get('cart_item');
    $return_val = $currency_symbol ? amount_with_currency_symbol(0) : 0;
    if (!empty($total_cart_items)) {
        $return_val = 0;
        foreach ($total_cart_items as $product_id => $cat_data) {
            $return_val += (int) $cat_data['price'];
        }
        return $currency_symbol ? amount_with_currency_symbol($return_val) : $return_val;
    }

    return $return_val;
}
function cart_total_items()
{
    $return_val = session()->get('cart_item');
    return !empty($return_val) ? array_sum(array_column($return_val, 'quantity')) : 0;
}


function is_shipping_available()
{
    $all_cart_item = session()->get('cart_item');
    $return_val = true;
    $cart_item_type = !empty($all_cart_item) ? array_unique(array_column($all_cart_item, 'type')) : [];
    if (count($cart_item_type)  == 1 && in_array('digital', $cart_item_type)) {
        $return_val = false;
    }

    return $return_val;
}
function rest_cart_session()
{
    session()->forget([
        'shipping_charge',
        'cart_item',
        'coupon_discount',
    ]);
}
function all_lang_slugs()
{
    return Language::all()->pluck('slug')->toArray();
}
function exist_slugs($model_data)
{
    return $model_data->lang_all->pluck('lang')->toArray();
}

function purify_html($html)
{
    return strip_tags(\Mews\Purifier\Facades\Purifier::clean($html));
}

function purify_html_raw($html)
{
    return \Mews\Purifier\Facades\Purifier::clean($html);
}

function render_colored_text($text)
{
    return str_replace(['{color}', '{/color}'], ['<span>', '</span> '], $text);
}

function get_percentage($amount, $numb)
{
    if ($amount > 0) {
        return round($numb / ($amount / 100), 2);
    }
    return 0;
}

function render_attachment_preview_for_admin($id)
{
    $markup = '';
    $header_bg_img = get_attachment_image_by_id($id, null, true);
    $img_url = $header_bg_img['img_url'] ?? '';
    $img_alt = $header_bg_img['img_alt'] ?? '';
    if (!empty($img_url)) {
        $markup = sprintf('<div class="attachment-preview"><div class="thumbnail"><div class="centered"><img class="avatar user-thumb" src="%1$s" alt="%2$s"></div></div></div>', $img_url, $img_alt);
    }
    return $markup;
}



function render_gallery_image_attachment_preview($gal_image)
{
    if (empty($gal_image)) {
        return;
    }
    $output = '';
    $gallery_images = explode('|', $gal_image);
    foreach ($gallery_images as $gl_img) {
        $work_section_img = get_attachment_image_by_id($gl_img, null, true);
        if (!empty($work_section_img)) {
            $output .= sprintf('<div class="attachment-preview"><div class="thumbnail"><div class="centered"><img class="avatar user-thumb" src="%1$s" alt=""> </div></div></div>', $work_section_img['img_url']);
        }
    }
    return $output;
}

function render_img_url_data_attr($id, $attr)
{
    $header_bg_img = get_attachment_image_by_id($id, null, true);
    $img_url = $header_bg_img['img_url'] ?? '';
    return sprintf('data-%1$s="%2$s"', $attr, $img_url);
}

/* menu builder helpers */
function render_pages_list($lang = null)
{
    $instance = new \App\MenuBuilder\MenuBuilderHelpers();
    return $instance->get_static_pages_list($lang);
}
function render_dynamic_pages_list($lang = null)
{
    $instance = new \App\MenuBuilder\MenuBuilderHelpers();
    return $instance->get_post_type_page_list($lang);
}
function render_product_category_list($lang = null)
{
    $instance = new \App\MenuBuilder\MenuBuilderHelpers();
    return $instance->get_product_category_list($lang);
}

function render_mega_menu_list($lang = null)
{
    $instance = new \App\MenuBuilder\MegaMenuBuilderSetup();
    return $instance->render_mega_menu_list($lang);
}
function render_product_category_mega_menu_list($lang = null)
{
    $instance = new \App\MenuBuilder\CategoryMenuBuilderSetup();
    return $instance->render_mega_menu_list($lang);
}

function render_draggable_menu($id)
{
    $instance = new \App\MenuBuilder\MenuBuilderAdminRender();
    return $instance->render_admin_panel_menu($id);
}
function render_draggable_category_menu($id)
{
    $instance = new \App\MenuBuilder\MenuBuilderAdminRender();
    return $instance->render_product_category_admin_panel_menu($id);
}
function render_frontend_menu($id,$type=null)
{
    $instance = new \App\MenuBuilder\MenuBuilderFrontendRender();
    return $instance->render_frrontend_panel_menu($id,$type);
}

function ratings_markup($ratings, $type = '')
{
    $markup = '';
    $markup_frontend = '';
    switch ($ratings) {
        case ('1'):
            $markup = '<i class="las la-star"></i>';
            $markup_frontend = '<li><i class="las la-star"></i></li>';
            break;
        case ('2'):
            $markup = '<i class="las la-star"></i><i class="las la-star"></i>';
            $markup_frontend = '<li><i class="las la-star"></i></li><li><i class="las la-star"></i></li>';
            break;
        case ('3'):
            $markup = '<i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>';
            $markup_frontend = '<li><i class="las la-star"></i></li><li><i class="las la-star"></i></li><li><i class="las la-star"></i></li>';
            break;
        case ('4'):
            $markup = '<i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>';
            $markup_frontend = '<li><i class="las la-star"></i></li><li><i class="las la-star"></i></li><li><i class="las la-star"></i></li><li><i class="las la-star"></i></li>';
            break;
        case ('5'):
            $markup = '<i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>';
            $markup_frontend = '<li><i class="las la-star"></i></li><li><i class="las la-star"></i></li><li><i class="las la-star"></i></li><li><i class="las la-star"></i></li><li><i class="las la-star"></i></li>';
            break;
        default:
            break;
    }
    return $type == 'li' ? $markup_frontend : $markup;
}


function sanitize_html($value)
{
    return htmlspecialchars(strip_tags($value));
}

function esc_url($val)
{
    return htmlspecialchars(filter_var($val, FILTER_SANITIZE_URL));
}

function custom_html($value)
{
    return Purifier::clean($value);
}

function sanitizeArray($input_array, $secondary = false)
{
    if (is_array($input_array) && count($input_array)) {
        $return_arr = [];
        foreach ($input_array as $value) {
            $clean_data = is_array($value) ? sanitizeArray($value) : sanitize_html($value);
            if (is_string($clean_data) && strlen($clean_data)) {
                $return_arr[] = $clean_data;
            }
        }
        return $return_arr;
    }
}

function decodeProductAttributesOld($endcoded_attributes) : array
{
    $all_attributes = ProductAttribute::all();
    $decoded_attributes = json_decode($endcoded_attributes, true);
    $result = [];
    if ($decoded_attributes) {
        foreach ($decoded_attributes as $key => $attribute) {
            $db_attribute = $all_attributes->find($key);
            $result[] = [
                'name' => $all_attributes->find($key)->title,
                'terms' => $attribute
            ];
        }
    }

    return $result;
}

function decodeProductAttributes($endcoded_attributes) : array
{
    $decoded_attributes = json_decode($endcoded_attributes, true);
    $result = [];
    if ($decoded_attributes) {
        foreach ($decoded_attributes as $key => $attributes) {
            $result[] = [
                'name' => count($attributes) ? $attributes[0]['type'] : '',
                'terms' => $attributes
            ];
        }
    }

    return $result;
}

function getUserByGuard($guard = 'web')
{
    return auth()->guard($guard)->user();
}
function get_product_variant_list_by_id($id){
    $varitnt = ProductAttribute::find($id);
    if (empty($varitnt)){
        return '';
    }
    return $varitnt->title;
}

function getUserShippingAddress($shipping_address_id)
{
    $user_shipping_address = '';
    if ($shipping_address_id) {
        $user_shipping = UserShippingAddress::find($shipping_address_id);
        $user_shipping_address = $user_shipping ? $user_shipping->address : '';
    }
    return $user_shipping_address;
}
function getAllProductSubcategory($product)
{
    $all_subcategory = $product->getSubcategory();
    $subcategory_arr = [];
    foreach ($all_subcategory as $subcategory) {
        $subcategory_arr[] = [
            'name' => $subcategory->title ?? '',
            'url' => route('frontend.products.subcategory', $subcategory->id)
        ];
    }
    return $subcategory_arr;
}
function getCampaignItemStockInfo($product_id, $campaignId)
{
    $campaign_product = CampaignProduct::where('campaign_id', $campaignId)->where('product_id', $product_id)->first();
    $campaign_product_count = optional($campaign_product)->units_for_sale ?? 0;
    $campaign_price = optional($campaign_product)->campaign_price ?? 0;
    $campaign_sold_product_count = optional(CampaignSoldProduct::where('product_id', $product_id)->first())->sold_count ?? 0;

    return [
        'in_stock_count' => $campaign_product_count,
        'sold_count' => $campaign_sold_product_count,
        'campaign_price' => $campaign_price,
    ];
}
function getCampaignPricePercentage($campaign_id, $product_id, $product_sale_price)
{
    $campaign_product = CampaignProduct::where('campaign_id', $campaign_id)->where('product_id', $product_id)->first();
    if (!$campaign_product) return 0;
    // return getPercentage($product_sale_price, $campaign_product->campaign_price) * -1;
    return round(getPercentage($product_sale_price, $campaign_product->campaign_price) * -1,2);
}
function getPercentage($main_price, $lower_price)
{
    if ($main_price && $lower_price) {
        return ($main_price - $lower_price) / $main_price * 100;
    }
    return 0;
}
function getCampaignProductById($product_id) {
    return CampaignProduct::where('product_id', $product_id)->first();
}

function getQuickViewDataMarkup($item)
{
    $title = $item->title ?? "";
    $slug = $item->slug ?? "";
    $summary = $item->summary ?? "";
    $price = float_amount_with_currency_symbol($item->price);
    $sale_price = float_amount_with_currency_symbol($item->sale_price);
    $avg_rating = $item->rating_avg_rating ?? "";
    $attrs = (array)json_decode($item->attributes);

    foreach($attrs as $attr){
        foreach($attr as $single_item){
            $single_item->attribute_image = get_attachment_image_by_id($single_item->attribute_image)["img_url"] ?? "";
        }
    }

    // category
//    $category = $item->category_id ? ProductCategory::where('id', $item->category_id)->first() : null;
    $category = $item->category;
    $category_name = $category ? $category->title : "";
    $category_page_url = $category ? route('frontend.products.category', $category->id) : '#';

    // subcategory
    $qv_subcategory_arr = getAllProductSubcategory($item);
    $qv_subcategory_markup = "";
    $qv_subcategory_markup = json_encode($qv_subcategory_arr);

    $image_url = "";
    $image_id = $item->image;
    if ($image_id) {
        $image_details = get_attachment_image_by_id($image_id);
        if (!empty($image_details)) {
            $image_url = $image_details['img_url'];
        }
    }

    // campaign data
    $campaign_product = !is_null($item->campaignProduct) ? $item->campaignProduct : getCampaignProductById($item->id);
    $sale_price = $campaign_product ? optional($campaign_product)->campaign_price : $item->sale_price;
    $deleted_price = !is_null($campaign_product) ? $item->sale_price : $item->price;
    $campaign_percentage = !is_null($campaign_product) ? getPercentage($item->sale_price, $sale_price) : false;

    $deleted_price = float_amount_with_currency_symbol($deleted_price);
    $quick_view_data = '';
    $quick_view_data .= "data-title='" . htmlentities($title, ENT_QUOTES) . "' ";
    $quick_view_data .= "data-id='" . htmlentities($item->id, ENT_QUOTES) . "' ";
    $quick_view_data .= "data-slug='" . htmlentities($item->slug, ENT_QUOTES) . "' ";
    $quick_view_data .= "data-summary='" . htmlentities($summary, ENT_QUOTES) . "' ";
    // $quick_view_data .= "data-price='" . htmlentities($price, ENT_QUOTES) . "' ";
    $quick_view_data .= "data-price='" . htmlentities($deleted_price, ENT_QUOTES) . "' ";
    $quick_view_data .= "data-sale-price='" . htmlentities(float_amount_with_currency_symbol($sale_price), ENT_QUOTES) . "' ";
    $quick_view_data .= "data-main-price='" . htmlentities($sale_price, ENT_QUOTES) . "' ";
    $quick_view_data .= "data-attributes='" . htmlentities(json_encode($attrs), ENT_QUOTES) . "' ";
    $quick_view_data .= "data-category='" . htmlentities($category_name, ENT_QUOTES) . "' ";
    $quick_view_data .= "data-subcategory='" . htmlentities($qv_subcategory_markup, ENT_QUOTES) . "' ";
    $quick_view_data .= "data-category-url='" . htmlentities($category_page_url, ENT_QUOTES) . "' ";
    $quick_view_data .= "data-image='" . htmlentities($image_url, ENT_QUOTES) . "' ";
    $quick_view_data .= "data-rating='" . htmlentities($avg_rating, ENT_QUOTES) . "' ";
    $quick_view_data .= isset($item->inventory)
        ? "data-inventory='" . htmlentities(optional($item->inventory)->sku, ENT_QUOTES) . "' "
        : '';
    $quick_view_data .= isset($item->inventory)
        ? "data-in-stock='" . htmlentities(optional($item->inventory)->stock_count ?? 0, ENT_QUOTES) . "' "
        : '';

    if ($campaign_percentage) {
        $quick_view_data .= "data-campaignPercentage='" . htmlentities(round($campaign_percentage, 2), ENT_QUOTES) . "' ";
    }

    if (!empty($item->badge)) {
        $quick_view_data .= "data-badge='" . htmlentities($item->badge, ENT_QUOTES) . "' ";
    }

    return $quick_view_data;
}

    function getCountryShippingCost($type, $id) {
        if ($type == 'country') {
            $zone_regions = ZoneRegion::whereJsonContains('country', $id)->get()->pluck('zone_id');
        } elseif ($type == 'state') {
            $zone_regions = ZoneRegion::whereJsonContains('state', $id)->get()->pluck('zone_id');
        }

        $shipping_methods = ShippingMethod::with('availableOptions')->whereIn('zone_id', $zone_regions)->get();
        return $shipping_methods;
    }
    function getItemAttributesName($attributes)
    {
        $item_attributes = '';
        $attribute_count = 0;
        if ($attributes) {
            $item_attributes .= ' (';
            foreach ($attributes as $key => $attribute) {
                if ($key != 'price' && $key != 'user_id') {
                    $item_attributes .= $attribute . ', ';
                    $attribute_count += 1;
                }
            }
            $item_attributes = $attribute_count ? substr($item_attributes, 0, -2) . ')' : '';
        }
        return $item_attributes;
    }
    function getInvoiceAddressInfo($address_id, $type)
    {
        $type_name = "";
        $address_text = "";
        $output = "";

        switch ($type) {
            case 'country':
                $country = $address_id ? \App\Country\Country::find($address_id) : 0;
                $address_text = optional($country)->name;
                $type_name = __("Country");
                break;

            case 'state':
                $state = $address_id ? \App\Country\State::find($address_id) : 0;
                $address_text = optional($state)->name;
                $type_name = __("State");
                break;

            case 'city':
                $address_text = $address_id;
                $type_name = __("City");
                break;

            case 'zipcode':
                $address_text = $address_id;
                $type_name = __("Zip Code");
                break;

            default:
                $type_name = "";
                $address_text = "";
                break;
        }

        $output = '<li class="list"><span><b>'. $type_name .':</b></span> '. $address_text .'</li>';

        if ($address_text && is_string($address_text) && strlen($address_text)) {
            return $output;
        }
    }

    function ratingMarkup($rating_avg, $rating_count, $include_count = true) {
        $width = round($rating_avg * 20);

        $output = '<div class="rating-wrapper"><div class="rating-contents"><div class="ratings"><span class="hide-rating"></span>';
        $output .= '<span class="show-rating" style="width: '.$width.'%"></span>';
        $output .= '</div>';

        if ($include_count) {
            $output .= '<p><span class="total-ratings">(' . $rating_count . ')</span></p>';
        }

        $output .= '</div></div>';
        return $output;
    }

    function getItemAttributes($product_id)
    {
        $product = Product::find($product_id);
        if (is_null($product)) {
            return [];
        }

        $result = [];
        $all_attributes = json_decode($product->attributes, true);
        foreach ($all_attributes as $key => $product_attributes) {
            foreach ($product_attributes as $key => $product_attribute) {
                $result[$product_attribute['type']][] = $product_attribute['name'];
            };
        }
        return $result;
    }
    function cartItemTitle($cart_item, Product $product)
    {
        $item_attributes = '';
        $attribute_count = 0;
        if ($cart_item['attributes']) {
            $item_attributes .= ' (';
            foreach ($cart_item['attributes'] as $key => $attribute) {
                if ($key != 'price') {
                    $item_attributes .= $attribute . ', ';
                    $attribute_count += 1;
                }
            }
            $item_attributes = $attribute_count ? substr($item_attributes, 0, -2) . ')' : '';
        }
        $price = $cart_item['attributes']['price'] ?? $product->sale_price;
    }
    function salePercentage($price, $sale_price){
        if ($price && $sale_price) {
            return $sale_price / $price * 100;
        }
    }