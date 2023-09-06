@extends('layouts.app')
@section('header_extras')
    <title>Manufactures</title>
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
                                    <h1 class="head">Manufactures</h1>

                                    <div class="pera">
                                        <p><b>You need simple yet in-depth performance metrics to drive business.&nbsp;</b></p>
                                        <p>By effectively managing accounting practices, small manufacturers can gain a clearer picture of their financial performance, make informed decisions, and maintain a strong financial foundation for sustainable growth.&nbsp;</p>
                                    </div>
                                    <div class="row row1">
                                        <div class="col-12 mt-5 px-4">
                                            <p>To optimize manufacturers through accounting, several strategies can be implemented :</p>
                                             <ul class="arrow-list">
                                            <p><li><b>Gross Margin Analysis - </b> Conduct a detailed analysis of manufacturing costs, identify cost drivers and areas where costs can be optimized without compromising quality or operational efficiency.</li></p>
                                            <p><li><b>Product Costing - </b> Develop accurate product costing methods to determine the true cost of manufacturing individual products leading to better pricing decisions, profitability analysis, and resource allocation.</li></p>
                                            <p><li><b>Compliance and Risk Management - </b> Ensure compliance with accounting standards, tax regulations, and legal requirements specific to the manufacturing industry.</li></p>
                                            <p><li><b>Inventory Management - </b> Implement effective inventory management practices to minimize carrying costs and avoid stockouts or overstock situations.</li></p>
                                            <p><li><b>Budgeting and Variance Analysis - </b> Develop comprehensive budgets that align with production goals and monitor actual performance against budgeted targets.</li></p>
                                        <p><li><b>Supply Chain Optimization - </b> Collaborate with suppliers and streamline the supply chain to reduce costs and improve efficiency.</li></p>
                                        </ul>
                                        <p>&nbsp;</p>
                                            <p><h2 class="green">How we can help?</h2></p>
                                            <p>Our specialists will guide you and your company through every stage of the business life cycle, from start-up, through Series A and beyond. With various services under one roof, we work collaboratively with you to provide a one-stop-shop service for all your financial requirements.&nbsp;</p>
                                            <p><b> Our financial service includes : </b></p>
                                            <ul class="arrow-list2">
                                            <p><li>Support in arranging corporate finance </li></p>
                                            <p><li>Management accounting and Outsourced bookkeeping</li></p>
                                            <p><li>Business valuations</li></p>
                                            <p><li>Preparing your financial statements</li></p>
                                            <p><li>Audit</li></p>
                                            <p><li>Reclaim R&amp;D expenditure</li></p>
                                            <p><li>Corporation tax filings</li></p>
                                            <p><li>Sales Tax compliance</li></p>
                                            <p><li>Payroll services</li></p>
                                            <p><li>Setting up a benefits structure and staff rewards system</li></p>
                                            </ul>

                                            <h6 class="text-center ">You can focus on and grow your business by outsourcing your finance needs to our expert team.</h6>
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

                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- ==========Feature Section Ends Here========== -->
    @endsection
