<?php

namespace App\Models;

use App\Helpers\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory, HasSlug;

    protected $fillable =  ['title', 'carousel', 'category_id', 'city_id', 'price', 'published', 'slug', 'description', 'img', 'content'];


    protected function getSlugOptions()
    {
        return SlugOptions::create()
            ->slugSeperator('-')
            ->generateSlugFrom('title')
            ->saveSlugTo('slug');
    }

    public function scopeAllPaginate($query, $numbers)
    {
        return $query->with('city', 'state')->orderBy('created_at', 'desc')->where('published', '1')->paginate($numbers);
    }

    public function getContentPreview()
    {
        return Str::limit($this->content, 110);
    }

    public function createdAtForHumans()
    {
        return $this->created_at->diffForHumans();
    }


    public function city(): BelongsTo
    {
        return $this->belongsTo('App\Models\City', 'city_id');
    }
    public function state():HasOne
    {
        return $this->hasOne(State::class);
    }

    public function category():BelongsTo
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function images():HasMany
    {
        return $this->hasMany(Image::class, 'post_id');
    }
}
