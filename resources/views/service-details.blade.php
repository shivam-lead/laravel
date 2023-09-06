@extends('layouts.app')
@section('header_extras')


<title>Service Details | Service | Optimyze Finance </title>
@endsection 
@section('content')


<!-- ==========Banner Section Start Here========== -->
<div class="pageheader padding-tb bg-img" style="background-image: url(assets/images/bg/page-header.jpg);">
    <div class="container">
        <div class="pageheader__area text-center">
            <h2>services single page</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">services single</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- ==========Banner Section Ends Here========== -->


<!-- ==========Service Section Start Here========== -->
<div class="service service--details padding-tb">
    <div class="container">
        <div class="row flex-row-reverse g-4">
            <div class="col-lg-8 col-12">
                <div class="service__maincontent">
                    <img src="assets/images/service/single/01.jpg" alt="rajib raj">
                    <h4>Why choose Constol services?</h4>
                    <p>Our consultants believe the value that you manage your reguator complance police procedure we have specialis for managed employee performance and comparable interna advice unction train people quickly well with e-business so they highy efficien manufactured products we are</p>
                    <div class="row g-4 mb-4 mt-3">
                        <div class="col-sm-6 col-12">
                            <img src="assets/images/service/single/02.jpg" alt="rajib raj">
                        </div>
                        <div class="col-sm-6 col-12">
                            <p>Holistcly are empower ethcal imperatives through distinctively incubate best of breed that solutions clents focused customer service through website</p>
                            <p>Holistcly are empower ethcal imperatives through distinctively incubate best of breed that solutions clents focused customer service through website awesome enabled sources.</p>
                        </div>
                    </div>
                    <h4>Right People of A Fund Adviser</h4>
                    <p>Our consultants believe the value that you manage your reguator compliance poice procedure we have specialis for managed employee performance and comparable interna advice unction train people quickly well with e-business so they highy efficien manufactured products we are</p>
                    <div class="row flex-row-reverse g-4 mb-4 mt-3">
                        <div class="col-sm-6 col-12 text-sm-end">
                            <img src="assets/images/service/single/01.png" alt="rajib raj" class="w-auto">
                        </div>
                        <div class="col-sm-6 col-12">
                            <p>Holistcly are empower ethcal imperatives through distinctively incubate best of breed that solutions clents focused customer service through website</p>
                            <p>Holistcly are empower ethcal imperatives through distinctively incubate best of breed that solutions clents focused customer service through website awesome enabled sources.</p>
                        </div>
                    </div>
                    <h4>Get A Free Consultancy</h4>
                    <form action="#">
                        <div class="row g-3">
                            <div class="col-sm-6 col-12">
                                <input type="text" placeholder="Your Name*" name="name" id="name" required>
                            </div>
                            <div class="col-sm-6 col-12">
                                <input type="text" placeholder="Your Company*" name="company" id="company" required>
                            </div>
                            <div class="col-sm-6 col-12">
                                <input type="email" placeholder="Email*" name="email" id="email" required>
                            </div>
                            <div class="col-sm-6 col-12">
                                <input type="text" placeholder="Subject" name="subject" id="subject">
                            </div>
                            <div class="col-12">
                                <textarea name="massage" id="massage" rows="5" placeholder="Massage*" required></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="lab-btn">send your massage <i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="service__sidebar">
                    <div class="widget">
                        <div class="widget__service">
                            <div class="widget__head">
                                <h5>our all services</h5>
                            </div>
                            <div class="widget__body">
                                <ul>
                                    <li><a href="service-single.html"><i class="fa-solid fa-circle-check"></i> Experience design </a></li>
                                    <li><a href="service-single.html"><i class="fa-solid fa-circle-check"></i> digital services </a></li>
                                    <li><a href="service-single.html"><i class="fa-solid fa-circle-check"></i> content engineering </a></li>
                                    <li><a href="service-single.html"><i class="fa-solid fa-circle-check"></i> product development </a></li>
                                    <li><a href="service-single.html"><i class="fa-solid fa-circle-check"></i> advisory services </a></li>
                                    <li><a href="service-single.html"><i class="fa-solid fa-circle-check"></i> data structuring </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget__brochure">
                            <div class="widget__head">
                                <h5>company Brochure</h5>
                            </div>
                            <div class="widget__body">
                                <img src="assets/images/sidebar/brochure/01.jpg" alt="rajib raj">
                                <p>Holstc in empowe ethca mperatve throu clien ocused customer services dsnctev incubate best of breed soluton</p>
                                <a href="#0" class="lab-btn" download>download pdf <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="widget__help">
                            <div class="widget__head">
                                <h5>Need any Help?</h5>
                            </div>
                            <div class="widget__body">
                                <img src="assets/images/sidebar/brochure/02.jpg" alt="rajib raj">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <img src="assets/images/sidebar/icon/01.png" alt="rajib raj">
                                        </div>
                                        <div class="content">
                                            <p>Monday - Friday</p>
                                            <p><b>08:00 AM - 06: 00 PM</b></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="assets/images/sidebar/icon/02.png" alt="rajib raj">
                                        </div>
                                        <div class="content">
                                            <p>Phone Number</p>
                                            <p><b>+0123456890 - 02 842 620</b></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="assets/images/sidebar/icon/03.png" alt="rajib raj">
                                        </div>
                                        <div class="content">
                                            <p>Donato Parkway</p>
                                            <p><b>12 Tottina United State 1200</b></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ==========Service Section Ends Here========== -->
@endsection
