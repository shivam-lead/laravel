@extends('layouts.app')
@section('header_extras')
    <title>Governance and Trusts</title>
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
                                    <h1 class="head">Governance and Trusts</h1>

                                    <div class="pera">
                                        <p><b>We understand that as a social enterprise, most charities need to demonstrate public accountability through their annual report and accounts.  </b></p>
                                        
                                    </div>
                                    <div class="row row1">
                                        <div class="col-12 mt-5 px-4">
                                            <p>Our experts act as an adviser, and you can trust them to keep abreast of all the changes and how these will affect them. Our services can help your charity to be effective and sustainable through good governance, transparency, integrity, and accountability.</p>
                                            <p>There are several ways we could help you such as providing financial expertise, ensuring compliance with relevant regulations, and maintaining transparency in financial operations:</p>
                                              <ul class="arrow-list">
                                            <p><li><b>Financial Reporting and Compliance - </b> Preparing accurate and timely financial statements, including income statements, balance sheets, and cash flow statements. Ensuring compliance with accounting standards and regulatory requirements, such as Generally Accepted Accounting Principles (GAAP) or International Financial Reporting Standards (IFRS), and Charity Laws.</li></p>
                                            <p><li><b>Budgeting and Financial Planning - </b>  Help in identifying revenue sources, setting financial goals, and allocating funds to various programs and initiatives effectively such as charity taxation including VAT, maximizing income through gift aid, charitable trading.</li></p>
                                            <p><li><b>Grant and Funding Management - </b> Advise non-profits on structuring fundraising activities to ensure compliance with tax regulations and help determine which fundraising methods have tax implications and suggest tax-efficient approaches.</li></p>
                                            <p><li><b>Grant and Funding Management - </b> Assist in tracking and managing grants, ensuring that the funds are used for the intended purposes and that all reporting requirements are met.</li></p>
                                            <p><li><b>Internal Controls and Risk Management - </b> Help establish internal control systems to safeguard the organization's assets and prevent fraud or mismanagement of funds. Assess risks and recommend strategies to mitigate them.</li></p>
                                                     
                                                 <p><li><b>Tax Compliance - </b>  Ensure that your organization complies with tax laws, files appropriate tax returns, and maintains tax-exempt status.</li></p>
                                                 
                                                          <p><li><b>Trusts and Endowments - </b> Manage the investments and ensure that the funds are prudently managed to generate income to support the organization's mission while preserving the principal.</li></p>
                                                          </li></p>
                                                          <p><li><b>Compliance with Governance Policies - </b> Work closely with your board of directors and management to ensure compliance with governance policies and best practices, promoting good governance throughout the organization.</li></p>
                                                          </li></p>
                                                </ul>
                                           
                                        <p>Our experts bring financial expertise and integrity to non-profit organizations, supporting their mission-driven objectives while adhering to the principles of good governance and trust management. We understand that our role is essential in helping non-profits achieve their goals while maintaining the public's trust and confidence.</p>
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
