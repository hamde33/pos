<?php

namespace App\Http\Controllers\Sal_Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use stdClass;
use App\Models\Sal_Models\Users_sales;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class RolesController extends Controller
{
    public function destroy(Request $request)
    {

        $data = DB::table("model_has_roles")->where('role_id', $request->id)->first();

        if ($data) {
            // Toastr::error(' هذه الصلاحية مرتبطة بمستخدمين !');
            return 0;
        } else {
            DB::table("roles")->where('id', $request->id)->delete();

            // Toastr::success(' تم الحذف بنجاح!');
            return 1;
        }
    }

    public function permissionsByRoleName(Request $request)
    {
        $role = Role::findByName($request->ruleName);

        return $role->permissions->pluck('id');
    }

    public function index(Request $request)
    {

        $role = Role::query();

        if (isset($request->date_from) && isset($request->date_to)) {
            $role->whereBetween('created_at', [$request->date_from . " 00:00:00", $request->date_to . " 23:59:59"]);
        }
        if ($request->has('search')) {
            $role->where('name', 'like', '%' . $request->search . '%');
        }
        $count = $role->count();
        $roles = $role->offset($request->offset)
            ->limit($request->limit)
            ->orderBy('id', 'desc')
            ->get();

        $get_rolesData = new stdClass();
        $get_rolesData->total = $count;
        $get_rolesData->totalNotFiltered = $get_rolesData->total;
        $get_rolesData->rows = $roles;
        return response(json_encode($get_rolesData), 200)->header('Content-Type', 'application/json');
    }
    public function powersview()
    {
        $permission = Permission::get();

        $user = Users_sales::all();
        return view('Sal_views.User.powers', compact('user', 'permission'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permission' => 'required',
        ]);

        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));

        return back()
            ->with('success', 'Role created successfully');
    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);

        $role = Role::find($request->id);
        $role->name = $request->input('name');
        $role->save();
        $role->syncPermissions($request->input('permission'));
        return back()->with('success', 'Role updated successfully');
    }
}
