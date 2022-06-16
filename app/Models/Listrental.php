<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listrental extends Model
{
    use HasFactory;
    protected $table = "listrentals";
    protected $fillable = [
        'imagevehicle',
        'typerental',
        'brand',
        'price',
        'status',
    ];
}
