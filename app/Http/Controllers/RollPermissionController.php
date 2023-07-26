<?php

namespace App\Http\Controllers;

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


}
