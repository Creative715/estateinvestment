<?php

namespace App\Models;

use App\Helpers\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Page extends Model
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
    public function getContentPreview(){
        return Str::limit($this->content, 120);
    }
}
