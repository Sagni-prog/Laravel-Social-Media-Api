<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = ['image_url'];

    public function account(){
        return $this->morphTo(Account::class);
    }
    public function likes(){
        return $this->morphMany(Like::class,'likeable');
    }
   public function comments(){
       return $this->morphToMany(Comment::class,'commentable');
   }
}
