<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Admin
 *
 * @property int $id
 * @property string $name
 * @property string $username
 * @property string $email
 * @property int $email_verified
 * @property string $role
 * @property string|null $image
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereEmailVerified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereUsername($value)
 */
	class Admin extends \Eloquent {}
}

namespace App{
/**
 * App\AdminRole
 *
 * @property int $id
 * @property string $name
 * @property string|null $permission
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AdminRole newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AdminRole newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AdminRole query()
 * @method static \Illuminate\Database\Eloquent\Builder|AdminRole whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminRole whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminRole whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminRole wherePermission($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminRole whereUpdatedAt($value)
 */
	class AdminRole extends \Eloquent {}
}

namespace App{
/**
 * App\Blog
 *
 * @property int $id
 * @property string $title
 * @property string $blog_content
 * @property int $blog_categories_id
 * @property string $tags
 * @property string|null $image
 * @property string|null $meta_tags
 * @property string|null $meta_description
 * @property string|null $user_id
 * @property string|null $excerpt
 * @property string|null $og_meta_title
 * @property string|null $og_meta_description
 * @property string|null $og_meta_image
 * @property string|null $slug
 * @property string|null $author
 * @property string|null $status
 * @property int $visit_count
 * @property string|null $meta_title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\BlogCategory|null $category
 * @property-read \App\Admin|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog query()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereBlogCategoriesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereBlogContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereExcerpt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereMetaTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereMetaTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereOgMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereOgMetaImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereOgMetaTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereVisitCount($value)
 */
	class Blog extends \Eloquent implements \Spatie\Feed\Feedable {}
}

namespace App{
/**
 * App\BlogCategory
 *
 * @property int $id
 * @property string $name
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory whereUpdatedAt($value)
 */
	class BlogCategory extends \Eloquent {}
}

namespace App\Campaign{
/**
 * App\Campaign\Campaign
 *
 * @property int $id
 * @property string $title
 * @property string $subtitle
 * @property int $image
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Campaign\CampaignProduct[] $products
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign query()
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign whereSubtitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Campaign whereUpdatedAt($value)
 */
	class Campaign extends \Eloquent {}
}

namespace App\Campaign{
/**
 * App\Campaign\CampaignProduct
 *
 * @property int $id
 * @property int $product_id
 * @property int $campaign_id
 * @property string $campaign_price
 * @property int $units_for_sale
 * @property string|null $start_date
 * @property string|null $end_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Campaign\Campaign|null $campaign
 * @property-read \App\Product\Product|null $product
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignProduct whereCampaignId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignProduct whereCampaignPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignProduct whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignProduct whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignProduct whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignProduct whereUnitsForSale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignProduct whereUpdatedAt($value)
 */
	class CampaignProduct extends \Eloquent {}
}

namespace App\Campaign{
/**
 * App\Campaign\CampaignSoldProduct
 *
 * @property int $id
 * @property int $product_id
 * @property int $sold_count
 * @property float $total_amount
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignSoldProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignSoldProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignSoldProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignSoldProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignSoldProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignSoldProduct whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignSoldProduct whereSoldCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignSoldProduct whereTotalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CampaignSoldProduct whereUpdatedAt($value)
 */
	class CampaignSoldProduct extends \Eloquent {}
}

namespace App{
/**
 * App\CategoryMenu
 *
 * @property int $id
 * @property string $title
 * @property string|null $content
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryMenu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryMenu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryMenu query()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryMenu whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryMenu whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryMenu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryMenu whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryMenu whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryMenu whereUpdatedAt($value)
 */
	class CategoryMenu extends \Eloquent {}
}

namespace App{
/**
 * App\Comment
 *
 * @property-read \App\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Comment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment query()
 */
	class Comment extends \Eloquent {}
}

namespace App{
/**
 * App\ContactInfoItem
 *
 * @property int $id
 * @property string $title
 * @property string $icon
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ContactInfoItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactInfoItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactInfoItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactInfoItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactInfoItem whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactInfoItem whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactInfoItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactInfoItem whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactInfoItem whereUpdatedAt($value)
 */
	class ContactInfoItem extends \Eloquent {}
}

namespace App\Country{
/**
 * App\Country\Country
 *
 * @property int $id
 * @property string $name
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Country\State[] $states
 * @property-read int|null $states_count
 * @method static \Illuminate\Database\Eloquent\Builder|Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country query()
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereUpdatedAt($value)
 */
	class Country extends \Eloquent {}
}

