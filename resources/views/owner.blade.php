@extends('layouts.app')
@section('header_extras')


<title>I Lead A Unit OR I’m The Owner | Service | Optimyze Finance </title>
@endsection 
@section('content')

    <!-- ==========Banner Section Start Here========== -->
    <div class="pageheader padding-tb bg-img" style="background-image: url(assets/images/bg/page-header.jpg);">
        <div class="container">
            <div class="pageheader__area text-center">
                <h2>I Lead A Unit OR I’m The Owner</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
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
          <!--  <div class="section__header text-center">
                <h5>OUR best SERVICES</h5>
                <h2>What We Offer for You</h2>
                <p>Integrio deep industry expertise enables global brands to hit the ground running.</p>
            </div> -->
            <div class="section__wrapper">
                <div class="row justify-content-center align-items-center g-4">
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="service__item">
                            <div class="service__front text-center">
                                <div class="service__icon">
                                    <img src="assets/images/service/icon/01.png" alt="rajib raj">
                                </div>
                                <div class="service__content">
                                    <h5><a href="#">Service 1</a></h5>
                                    <p>Fixcon help you to Introduce your digital campaign to visitor in more professional way and increase.</p>
                                </div>
                            </div>
                            <div class="service__back">
                                <img src="assets/images/service/01.jpg" alt="rajib raj">
                                <a href="#" class="lab-btn">view details <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="service__item">
                            <div class="service__front text-center">
                                <div class="service__icon">
                                    <img src="assets/images/service/icon/02.png" alt="rajib raj">
                                </div>
                                <div class="service__content">
                                    <h5><a href="#">Service 2</a></h5>
                                    <p>Fixcon help you to Introduce your digital campaign to visitor in more professional way and increase.</p>
                                </div>
                            </div>
                            <div class="service__back">
                                <img src="assets/images/service/02.jpg" alt="rajib raj">
                                <a href="#" class="lab-btn">view details <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="service__item">
                            <div class="service__front text-center">
                                <div class="service__icon">
                                    <img src="assets/images/service/icon/03.png" alt="rajib raj">
                                </div>
                                <div class="service__content">
                                    <h5><a href="#">Service 3</a></h5>
                                    <p>Fixcon help you to Introduce your digital campaign to visitor in more professional way and increase.</p>
                                </div>
                            </div>
                            <div class="service__back">
                                <img src="assets/images/service/03.jpg" alt="rajib raj">
                                <a href="#" class="lab-btn">view details <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="service__item">
                            <div class="service__front text-center">
                                <div class="service__icon">
                                    <img src="assets/images/service/icon/04.png" alt="rajib raj">
                                </div>
                                <div class="service__content">
                                    <h5><a href="#">Service 4</a></h5>
                                    <p>Fixcon help you to Introduce your digital campaign to visitor in more professional way and increase.</p>
                                </div>
                            </div>
                            <div class="service__back">
                                <img src="assets/images/service/04.jpg" alt="rajib raj">
                                <a href="#" class="lab-btn">view details <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="service__item">
                            <div class="service__front text-center">
                                <div class="service__icon">
                                    <img src="assets/images/service/icon/05.png" alt="rajib raj">
                                </div>
                                <div class="service__content">
                                    <h5><a href="#">Service 5</a></h5>
                                    <p>Fixcon help you to Introduce your digital campaign to visitor in more professional way and increase.</p>
                                </div>
                            </div>
                            <div class="service__back">
                                <img src="assets/images/service/05.jpg" alt="rajib raj">
                                <a href="#" class="lab-btn">view details <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="service__item">
                            <div class="service__front text-center">
                                <div class="service__icon">
                                    <img src="assets/images/service/icon/06.png" alt="rajib raj">
                                </div>
                                <div class="service__content">
                                    <h5><a href="#">Service 6</a></h5>
                                    <p>Fixcon help you to Introduce your digital campaign to visitor in more professional way and increase.</p>
                                </div>
                            </div>
                            <div class="service__back">
                                <img src="assets/images/service/06.jpg" alt="rajib raj">
                                <a href="#" class="lab-btn">view details <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Service Section Ends Here========== --> 

@endsection