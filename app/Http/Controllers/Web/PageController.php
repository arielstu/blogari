<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
use App\Tag;

class PageController extends Controller
{
    public function blog()
    {
        $posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);
        return view('web.posts', compact('posts'));
    }
    public function category($slug)
    {
        $category = Category::where('slug', $slug)->pluck('id')->first();
        $posts = Post::orderBy('id', 'DESC')
            ->where('status', 'PUBLISHED')
            ->where('category_id', $category)
            ->paginate(3);
        return view('web.posts', compact('posts'));
    }
    public function tag($slug)
    {

        $posts = Post::orderBy('id', 'DESC')
            ->where('status', 'PUBLISHED')
            ->whereHas('tags', function ($query) use ($slug) {
                $query->where('slug', $slug);
            })
            ->paginate(3);

        return view('web.posts', compact('posts'));
    }
    public function post($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('web.post', compact('post'));
    }
}
