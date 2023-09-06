@extends('layouts.app')
@section('header_extras')


<title>Contact Us | Optimyze Finance </title>
@endsection 
@section('content')

    <!-- ==========Banner Section Start Here========== -->
    <div class="pageheader padding-tb bg-img" style="background-image: url(assets/images/bg/page-header.jpg);">
        <div class="container">
            <div class="pageheader__area text-center">
                <h2>our contacts info</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contacts</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ==========Banner Section Ends Here========== -->

    
    <!-- ==========Contact Section Start Here========== -->
    <div class="contact padding-tb">
        <div class="container">
            <div class="section__header text-center">
                <h5>OUR CONTACTS</h5>
                <h2>We’re Here to Help You</h2>
            </div>
            <div class="section__wrapper">
                <div class="row justify-content-center g-4">
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="contact__item">
                            <div class="contact__icon">
                                <img src="assets/images/contact/icon/01.png" alt="rajib raj">
                            </div>
                            <div class="contact__content">
                                <h5>Visit Us Daily:</h5>
                                <p>218 New Elephent Road, Gulshan-1060 10 Gren Road, Dhaka-1100.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="contact__item">
                            <div class="contact__icon">
                                <img src="assets/images/contact/icon/02.png" alt="rajib raj">
                            </div>
                            <div class="contact__content">
                                <h5>Visit Us Daily:</h5>
                                <p>Monday - Thusday : 9:30am - 6:30pm Friday : <span>Closed</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="contact__item">
                            <div class="contact__icon">
                                <img src="assets/images/contact/icon/03.png" alt="rajib raj">
                            </div>
                            <div class="contact__content">
                                <h5>Phone number</h5>
                                <p>+880 1234 567 890 <b>292 09 - 845 632</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Contact Section Ends Here========== -->

    
    <!-- ==========Contact Section Start Here========== -->
    <div class="contact padding-tb contact--one contact--three bg-img" style="background-image: url(assets/images/bg/14.jpg);">
        <div class="container">
            <div class="section__header text-center">
                <h5>Have Any Question?</h5>
                <h2>Have be any Question? feel free to contact with us.</h2>
            </div>
            <div class="section__wrapper">
                <form action="contact.php" id="contact-form" method="POST">
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-6 col-12">
                            <input type="text" placeholder="Your Name*" name="name" id="name" required>
                        </div>
                        <div class="col-md-6 col-12">
                            <input type="email" placeholder="Your Email*" name="email" id="email" required>
                        </div>
                        <div class="col-md-6 col-12">
                            <input type="text" placeholder="Service Looking For?" name="subject" id="subject">
                        </div>
                        <div class="col-md-6 col-12">
                            <input type="text" placeholder="Your Number" name="number" id="number">
                        </div>
                        <div class="col-12">
                            <textarea name="message" id="message" rows="6" placeholder="Message*" required></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="lab-btn border-0">get a call back <i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                    <p class="form-message"></p>
                </form>
            </div>
        </div>
    </div>
    <!-- ==========Contact Section Ends Here========== -->

    
    <!-- ==========Google map Section Start Here========== -->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13004069.896900944!2d-104.65611544442767!3d37.27565371492453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sbd!4v1672038786391!5m2!1sen!2sbd"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- ==========Google map Section Ends Here========== -->


    @endsection