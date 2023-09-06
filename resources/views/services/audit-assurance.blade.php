@extends('layouts.app')
@section('header_extras')
    <title>Audit and assurance</title>
@endsection
@section('content')
    </head>

    <body style="overflow-x: hidden">
        <section class="main" style="position:relative!important;">
            <div class="full-content article-page">
                <div class="row">
                    @include('layouts.page-sidebar')
                    <div class="col-lg-9 col-sm-12 padding-zero">

                        <div class="service bg-img op-0 full-content">
                            <div class="strapeline"><h1 class="gradient-text">Audit and assurance</h1></div>
                            <div class="overview" style="height: 260px;">
			                     <div class="overview-title">Whether you are a small, neighbourhood not-for-profit or a large, complex organisation, we help you navigate financial pressures due to changing economic dynamics, fluctuating philanthropic support and complex regulatory structures.</div>
		                    </div>
                    	    <div class="page">
                    	        <p>Regardless of your size, our experts can provide you with solutions that are the right fit for your circumstances, rather than provide you with a one-size-fits-all approach. Offering a range of audit, tax and advisory services, we are committed to helping you overcome the obstacles you face and to developing a robust and sustainable operating model. Here's how we could help you:</p>
                    			<div class="block padding-top-small padding-bottom-small  newcb">
                    				<div class="row">
                    					<div class="col-xs-12 col-md-12 text">
                    						<h2><span style="color:#555a8b;">Financial Statement Audits</span></h2>
                                            <p>Conduct financial statement audits, which involve a thorough examination of the non-profit's financial records, transactions, and disclosures. The goal is to ensure that the financial statements present a true and fair view of your organization's financial position, performance, and cash flows.</p>
                                            
                    					</div>
                    				</div>
                    			</div>
                    			<div class="block padding-top-small padding-bottom-small  newcb">
                    				<div class="row">
                    					<div class="col-xs-12 col-md-12 text">
                    						<h2><span style="color:#555a8b;">Compliance Audits</span></h2>
                                            <p>Non-profits are often subject to specific regulatory requirements and funding restrictions. We perform compliance audits to verify that the organization has adhered to these requirements and utilized funds appropriately.</p>
                    					</div>
                    				</div>
                    			</div>
                    			<div class="block padding-top-small padding-bottom-small  newcb">
                    				<div class="row">
                    					<div class="col-xs-12 col-md-12 text">
                    						<h2><span style="color:#555a8b;">Internal Control Evaluation</span></h2>
                                            <p>Assess the internal control systems to determine effectiveness in safeguarding assets, preventing fraud, and ensuring accurate financial reporting.</p>
                    					</div>
                    				</div>
                    			</div>
                    			<div class="block padding-top-small padding-bottom-small  newcb">
                    				<div class="row">
                    					<div class="col-xs-12 col-md-12 text">
                    						<h2><span style="color:#555a8b;">Risk Assessment</span></h2>
                                            <p>Identify and evaluate the risks, both financial and operational, to prioritize areas that require more attention and resources to mitigate potential risks.</p>
                    					</div>
                    				</div>
                    			</div>
                    			<div class="block padding-top-small padding-bottom-small  newcb">
                    				<div class="row">
                    					<div class="col-xs-12 col-md-12 text">
                    						<h2><span style="color:#555a8b;">Donor and Grant Reporting</span></h2>
                                            <p>Ensure that the organization complies with donor restrictions and accurately reports the use of funds.</p>
                    					</div>
                    				</div>
                    			</div>
                    			<div class="block padding-top-small padding-bottom-small  newcb">
                    				<div class="row">
                    					<div class="col-xs-12 col-md-12 text">
                    						<h2><span style="color:#555a8b;">Transparency and Accountability</span></h2>
                                            <p>Providing an independent assessment of financial information, accountants bolster the trust of donors, stakeholders, and the public.</p>
                    					</div>
                    				</div>
                    			</div>
                    			<div class="block padding-top-small padding-bottom-small  newcb">
                    				<div class="row">
                    					<div class="col-xs-12 col-md-12 text">
                    						<h2><span style="color:#555a8b;">Regulatory Compliance</span></h2>
                                            <p> Help non-profits navigate the complex web of regulatory requirements, ensuring that the organization meets all legal obligations related to financial reporting and disclosures.</p>
                    					</div>
                    				</div>
                    			</div>
                    			<div class="block padding-top-small padding-bottom-small  newcb">
                    				<div class="row">
                    					<div class="col-xs-12 col-md-12 text">
                    						<h2><span style="color:#555a8b;">Fraud Detection and Prevention</span></h2>
                                            <p>Detect signs of potential fraud whilst performing audits, remain vigilant for any red flags or irregularities and advise the organization on implementing fraud prevention measures.</p>
                    					</div>
                    				</div>
                    			</div>
                    			<div class="block padding-top-small padding-bottom-small  newcb">
                    				<div class="row">
                    					<div class="col-xs-12 col-md-12 text">
                    						<h2><span style="color:#555a8b;">Assurance on Non-Financial Information</span></h2>
                                            <p>In addition to financial information, provide assurance on non-financial information, such as sustainability reports or impact assessments thus enhancing credibility and transparency.</p>
                    					</div>
                    				</div>
                    			</div>
                    			<div class="container mt-4">
                            <div class=" text-center">
                                

                                    <h3 class="gradient-text">Call us, find us, contact us</h3>
                                    <h4>Tell us what you need or ask us a question</h4>
                            </div>
                            <div class="section__wrapper">
                            <form action="" id="contact-form" method="POST">
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
                                    <div class="col-12 text-center">
                                        <button type="submit" class="form-btn border-0">Get a call back <i
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

                    <!-- ========== Insights  Section Ends Here========== -->


                </div>
            </div>
        </div>
    </div>

</section>
<div id="clear"></div>
        <!-- ==========Feature Section Ends Here========== -->
    @endsection
