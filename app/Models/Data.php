<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $table = 'dataemail';
    protected $fillable = [
        'name','email','phone','message','created_at','updated_at'
    ];

}
