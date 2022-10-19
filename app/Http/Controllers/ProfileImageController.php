<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Account;

class ProfileImageController extends Controller
{

    public function store(Request $request){
        
         $image_url = $request->file('file')->store('img');
         $avator = Photo::where('id',$request->id)
                 ->update(['image_url' => $image_url]);
        if($avator){
            // return 'you have successfully changed your proile photo';
           
        }
    }
}
