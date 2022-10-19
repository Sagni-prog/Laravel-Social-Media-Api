<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;

class PostCommentController extends Controller
{
    public function store(Request $request){
         $post = Post::find($request->id);
         $comment = $post->comments()->create(
             [
                'account_id' => $request->account_id,
                'body' =>$request->body
             ]
            );
            return $comment;
    }
}
