<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
            protected $fillable = [
                'account_id',
                'country',
                'city',
                'user_ip_address',
                'user_mac_address',
                'user_longitude',
                'user_latitude'
            ];

            public function account(){
                return $this->belongsTo(Account::class);
            }
        }