namespace App\Country{
/**
 * App\Country\State
 *
 * @property int $id
 * @property string $name
 * @property int $country_id
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Country\Country|null $country
 * @property-read \App\Tax\StateTax|null $tax
 * @method static \Illuminate\Database\Eloquent\Builder|State newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State query()
 * @method static \Illuminate\Database\Eloquent\Builder|State whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereUpdatedAt($value)
 */
	class State extends \Eloquent {}
}

namespace App{
/**
 * App\Faq
 *
 * @property int $id
 * @property string $title
 * @property string|null $status
 * @property string|null $is_open
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Faq newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq query()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereIsOpen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereUpdatedAt($value)
 */
	class Faq extends \Eloquent {}
}

namespace App{
/**
 * App\FormBuilder
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $email
 * @property string|null $button_text
 * @property string|null $fields
 * @property string|null $success_message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FormBuilder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormBuilder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormBuilder query()
 * @method static \Illuminate\Database\Eloquent\Builder|FormBuilder whereButtonText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormBuilder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormBuilder whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormBuilder whereFields($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormBuilder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormBuilder whereSuccessMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormBuilder whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormBuilder whereUpdatedAt($value)
 */
	class FormBuilder extends \Eloquent {}
}

namespace App{
/**
 * App\HeaderSlider
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $subtitle
 * @property string|null $description
 * @property string|null $btn_01_status
 * @property string|null $btn_01_text
 * @property string|null $btn_01_url
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderSlider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderSlider newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderSlider query()
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderSlider whereBtn01Status($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderSlider whereBtn01Text($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderSlider whereBtn01Url($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderSlider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderSlider whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderSlider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderSlider whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderSlider whereSubtitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderSlider whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeaderSlider whereUpdatedAt($value)
 */
	class HeaderSlider extends \Eloquent {}
}

namespace App{
/**
 * App\ImageGallery
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGallery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGallery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGallery query()
 */
	class ImageGallery extends \Eloquent {}
}

namespace App{
/**
 * App\ImageGalleryCategory
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGalleryCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGalleryCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ImageGalleryCategory query()
 */
	class ImageGalleryCategory extends \Eloquent {}
}

namespace App{
/**
 * App\KeyFeatures
 *
 * @method static \Illuminate\Database\Eloquent\Builder|KeyFeatures newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KeyFeatures newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KeyFeatures query()
 */
	class KeyFeatures extends \Eloquent {}
}

namespace App{
/**
 * App\Language
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $slug
 * @property string|null $direction
 * @property string|null $status
 * @property int|null $default
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Language newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Language newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Language query()
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereDirection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereUpdatedAt($value)
 */
	class Language extends \Eloquent {}
}

namespace App{
/**
 * App\MediaUpload
 *
 * @property int $id
 * @property string $title
 * @property string $path
 * @property string|null $alt
 * @property string|null $size
 * @property string|null $dimensions
 * @property int|null $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|MediaUpload newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MediaUpload newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MediaUpload query()
 * @method static \Illuminate\Database\Eloquent\Builder|MediaUpload whereAlt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaUpload whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaUpload whereDimensions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaUpload whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaUpload wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaUpload whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaUpload whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaUpload whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaUpload whereUserId($value)
 */
	class MediaUpload extends \Eloquent {}
}

namespace App{
/**
 * App\Menu
 *
 * @property int $id
 * @property string $title
 * @property string|null $content
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Menu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Menu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Menu query()
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereUpdatedAt($value)
 */
	class Menu extends \Eloquent {}
}

namespace App{
/**
 * App\ModulePageSettings
 *
 * @property int $id
 * @property string $option_name
 * @property string|null $option_value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ModulePageSettings newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ModulePageSettings newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ModulePageSettings query()
 * @method static \Illuminate\Database\Eloquent\Builder|ModulePageSettings whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModulePageSettings whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModulePageSettings whereOptionName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModulePageSettings whereOptionValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModulePageSettings whereUpdatedAt($value)
 */
	class ModulePageSettings extends \Eloquent {}
}

