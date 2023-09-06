@extends('layouts.app')
@section('header_extras')
<title>My field is Nonprofit business.</title>
@endsection
@section('content')
    </head>

    <body style="overflow-x: hidden">
        <section class="main">
            <div class="full-content">
                <div class="row">
                    @include('layouts.page-sidebar')

                    <div class="col-lg-9 col-sm-12 padding-zero">
                           <div class="strapeline"><h1 class="gradient-text">My field is nonprofit business</h1></div>
                          <div class="overview" style="height:260px;">
                            <!--<h4> I’m a small business</h4>-->
                            <p><b>All the finance & fin-ops support you need.  How can we help?</b></p>
                        </div>

                        <div class="service bg-img full-content">
                            <!--<div class="container pd"  >-->
                                <div class="section__wrapper">
                                    <div class="row row1">
                                        <div class="banner__item width-33">
                                            <a href="{{url('services/cost-of-doing-business') }}">
                                                <img src="{{asset('assets/images/bg-new2.jpg')}}" alt="rajib raj">
                                                <p class="bottom-text">Cost of doing business
                                                </p>
                                            </a>
                                        </div>
                                        <div class="banner__item width-33">
                                            <a href="{{url('services/audit-and-assurance') }}">
                                                <img src="{{asset('assets/images/bg-new3.jpg')}}" alt="rajib raj">
                                                <p class="bottom-text">Audit and assurance
                                                </p>
                                            </a>
                                        </div>
                                        <div class="banner__item  width-33">
                                            <a href="{{url('services/tax-planning')}}">
                                                <img src="{{asset('assets/images/bg-new2.jpg')}}" alt="rajib raj">
                                                <p class="bottom-text">Tax planning
                                                </p>
                                            </a>
                                        </div>
                                        <div class="banner__item width-33">
                                            <a href="{{url('services/governance')}}">
                                                <img src="{{asset('assets/images/bg-new3.jpg')}}" alt="rajib raj">
                                                <p class="bottom-text">Governance and Trusts
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
