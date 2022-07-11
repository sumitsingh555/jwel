<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductPurityRequest;
use App\Models\Admin\ProductSize;
use App\Models\Admin\Purity;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PurityController extends Controller
{
    public function productPurity(Request $request){
 
        if ($request->ajax()) {
            $data = Purity::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<div class="action__buttons">';
                    $btn = $btn.'<a href="' . route('admin.product.purity.edit', $data->id) . '" class="btn-action"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('admin.product.purity.delete', $data->id) . '" class="btn-action delete"><i class="fas fa-trash-alt"></i></a>';
                    $btn = $btn.'</div>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        $data['title'] = __('Product Purity List');
        return view('admin.pages.product_purity.index', $data);
    }
    
    public function productPurityCreate(){
        $data['title'] = __('Product Purity Create');
        return view('admin.pages.product_purity.create', $data);
    }
    
    public function productPurityStore(ProductPurityRequest $request){
        $Purity = Purity::create([
            'Purity' => $request->purity,
        ]);
        if ($Purity) {
            return redirect()->route('admin.product.purity')->with('toast_success', __('Successfully Stored !'));
        }
        return redirect()->back()->with('toast_error', __('Does not insert  !'));
    }
    
    public function productPurityEdit($id){
    
        $data['title'] = __('Product Purity Edit');
        $data['edit'] = Purity::Where('id', $id)->first();
        return view('admin.pages.product_purity.edit',$data);
    }
    public function productPurityUpdate(Request $request){
        $id = $request->id;
        $cat = Purity::where('id',$id)->first(); 
        $purity = Purity::where('id',$id)->update([
            // 'Purity' => $request->purity,
            'Purity'=> is_null($request->purity) ? $cat->Purity : $request->purity, 
        ]);
        if ($purity) {
            return redirect()->route('admin.product.purity')->with('toast_success', __('Successfully Update !'));
        }
        return redirect()->back()->with('toast_error', __('Does not Update  !'));
    }
    public function productPurityDelete($id){
        $delete = Purity::Where('id', $id);
        if ($delete) {
            $delete->delete();
            return redirect()->route('admin.product.purity')->with('toast_success', __('Successfully Deleted !'));
        }
        return redirect()->route('admin.product.purity')->with('toast_error', __('Does Not Delete!'));
    }

}
