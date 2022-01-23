<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\SlugServices;

class SlugController extends Controller
{
    private $SlugServices;

    public function __construct(SlugServices $SlugServices) {
        $this->SlugServices = $SlugServices;
    }

    public function call($slug) {
        $post = $this->SlugServices->getPostSlug($slug);

        if (!is_null($post)) {
            return $this->post($post);
        } else {
            $category = $this->SlugServices->getCategorySlug($slug);

            if (!is_null($category)) {
                return $this->category($category);
            } else {
                return redirect('/');;
            }
        }
    }

    public function category($category) {
        $categories = $this->SlugServices->getCategories();
        $posts = $this->SlugServices->getPostsInCategory($category->id);

        return view('category.index')->with('posts', $posts)->with('categories', $categories);
    }

    public function post($post) {
        $post = $this->SlugServices->getPost($post);
        $categories = $this->SlugServices->getCategories();

        return view('blog.show')->with('post', $post)->with('categories', $categories);
    }
}
