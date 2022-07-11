<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Front\Color;
use App\Models\Front\Purity;
use App\Models\Front\Categorie;
use App\Models\Front\Product;

class HomeController extends Controller
{
    function index(){
        $colour =  Color::all();
        $purity =  Purity::all();
        $category   = Categorie::all();
        $Product = Product::all();
        return  view('frontend/index',compact('colour','purity','category','Product'));
    }
}
