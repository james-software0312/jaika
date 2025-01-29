<?php

namespace App;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;


class Blog extends Model implements Feedable
{
    protected $table = 'blogs';

    protected $fillable = [
        'title',
        'status',
        'author',
        'slug',
        'meta_title',
        'meta_description',
        'meta_tags',
        'excerpt',
        'blog_content',
        'blog_categories_id',
        'tags',
        'image',
        'user_id',
        'og_meta_title',
        'og_meta_description',
        'og_meta_image'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo('App\BlogCategory','blog_categories_id');
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo('App\Admin','user_id');
    }

    public function toFeedItem() : FeedItem
    {
        return FeedItem::create([
            'id' => $this->id,
            'title' => $this->title,
            'summary' => $this->excerpt,
            'updated' => $this->updated_at,
            'link' => route('frontend.blog.single',$this->slug),
            'authorName' => $this->author,
            'author' => $this->author,
        ]);
    }

    public static function getAllFeedItems(): Collection
    {
        return Blog::all();
    }
}
