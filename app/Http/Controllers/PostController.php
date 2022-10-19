<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
// use File;

class PostController extends Controller
{

    public function index(){
        $post = Post::with('comments','likes','account')->get();
        return $post;
    }
    public function store(Request $request){
        Post::create(
            [
            'account_id' => $request->account_id,
            'post_title' => $request->post_title,
            'post_body' => $request->post_body
          ]
    );
    }
    
}
