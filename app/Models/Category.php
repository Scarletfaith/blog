<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $fillable = ['slug', 'title'];
    protected $quarded = false;

    public function posts() {
        return $this->belongsToMany(Category::class, 'post_categories', 'post_id', 'category_id');
    }
}
