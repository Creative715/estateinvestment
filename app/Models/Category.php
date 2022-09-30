<?php

namespace App\Models;

use App\Helpers\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory, HasSlug;

    protected function getSlugOptions()
    {
        return SlugOptions::create()
            ->slugSeperator('-')
            ->generateSlugFrom('title')
            ->saveSlugTo('slug');
    }
    public function getContentPreview(){
        return Str::limit($this->description, 100);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
