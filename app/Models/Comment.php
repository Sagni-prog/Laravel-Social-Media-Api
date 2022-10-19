<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['account_id','body'];

    public function account(){
     return $this->belongsTo(Account::class);
    }
    public function photos(){
        return $this->morphToMany(Photo::class,'commentable');
    }
    public function post(){
        return $this->morphTo(Account::class,'commentable');
    }
}