namespace App{
/**
 * App\Newsletter
 *
 * @property int $id
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $token
 * @property string|null $verified
 * @method static \Illuminate\Database\Eloquent\Builder|Newsletter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Newsletter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Newsletter query()
 * @method static \Illuminate\Database\Eloquent\Builder|Newsletter whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Newsletter whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Newsletter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Newsletter whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Newsletter whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Newsletter whereVerified($value)
 */
	class Newsletter extends \Eloquent {}
}

namespace App{
/**
 * App\Page
 *
 * @property int $id
 * @property string $title
 * @property string|null $slug
 * @property string|null $meta_tags
 * @property string|null $meta_description
 * @property string|null $content
 * @property string|null $status
 * @property string|null $visibility
 * @property int|null $page_builder_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $navbar_variant
 * @property string|null $footer_variant
 * @property string|null $breadcrumb_status
 * @property string|null $page_container_option
 * @method static \Illuminate\Database\Eloquent\Builder|Page newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Page newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Page query()
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereBreadcrumbStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereFooterVariant($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereMetaTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereNavbarVariant($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page wherePageBuilderStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page wherePageContainerOption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereVisibility($value)
 */
	class Page extends \Eloquent {}
}

namespace App{
/**
 * App\PageBuilder
 *
 * @property int $id
 * @property string|null $addon_name
 * @property string|null $addon_type
 * @property string|null $addon_location
 * @property int|null $addon_order
 * @property int|null $addon_page_id
 * @property string|null $addon_page_type
 * @property string|null $addon_settings
 * @property string|null $addon_namespace
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PageBuilder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PageBuilder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PageBuilder query()
 * @method static \Illuminate\Database\Eloquent\Builder|PageBuilder whereAddonLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageBuilder whereAddonName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageBuilder whereAddonNamespace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageBuilder whereAddonOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageBuilder whereAddonPageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageBuilder whereAddonPageType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageBuilder whereAddonSettings($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageBuilder whereAddonType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageBuilder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageBuilder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageBuilder whereUpdatedAt($value)
 */
	class PageBuilder extends \Eloquent {}
}

namespace App\Product{
/**
 * App\Product\Product
 *
 * @property int $id
 * @property string $title
 * @property string|null $summary
 * @property string|null $description
 * @property int|null $category_id
 * @property string|null $sub_category_id
 * @property string|null $image
 * @property string|null $product_image_gallery
 * @property float|null $price
 * @property float|null $sale_price
 * @property string|null $badge
 * @property string $status
 * @property string|null $slug
 * @property string|null $attributes
 * @property-read int|null $sold_count
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product\ProductAdditionalInformation[] $additionalInfo
 * @property-read int|null $additional_info_count
 * @property-read \App\Campaign\CampaignProduct|null $campaignProduct
 * @property-read \App\Campaign\CampaignSoldProduct|null $campaignSoldProduct
 * @property-read \App\Product\ProductCategory|null $category
 * @property-read \App\Product\ProductInventory|null $inventory
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product\ProductRating[] $rating
 * @property-read int|null $rating_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product\ProductSellInfo[] $sold
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product\ProductTag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Query\Builder|Product onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereAttributes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereBadge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereProductImageGallery($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSalePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSoldCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSubCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSummary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Product withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Product withoutTrashed()
 */
	class Product extends \Eloquent {}
}

namespace App\Product{
/**
 * App\Product\ProductAdditionalInformation
 *
 * @property int $id
 * @property int $product_id
 * @property string $title
 * @property string $text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAdditionalInformation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAdditionalInformation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAdditionalInformation query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAdditionalInformation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAdditionalInformation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAdditionalInformation whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAdditionalInformation whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAdditionalInformation whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAdditionalInformation whereUpdatedAt($value)
 */
	class ProductAdditionalInformation extends \Eloquent {}
}

namespace App\Product{
/**
 * App\Product\ProductAttribute
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $terms
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAttribute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAttribute newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAttribute query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAttribute whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAttribute whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAttribute whereTerms($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAttribute whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAttribute whereUpdatedAt($value)
 */
	class ProductAttribute extends \Eloquent {}
}

namespace App\Product{
/**
 * App\Product\ProductCategory
 *
 * @property int $id
 * @property string $title
 * @property string $status
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Product\Product|null $product
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product\ProductSubCategory[] $subcategory
 * @property-read int|null $subcategory_count
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereUpdatedAt($value)
 */
	class ProductCategory extends \Eloquent {}
}

