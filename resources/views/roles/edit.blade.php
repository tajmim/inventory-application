@extends('master')

@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Roles Management</h4>
                <h6>Edit/Update User</h6>
            </div>
        </div>

        <form action="{{ route('roles.update', $role->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Role Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $role->name }}">
                            </div>

                           
                        </div>
                         
                        <!-- Permissions -->
                        <div class="mt-2">
                            <h3>Permissions:</h3>
                            @foreach ($permissions as $permission)
                            <label><input type ="checkbox" name="permissions[{{ $permission->name }}]" value="{{ $permission->name}}"> {{ $permission->name }}</label> <br/>
                                
                            @endforeach
                        </div>
                      
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-submit me-2">Submit</button>
                            <a href="{{ route('roles.index') }}" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection()
