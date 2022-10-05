<?php

namespace App\Models;

use App\Helpers\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory, HasSlug;

    protected $guarded = [];

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


    public function city(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Models\City', 'city_id');
    }
    public function state()
    {
        return $this->hasOne(State::class);
    }

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
}
