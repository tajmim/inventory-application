@extends('master')

@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Role Details</h4>
                <h6>View Role Information</h6>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <p> <strong>Role Name:</strong> {{ $role->name }}</p>
                        </div>
                    </div>
                </div>
                
                <!-- Permissions -->
                <div class="mt-2">
                    <h3>Permissions:</h3>
                    @foreach ($role->permissions as $permission)
                       <p>{{ $permission->name }}</p>
                    @endforeach
                </div>
                
                <div class="col-lg-12 mt-3">
                    <a href="{{ route('roles.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
