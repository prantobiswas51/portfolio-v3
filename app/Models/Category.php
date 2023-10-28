<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'catName',
        'catSlug',
        'catMessage',
        'catImageUrl'
    ];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
        return $this->belongsToMany(Product::class);
    }
}
