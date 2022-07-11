<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diamondclarity extends Model
{
    use HasFactory;
    protected $fillable=[
        'diamond_clarity',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'purity_product');
    }
}
