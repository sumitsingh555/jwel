<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubcategoryRequest;
use App\Models\Admin\Category;
use App\Models\Admin\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class SubCategoryController extends Controller
{
    public function subcategory(Request $request){
         if ($request->ajax()) {
            $data = Subcategory::latest()->get();

            return DataTables::of($data)
        
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<div class="action__buttons">';
                    $btn = $btn.'<a href="' . route('admin.subcategory.edit', $data->id) . '" class="btn-action" title="Edit"><i class="fas fa-pencil-alt"></i></a>';

                    if($data->Status == 1){
                        $btn = $btn.'<a href="' . route('admin.subcategory.inactive', $data->id) . '" class="btn-action" title="Inactive"><i class="fas fa-arrow-down"></i></a>';
                    }else{
                        $btn = $btn.'<a href="' . route('admin.subcategory.active', $data->id) . '" class="btn-action" title="Active"><i class="fas fa-arrow-up"></i></a>';
                    }
                    $btn = $btn.'<a href="' . route('admin.subcategory.delete', $data->id) . '" class="btn-action delete" title="Delete"><i class="fas fa-trash-alt"></i></a>';
                    $btn = $btn.'</div>';
                    return $btn;
                })
                   
                 ->editColumn('Category_Name', function ($data) {
                    return $data->categorys->en_Category_Name;
                })
                ->editColumn('Subcategory_Name', function ($data) {
                    return $data->en_Subcategory_Name;
                })
                ->editColumn('Subcategory_Slug', function ($data) {
                    return $data->en_Subcategory_Slug;
                })
                ->editColumn('Status', function ($data) {
                    if($data->Status==1){
                        $active="Active";
                        return '<span class="status active">'.$active.'</span>';
                    }else{
                        $active="Inactive";
                        return '<span class="status blocked">'.$active.'</span>';
                    }
                })
                ->editColumn('Description', function ($data) {
                    return Str::limit($data->en_Description, 10);
                })
                ->editColumn('Category_Icon', function ($data) {
                   return $data->Subcategory_Icon;
                })
                ->rawColumns(['action', 'Category_Name', 'Category_Slug','Status','Description'])
                ->make(true);
        }
        return view('admin.pages.subcategory.index');
    }
    public function subcategoryCreate(){
        $category = Category::all();
        $data['title'] = __('Category Create');
        return view('admin.pages.subcategory.create', $data ,compact('category'));
    }
    public function subcategoryStore(subcategoryRequest $request){
         
        $category=Subcategory::create([
            'en_Category_id'=>$request->en_category_id,
            'en_Subcategory_Name'=>$request->en_subcategory_name,
            'en_Description'=>$request->en_description,
            'en_Subcategory_Slug'=>$this->slugify($request->en_subcategory_name),
            'fr_Subcategory_Name'=>$request->fr_subcategory_name,
            'fr_Description'=>$request->fr_description,
            'fr_Subcategory_Slug'=>$this->slugify($request->fr_subcategory_name),
            'Subcategory_Icon'=>$request->icon_class,
            'Status'=>1,
        ]);
        if($category){
            return redirect()->route('admin.subcategory')->with('toast_success', __('Successfully Stored !'));
        }
        return redirect()->route('admin.subcategory')->with('toast_success', __('Does not Stored !'));
    }
    public function subcategoryInactive($id){
        $inactive=subcategory::find($id)->update(['Status'=>0]);
        if($inactive){
            return redirect()->route('admin.subcategory')->with('toast_success', __('Successfully Inactive !'));
        }
        return redirect()->route('admin.subcategory')->with('toast_success', __('Does not Updated !'));
    }
    public function subcategoryActive($id){
        $inactive=subcategory::find($id)->update(['Status'=>1]);
        if($inactive){
            return redirect()->route('admin.subcategory')->with('toast_success', __('Successfully Active !'));
        }
        return redirect()->route('admin.subcategory')->with('toast_success', __('Does not Updated!'));
    }
    public function subcategoryDelete($id){
            $delete = subcategory::Where('id', $id)->delete();
            if ($delete) {
                return redirect()->route('admin.subcategory')->with('toast_success', __('Successfully Deleted !'));
            }
            return redirect()->route('admin.subcategory')->with('toast_error', __('Does Not Delete!'));
    }
    public function subcategoryEdit($id){
        $data['title'] = __('Subcategory Create');
        $data = Subcategory::where('id', $id)->first();
        $category = Category::all();
        return view('admin.pages.subcategory.edit',compact('data','category'));
    }
        public function subcategoryUpdate(Request $request){

             $id = $request->id;

             $cat = Subcategory::whereid($id)->first();

            
              $update = $cat->update([
                'en_Category_id'=> is_null($request->en_category_id) ? $cat->en_Category_id : $request->en_category_id,  
                'en_Subcategory_Name'=> is_null($request->en_subcategory_name) ? $cat->en_subcategory_name : $request->en_subcategory_name,
                'en_Description'=> is_null($request->en_description) ? $cat->en_Description : $request->en_description,
                'en_Subcategory_Slug'=> is_null($request->en_subcategory_name) ? $cat->en_Subcategory_Slug : $this->slugify($request->en_subcategory_name),
                'fr_Subcategory_Name'=> is_null($request->fr_subcategory_name) ? $cat->fr_Subcategory_Name : $request->fr_subcategory_name,
                'fr_Description'=> is_null($request->fr_description) ? $cat->fr_Description : $request->fr_description,
                'fr_Subcategory_Slug'=> is_null($request->fr_subcategory_name) ? $cat->fr_Subcategory_Slug : $this->slugify($request->fr_subcategory_name),
                'Subcategory_Icon'=> is_null($request->icon_class) ? null : $request->icon_class,
            ]);

            if ($update) {
                return redirect()->route('admin.subcategory')->with('toast_success', __('Successfully Update!'));
            }
            return redirect()->back()->with('toast_error', __('Does not Update  !'));
        }

    public function slugify($text){
        // replace non letter or digits by divider
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate divider
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }
        return $text;
    }
   

}
