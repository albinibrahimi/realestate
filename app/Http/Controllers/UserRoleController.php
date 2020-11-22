<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role_User;

class UserRoleController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'role_id'=>'required',
            'user_id'=>'required',
        ]);

        $roleuser = new Role_User([
            'role_id' => $request->get('role_id'),
            'user_id' => $request->get('user_id'),
        ]);
        $roleuser->save();
        return redirect('/home')->with('success', 'UserRole saved!');
    }
}
