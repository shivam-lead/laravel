@extends('layouts.app')
 @section('header_extras')


<title>Clients | Optimyze Finance </title>
@endsection 
@section('content')



<!-- ==========Banner Section Start Here========== -->
<div class="pageheader padding-tb bg-img" >
    <div class="container">
        <div class="pageheader__area text-center">
            <h2 style="color:#000">Clients</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item active" style="color:#000 !important">Home</li>
                    <li class="breadcrumb-item active" aria-current="page">Clients</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- ==========Banner Section Ends Here========== -->


    <!-- ==========Testimonial Section Start Here========== -->
    <div class="testimonial testimonial--one padding-tb bg-img" style="background-image: url(assets/images/bg/02.jpg);">
        <div class="container">
            <div class="section__header text-center wow fadeInUp" data-wow-delay=".5s">
                <h5>happy our customers</h5>
                <h2>A Satisfied Customer is the best business strategy of all</h2>
            </div>
            <div class="section__wrapper">
                <div class="testimonial__slider wow fadeInUp" data-wow-delay=".5s">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial__item">
                                <div class="testimonial__inner">
                                    <div class="testimonial__thumb">
                                        <img src="assets/images/testimonial/01.jpg" alt="Optimyze Finance">
                                    </div>
                                    <div class="testimonial__content">
                                        <h5>Hexol D. Drownix</h5>
                                        <span>CEO of Founder</span>
                                        <p>Big advsed her notto do so becau the were housand of bad comma deviou semikol
                                            bes blind the little and listen</p>
                                        <div class="testimonial__content testimonial__content--rating">
                                            <ul>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                            <div class="testimonial__content--count">3.4</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial__item">
                                <div class="testimonial__inner">
                                    <div class="testimonial__thumb">
                                        <img src="assets/images/testimonial/02.jpg" alt="Optimyze Finance">
                                    </div>
                                    <div class="testimonial__content">
                                        <h5>Kristin Watson</h5>
                                        <span>CEO of Founder</span>
                                        <p>Big advsed her notto do so becau the were housand of bad comma deviou semikol
                                            bes blind the little and listen</p>
                                        <div class="testimonial__content testimonial__content--rating">
                                            <ul>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                            <div class="testimonial__content--count">3.4</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Testimonial Section Ends Here========== -->


   

@endsection