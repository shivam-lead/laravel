@extends('layouts.app')
@section('header_extras')
<title>CFOs & leaders</title>
@endsection
@section('content')
    </head>

    <body style="overflow-x: hidden">
        <section class="main">
            <div class="full-content">
                <div class="row">
                    @include('layouts.page-sidebar')

                    <div class="col-lg-9 col-sm-12 padding-zero">
                           <div class="strapeline"><h1 class="gradient-text">I’m a CFO</h1></div>
                          <div class="overview" style="height:260px;">
                            <!--<h4> I’m a small business</h4>-->
                            <p><b>We unlock <span class="gradient-text">value.</span> How can we help?</b></p>
                        </div>

                        <div class="service bg-img full-content">
                            <!--<div class="container pd"  >-->
                                <div class="section__wrapper">
                                    <div class="row row1">
                                        <div class="banner__item width-33">
                                            <a href="{{ url('services/tranform-finance') }}">
                                                <img src="{{asset('assets/images/bg-new2.jpg')}}" alt="rajib raj">
                                                <p class="bottom-text">Transform Finance</p>
                                            </a>
                                        </div>
                                        <div class="banner__item width-33">
                                            <a href="{{ url('services/coprate-finence-service') }}">
                                                <img src="{{asset('assets/images/bg-new3.jpg')}}" alt="rajib raj">
                                                <p class="bottom-text">Corporate Finance Services
                                                </p>
                                            </a>
                                        </div>
                                        <div class="banner__item  width-33">
                                            <a href="{{ url('services/unlock-your-busines-value') }}">
                                                <img src="{{asset('assets/images/bg-new2.jpg')}}" alt="rajib raj">
                                                <p class="bottom-text"> Unlock business value
                                                </p>
                                            </a>
                                        </div>
                                        <div class="banner__item width-33">
                                            <a href="{{ url('services/drive-performance') }}">
                                                <img src="{{asset('assets/images/bg-new3.jpg')}}" alt="rajib raj">
                                                <p class="bottom-text">Drive performance
                                                </p>
                                            </a>
                                        </div>
                                        <div class="banner__item width-33">
                                            <a href="{{url('services/fractional-servicess')}}">
                                                <img src="{{asset('assets/images/bg-new2.jpg')}}" alt="rajib raj">
                                                <p class="bottom-text">Governance - Fractional services & Reporting
                                                </p>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            <!--</div>-->
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
