@extends('layouts.app')
@section('header_extras')
    <title>Rising Captital</title>
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
                            <h4 class="head">Raise capital</h4>

                            <div class="pera">
                                <p>Raising capital merits a <span class="green">combination</span> of strategic planning, having the right contacts, and professional resilience.  And that’s why our experts have you covered. Tab <span class="green">- Speak to an expert.</span></p>

                            </div>
                            <div class="row row1">
                                <div class="col-12 mt-5 mx-4">
                                    <p>We help you reduce the complexity of managing your business and raising capital at the same time.  We help you make the right decisions that accelerate time to capital while maintaining robust controls on business performance to enhance shareholder value. </p>
                                    
                                    <p>Here are some ways we could help you:</p>
                                     <ul class="arrow-list">
                                    <p><li><b>Investment Memo Preparation - </b> accurate and reliable financial statements which provide crucial information about a company's financial health, performance, and potential to investors and lenders.</li></p>
                                    <p><li><b>Due Diligence - </b>  reviews to assess a company's financial records, internal controls, and financial projections thus, minimising potential risks or issues that may impact the decision to invest or lend capital. Enhances the credibility and transparency of a company’s financial information, thereby increasing investor confidence.</li></p>
                                    <p><li><b>Valuation Services - </b>  valuation techniques, such as discounted cash flow analysis, market comparables, and industry benchmarking, to determine a fair value essential for attracting investors and negotiating favourable terms for raising capital.</li></p>
                                    <p><li><b>Financial Modeling - </b>  project future financial performance and cash flows. These models are used to analyze different funding scenarios, assess the impact of capital investments, and demonstrate the potential return on investment to potential investors.</li></p>
                                    <p><li><b>Compliance and Regulation - </b>  navigate complex regulatory requirements related to raising capital, such as securities laws, financial reporting standards, and taxation rules. This ensures adherence to regulations, essential for gaining investor trust and maintaining compliance with legal obligations.</li></p>
                                    <p><li><b>Investor Relations- </b>  manage relationships with existing and potential investors. Provide financial reporting and analysis to investors, address their queries, and ensure transparent communication of financial information. Effective investor relations contribute to building trust, attracting new investors, and maintaining long-term relationships.</li></p>
                                    </ul>
                                    <p>We provide expertise and support throughout the capital-raising process, helping businesses present accurate financial information, comply with regulations, and build credibility with investors and lenders.</p>
                                    <p>&nbsp;</p>
                                    <p><h2 class="green">How we can help?</h2></p>
                                            <p>Our specialists will guide you and your company through every stage of the
                                                business life cycle, from start-up, through Series A and beyond. With
                                                various services under one roof, we work collaboratively with you to provide
                                                a one-stop-shop service for all your financial requirements. </p>
                                                <p><b> Our financial service includes : </b></p>
                                            <ul class="arrow-list2">
                                            <p>
                                                <li> Support in arranging corporate finance</li>
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
                                                <li> Raising capital</li>
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
                                            </ul>
                                            
                                            <h6 class="text-center ">You can focus on and grow your business by outsourcing your finance needs to
                                                our expert team.</h6>
                                            <p>&nbsp;</p>
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
                                            <input type="text" placeholder="Your Name*" name="name" id="name"
                                                required="">
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <input type="email" placeholder="Your Email*" name="email" id="email"
                                                required="">
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <input type="text" placeholder="Service Looking For?" name="subject"
                                                id="subject">
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

        </section>
        <!-- ==========Feature Section Ends Here========== -->
    @endsection
