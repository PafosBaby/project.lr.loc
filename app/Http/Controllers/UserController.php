<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function usersPage(){
        return view('admin.users.users',[
            'users'=> User::all()
        ]);
    }

    public function editPage(User $user){
        return view('admin.users.edit',[
            'user'=> $user,
            'roles'=> Role::all()
        ]);

    }
}
