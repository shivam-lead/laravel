@extends('layouts.app')
 @section('header_extras')


 <title>Insights | Optimyze Finance </title>
@endsection
@section('content')

<!-- ==========Banner Section Start Here========== -->
<div class="pageheader padding-tb bg-img" style="background-image: url(assets/images/bg/page-header.jpg);">
    <div class="container">
        <div class="pageheader__area text-center">
            <h2>Insights</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Insights</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- ==========Banner Section Ends Here========== -->


<!-- ==========Blog Section Start Here========== -->
<div class="blog blog--one padding-tb">
    <div class="container">
        <div class="section__wrapper">
            <div class="row g-5 g-lg-4">
                <div class="col-lg-8 col-12">
                    <div class="row g-4 justify-content-center">
                        @foreach ($blogs as $blog)

                        <div class="col-sm-6 col-12">
                            <div class="blog__item">
                                <div class="blog__thumb">
                                    <a href="{{$blog->slug}}"><img src="{{asset('images/'.$blog->image)}}" alt="rajib raj"></a>
                                </div>
                                <div class="blog__content">
                                    <div class="blog__meta">
                                        <ul>
                                            <li><a href="#"><i class="fa-solid fa-user"></i> Admin</a></li>
                                            
                                        </ul>
                                    </div>
                                    <h5><a href="{{$blog->slug}}">{{$blog->title}}</a></h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!--<div class="col-sm-6 col-12">-->
                        <!--    <div class="blog__item">-->
                        <!--        <div class="blog__thumb">-->
                        <!--            <a href="blog-single.html"><img src="assets/images/blog/05.jpg" alt="rajib raj"></a>-->
                        <!--        </div>-->
                        <!--        <div class="blog__content">-->
                        <!--            <div class="blog__meta">-->
                        <!--                <ul>-->
                        <!--                    <li><a href="#"><i class="fa-solid fa-user"></i> Smith show</a></li>-->
                        <!--                    <li><a href="#"><i class="fa-solid fa-message"></i> 11 Comments</a></li>-->
                        <!--                </ul>-->
                        <!--            </div>-->
                        <!--            <h5><a href="blog-single.html">12 Questions For Connected Product UX</a></h5>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="col-sm-6 col-12">-->
                        <!--    <div class="blog__item">-->
                        <!--        <div class="blog__thumb">-->
                        <!--            <a href="blog-single.html"><img src="assets/images/blog/06.jpg" alt="rajib raj"></a>-->
                        <!--        </div>-->
                        <!--        <div class="blog__content">-->
                        <!--            <div class="blog__meta">-->
                        <!--                <ul>-->
                        <!--                    <li><a href="#"><i class="fa-solid fa-user"></i> Smith show</a></li>-->
                        <!--                    <li><a href="#"><i class="fa-solid fa-message"></i> 11 Comments</a></li>-->
                        <!--                </ul>-->
                        <!--            </div>-->
                        <!--            <h5><a href="blog-single.html">Augmented Reality Platform By Google Meet</a></h5>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="col-sm-6 col-12">-->
                        <!--    <div class="blog__item">-->
                        <!--        <div class="blog__thumb">-->
                        <!--            <a href="blog-single.html"><img src="assets/images/blog/07.jpg" alt="rajib raj"></a>-->
                        <!--        </div>-->
                        <!--        <div class="blog__content">-->
                        <!--            <div class="blog__meta">-->
                        <!--                <ul>-->
                        <!--                    <li><a href="#"><i class="fa-solid fa-user"></i> Smith show</a></li>-->
                        <!--                    <li><a href="#"><i class="fa-solid fa-message"></i> 11 Comments</a></li>-->
                        <!--                </ul>-->
                        <!--            </div>-->
                        <!--            <h5><a href="blog-single.html">In Depth Industry And Ecosystem Analysis</a></h5>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="col-sm-6 col-12">-->
                        <!--    <div class="blog__item">-->
                        <!--        <div class="blog__thumb">-->
                        <!--            <a href="blog-single.html"><img src="assets/images/blog/08.jpg" alt="rajib raj"></a>-->
                        <!--        </div>-->
                        <!--        <div class="blog__content">-->
                        <!--            <div class="blog__meta">-->
                        <!--                <ul>-->
                        <!--                    <li><a href="#"><i class="fa-solid fa-user"></i> Smith show</a></li>-->
                        <!--                    <li><a href="#"><i class="fa-solid fa-message"></i> 11 Comments</a></li>-->
                        <!--                </ul>-->
                        <!--            </div>-->
                        <!--            <h5><a href="blog-single.html">Trademark Protecton Our Audit And Monitoring</a></h5>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="col-sm-6 col-12">-->
                        <!--    <div class="blog__item">-->
                        <!--        <div class="blog__thumb">-->
                        <!--            <a href="blog-single.html"><img src="assets/images/blog/09.jpg" alt="rajib raj"></a>-->
                        <!--        </div>-->
                        <!--        <div class="blog__content">-->
                        <!--            <div class="blog__meta">-->
                        <!--                <ul>-->
                        <!--                    <li><a href="#"><i class="fa-solid fa-user"></i> Smith show</a></li>-->
                        <!--                    <li><a href="#"><i class="fa-solid fa-message"></i> 11 Comments</a></li>-->
                        <!--                </ul>-->
                        <!--            </div>-->
                        <!--            <h5><a href="blog-single.html">Strategies Rere Manage Financial Forecast</a></h5>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="col-sm-6 col-12">-->
                        <!--    <div class="blog__item">-->
                        <!--        <div class="blog__thumb">-->
                        <!--            <a href="blog-single.html"><img src="assets/images/blog/10.jpg" alt="rajib raj"></a>-->
                        <!--        </div>-->
                        <!--        <div class="blog__content">-->
                        <!--            <div class="blog__meta">-->
                        <!--                <ul>-->
                        <!--                    <li><a href="#"><i class="fa-solid fa-user"></i> Smith show</a></li>-->
                        <!--                    <li><a href="#"><i class="fa-solid fa-message"></i> 11 Comments</a></li>-->
                        <!--                </ul>-->
                        <!--            </div>-->
                        <!--            <h5><a href="blog-single.html">Training And Consulting Services For You</a></h5>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="col-sm-6 col-12">-->
                        <!--    <div class="blog__item">-->
                        <!--        <div class="blog__thumb">-->
                        <!--            <a href="blog-single.html"><img src="assets/images/blog/11.jpg" alt="rajib raj"></a>-->
                        <!--        </div>-->
                        <!--        <div class="blog__content">-->
                        <!--            <div class="blog__meta">-->
                        <!--                <ul>-->
                        <!--                    <li><a href="#"><i class="fa-solid fa-user"></i> Smith show</a></li>-->
                        <!--                    <li><a href="#"><i class="fa-solid fa-message"></i> 11 Comments</a></li>-->
                        <!--                </ul>-->
                        <!--            </div>-->
                        <!--            <h5><a href="blog-single.html">Employee Development Is Company’s Success</a></h5>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="col-sm-6 col-12">-->
                        <!--    <div class="blog__item">-->
                        <!--        <div class="blog__thumb">-->
                        <!--            <a href="blog-single.html"><img src="assets/images/blog/12.jpg" alt="rajib raj"></a>-->
                        <!--        </div>-->
                        <!--        <div class="blog__content">-->
                        <!--            <div class="blog__meta">-->
                        <!--                <ul>-->
                        <!--                    <li><a href="#"><i class="fa-solid fa-user"></i> Smith show</a></li>-->
                        <!--                    <li><a href="#"><i class="fa-solid fa-message"></i> 11 Comments</a></li>-->
                        <!--                </ul>-->
                        <!--            </div>-->
                        <!--            <h5><a href="blog-single.html">Changing Grow Business Faster And Better</a></h5>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="col-sm-6 col-12">-->
                        <!--    <div class="blog__item">-->
                        <!--        <div class="blog__thumb">-->
                        <!--            <a href="blog-single.html"><img src="assets/images/blog/13.jpg" alt="rajib raj"></a>-->
                        <!--        </div>-->
                        <!--        <div class="blog__content">-->
                        <!--            <div class="blog__meta">-->
                        <!--                <ul>-->
                        <!--                    <li><a href="#"><i class="fa-solid fa-user"></i> Smith show</a></li>-->
                        <!--                    <li><a href="#"><i class="fa-solid fa-message"></i> 11 Comments</a></li>-->
                        <!--                </ul>-->
                        <!--            </div>-->
                        <!--            <h5><a href="blog-single.html">Tips Achieving Success In Our Business</a></h5>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                   
                </div>
                <div class="col-lg-4 col-4">
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
                                                    <h6><a href="blog-single.html">{{$blogg->title}}</a></h6>
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
<!-- ==========Blog Section Ends Here========== -->

@endsection
