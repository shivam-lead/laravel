@extends('layouts.app')
@section('header_extras')
    <title>Charitable Organisations</title>
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
                                    <h1 class="head">Charitable Organisations</h1>

                                    <div class="pera">
                                        <p><b>Charitable organisations face evolving tax and regulatory environments.</b></p>
                                        <p>By providing professional expertise and guidance in various areas we support you
                                            to keep you supporting others. By bringing our specialized knowledge and
                                            experience we help charitable organisations optimize their financial operations,
                                            adhere to regulatory requirements, improve transparency, and ultimately achieve
                                            their mission more effectively.</p>
                                    </div>
                                    <div class="row row1">
                                        <div class="col-12 mt-4 px-2" >
                                                 <ul class="arrow-list">
                                               <p><li> <b> Financial Management - </b> Assist in developing and implementing effective
                                                    budgeting systems, financial reporting processes, and internal controls
                                                    to ensure transparency, accountability, and proper allocation of
                                                    resources.</li></p> 
                                                <p><li> <b> Tax Planning and Compliance - </b> Help identify tax-exempt status
                                                    eligibility, maximize available tax incentives, and ensure compliance
                                                    with relevant tax laws and regulations.</li></p>
                                                <p><li> <b>Financial Analysis and Reporting - </b> Provide insights into KPIs, evaluate
                                                    effectiveness, and identify areas for improvement. Prepare accurate and
                                                    comprehensive financial reports for stakeholders, donors, and regulatory
                                                    authorities.</li></p>
                                                <p><li> <b>Grant and Funding Management - </b> Optimize the grant management process by
                                                    assisting in grant proposal preparation, monitoring grant expenditures,
                                                    ensuring compliance with grant requirements, and preparing financial
                                                    reports for grantors.</li></p>
                                                <p><li><b> Risk Management and Internal Controls - </b> Develop and implement robust
                                                    internal control systems to safeguard assets, prevent fraud, and ensure
                                                    compliance with legal and regulatory requirements.</li></p>
                                                <p><li><b> Technology and Systems Integration - </b> Help leverage technology solutions
                                                    to streamline financial processes and enhance operational efficiency.
                                                </li></p></ul>
                                      
                                            <p>&nbsp;</p>
                                            <p><h2 class="green">How we can help?</h2></p>
                                            <p>Our specialists will guide you and your company through every stage of the
                                                business life cycle, from start-up, through Series A and beyond. With
                                                various services under one roof, we work collaboratively with you to provide
                                                a one-stop-shop service for all your financial requirements.&nbsp;</p>
                                                <p><b> Our financial service includes : </b></p>
                                                 <ul class="arrow-list2">
                                            <p>
                                               <li>Support in arranging corporate finance </li>
                                            </p>
                                            <p>
                                                <li> Management accounting and Outsourced bookkeeping</li>
                                            </p>
                                            <p>
                                                <li> Business valuations</li>
                                            </p>
                                            <p>
                                                <li> Preparing your financial statements</li>
                                            </p>
                                            <p>
                                                <li> Audit</li>
                                            </p>
                                            <p>
                                                <li> Reclaim R&amp;D expenditure</li>
                                            </p>
                                            <p>
                                                <li> Corporation tax filings</li>
                                            </p>
                                            <p>
                                                <li> Sales Tax compliance</li>
                                            </p>
                                            <p>
                                                <li> Payroll services</li>
                                            </p>
                                            <p>
                                                <li> Setting up a benefits structure and staff rewards system</li>
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
