<?php

namespace App\Http\Controllers;
use App\Models\Account;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(){
      $user = Account::with('posts','photos')->get();
      return $user;
    }

    public function store(Request $request){

         $verification_pin = random_int(100000, 999999);
         $reset_pin = random_int(100000, 999999);
         $num = Account::all()->count() + 1;
         if($request->hasFile('file')){
         $image_url = $request->file('file')->store('img');
         }
         else{
          $image_url = 'default_url';
         }

        $user = Account::create(
                [
                'friend_id' => $num,
                'email' => $request->email,
                'first_name' => $request->first_name,
                'middle_name' => $request->middle_name,
                'last_name' => $request->last_name,
                'password' => $request->password,
                'verification_pin' => $verification_pin,
                 'reset_pin' => $reset_pin
                ]
             )->photos()->create(
              [
                 'image_url' => $image_url
              ]
           );
            
        }
    }
