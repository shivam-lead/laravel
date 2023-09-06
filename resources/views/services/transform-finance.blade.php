@extends('layouts.app')
@section('header_extras')
    <title>Tranform Finance</title>
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
                                    <h1 class="head">Transform Finance</h1>

                                    <div class="pera">
                                        <p><b>Rethink your approach to building and scaling your finance function.&nbsp;&nbsp;</b>
                                        </p>
                                        <p>In this uncertain landscape that has been exacerbated by the rising cost of doing
                                            business and interest rates and significant currency fluctuations, CFOs are
                                            facing several challenges.&nbsp; We have helped CFOs transform their finance
                                            function to deliver value to the wider business while dealing with resourcing
                                            issues and supporting the growth of the business.&nbsp;</p>
                                    </div>
                                    <div class="row row1">
                                        <div class="col-12 mt-5 px-4">
                                            <p> Here are some ways to enable CFOs to transform finance:</p>
                                            <ul class="arrow-list">
                                            <p><li><b>Co-sourcing to build a future-proofed finance function - </b>
                                                we&nbsp;bring industry knowledge, best practices, and expertise to help you
                                                align financial functions with business objectives and drive organizational
                                                growth.</li></p>
                                            <p><li><b> Finance optimization - </b> Conduct process assessments, identify
                                                bottlenecks, and propose streamlined workflows, leveraging automation and
                                                technology solutions where appropriate.</li></p>
                                            <p><li><b>Data Analytics as a Service - </b> Implement robust reporting systems,
                                                perform data analysis, and develop dashboards and key performance indicators
                                                (KPIs) to monitor financial performance and identify areas for improvement.</li>
                                            </p>
                                            <p><li><b>Risk Management - </b> Strengthening risk management practices within the
                                                finance function and providing guidance on internal controls, compliance,
                                                and governance frameworks, helping to mitigate financial risks and ensure
                                                regulatory compliance.</li></p>
                                                </ul>
                                                <p>&nbsp;</p>
                                            <h2 class="green">How we can help?</h2>
                                            <p>Our specialists will guide you and your company through every stage of the
                                                business life cycle, from start-up, through Series A and beyond. With
                                                various services under one roof, we work collaboratively with you to provide
                                                a one-stop-shop service for all your financial requirements.</p>
                                                <p><b> Our financial service includes : </b></p>
                                                  <ul class="arrow-list2">
                                            <p>
                                                <li>Support in arranging corporate finance</li>
                                            </p>
                                            <p>
                                                <li>Management accounting and Outsourced
                                                    bookkeeping</li>
                                            </p>
                                            <p>
                                                <li>Business valuations</li>
                                            </p>
                                            <p>
                                                <li>Preparing your financial statements</li>
                                            </p>
                                            <p>
                                                <li>Raising capital</li>
                                            </p>
                                            <p>
                                                <li>Reclaim R&amp;D expenditure</li>
                                            </p>
                                            <p>
                                                <li>Corporation tax filings</li>
                                            </p>
                                            <p>
                                                <li>Sales Tax compliance</li>
                                            </p>
                                            <p>
                                                <li>Payroll services</li>
                                            </p>
                                            </ul>
                                            <h6 class="text-center mb-5">You can focus on and grow your business by outsourcing your finance needs to
                                                our expert team.</h6>
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
