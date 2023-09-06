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
                                        <p><b>We act as trusted advisor or knowledgeable friend to help you achieve your financial goals.</b></p>
                                           
                                    </div>
                                        <div class="content mt-5 px-4">
                                         <p>Tax laws can be complex and vary by jurisdiction, but our experts give you personalised tax advice, provide you with accurate financial information and create effective tax planning strategies tailored to your unique circumstances.</p><p>Here are some ways we help individuals with tax planning:</p>
                                           <ul class="arrow-list">
                                         <p><li><b>Tax Deductions and Credits - </b> Identify eligible deductions and credits to reduce the taxable income, ultimately lowering the tax liability.</li></p><p><li><b>Income and Expense Analysis - </b> Analyze income and expenses to determine the best strategies for minimizing taxes.</li></p><p><li><b>Retirement Planning - </b>Guide and help you plan for your retirement by recommending suitable retirement accounts and investment options that offer tax advantages.</li></p><p><li><b>Investment Taxation - </b> Provide guidance on the tax implications of different investment choices such as tax consequences of selling assets, capital gains, and dividends to minimize taxes &nbsp; &nbsp;on investment income.</li></p><p><li><b>Tax Law Compliance - </b> Our experts ensure that you remain compliant with current tax regulations, minimizing the risk of tax errors and penalties.</li></p><p><li><b> Estate and Gift Tax Planning - </b> We can assist with estate and gift tax planning, helping you to minimize the tax burden for heirs and beneficiaries.</li></p>
                                         </ul>
                                        </div>
                                    <div class="container">
                                            <div class=" text-center">
                                                    <h5 class="green mt-4">Have Any Question?</h5>
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

                            <!-- ========== Insights  Section Ends Here========== -->
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <!-- ==========Feature Section Ends Here========== -->
    @endsection
