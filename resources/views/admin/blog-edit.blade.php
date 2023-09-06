@extends('admin.layouts.app')
@section('header_extras')
    <title>Edit Blogs</title>
@endsection
@section('content')
    <div class="page-content">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Edit Blog</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Edit Blog</a></li>
                                <li class="breadcrumb-item active">Edit Blog</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            {{-- @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif --}}
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Edit Blog</h4>

                            <form action="{{ url('update-blog') }}/{{$blog->id}}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Title</label>
                                    <input type="text" class="form-control" value="{{$blog->title}}" name="title" placeholder="Enter Title">
                                </div>

                                <div class="row">

                                    <div class="col-md-12 mt-3">
                                        <div class="mb-3">
                                            <label for="formrow-email-input" class="form-label">Descripition</label>
                                            <textarea type="text" id="editor" class="form-control" name="description" placeholder="Enter Your Descripition">{{$blog->description}}</textarea>

                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <div class="mb-3">
                                            <label for="formrow-password-input" class="form-label">Preview Image</label>
                                           <img src="{{asset('images/'.$blog->image)}}"  class="form-control" style="width: 200px" alt="img">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mt-3">
                                        <div class="mb-3">
                                            <label for="formrow-password-input" class="form-label">New Image</label>
                                            <input type="file" class="form-control" name="image">
                                        </div>
                                    </div>


                                    <div class="col-lg-4 mt-3">
                                        <div class="mb-3">
                                            <label for="formrow-inputCity"  class="form-label">Slug</label>
                                            <input type="text" value="{{$blog->slug}}" class="form-control" name="slug">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mt-3">
                                        <div class="mb-3">
                                            <label for="formrow-inputState"  class="form-label">Meta title</label>
                                            <input type="text" value="{{$blog->meta_title}}" class="form-control" name="meta_title">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">

                                        <label for="formrow-inputZip" class="form-label">Meta Description</label>
                                        <input type="text" class="form-control" value="{{$blog->meta_descripition}}" name="meta_descripition"
                                            placeholder="Enter Meta Description">
                                    </div>
                                    <div class="col-lg-4">

                                        <label for="formrow-inputZip" class="form-label">Date</label>
                                        <input type="date" class="form-control"  value="{{$blog->date}}" name="date">
                                    </div>
                                    <div class="col-lg-4">

                                        <label for="formrow-inputZip" class="form-label">Meta Keywords</label>
                                        <input type="text" class="form-control" value="{{$blog->meta_keywords}}" name="meta_keywords">
                                    </div>
                                </div>


                                <div class="mb-3">


                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Update</button>
                                </div>
                        </div>



                        </form>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->


            <!-- end col -->
        </div>
        <!-- end row -->


        <!-- end row -->


        <!-- end row -->


        <!-- end row -->

    </div> <!-- container-fluid -->
    </div>
@endsection
