<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function adminList(Request $request)
    {
        if ($request->ajax()) {
            $data = User::where('is_admin', ACTIVE);
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<div class="action__buttons">';
                    $btn = $btn.'<a href="' . route('admin.edit_admin', $data->id) . '" class="btn-action"><i class="fa-solid fa-pen-to-square"></i></a>';
                    if($data->status == ACTIVE) {
                        $btn = $btn.'<a href="' . route('admin.customer_status_change', ['inactive', $data->id]) . '" class="btn-action" title="Active"><i class="fas fa-toggle-on"></i></a>';
                    }else {
                        $btn = $btn.'<a href="' . route('admin.customer_status_change', ['active', $data->id]) . '" class="btn-action" title="Block"><i class="fas fa-toggle-off"></i></a>';
                    }
                    $btn = $btn.'</div>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        $data['title'] = __('All Admins');
        return view('admin.pages.users.index', $data);
    }

    public function createAdmin()
    {
        
        $data['roles'] = Role::pluck('name','name')->all();
        $data['title'] = __('Create Admin');
        return view('admin.pages.users.create', $data);
    }

    public function storeAdmin(Request $request)
    {
        // dump($request->all());
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required',
            'admin_status' => 'required'
        ]);
        $input['name'] = $request->name;
        $input['is_admin'] = $request->is_admin;
        $input['email'] = $request->email;
        $status = implode(",",$request->admin_status);
        $input['admin_status'] = $status;
        $input['password'] = Hash::make($request->password);
        // dd($input);
        $user = User::create($input);
        // dd("sds");
        $user->assignRole($request->input('roles'));

        return redirect()->route('admin.admin_list')
            ->with('toast_success','User created successfully');
    }

    public function editAdmin($id)
    {
        $user = User::find($id);
        // $admin_status = explode(",",$user->admin_status);
        // $user = $admin_status;
        // $data['admin_status'] = explode
        $data['user'] = $user;
        $data['roles'] = Role::pluck('name','name')->all();
        $data['userRole'] = $user->roles->pluck('name','name')->all();
        $data['title'] = __('Edit Admin');
        return view('admin.pages.users.edit', $data);
    }

    public function updateAdmin(Request $request, $id)
    {
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required',
            'admin_status'=> 'required'
        ]);

        $input = $request->all();
        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));
        }
        $admin_status = implode(",",$request->admin_status);
        $input['admin_status'] = $admin_status;
        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();

        $user->assignRole($request->input('roles'));

        return redirect()->back()
            ->with('toast_success','User updated successfully');
    }

    public function customerList(Request $request)
    {
        if ($request->ajax()) {
            $data = User::where('is_admin', INACTIVE);
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('orders', function ($data) {
                    return orderCountuser($data->id);
                })
                ->addColumn('action', function ($data) {
                    $btn = '<div class="action__buttons">';
                    if($data->status == ACTIVE) {
                        $btn = $btn.'<a href="' . route('admin.customer_status_change', ['inactive', $data->id]) . '" class="btn-action" title="Active"><i class="fas fa-toggle-on"></i></a>';
                    }else {
                        $btn = $btn.'<a href="' . route('admin.customer_status_change', ['active', $data->id]) . '" class="btn-action" title="Block"><i class="fas fa-toggle-off"></i></a>';
                    }
                    $btn = $btn.'</div>';
                    return $btn;
                })
                ->rawColumns(['orders', 'action'])
                ->make(true);
        }
        $data['title'] = __('All Customers');
        return view('admin.pages.users.customer-list', $data);
    }

    public function customerStatusChange($status, $user_id)
    {
        $user = User::whereId($user_id)->first();
        if($status == 'active') {
            $sts = ACTIVE;
        }else{
            $sts = INACTIVE;
        }
        $user->update([
            'status' => $sts,
        ]);

        return redirect()->back()->with('toast_success', __('User successfully updated!'));
    }
}
