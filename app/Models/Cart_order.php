<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart_order extends Model
{
    use HasFactory;
    protected $guarded=[];

    function Address(){
        return $this->belongsTo(Cart_order::class,"user_gmail","UserGmail");
    }
}
