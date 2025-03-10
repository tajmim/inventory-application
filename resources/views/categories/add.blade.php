@extends('master');

@section('content')
<div id="global-loader">
    <div class="whirly-loader"> </div>
</div>


   

        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Product Add Category</h4>
                    <h6>Create new product Category</h6>
                </div>
            </div>

            {{-- <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Category Name</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label> Product Image</label>
                                <div class="image-upload">
                                    <input type="file">
                                    <div class="image-uploads">
                                        <img src="assets/img/icons/upload.svg" alt="img">
                                        <h4>Drag and drop a file to upload</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <a href="javascript:void(0);" class="btn btn-submit me-2">Submit</a>
                            <a href="{{ route('categories.index') }}" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </div>
            </div> --}}

            <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <!-- Category Name -->
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="name">Category Name</label>
                                    <input type="text" name="name" id="name" class="form-control" >
                                </div>
                            </div>
                        </div>
            
                            <!-- Product Image Upload -->
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="product_image">Product Image</label>
                                    <div class="image-upload">
                                        <input type="file" name="product_image" id="product_image" class="form-control-file">
                                        <div class="image-uploads">
                                            <img src="{{ asset('assets/img/icons/upload.svg') }}" alt="Upload Icon">
                                            <h4>Drag and drop a file to upload</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
            
                            <!-- Submit & Cancel Buttons -->
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-submit me-2">Submit</button>
                                <a href="{{ route('categories.index') }}" class="btn btn-cancel">Cancel</a>
                            </div>
                        
                    </div>
                </div>
            </form>
            

        </div>
   

@endsection()
