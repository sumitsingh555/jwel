<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DiamondClarityRequest;
use App\Models\Admin\ProductSize;
use App\Models\Admin\Diamondclarity;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DiamondClarityController extends Controller
{
    public function diamondclarity (Request $request){
 
        if ($request->ajax()) {
            $data = Diamondclarity::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<div class="action__buttons">';
                    $btn = $btn.'<a href="' . route('admin.product.diamondclarity.edit', $data->id) . '" class="btn-action"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('admin.product.diamondclarity.delete', $data->id) . '" class="btn-action delete"><i class="fas fa-trash-alt"></i></a>';
                    $btn = $btn.'</div>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        $data['title'] = __('Diamond Clarity List');
        return view('admin.pages.product_diamondclarity.index');
    }
    
    public function diamondclarityCreate(){
        $data['title'] = __('Product Purity Create');
        return view('admin.pages.product_diamondclarity.create', $data);
    }
     
    public function diamondclarityStore(DiamondClarityRequest $request){
        
        $diamondclarity = Diamondclarity::create([
            'diamond_clarity' => $request->diamondclarity,
        ]);
        if ($diamondclarity) {
            return redirect()->route('admin.product.diamondclarity')->with('toast_success', __('Successfully Stored !'));
        }
        return redirect()->back()->with('toast_error', __('Does not insert  !'));
    }
    
    public function diamondclarityEdit ($id){
    
        $data['title'] = __('Diamond ClarityEdit  Edit');
        $data['edit'] = Diamondclarity::Where('id', $id)->first();
        return view('admin.pages.product_diamondclarity.edit',$data);
    }
    public function diamondclarityUpdate(Request $request){
        $id = $request->id;
        $cat = Diamondclarity::where('id',$id)->first(); 
        $purity = Diamondclarity::where('id',$id)->update([
            // 'diamond_clarity' => $request->diamondclarity,
            'diamond_clarity'=> is_null($request->diamondclarity) ? $cat->diamond_clarity : $request->diamondclarity, 
        ]);
        if ($purity) {
            return redirect()->route('admin.product.diamondclarity')->with('toast_success', __('Successfully Update !'));
        }
        return redirect()->back()->with('toast_error', __('Does not Update  !'));
    }
    public function diamondclarityDelete($id){
        $delete = Diamondclarity::Where('id', $id);
        if ($delete) {
            $delete->delete();
            return redirect()->route('admin.product.diamondclarity')->with('toast_success', __('Successfully Deleted !'));
        }
        return redirect()->route('admin.product.diamondclarity')->with('toast_error', __('Does Not Delete!'));
    }


}
