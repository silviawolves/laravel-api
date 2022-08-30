<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private function getPostImgSrc($post)
    {
        $toReturn = null;
        if ($post->cover_img) {
            $toReturn = asset("storage/" . $post->cover_img);
        }
        return $toReturn;
    }

    public function index()
    {
        $posts = Post::all();

        $posts->map(function ($post) {
            $post->cover_img = $this->getPostImgSrc($post);
            return $post;
        });

        return response()->json($posts);
    }
}