namespace App\Product{
/**
 * App\Product\ProductCoupon
 *
 * @property int $id
 * @property string $title
 * @property string $code
 * @property string|null $discount
 * @property string|null $discount_type
 * @property string|null $discount_on
 * @property string|null $discount_on_details
 * @property string|null $expire_date
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCoupon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCoupon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCoupon query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCoupon whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCoupon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCoupon whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCoupon whereDiscountOn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCoupon whereDiscountOnDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCoupon whereDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCoupon whereExpireDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCoupon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCoupon whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCoupon whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCoupon whereUpdatedAt($value)
 */
	class ProductCoupon extends \Eloquent {}
}

namespace App\Product{
/**
 * App\Product\ProductInventory
 *
 * @property int $id
 * @property int $product_id
 * @property string $sku
 * @property int|null $stock_count
 * @property int|null $sold_count
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product\ProductInventoryDetails[] $details
 * @property-read int|null $details_count
 * @property-read \App\Product\Product|null $product
 * @method static \Illuminate\Database\Eloquent\Builder|ProductInventory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductInventory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductInventory query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductInventory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductInventory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductInventory whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductInventory whereSku($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductInventory whereSoldCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductInventory whereStockCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductInventory whereUpdatedAt($value)
 */
	class ProductInventory extends \Eloquent {}
}

namespace App\Product{
/**
 * App\Product\ProductInventoryDetails
 *
 * @property int $id
 * @property int $inventory_id
 * @property int $attribute_id
 * @property string $attribute_value
 * @property int $stock_count
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductInventoryDetails newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductInventoryDetails newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductInventoryDetails query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductInventoryDetails whereAttributeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductInventoryDetails whereAttributeValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductInventoryDetails whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductInventoryDetails whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductInventoryDetails whereInventoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductInventoryDetails whereStockCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductInventoryDetails whereUpdatedAt($value)
 */
	class ProductInventoryDetails extends \Eloquent {}
}

namespace App\Product{
/**
 * App\Product\ProductRating
 *
 * @property int $id
 * @property int $product_id
 * @property int $user_id
 * @property int|null $status
 * @property int $rating
 * @property string|null $review_msg
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Product\Product|null $product
 * @property-read \App\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRating newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRating newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRating query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRating whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRating whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRating whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRating whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRating whereReviewMsg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRating whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRating whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRating whereUserId($value)
 */
	class ProductRating extends \Eloquent {}
}

namespace App\Product{
/**
 * App\Product\ProductSellInfo
 *
 * @property int $id
 * @property string $name
 * @property string|null $email
 * @property int|null $user_id
 * @property string $phone
 * @property string|null $country
 * @property string|null $address
 * @property string|null $city
 * @property string|null $state
 * @property string|null $zipcode
 * @property string|null $product_id
 * @property string|null $coupon
 * @property string|null $coupon_discounted
 * @property string|null $total_amount
 * @property string|null $status
 * @property string|null $payment_status
 * @property string|null $payment_gateway
 * @property string|null $payment_track
 * @property string|null $transaction_id
 * @property string|null $order_details
 * @property string|null $payment_meta
 * @property string|null $shipping_address_id
 * @property string|null $selected_shipping_option
 * @property string|null $checkout_type
 * @property string|null $checkout_image_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Shipping\UserShippingAddress|null $shipping
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSellInfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSellInfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSellInfo query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSellInfo whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSellInfo whereCheckoutImagePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSellInfo whereCheckoutType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSellInfo whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSellInfo whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSellInfo whereCoupon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSellInfo whereCouponDiscounted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSellInfo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSellInfo whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSellInfo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSellInfo whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSellInfo whereOrderDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSellInfo wherePaymentGateway($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSellInfo wherePaymentMeta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSellInfo wherePaymentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSellInfo wherePaymentTrack($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSellInfo wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSellInfo whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSellInfo whereSelectedShippingOption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSellInfo whereShippingAddressId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSellInfo whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSellInfo whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSellInfo whereTotalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSellInfo whereTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSellInfo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSellInfo whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSellInfo whereZipcode($value)
 */
	class ProductSellInfo extends \Eloquent {}
}

namespace App\Product{
/**
 * App\Product\ProductSubCategory
 *
 * @property int $id
 * @property string $title
 * @property string $status
 * @property string|null $image
 * @property int $category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Product\ProductCategory|null $category
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSubCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSubCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSubCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSubCategory whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSubCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSubCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSubCategory whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSubCategory whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSubCategory whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSubCategory whereUpdatedAt($value)
 */
	class ProductSubCategory extends \Eloquent {}
}

