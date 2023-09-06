@extends('layouts.app')
@section('header_extras')
    <title>Home | Optimyze Finance </title>
@endsection
@section('content')
    <div class="contact padding-tb contact--one contact--three bg-img"
        style="background-image: url(assets/images/bg/14.jpg);">
        <div class="container">
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
            <div class="section__header text-center">
                <h5>Login</h5>

            </div>
            <div class="section__wrapper" style="display: flex;justify-content: center;align-items: center;">
                <form action="{{url('/submit-login')}}"  method="POST">
                    @csrf
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-12 col-12">
                            <input type="email" placeholder="Email" name="email" id="email" required>
                        </div>
                        <div class="col-md-12 col-12">
                            <input type="password" placeholder="Password" name="password" id="password" required>
                        </div>

                        <div class="col-12 text-center">
                            <button type="submit" class="lab-btn border-0">Login<i
                                    class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                    <p class="form-message"></p>
                </form>
            </div>
        </div>
    </div>
@endsection
