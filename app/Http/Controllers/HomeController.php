<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $post = Post::all();
        return inertia()->render('Home', [
            'itemsPosts' => PostResource::collection($post)
        ]);
    }

    public function showWeb($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return inertia()->render('Article', [
            'itemPosts' => new PostResource($post)
        ]);
    }

}
