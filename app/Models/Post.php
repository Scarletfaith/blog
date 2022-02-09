<?php

namespace App\Models;

use Carbon\CarbonInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property-read int                     $id
 * @property      string                  $slug
 * @property      string                  $title
 * @property      string                  $content
 * @property      object                  $preview_image
 * @property      int                     $user_id
 * @property      CarbonInterface         $created_at
 * @property      CarbonInterface|null    $updated_at
 */
class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $fillable = ['slug', 'title', 'content', 'preview_image', 'user_id'];
    protected $quarded = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'post_categories', 'post_id', 'category_id');
    }
}
