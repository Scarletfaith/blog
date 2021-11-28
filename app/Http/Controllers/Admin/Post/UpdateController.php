<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Http\Requests\Admin\Post\UpdateRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Post $post) {
        $data = $request->validated([
            'title' => 'required:unique:posts|max:255'
        ]);

        $category_ids = $data['category_id'];
        unset($data['category_id']);

        $slug = Str::slug($data['title'], '-');
        $count = DB::table('posts')->whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
        $data['slug'] = $count ? "{$slug}-{$count}" : $slug;

        if (isset($data['preview_image'])) {
            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
        }

        //dd($data);

        $post->update($data);
        $post->categories()->sync($category_ids);

        return view('admin.post.show', compact('post'));
    }
}