namespace App\Product{
/**
 * App\Product\ProductTag
 *
 * @property int $id
 * @property int $product_id
 * @property string $tag
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTag query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTag whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTag whereTag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTag whereUpdatedAt($value)
 */
	class ProductTag extends \Eloquent {}
}

namespace App\Product{
/**
 * App\Product\Tag
 *
 * @property int $id
 * @property string $tag_text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereTagText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereUpdatedAt($value)
 */
	class Tag extends \Eloquent {}
}

namespace App\Shipping{
/**
 * App\Shipping\ShippingMethod
 *
 * @property int $id
 * @property string $name
 * @property int|null $zone_id
 * @property int $is_default
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Shipping\ShippingMethodOption|null $availableOptions
 * @property-read \App\Shipping\ShippingMethodOption|null $options
 * @property-read \App\Shipping\Zone|null $zone
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethod query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethod whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethod whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethod whereIsDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethod whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethod whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethod whereZoneId($value)
 */
	class ShippingMethod extends \Eloquent {}
}

namespace App\Shipping{
/**
 * App\Shipping\ShippingMethodOption
 *
 * @property int $id
 * @property string $title
 * @property int $shipping_method_id
 * @property int $status
 * @property int $tax_status
 * @property string|null $setting_preset
 * @property float $cost
 * @property float|null $minimum_order_amount
 * @property string|null $coupon
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethodOption newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethodOption newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethodOption query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethodOption whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethodOption whereCoupon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethodOption whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethodOption whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethodOption whereMinimumOrderAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethodOption whereSettingPreset($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethodOption whereShippingMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethodOption whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethodOption whereTaxStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethodOption whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingMethodOption whereUpdatedAt($value)
 */
	class ShippingMethodOption extends \Eloquent {}
}

namespace App\Shipping{
/**
 * App\Shipping\UserShippingAddress
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $address
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserShippingAddress newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserShippingAddress newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserShippingAddress query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserShippingAddress whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserShippingAddress whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserShippingAddress whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserShippingAddress whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserShippingAddress whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserShippingAddress whereUserId($value)
 */
	class UserShippingAddress extends \Eloquent {}
}

namespace App\Shipping{
/**
 * App\Shipping\Zone
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Shipping\ZoneRegion|null $region
 * @method static \Illuminate\Database\Eloquent\Builder|Zone newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Zone newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Zone query()
 * @method static \Illuminate\Database\Eloquent\Builder|Zone whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zone whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zone whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zone whereUpdatedAt($value)
 */
	class Zone extends \Eloquent {}
}

namespace App\Shipping{
/**
 * App\Shipping\ZoneRegion
 *
 * @property int $id
 * @property int $zone_id
 * @property string|null $country
 * @property string|null $state
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneRegion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneRegion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneRegion query()
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneRegion whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneRegion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneRegion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneRegion whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneRegion whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ZoneRegion whereZoneId($value)
 */
	class ZoneRegion extends \Eloquent {}
}

namespace App{
/**
 * App\Slider
 *
 * @property int $id
 * @property string $image
 * @property string|null $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Slider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Slider newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Slider query()
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereUpdatedAt($value)
 */
	class Slider extends \Eloquent {}
}

namespace App{
/**
 * App\SocialIcons
 *
 * @property int $id
 * @property string $icon
 * @property string $url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SocialIcons newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SocialIcons newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SocialIcons query()
 * @method static \Illuminate\Database\Eloquent\Builder|SocialIcons whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialIcons whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialIcons whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialIcons whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialIcons whereUrl($value)
 */
	class SocialIcons extends \Eloquent {}
}

namespace App{
/**
 * App\StaticOption
 *
 * @property int $id
 * @property string $option_name
 * @property string|null $option_value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|StaticOption newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StaticOption newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StaticOption query()
 * @method static \Illuminate\Database\Eloquent\Builder|StaticOption whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaticOption whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaticOption whereOptionName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaticOption whereOptionValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaticOption whereUpdatedAt($value)
 */
	class StaticOption extends \Eloquent {}
}

