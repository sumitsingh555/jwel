<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Placeorder extends Model
{
    use HasFactory;
    protected $table = 'placeorders';
    protected $fillable=[
        'fname',
        'lname',
        'email',
        'phone',
        'address'
    ];
}
