<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RollPermissionController extends Controller
{

    // Роли

    public function rolesPage()
    {
        return view('admin.roles.roles', [
            'roles'=> Role::all(),
        ]);
    }

    public function roleForm(){
        return view('admin.roles.create');
    }

    public function storeRole(Request $request){
        $request->validate([
            'name'=> 'required|unique:roles'
        ]);

        Role::create(['name' => $request->name]);
        return redirect()->route('admin.roles');
    }

    public function editRole(Role $role){
        return view('admin.roles.edit', [
            'role'=>$role,
            'permissions'=> Permission::all()
        ]);
    }
    public function updateRole(Request $request, Role $role){
        $request->validate([
            'name'=> 'required|unique:roles,name,' .$role->id,

        ]);

        $role->update($request->all());
        $role->syncPermissions($request->permissions);
        return redirect()->route("admin.roles");
    }

    // Права

    public function permissionsPage()
    {
        return view('admin.permissions.permissions', [
            'permissions'=> Permission::all(),
        ]);
    }

    public function permissionForm(){
        return view('admin.permissions.create');
    }

    public function storePermission(Request $request){
        $request->validate([
            'name'=> 'required|unique:roles'
        ]);

        Permission::create(['name' => $request->name]);
        return redirect()->route('admin.permissions');
    }

    public function deleteRole(Role $role)
    {
        $role->delete();
        return back();
    }

    public function deletePermission(Permission $permission)
    {
        $permission->delete();
        return back();
    }
}
