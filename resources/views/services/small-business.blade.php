@extends('layouts.app')
@section('header_extras')
    <title>Small Business </title>
@endsection
@section('content')
    </head>

    <body style="overflow-x: hidden">
        <section class="main">
            <div class="container">
                <div class="row mx-auto">
                    @include('layouts.page-sidebar')
                    <div class="col-lg-9 padding-zero">
                       
                          <div class="service-page-padding service-mt service bg-img">
                            <h4> I’m a small business</h4>
                            <p class="pt-3"><b>Our business is to enable you <span class="green">optimyze</span>  your business.</b> <br> <br>
                              We specialise in reducing your cost of doing business and unlocking business value to a host of traditional finance from bookkeeping, tax, audit, and corporate finance, to outsourceable functions. So whether you’re in the midst of strategic change or scaling globally, we <span class="green">care</span> and <span class="green"> apply our skills </span> to enable you realise the <span class="green">right outcomes</span>,  fast.</p>
                        </div>
                   
                        <div class="service service-padding mt-2 bg-img">
                            <div class="container pd"  >
                                <div class="section__wrapper">
                                    <div class="row row1">
                                        <div class="banner__item width-33">
                                            <a href="{{url('services/owner-managed-businesses')}}">
                                                <img src="{{asset('assets/images/bg1.jpg')}}" alt="rajib raj">
                                                <p class="bottom-text">Owner-managed businesses</p>
                                            </a>
                                        </div>
                                        <div class="banner__item width-33">
                                            <a href="{{url('services/start-ups')}}">
                                                <img src="{{asset('assets/images/bg1.jpg')}}" alt="rajib raj">
                                                <p class="bottom-text">Start-ups
                                                </p>
                                            </a>
                                        </div>
                                        <div class="banner__item  width-33">
                                            <a href="{{url('services/manufacturers')}}">
                                                <img src="{{asset('assets/images/bg1.jpg')}}" alt="rajib raj">
                                                <p class="bottom-text">Manufacturers
                                                </p>
                                            </a>
                                        </div>
                                        <div class="banner__item width-33">
                                            <a href="{{url('services/distributors')}}">
                                                <img src="{{asset('assets/images/bg1.jpg')}}" alt="rajib raj">
                                                <p class="bottom-text">Distributors
                                                </p>
                                            </a>
                                        </div>
                                        <div class="banner__item width-33">
                                            <a href="{{url('services/charitable-organization')}}">
                                                <img src="{{asset('assets/images/bg1.jpg')}}" alt="rajib raj">
                                                <p class="bottom-text">Charitable Organizations
                                                </p>
                                            </a>
                                        </div>
                                        <div class="banner__item  width-33">
                                            <a href="{{url('services/tech-businesses')}}">
                                                <img src="{{asset('assets/images/bg1.jpg')}}" alt="rajib raj">
                                                <p class="bottom-text">Tech Businesses
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <!-- ========== Insights  Section Ends Here========== -->
                    </div>
                    </div>
                </div>

            </div>

        </section>
        <!-- ==========Feature Section Ends Here========== -->
    @endsection
