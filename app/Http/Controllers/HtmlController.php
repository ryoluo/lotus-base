<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class HtmlController extends Controller
{
    public function setOgp()
    {
        $title = "Lotus Base";
        $url = request()->url();
        $image_path = url('/') . "/img/ogp/logo-fb.png";
        $error_flag = false;

        $request_uri = explode('/', request()->path());
        switch ($request_uri[0]) {
            case 'about':
                $title = "About - {$title}";
                break;
            case 'works':
                $title = "Works - {$title}";
                break;
            case 'contact':
                $title = "Contact - {$title}";
                break;
            case 'blog':
                if (count($request_uri) === 1) {
                    $title = "Blog - {$title}";
                } else {
                    if (Post::where('id', $request_uri[1])->exists()) {
                        $post = Post::where('id', $request_uri[1])->select('id', 'title', 'path')->first();
                        $title = "{$post->title} - {$title}";
                        $image_path = url('/') . $post->path;
                    }
                }
                break;
        }
        return view('app', compact('title', 'url', 'image_path'));
    }
}
