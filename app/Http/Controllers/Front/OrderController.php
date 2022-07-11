<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Front\Placeorder;  
use App\Models\Front\subcategorie; 
use DB;

class OrderController extends Controller
{
    function designdata(Request $request){
        $data = $request->validate([
            'diamond'=> 'required',
            'colour'=> 'required',
            'purity'=> 'required',
            'budget'=> 'required',
        ],[
            'diamond.required'=>'*Diamond Clarity Field is Required !',
            'colour.required'=>'*Gold Colour Field is Required !',
            'purity.required'=>'*Gold Purity Field is Required !',
            'budget.required'=>'*budget Field is Required !',
        ]);
        // $value =  Placeorder::insert($validated);
        return response()->json($request->all());
    }

    function designvalue(Request $request){
        print_r($request->all());
        $data = $request->validate([
            'fname'=> 'required',
            'lname'=> 'required',
            'email'=> 'required',
            'phone'=> 'required',
            'address'=> 'required',
        ],[
            'fname.required'=>'*First Name Field is Required !',
            'lname.required'=>'*Last Name Field is Required !',
            'email.required'=>'*Email Field is Required !',
            'phone.required'=>'*Mobile Number Field is Required !',
            'address.required'=>'*Address Field is Required !',
        ]);
          
            if ($request->file('image')) {
                $file = $request->file('image');
                $fileimgname = time() . '.' . $file->extension();
                $file->move(public_path('/uploads/userdesign/'), $fileimgname);
                $inputs['image'] = $fileimgname;
            }
            $value =  Placeorder::insert($request->all());
            return response()->json($value);
    }

    function selectcategory(Request $request){
            $data = subcategorie::where('en_Category_id',$request->data)->get();
            return response()->json($data); 
        
    }

    function form2data(Request $request){
        $data = $request->validate([
            'diamond'=> 'required',
            'colour'=> 'required',
            'purity'=> 'required',
            'budget'=> 'required',
            'category'=>'required',
            'subcategory'=>'required',
        ],[
            'diamond.required'=>'*Diamond Clarity Field is Required !',
            'colour.required'=>'*Gold Colour Field is Required !',
            'purity.required'=>'*Gold Purity Field is Required !',
            'budget.required'=>'*budget Field is Required !',
            'category.required'=>'*category Field is Required !',
            'subcategory.required'=>'*subcategory Field is Required !',
        ]);
        // $value =  Placeorder::insert($validated);
        return response()->json($data);
    }
    
    function searchsku(Request $request){
        $data = $request->validate([
            'skunumber'=> 'required',
        ],[
            'skunumber.required'=>'*SKU Field is Required !',
        ]);
        
        $query = DB::table('products')->where('id',$request->skunumber)->first();
        
        $data = 'https://photostock.sarkarimaster.in/public/mainwebsite/assets/img/home/1.jpg';
        return response()->json($data);
    }


}
