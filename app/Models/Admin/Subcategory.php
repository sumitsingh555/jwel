<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $fillable=[
     'en_Category_id','en_Subcategory_Name','en_Subcategory_Slug','Status','en_Description','Subcategory_Icon','fr_Subcategory_Name','fr_Subcategory_Slug','fr_Description'
    ];
    // public function products()
    // {
    //     return $this->hasMany(Product::class,'Category_Id');
    // }
    
       public function categorys()
    {
        return $this->belongsTo(Category::class,'en_Category_id');
    }
    
    
}