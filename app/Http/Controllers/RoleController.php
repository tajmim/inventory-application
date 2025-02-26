<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::orderBy("id","desc")->paginate(15);
        return view("roles.index", compact("roles"));
    }

    public function create()
    {
        return view("roles.add");
    }
}
