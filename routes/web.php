<?php

use Illuminate\Support\Facades\Route;
use App\Models\Account;
use App\Models\Photo;
use App\Models\Comment;
use App\Models\Post;

Route::get('/user', function () {

    // $verification_pin = random_int(100000, 999999);
    // $reset_pin = random_int(100000, 999999);
    
    // $num = Account::all()->count() + 1;
    // $user = Account::create(
    //     [
    //     'friend_id' => $num,
    //     'email' => 'van@gmail.com',
    //     'first_name' => 'Van',
    //     'middle_name' => 'Hev',
    //     'last_name' => 'Tammy',
    //     'password' => '123',
    //     'verification_pin' => $verification_pin,
    //      'reset_pin' => $reset_pin
    //     ]
    //    )->photos()->create(
    //         [
    //             'image_url' => 'van_avator'
    //         ]
    //     );

      
        $user = Account::with('photos')->get();
        $data = Photo::with('likes')->get();
        
    // $datas = Photo::find(2);
   

    // $datas->comments()->create([
    //     'account_id' => $user1->id,
    //     'body' => 'cool image'
    // ]);
    
    // $datas->likes()->create([
    //     'account_id' => $user->id,
    //     'isLiked' => 1
    // ]);
   return view('account',compact('user','data'));
});

Route::get('/post', function () {
    
    // $user1->posts()->create([
    //      'post_title' => 'my second post',
    //      'post_body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptatem, consequuntur assumenda eos dolores ad impedit aliquid laboriosam ipsum nostrum necessitatibus odit, sapiente est ut tempora maiores perferendis rem accusantium Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptatem, consequuntur assumenda eos dolores ad impedit aliquid laboriosam ipsum nostrum necessitatibus odit, sapiente est ut tempora maiores perferendis rem accusantium Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptatem, consequuntur assumenda eos dolores ad impedit aliquid laboriosam ipsum nostrum necessitatibus odit, sapiente est ut tempora maiores perferendis rem accusantium.'
    // ]);
    $user1 = Account::find(2);
    $datas = Post::find(3);

    //  $datas->comments()->create([
    //     'account_id' => $user1->id,
    //     'body' => 'woow you said well'
    // ]);
    
    // $datas->likes()->create([
    //     'account_id' => $user1->id,
    //     'isLiked' => 1
   // ]);

    $post = Post::with('account','comments','likes')->get();
  
    return view('post',compact('post'));
   }
);

Route::get('/',function(){
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


