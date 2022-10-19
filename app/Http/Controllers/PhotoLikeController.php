<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Like;


class PhotoLikeController extends Controller
{
    public function store(Request $request){
        $avator = Photo::find($request->id);
        $like = $avator->likes()->create(
            [
               'account_id' => $request->account_id,
               'isLiked' =>$request->isLiked
            ]
           );
           return $like;
   }
}
