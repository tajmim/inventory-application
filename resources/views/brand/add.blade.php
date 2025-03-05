@extends('master')

@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Brand Management</h4>
                <h6>Add Brand</h6>
            </div>
        </div>

        <form action="{{ route('brands.store') }}" method="POST">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Brand Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Brand Name">
                            </div>
                        </div>
                        
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-submit me-2">Submit</button>
                            <a href="{{ route('brands.index') }}" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        

        

    </div>
@endsection()



