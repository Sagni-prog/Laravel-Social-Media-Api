<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;

class PostLikeController extends Controller
{
    public function store(Request $request){
        $post = Post::find($request->id);
        $comment = $post->likes()->create(
            [
               'account_id' => $request->account_id,
               'isLiked' =>$request->isLiked
            ]
           );
           return $comment;
   }
}
