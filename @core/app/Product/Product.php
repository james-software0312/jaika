<?php

namespace App\Product;

use App\Campaign\CampaignProduct;
use App\Campaign\CampaignSoldProduct;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $with = ['category', 'inventory', 'campaignProduct'];

    protected $fillable = [
        'title',
        'slug',
        'summary',
        'description',
        'category_id',
        'sub_category_id',
        'image',
        'product_image_gallery',
        'price',
        'sale_price',
        'badge',
        'status',
        'attributes',
        'sold_count',
        'color',
        'size',
        'contact_id'
    ];

    protected $attributes = [];

    /** ======================================================
     *                      MUTATORs
      ====================================================== */
    public function setSubCategoryIdAttribute($value)
    {
        $this->attributes['sub_category_id'] = json_encode($value);
    }

    public function setProductImageGalleryAttribute($value)
    {
        $this->attributes['product_image_gallery'] = json_encode($value);
    }

    public function setAttributesAttribute($value)
    {
        $this->attributes['attributes'] = json_encode($value);
    }

    /** ======================================================
     *                      SCOPEs / FUNCTIONs
      ====================================================== */
    public function getSubcategory()
    {
        $all_subcategories = [];
        $subcategory_id_arr = (array) json_decode($this->sub_category_id, true);

        foreach ($subcategory_id_arr as $subcategory_id) {
            $subcategory = ProductSubCategory::find($subcategory_id);

            if ($subcategory) {
                $all_subcategories[] = $subcategory;
            }
        }
        return $all_subcategories;
    }

    /** ======================================================
     *                      RELATIONs
      ====================================================== */
    public function category()
    {
        return $this->belongsTo(ProductCategory::class,'category_id');
    }

    public function additionalInfo()
    {
        return $this->hasMany(ProductAdditionalInformation::class);
    }

    public function inventory()
    {
        // return $this->hasOne(ProductInventory::class);
        return $this->hasOne(StockItemModel::class);
    }

    public function rating()
    {
        return $this->hasMany(ProductRating::class);
    }

    public function tags()
    {
        return $this->hasMany(ProductTag::class);
    }

    public function sold()
    {
        return $this->hasMany(ProductSellInfo::class, 'product_id', 'id');
    }

    public function campaignProduct()
    {
        return $this->hasOne(CampaignProduct::class, 'product_id', 'id');
    }

    public function campaignSoldProduct()
    {
        return $this->hasOne(CampaignSoldProduct::class, 'product_id', 'id');
    }
}
