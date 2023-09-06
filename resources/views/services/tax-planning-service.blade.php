@extends('layouts.app')
@section('header_extras')
    <title>Tax Planning</title>
@endsection
@section('content')
    </head>

    <body style="overflow-x: hidden">
        <section class="main">
            <div class="container">
                <div class="row">
                    <!--@include('layouts.page-sidebar')-->
                    <div class="col-lg-12 padding-zero">

                        <div class="service-page-padding service-mt service bg-img op-0">
                                    <h1 class="head">Tax Planning</h1>

                                    <div class="pera">
                                        <p><b>The not-for-profit sector is defined by its diversity. </b></p>
                                        
                                    </div>
                                    <div class="row row1">
                                        <div class="col-12 mt-5 px-4">
                                            <p>We work with a broad spectrum of not-for-profit groups, such as charities, housing associations, educational institutions, health care providers and private foundations and help make the most of taxes and reliefs.  Our not-for-profit tax team helps to ensure your charity is fully tax compliant and structured optimally and to make the best use of the reliefs you’re entitled. Here are some ways we could help you:</p>
                                              <ul class="arrow-list">
                                            <p><li><b>Tax-Exempt Status and Sales tax advice - </b> Help non-profits obtain and maintain their tax-exempt status under the relevant section of the tax code and guide them through the application process and ensure they meet the necessary requirements.</li></p>
                                            <p><li><b>Identifying Tax Deductions - </b> Non-profits are eligible for certain tax deductions, such as contributions from donors and specific expenses directly related to their exempt purpose. We work with you to identify eligible deductions and maximize their tax advantages.</li></p>
                                            <p><li><b>Structuring Fundraising Activities - </b> Advise non-profits on structuring fundraising activities to ensure compliance with tax regulations and help determine which fundraising methods have tax implications and suggest tax-efficient approaches.</li></p>
                                            <p><li><b>Grant Compliance - </b> Non-profits often receive grants, and the tax treatment of these funds can vary depending on their nature. We assist in understanding the tax implications of different types of grants and ensure proper reporting.</li></p>
                                            <p><li><b>Foreign Activities and Reporting - </b> If a non-profit engages in activities outside its home country, there may be tax implications. Our experts could advise on tax reporting requirements related to international activities.</li></p>
                                                     
                                                 <p><li><b>Tax Reporting, and Filings - </b>  Prepare and file various tax forms which provides information about the non-profit's activities, finances, and governance. Ensuring accurate and timely filings is essential for maintaining tax-exempt status.</li></p>
                                                 
                                                          <p><li><b>Tax Compliance Review - </b> Perform regular reviews to ensure the non-profit is compliant with all tax laws and regulations thus, helping prevent potential penalties and issues with tax authorities.</li></p>
                                                          </li></p>
                                                </ul>
                                           
                                        <p>By offering expert tax planning advice and navigating the complexities of tax regulations, our experts enable non-profits to make informed financial decisions that support their mission while maximizing tax benefits and ensuring compliance with applicable tax laws.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                <div class=" text-center">
                        <h5 class="green">Have Any Question?</h5>
                        <h2>Have be any Question? feel free to contact with us.</h2>
                </div>
            <div class="section__wrapper">
                <form action="contact.php" id="contact-form" method="POST">
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-6 col-12">
                            <input type="text" placeholder="Your Name*" name="name" id="name" required="">
                        </div>
                        <div class="col-md-6 col-12">
                            <input type="email" placeholder="Your Email*" name="email" id="email" required="">
                        </div>
                        <div class="col-md-6 col-12">
                            <input type="text" placeholder="Service Looking For?" name="subject" id="subject">
                        </div>
                        <div class="col-md-6 col-12">
                            <input type="text" placeholder="Your Number" name="number" id="number">
                        </div>
                        <div class="col-12">
                            <textarea name="message" id="message" rows="6" placeholder="Message*" required=""></textarea>
                        </div>
                        <div class="col-12 text-center pb-5">
                            <button type="submit" class="lab-btn border-0">Get a call back <i
                                    class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                    <p class="form-message"></p>
                </form>
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
