<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; // Add this line

class PostController extends Controller
{
    public function index()
    {
        $post = DB::table('post')->select('*')->get();
        return view('post.index', ['post' => $post]);
    }
}