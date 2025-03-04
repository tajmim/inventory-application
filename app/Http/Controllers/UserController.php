<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Validator;
use Hash;

use Illuminate\Validation\Rule;

class UserController extends Controller {
    public function index() {
        $users = User::orderBy( 'id', 'desc' )->paginate( 15 );
        return view( 'users.index', compact( 'users' ) );
    }

    public function create() {
        $roles = Role::orderBy( 'id', 'desc' )->get();
        return view( 'users.add', compact( 'roles' ) );
    }

    public function store( Request $request ) {
        // dd($request->role);
        $request->validate( [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',

            // 'role' => 'exists:roles,id',
        ] );

        $user = User::create( [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make( $request->password ),
            'role_id' => $request->role,
        ] );
        $user->syncRoles($request->role);


        return redirect()->route( 'users.index' )->with( 'success', 'User created successfully!' );
    }

    public function edit( $id ) {
        $user = User::findOrFail( $id );
        $roles = Role::all();
        return view( 'users.edit', compact( 'user','roles' ) );
    }

    public function update( Request $request, $id ) {
        $user = User::findOrFail( $id );

        $validator = Validator::make($request->all(), [
            'name' => 'nullable|string|max:255',
            'email' => [ 'nullable', 'email', Rule::unique( 'users' )->ignore( $user->id ) ],
            'password' => 'nullable|min:6|confirmed',
        ]);
        
        if ($validator->fails()){
            return redirect()->back()->with( 'errors', $validator->errors()->first() );
        }

        // Update user data
        if (!empty($request->name))
        {
            $user->name = $request->name;
        }

        if (!empty($request->email))
        {
            $user->email = $request->email;
        }

        if (!empty($request->password))
        {
            $user->password = Hash::make( $request->password );
        }

        $user->save();
        $user->syncRoles($request->role);

        return redirect()->route( 'users.index' )->with( 'success', 'User updated successfully' );
    }

    public function destroy( $id ) {
        $user = User::findOrFail( $id );

        $user->delete();

        return redirect()->route( 'users.index' )->with( 'success', 'User deleted successfully' );
    }

}