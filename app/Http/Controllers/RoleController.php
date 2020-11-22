<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;

class RoleController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
        ]);

        $role = new Role([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
        ]);
        $role->save();
        return redirect('/home')->with('success', 'Role saved!');
    }
}
