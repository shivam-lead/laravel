@extends('admin.layouts.app')
@section('header_extras')
    <title> Coaching </title>
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
                        <h4 class="mb-sm-0 font-size-18">Blog list</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);"></a></li>
                                <li class="breadcrumb-item active">Blog list</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Blog Table Edit</h4>
                            <p class="card-title-desc">Table Edits is a lightweight jQuery plugin for making table rows
                                editable.</p>

                            <div class="table-responsive">
                                <table class="table table-editable table-nowrap align-middle table-edits">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Blog title</th>
                                            <th>Blog date</th>
                                            <th>Image</th>

                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($blogs as $blog)
                                            <tr data-id="1">
                                                <td data-field="id" style="width: 80px">{{ $loop->index+1 }}</td>
                                                <td data-field="name">{{ $blog->title }}</td>
                                                <td data-field="name">{{ $blog->date }}</td>


                                                <td data-field="">
                                                    <img src="{{ asset('images/' . $blog->image) }}"
                                                        style="width: 80px; height: 80px;" alt="">
                                                </td>

                                                <td style="width: 100px">
                                                    <a href="{{ url('edit-blog') }}/{{ $blog->id }}"
                                                        class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>

                                                    </a>
                                                    <a class="btn btn-outline-secondary btn-sm edit" data-bs-toggle="modal" data-bs-target="#exampleModal{{$blog->id}}" title="Edit">
                                                        <i class="fas fa-trash"></i>

                                                    </a>
                                                </td>
                                            </tr>
                                            <!-- Button trigger modal -->

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal{{$blog->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Delete Blog</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure you want to delete ?
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <a href="{{url('/delete-blog')}}/{{$blog->id}}" type="button" class="btn btn-primary">Yes</a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->

        <!-- End Page-content -->
    @endsection
