<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class IndexController extends Controller
{
    public function index()
    {
        $posts = Post::with(['user', 'comments', 'tags'])->get();
        return view('index', ['posts' => $posts]);
    }
}
