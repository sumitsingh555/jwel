<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purity extends Model
{
    use HasFactory;
    protected $fillable=[
        'Purity',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'purity_product');
    }
}