namespace App\Support{
/**
 * App\Support\SupportDepartment
 *
 * @property int $id
 * @property string $name
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SupportDepartment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SupportDepartment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SupportDepartment query()
 * @method static \Illuminate\Database\Eloquent\Builder|SupportDepartment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportDepartment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportDepartment whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportDepartment whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportDepartment whereUpdatedAt($value)
 */
	class SupportDepartment extends \Eloquent {}
}

namespace App\Support{
/**
 * App\Support\SupportTicket
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $via
 * @property string|null $operating_system
 * @property string|null $user_agent
 * @property string|null $description
 * @property string|null $subject
 * @property string|null $status
 * @property string|null $priority
 * @property int|null $departments
 * @property int|null $user_id
 * @property int|null $admin_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Admin|null $admin
 * @property-read \App\Support\SupportDepartment|null $department
 * @property-read \App\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTicket newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTicket newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTicket query()
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTicket whereAdminId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTicket whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTicket whereDepartments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTicket whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTicket whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTicket whereOperatingSystem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTicket wherePriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTicket whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTicket whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTicket whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTicket whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTicket whereUserAgent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTicket whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTicket whereVia($value)
 */
	class SupportTicket extends \Eloquent {}
}

namespace App\Support{
/**
 * App\Support\SupportTicketMessage
 *
 * @property int $id
 * @property string|null $message
 * @property string|null $notify
 * @property string|null $attachment
 * @property string|null $type
 * @property int|null $support_ticket_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTicketMessage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTicketMessage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTicketMessage query()
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTicketMessage whereAttachment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTicketMessage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTicketMessage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTicketMessage whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTicketMessage whereNotify($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTicketMessage whereSupportTicketId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTicketMessage whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupportTicketMessage whereUpdatedAt($value)
 */
	class SupportTicketMessage extends \Eloquent {}
}

namespace App\Tax{
/**
 * App\Tax\CountryTax
 *
 * @property int $id
 * @property int $country_id
 * @property float|null $tax_percentage
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Country\Country|null $country
 * @method static \Illuminate\Database\Eloquent\Builder|CountryTax newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CountryTax newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CountryTax query()
 * @method static \Illuminate\Database\Eloquent\Builder|CountryTax whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CountryTax whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CountryTax whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CountryTax whereTaxPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CountryTax whereUpdatedAt($value)
 */
	class CountryTax extends \Eloquent {}
}

namespace App\Tax{
/**
 * App\Tax\StateTax
 *
 * @property int $id
 * @property int $state_id
 * @property float|null $tax_percentage
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Country\State|null $state
 * @method static \Illuminate\Database\Eloquent\Builder|StateTax newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StateTax newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StateTax query()
 * @method static \Illuminate\Database\Eloquent\Builder|StateTax whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StateTax whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StateTax whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StateTax whereTaxPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StateTax whereUpdatedAt($value)
 */
	class StateTax extends \Eloquent {}
}

namespace App{
/**
 * App\TopbarInfo
 *
 * @property int $id
 * @property string $icon
 * @property string $details
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TopbarInfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TopbarInfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TopbarInfo query()
 * @method static \Illuminate\Database\Eloquent\Builder|TopbarInfo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TopbarInfo whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TopbarInfo whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TopbarInfo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TopbarInfo whereUpdatedAt($value)
 */
	class TopbarInfo extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string|null $email
 * @property string $username
 * @property string|null $email_verified
 * @property string|null $email_verify_token
 * @property string|null $phone
 * @property string|null $address
 * @property \App\Country\State|null $state
 * @property string|null $city
 * @property string|null $zipcode
 * @property \App\Country\Country|null $country
 * @property string $password
 * @property string|null $remember_token
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $facebook_id
 * @property string|null $google_id
 * @property string|null $country_code
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Shipping\UserShippingAddress[] $shipping
 * @property-read int|null $shipping_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCountryCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifyToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFacebookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGoogleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereZipcode($value)
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\Widgets
 *
 * @property int $id
 * @property string|null $widget_name
 * @property string $widget_content
 * @property int|null $widget_order
 * @property string|null $widget_location
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Widgets newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Widgets newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Widgets query()
 * @method static \Illuminate\Database\Eloquent\Builder|Widgets whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Widgets whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Widgets whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Widgets whereWidgetContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Widgets whereWidgetLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Widgets whereWidgetName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Widgets whereWidgetOrder($value)
 */
	class Widgets extends \Eloquent {}
}

