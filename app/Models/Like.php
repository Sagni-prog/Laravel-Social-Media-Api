<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $fillable = ['account_id','isLiked'];

    public function photos(){
        return $this->morpheTo(Account::class.'likeable');
    }
    
    public function account(){
        return $this->belongsTo(Account::class);
    }
    public function post(){
        return $this->morphTo(Post::class,'likeable');
    }
}
