<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Builder;

use App\Models\Post;
use App\Models\Category;

class SlugController extends Controller
{
    public function call($slug) {
        $post = Post::where('slug', $slug)->first();

        if (!is_null($post)) {
            return $this->post($post);
        } else {
            $category = Category::where('slug', $slug)->first();

            if (!is_null($category)) {
                return $this->category($category);
            } else {
                return redirect('/');;
            }
        }
    }

    public function category($category) {
        $categories = Category::all();
        $catid = $category->id;
        $category_id = DB::table('categories')->where('id', $category->id)->first();
        //$posts = Post::with('categories')->get();
        $posts = Post::whereHas('categories', function(Builder $query) use ($catid) {
            $query->where('categories.id', $catid);
        })->paginate(6);

        // dd($posts);

        return view('category.index', compact('posts', 'categories', 'category_id'));
    }

    public function post($posts) {
        $categories = Category::all();
        $post = Post::all()->where('id', $posts->id)->first();
        return view('blog.show', compact('post', 'categories'));
    }
}
