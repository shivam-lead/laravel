@extends('layouts.app')
@section('header_extras')
    <title>International private client</title>
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
                                    <h1 class="head">International private clients</h1>

                                    <div class="pera">
                                        <p><b>Looking to invest beyond your tax residency?</b></p>
                                           
                                    </div>
                                        <div class="content mt-4 px-4">
                                          <p>We work with individuals across the globe and help you manage your taxes and make sure that you maximise returns from your investment. Our experts help you with all aspects of applicable tax regimes and suggest the right planning structures to ensure you maintain control and have clear visibility over your assets. We would ensure compliance with complex tax laws and optimize financial situations across different jurisdictions. Here are some ways in which we could help you:</p>
                                            <ul class="arrow-list">
                                          <p><li><b>International Tax Planning - </b></b> Navigate the complexities of tax laws and develop tax-efficient strategies to manage income, investments, and assets across borders while minimizing overall tax liabilities.</li></p><p><li><b>Residency and Domicile Determination - </b> Assist in determining tax residency and domicile status in various countries, as these factors have significant implications for their tax obligations.</li></p><p><li><b>Cross-Border Income and Investments - </b> Help clients with income from multiple countries, including salaries, dividends, rental income, and capital gains. Ensure proper reporting and advise on the most tax-efficient structures for cross-border investments.</li></p><p><li><b>Foreign Bank Account Reporting - </b> Assist with Foreign Bank Account Reporting (FBAR) and other compliance requirements to meet reporting obligations to the relevant tax authorities.</li></p><p><li><b>Expatriate Tax Services -</b> For individuals working or living abroad, provide expatriate tax services, considering both home and host country tax implications. Help clients claim foreign tax credits and tax exclusions on their income.</li></p><p><li><b>International Estate Planning - </b> Estate planning across borders, considering inheritance laws, estate taxes, and other regulations in different countries. Suggest appropriate estate structures and strategies to protect assets and minimize estate tax liabilities.</li></p><p><li><b>Repatriation of Funds -  </b> Help with tax-efficient repatriation strategies and ensure&nbsp;compliance with currency regulations.</li></p><p><li><b>Tax Audits and Disputes - </b> In the event of a tax audit or dispute, we could provide representation and advocacy, working to resolve issues with tax authorities.</li></p>
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
