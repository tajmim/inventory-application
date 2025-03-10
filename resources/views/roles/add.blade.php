@extends('master')

@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Role Management</h4>
                <h6>Add/Update Role</h6>
            </div>
        </div>

        <form action="{{ route('roles.store') }}" method="POST">
            @csrf
        
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <!-- Role Name -->
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Role Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                        </div>
        
                        <!-- Guard Name -->
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Guard Name</label>
                                <select name="guard_name" class="form-control" required>
                                    <option value="web">Web</option>
                                    <option value="api">API</option>
                                </select>
                            </div>
                        </div>
                        
                        <!-- Permissions -->
                        <div class="mt-2">
                            <h3>Permissions:</h3>
                            @foreach ($permissions as $permission)
                            <label><input type ="checkbox" name="permissions[{{ $permission->name }}]" value="{{ $permission->name}}"> {{ $permission->name }}</label> <br/>
                                
                            @endforeach
                        </div>
        
                        <!-- Submit Button -->
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
