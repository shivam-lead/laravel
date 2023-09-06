
@extends('layouts.app')
 @section('header_extras')


<title>News Details | Newss | Optimyze Finance </title>
@endsection
@section('content')


<!-- ==========Banner Section Start Here========== -->
{{-- <div class="pageheader padding-tb bg-img" style="background-image: url(assets/images/bg/page-header.jpg);">
    <div class="container">
        <div class="pageheader__area text-center">
            <h2>blog single page</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">blog single</li>
                </ol>
            </nav>
        </div>
    </div>
</div> --}}
<!-- ==========Banner Section Ends Here========== -->


<!-- ==========Blog Section Start Here========== -->
<div class="blog blog--classic padding-tb">
    <div class="container">
        <div class="section__wrapper">
            <div class="row g-4">
                <div class="col-lg-8 col-12">
                    <div class="row g-4 justify-content-center">
                        <div class="col-12">
                            {{-- @php
                                dd($blog);
                            @endphp --}}
                            <h3 class="text-center">{{$news->title}}</h3>
                            <div class="blog__item">
                                <div class="blog__thumb">
                                    <img src="{{$news->image}}" alt="rajibraj" class="w-100">
                                    <span class="date"><i class="fa-solid fa-calendar-days"></i>{{ date('d-m-Y', strtotime($news->date)) }}</span>
                                </div>
                                <div class="blog__content">


                                    <p>{!!$news->description!!}</p>

                                </div>
                            </div>
                            <div class="tags-section bg-white">

                                <div class="sharethis-inline-share-buttons" style="z-index: 0"></div>

                            </div>
                        </div>
                        <div class="sidebar">
                            <div class="row g-4">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="sidebar">
                        <div class="row g-4">

                            <div class="col-12">
                                <div class="sidebar__recentpost">
                                    <div class="head news">
                                        <h5>Most Popular Post</h5>
                                    </div>
                                    <div class="body">
                                        <ul >
                                            @foreach ($allnewz as $newz)

                                            <li>
                                                <div class="thumb">
                                                    <a href="{{$newz->id}}"><img src="{{$newz->image}}" alt="rajibraj"></a>
                                                </div>
                                                <div class="content">
                                                    <h6><a href="{{$newz->id}}">{{$newz->title}}</a></h6>
                                                    <span>{{ date('d-m-Y', strtotime($newz->date)) }}</span>
                                                </div>
                                            </li>
                                            @endforeach

                                            {!! $allnewz->links() !!}

                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ==========Blog Section Ends Here========== -->
@endsection
