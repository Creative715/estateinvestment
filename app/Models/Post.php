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
        return $query->with('cities', 'state')->orderBy('created_at', 'desc')->paginate($numbers);
    }

    public function getContentPreview(){
        return Str::limit($this->content, 140);
    }
    public function createdAtForHumans(){
        return $this->created_at->diffForHumans();
    }
    public function cities()
    {
        return $this->belongsToMany(City::class, 'post_city');
    }
    public function state()
    {
        return $this->hasOne(State::class);
    }
}
