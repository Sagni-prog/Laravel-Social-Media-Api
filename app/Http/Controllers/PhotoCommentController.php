<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class PhotoCommentController extends Controller
{
    public function store(Request $request){
        $avator = Photo::find($request->id);
        $comment = $avator->comments()->create(
            [
               'account_id' => $request->account_id,
               'body' =>$request->body
            ]
           );
           return $comment;
   }
}
