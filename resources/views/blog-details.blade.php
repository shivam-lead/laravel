
@extends('layouts.app')
 @section('header_extras')


<title>{{$blog->title}}</title>
<meta name="description" content="{{$blog->meta_descripition}}">
<meta name="keywords" content="{{$blog->meta_keywords}}">
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
                            <div class="blog__item">
                                <div class="blog__thumb">
                                    <img src="{{asset('images/'.$blog->image)}}" alt="rajibraj" class="w-100">
                                    <span class="date"><i class="fa-solid fa-calendar-days"></i>{{date('d-m-Y', strtotime($blog->date));}}</span>
                                </div>
                                <div class="blog__content">
                                    <h3>{{$blog->title}}</h3>
                                    <div class="blog__meta">
                                        <ul>
                                            <li><a href="#"><i class="fa-solid fa-user"></i>Kanika Bali</a></li>

                                        </ul>
                                    </div>
                                    <p>{!!$blog->description!!}</p>

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
                                        <ul>
                                            @foreach($blogs as $blogg)
                                           
                                            <li>
                                                <div class="thumb">
                                                    <a href="{{$blogg->slug}}"><img src="{{asset('images/'.$blogg->image)}}" alt="rajib raj"></a>
                                                </div>
                                                <div class="content">
                                                    <h6><a href="{{$blogg->slug}}">{{$blogg->title}}</a></h6>
                                                    <span>{{ date('d-m-Y', strtotime($blogg->date)) }}</span>
                                                </div>
                                            </li>
                                             @endforeach
                                            <!--<li>-->
                                            <!--    <div class="thumb">-->
                                            <!--        <a href="blog-single.html"><img src="assets/images/blog/recentpost/02.jpg" alt="rajibraj"></a>-->
                                            <!--    </div>-->
                                            <!--    <div class="content">-->
                                            <!--        <h6><a href="blog-single.html">Find the right path for your group course online</a></h6>-->
                                            <!--        <span>June 22, 2022</span>-->
                                            <!--    </div>-->
                                            <!--</li>-->
                                            <!--<li>-->
                                            <!--    <div class="thumb">-->
                                            <!--        <a href="blog-single.html"><img src="assets/images/blog/recentpost/03.jpg" alt="rajibraj"></a>-->
                                            <!--    </div>-->
                                            <!--    <div class="content">-->
                                            <!--        <h6><a href="blog-single.html">Learn doing with real world projects other countries</a></h6>-->
                                            <!--        <span>June 24, 2022</span>-->
                                            <!--    </div>-->
                                            <!--</li>-->
                                            <!--<li>-->
                                            <!--    <div class="thumb">-->
                                            <!--        <a href="blog-single.html"><img src="assets/images/blog/recentpost/04.jpg" alt="rajibraj"></a>-->
                                            <!--    </div>-->
                                            <!--    <div class="content">-->
                                            <!--        <h6><a href="blog-single.html">Business ueporting rouncil them could plan.</a></h6>-->
                                            <!--        <span>June 26, 2022</span>-->
                                            <!--    </div>-->
                                            <!--</li>-->
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
