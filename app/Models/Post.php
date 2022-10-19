<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['account_id','post_title','post_body'];

    public function account(){
        return $this->belongsTo(Account::class);
    }

    public function likes(){
        return $this->morphMany(Like::class,'likeable');
    }
   public function comments(){
       return $this->morphToMany(Comment::class,'commentable');
   }
}
