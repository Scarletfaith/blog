<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Http\Requests\Admin\Post\StoreRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request) {
        $data = $request->validated([
            'title' => 'required:unique:posts|max:255'
        ]);

        $category_ids = $data['category_id'];
        unset($data['category_id']);

        // Проверка и формирование Slug
        $slug = Str::slug($data['title'], '-');
        $count = DB::table('posts')->whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
        $data['slug'] = $count ? "{$slug}-{$count}" : $slug;

        $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
        $data['user_id'] = auth()->id();

        //dd($data);
        
        $post = Post::create($data);
        $post->categories()->attach($category_ids);

        return redirect()->route('admin.post.index');
    }
}
