<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Validator;



class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::orderBy("id","desc")->paginate(15);
        return view("roles.index", compact("roles"));
    }

    public function create()
    {
        $permissions = Permission::all();
        // dd($permissions);

        return view("roles.add", compact("permissions"));
    }


    public function store(Request $request)
    {
        
        $request->validate([
            'name' => ['required','string','unique:roles,name']

        ]);
        $role = Role::create(['name' => $request->name]);
        $role->syncPermissions($request->permissions);

        return redirect()->route('roles.index')->with('success', 'role created successfully');
    }
    public function show(string $id)
    {
        $role = Role::findByID($id);
        return view('roles.show', compact('role'));
    }



    public function edit( $id ) {
        $role = Role::findOrFail( $id );
        $permissions = Permission::all();

        return view( 'roles.edit', compact( 'role' ) );
    }

    public function update( Request $request, $id ) {
        $role = Role::findOrFail( $id );

        $validator = Validator::make($request->all(), [
            'name' => 'nullable|string|max:255',
            
        ]);
        
        if ($validator->fails()){
            return redirect()->back()->with( 'errors', $validator->errors()->first() );
        }

        // Update user data
        if (!empty($request->name))
        {
            $role->name = $request->name;
        }

       

        $role->save();
        return redirect()->route( 'roles.index' )->with( 'success', 'role updated successfully' );
    }

    public function destroy( $id ) {
        $role = Role::findOrFail( $id );

        $role->delete();

        return redirect()->route( 'roles.index' )->with( 'success', 'role deleted successfully' );
    }


}
