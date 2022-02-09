<?php

namespace App\Models;

use Carbon\CarbonInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property-read int                     $id
 * @property      string                  $title
 * @property      string                  $slug
 * @property      CarbonInterface         $created_at
 * @property      CarbonInterface|null    $updated_at
 */
class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $fillable = ['slug', 'title'];
    protected $quarded = false;

    public function posts()
    {
        return $this->belongsToMany(Category::class, 'post_categories', 'post_id', 'category_id');
    }
}
