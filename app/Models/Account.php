<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
          'friend_id',
          'email',
          'phone_no',
          'first_name',
          'middle_name',
          'last_name',
          'password',
          'verification_pin',
          'reset_pin'
        ];

        public function photos(){
            return $this->morphMany(Photo::class,'photoable');
        }

        public function like(){
            return $this->hasOne(Like::class,'likeable');
        }
        public function comments(){
            return $this->hasMany(Comment::class);
        }
        public function posts(){
            return $this->hasMany(Post::class);
        }
        public function Address(){
            return $this->hasOne(Address::class);
        }
        public function setting(){
            return $this->hasOne(Setting::class);
        }
     }
