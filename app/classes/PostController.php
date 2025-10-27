<?php
namespace App\Classes;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();

        Arr::set($posts, "name", "id");
    }
}