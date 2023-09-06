@extends('layouts.app')
@section('header_extras')
    <title>Home | Optimyze Finance </title>
@endsection
@section('content')

    </head>

    <body style="overflow-x: hidden">

        <section class="main" >
                        <div class="section section-padding bg-1" >
                            <div class="section-content section-content-padding">
                                <h1 class="home-heading">Business is constantly <br> changing. <br>  Shouldn’t your  <span style="color:#fff ;text-shadow: 6px 5px 4px rgb(47 43 43 / 50%);" >finance</span> <br> change  with it?
                                </h1>
                                 <h2 class="home-heading-2 gradient-text"> If your goal is business growth and  <br> success,  we’re here to work with you, <br>from data to every decision on the way.</h2 >
                            </div>
                        </div>

                        <!--<div class="blue-strip">-->
                        <!--    <h2 class="home-heading-2">If your goal is business growth and  <br> success,  we’re here to work with you, <br> <span style="color: #34BD6B">from data to every decision</span> on the way.</h2 >-->
                        <!--</div>-->

                        <div class="content-area">
                            <div class="pproach approach--two approach--three">
                                <div class="container-lg width-75">
                                    <div class=" wow fadeInUp" data-wow-delay=".5s">
                                        <h2 class="heading text-center gradient-text" id="2">How can we help you?</h2>
                                    </div>
                                    <div class="row ">
                                        <div class="banner__item item-1">
                                            <a href="{{url('/small-business')}}">
                                                <img src="assets/images/b1.png" alt="Optimyze Finance ">
                                                <span class="bottom-text">I'm a small business</span>
                                            </a>
                                        </div>
                                        
                                        <div class="banner__item">
                                            <a href="{{url('/private-client')}}">
                                                <img src="assets/images/b3.png" alt="Optimyze Finance ">
                                                <span class="bottom-text">I'm a private client</span>
                                            </a>
                                        </div>
                                        <div class="banner__item">
                                            <a href="{{url('/cfo')}}">
                                                <img src="assets/images/b2-1.jpg" alt="Optimyze Finance ">
                                                <span class="bottom-text">I'm a CFO
                                                </span>
                                            </a>
                                        </div>
                                        <div class="banner__item">
                                            <a href="{{url('my-field-is-non-profit-business')}}">
                                               <img src="assets/images/b4-1.jpg" alt="Optimyze Finance ">
                                                <span class="bottom-text">I'm a not for profit business
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="service service-padding mt-2 bg-img">
                            <div class="container width-75">
                                <div class="section-space wow fadeInUp" data-wow-delay=".5s">
                                    <h2 class="heading text-center gradient-text">What outcomes we can optimyze?</h2>
                                </div>
                                <div class="section__wrapper">

                                    <div class="row row1">
                                        <div class="banner__item ">
                                            <a href="{{url('optimize/doing-business')}}">
                                                <img src="assets/images/bg-new2.jpg" alt="Optimyze Finance ">
                                                <span class="bottom-text">Cost of doing business</span>
                                            </a>
                                        </div>

                                        <div class="banner__item ">
                                            <a href="{{url('/optimize/drive-business-performance')}}">
                                                <img src="assets/images/bg-new4.jpg" alt="Optimyze Finance ">
                                                <span class="bottom-text">Drive business performance</span>
                                            </a>
                                        </div>
                                        <div class="banner__item ">
                                            <a href="{{url('/optimize/gain-financeial-control')}}">
                                                <img src="assets/images/bg-new2.jpg" alt="Optimyze Finance ">
                                                <span class="bottom-text">Gain financial control
                                                </span>
                                            </a>
                                        </div>
                                        <div class="banner__item ">
                                            <a href="{{url('/optimize/rising-capital')}}">
                                               <img src="assets/images/bg-new4.jpg" alt="Optimyze Finance ">
                                                <span class="bottom-text">Raise capital
                                                </span>
                                            </a>
                                        </div>
                                        <div class="banner__item ">
                                            <a href="{{url('/optimize/tax-reporting')}}">
                                                <img src="assets/images/bg-new4.jpg" alt="Optimyze Finance ">
                                                <span class="bottom-text">Tax reporting
                                                </span>
                                            </a>
                                        </div>
                                        <div class="banner__item ">
                                            <a href="{{url('/optimize/audit')}}">
                                                <img src="assets/images/bg-new2.jpg" alt="Optimyze Finance ">
                                                <span class="bottom-text">Need an audit
                                                </span>
                                            </a>
                                        </div>
                                        <div class="banner__item ">
                                            <a href="{{url('finance-ops')}}">
                                                 <img src="assets/images/bg-new4.jpg" alt="Optimyze Finance ">
                                                <span class="bottom-text">Finance-Ops
                                                </span>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ==========Service Section Ends Here========== -->

                        <!-- ========== Insights  Section start Here========== -->
                        <div id="news" class="service-padding blog blog--one sponsor">
                            <div class="container width-75">
                                <div class="section-space wow fadeInUp" id="4" data-wow-delay=".5s">
                                    <h2 class="heading text-center gradient-text">Our insights and news</h2>
                                </div>
                                <div class="section__wrapper">
                                    <div class="row justify-content-center">
                                        @foreach ($blogs as $blog)
                                         <div class="col-md-3 p-0">
                                            <div class="card d-flex flex-column h-100" style="background-image: url('assets/images/grad2news.png');">
                                              <div class="card-body  d-flex flex-fill flex-column">
                                                <h6 class="card-title">{{Str::limit($blog->title,17)}}</h6>
                                          
                                                <p class="card-text flex-grow-1 ">{{Str::limit($blog->short_description,60)}} </p>
                                                <a href="{{url('/'.$blog->slug)}}"><p class="gradient-text read">Read More</p></a>
                                              </div>
                                            </div>
                                          </div>
                                          @endforeach
                                          
                                          <!--@foreach ($news as $new)-->
                                          <!--<div class="col-md-3 m-0 p-0">-->
                                          <!--  <div class="card d-flex flex-column h-100" style="background-image: url('assets/images/grad2news.png');">-->
                                          <!--    <div class="card-body d-flex flex-fill flex-column">-->
                                          <!--      <h6 class="card-title">{{Str::limit($new->title,17)}}</h6>-->
                                                
                                          <!--      <p class="card-text flex-grow-1">{!!Str::limit($new->description,60)!!}</p>-->
                                          <!--     <a href="{{url('news-detail',$new->id)}}"><p class="gradient-text read">Read More</p></a>-->
                                          <!--    </div>-->
                                          <!--  </div>-->
                                          <!--</div>-->
                                          <!--@endforeach-->
                                       
                                        
                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ========== Insights  Section Ends Here========== -->

        </section>

    @endsection
