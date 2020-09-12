<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function index()
    {
        $posts = BlogPost::paginate(config("app.paginator_count"));
        return view("blog-post", ["posts" => $posts]);
    }
}
