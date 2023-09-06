@extends('admin.layouts.app')
@section('header_extras')
<title>Add Blogs</title>
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
                        <h4 class="mb-sm-0 font-size-18">Add Blog</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Add Blog</a></li>
                                <li class="breadcrumb-item active"> Blog</li>
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
                            <h4 class="card-title mb-4">Add Blog</h4>

                            <form action="{{ url('submit-blog') }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter Title">
                                    @error('title')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="row">

                                    <div class="col-md-12 mt-3">
                                        <div class="mb-3">
                                            <label for="formrow-email-input"   class="form-label">Descripition</label>
                                            <textarea type="text" id="editor" class="form-control" name="description" placeholder="Enter Your Descripition"></textarea>
                                            @error('description')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <div class="mb-3">
                                            <label for="formrow-password-input" class="form-label">Image</label>
                                            <input type="file" class="form-control" name="image">
                                            @error('image')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-lg-3 mt-3">
                                        <div class="mb-3">
                                            <label for="formrow-inputCity" class="form-label">Slug</label>
                                            <input type="text" class="form-control" name="slug">
                                            @error('slug')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3 mt-3">
                                        <div class="mb-3">
                                            <label for="formrow-inputState" class="form-label">Meta title</label>
                                            <input type="text" class="form-control" name="meta_title">
                                            @error('meta_title')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">

                                        <label for="formrow-inputZip" class="form-label">Meta Description</label>
                                        <input type="text" class="form-control" name="meta_descripition"
                                            placeholder="Enter Meta Description">
                                            @error('meta_descripition')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                    </div>
                                    <div class="col-lg-4">

                                        <label for="formrow-inputZip" class="form-label">Date</label>
                                        <input type="date" class="form-control" name="date">
                                            @error('date')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                    </div>
                                    <div class="col-lg-4">

                                        <label for="formrow-inputZip" class="form-label">Meta Keywords</label>
                                        <input type="text" class="form-control" name="meta_keywords">
                                        @error('meta_keywords')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="mb-3">


                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
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
