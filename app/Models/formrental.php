<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formrental extends Model
{
    use HasFactory;
    protected $table = "formrentals";
    protected $fillable = [
        'typerental',
        'name',
        'identitynumber',
        'gender',
        'phone',
        'email',
        'location',
        'startrental',
        'endrental'
        
    ];

}
