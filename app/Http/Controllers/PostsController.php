<?php

namespace App\Http\Controllers;

use Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Post;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('ajax');
    }

    public function index(Request $request)
    {
        http_response_code();
        return Post::where('is_ready', 1)
        ->select('id', 'title', 'date', 'path', 'category_id')
        ->orderBy('date', 'desc')
        ->with(['category' => function($query) {
            $query->select('id', 'name');
        }])
        ->get();
    }

    public function show(Post $post)
    {
        if (!$post->is_ready) {
            return app()->abort(404);
        }
        http_response_code();
        $previous_post = Post::where('is_ready', 1)->where('date', '<', $post->date)->orderBy('date', 'desc')->first();
        $next_post = Post::where('is_ready', 1)->where('date', '>', $post->date)->orderBy('date', 'asc')->first();
        $post->previous_id = $previous_post ? $previous_post->id : 0;
        $post->next_id = $next_post ? $next_post->id : 0;
        return $post;
    }
}
