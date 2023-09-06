@extends('layouts.app')
@section('header_extras')
<title> I’m a private client</title>
@endsection
@section('content')
    </head>

    <body style="overflow-x: hidden">
        <section class="main">
            <div class="full-content">
                <div class="row">
                    @include('layouts.page-sidebar')

                    <div class="col-lg-9 col-sm-12 padding-zero">
                           <div class="strapeline"><h1 class="gradient-text"> I’m a private client</h1></div>
                          <div class="overview" style="height:260px;">
                            <!--<h4> I’m a small business</h4>-->
                            <p><b>We help people like you.  How can we help?
                            </b></p>
                        </div>

                        <div class="service bg-img full-content">
                            <!--<div class="container pd"  >-->
                                <div class="section__wrapper">
                                    <div class="row row1">
                                        <div class="banner__item width-33">
                                            <a href="{{ url('/family-offices') }}">
                                                <img src="{{asset('assets/images/bg-new2.jpg')}}" alt="rajib raj">
                                                <p class="bottom-text">Family offices</p>
                                            </a>
                                        </div>
                                        <div class="banner__item width-33">
                                            <a href="{{url('tax-planning')}}">
                                                <img src="{{asset('assets/images/bg-new3.jpg')}}" alt="rajib raj">
                                                <p class="bottom-text">Tax planning
                                                </p>
                                            </a>
                                        </div>
                                        <div class="banner__item  width-33">
                                            <a href="{{url('/international-private-client')}}">
                                                <img src="{{asset('assets/images/bg-new2.jpg')}}" alt="rajib raj">
                                                <p class="bottom-text">International private clients
                                                </p>
                                            </a>
                                        </div>
                                        <div class="banner__item width-33">
                                            <a href="{{url('/trusts-and-estate-planning')}}">
                                                <img src="{{asset('assets/images/bg-new3.jpg')}}" alt="rajib raj">
                                                <p class="bottom-text">Trusts & Estate Planning
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
