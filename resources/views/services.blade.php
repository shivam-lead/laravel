@extends('layouts.app')
@section('header_extras')


<title>Service | Optimyze Finance </title>
@endsection 
@section('content')

    <!-- ==========Banner Section Start Here========== -->
    <div class="pageheader padding-tb bg-img" style="background-image: url(assets/images/bg/page-header.jpg);">
        <div class="container">
            <div class="pageheader__area text-center">
                <h2>our best services</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ==========Banner Section Ends Here========== -->

    
    <!-- ==========Service Section Start Here========== -->
    <div class="service padding-tb bg-white">
        <div class="container">
            <div class="section__header text-center wow fadeInUp" data-wow-delay=".5s">
                <h2>What can we optimzye?</h2>
            </div>
            <div class="section__wrapper">
                <div class="row justify-content-center align-items-center g-4">
                    <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="service__item">
                            <div class="service__front text-center">
                                <div class="service__icon">
                                    <img src="assets/images/service/icon/01.png" alt="Optimyze Finance">
                                </div>
                                <div class="service__content">
                                    <h5><a href="{{route('service-details')}}">Cost of doing business</a></h5>
                                    <p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                            <div class="service__back">
                                <img src="assets/images/service/01.jpg" alt="Optimyze Finance">
                                <a href="{{route('service-details')}}" class="lab-btn">view details <i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="service__item">
                            <div class="service__front text-center">
                                <div class="service__icon">
                                    <img src="assets/images/service/icon/02.png" alt="Optimyze Finance">
                                </div>
                                <div class="service__content">
                                    <h5><a href="{{route('service-details')}}">Unlock the value in your business</a></h5>
                                    <p>Finance Director/ Performance Dashboard / Kaplan / Balance scorecard / KPI’s / Sustainability Accounting  </p>
                                </div>
                            </div>
                            <div class="service__back">
                                <img src="assets/images/service/02.jpg" alt="Optimyze Finance">
                                <a href="{{route('service-details')}}" class="lab-btn">view details <i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="service__item">
                            <div class="service__front text-center">
                                <div class="service__icon">
                                    <img src="assets/images/service/icon/03.png" alt="Optimyze Finance">
                                </div>
                                <div class="service__content">
                                    <h5><a href="{{route('service-details')}}">Raising capital | Driving performance</a></h5>
                                    <p>Pitch deck/Business Plan/ Negotiation </p>
                                </div>
                            </div>
                            <div class="service__back">
                                <img src="assets/images/service/03.jpg" alt="Optimyze Finance">
                                <a href="{{route('service-details')}}" class="lab-btn">view details <i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="service__item">
                            <div class="service__front text-center">
                                <div class="service__icon">
                                    <img src="assets/images/service/icon/04.png" alt="Optimyze Finance">
                                </div>
                                <div class="service__content">
                                    <h5><a href="{{route('service-details')}}">Need help with tax</a></h5>
                                    <p>Fixcon help you to Introduce your digital campaign to visitor in more
                                        professional way and increase.</p>
                                </div>
                            </div>
                            <div class="service__back">
                                <img src="assets/images/service/04.jpg" alt="Optimyze Finance">
                                <a href="{{route('service-details')}}" class="lab-btn">view details <i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="service__item">
                            <div class="service__front text-center">
                                <div class="service__icon">
                                    <img src="assets/images/service/icon/05.png" alt="Optimyze Finance">
                                </div>
                                <div class="service__content">
                                    <h5><a href="{{route('service-details')}}">Need an audit</a></h5>
                                    <p>Fixcon help you to Introduce your digital campaign to visitor in more
                                        professional way and increase.</p>
                                </div>
                            </div>
                            <div class="service__back">
                                <img src="assets/images/service/05.jpg" alt="Optimyze Finance">
                                <a href="{{route('service-details')}}" class="lab-btn">view details <i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="service__item">
                            <div class="service__front text-center">
                                <div class="service__icon">
                                    <img src="assets/images/service/icon/06.png" alt="Optimyze Finance">
                                </div>
                                <div class="service__content">
                                    <h5><a href="{{route('service-details')}}">Finance and Accounting</a></h5>
                                    <p>Fixcon help you to Introduce your digital campaign to visitor in more
                                        professional way and increase.</p>
                                </div>
                            </div>
                            <div class="service__back">
                                <img src="assets/images/service/06.jpg" alt="Optimyze Finance">
                                <a href="{{route('service-details')}}" class="lab-btn">view details <i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4 mt-lg-5 wow fadeInUp" data-wow-delay=".5s">
                    <a href="{{route('services')}}" class="lab-btn">Free Consultancy <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Service Section Ends Here========== -->

   
  
 
    
    <!-- ==========Contact Section Start Here========== -->
    <div class="contact padding-tb contact--one">
        <div class="container">
            <div class="section__header text-center">
                <h5>Free Consultation</h5>
                <h2>Dont like Filling up forms ? Mail us then Info@bizpoint.com</h2>
            </div>
            <div class="section__wrapper">
                <form action="#">
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-6 col-12">
                            <input type="text" placeholder="Your Name" name="name" id="name">
                        </div>
                        <div class="col-md-6 col-12">
                            <input type="text" placeholder="Your Email" name="email" id="email">
                        </div>
                        <div class="col-md-6 col-12">
                            <input type="text" placeholder="Service Looking For?" name="subject" id="subject">
                        </div>
                        <div class="col-md-6 col-12">
                            <input type="text" placeholder="Your Number" name="number" id="number">
                        </div>
                        <div class="col-12">
                            <textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
                        </div>
                        <div class="col-md-6 col-12">
                            <button type="submit" class="lab-btn w-100 border-0">get a call back <i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ==========Contact Section Ends Here========== -->
@endsection