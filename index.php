<?php include('header.php'); ?>    
    <!--header section start-->
	<!--<section class="header-section">
    	<div class="head-slider">
			<div class="single-header slider header-bg"></div>
			<div class="single-header slider header-bg-2"></div>
			<div class="single-header slider header-bg-3"></div>
			<div class="single-header slider header-bg-4"> </div>
			<div class="single-header slider header-bg-5"></div><!--       
        </div>-->
		<div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto; width: 1140px; height: 442px; overflow: hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" />
            </div>

            <!-- Slides Container -->
            <div data-u="slides" style="position: absolute; left: 0px; top: 0px; width: 1140px; height: 442px;
            overflow: hidden;">
                <div>
                    <img data-u="image" src="../assets/img/1.jpg" />
                </div>
                <div>
                    <img data-u="image" src="../assets/img/2.jpeg" />
                </div>
                <div>
                    <img data-u="image" src="../assets/img/3.png" />
                </div>
                <div>
                    <img data-u="image" src="../assets/img/4.png" />
                </div>
				<div>
                    <img data-u="image" src="../assets/img/5.png" />
                </div>
            </div>
            
            <!--#region Bullet Navigator Skin Begin -->
            <!-- Help: https://www.jssor.com/development/slider-with-bullet-navigator.html -->
            <style>
                .jssorb031 {position:absolute;}
                .jssorb031 .i {position:absolute;cursor:pointer;}
                .jssorb031 .i .b {fill:#000;fill-opacity:0.5;stroke:#fff;stroke-width:1200;stroke-miterlimit:10;stroke-opacity:0.3;}
                .jssorb031 .i:hover .b {fill:#fff;fill-opacity:.7;stroke:#000;stroke-opacity:.5;}
                .jssorb031 .iav .b {fill:#fff;stroke:#000;fill-opacity:1;}
                .jssorb031 .i.idn {opacity:.3;}
            </style>
            <div data-u="navigator" class="jssorb031" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                <div data-u="prototype" class="i" style="width:16px;height:16px;">
                    <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                    </svg>
                </div>
            </div>
            <!--#endregion Bullet Navigator Skin End -->
        
            <!--#region Arrow Navigator Skin Begin -->
            <!-- Help: https://www.jssor.com/development/slider-with-arrow-navigator.html -->
            <style>
                .jssora051 {display:block;position:absolute;cursor:pointer;}
                .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
                .jssora051:hover {opacity:.8;}
                .jssora051.jssora051dn {opacity:.5;}
                .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
            </style>
            <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                </svg>
            </div>
            <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                </svg>
            </div>
            <!--#endregion Arrow Navigator Skin End -->
        </div>
        <!-- Jssor Slider End -->
    
	<!--</section>
	Header section end-->

    <!--about us page content start-->
	<section class="section-padding why-should-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-title text-center section-padding padding-bottom-0">
                        <h2>Why Us</h2>
						<p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="what-we-do-wrapper">
                        <div class="column-left wow fadeInLeft col-md-6">
							<h4>Company Overview</h4>
							<p>We present an end-to-end approach in entrepreneurship by introducing simple reward system for our distributor’s  health  care products. We understand optimizing opportunity value is as important as seizing the opportunity.</p>
                        </div> 
						<div class="column-right wow fadeInRight col-md-6">						
							<h4>Mission</h4>
                            <p>Our mission is to empower modern age entrepreneurs to lead a profitable business and peaceful life with work-life balance oriented business infrastructure. Our focus is on helping millions of young entrepreneurs to turn their spark in a flame and use it for enlightenment of a society as whole.</p>
                        </div>                        
                    </div>
                    <div class="what-we-do-wrapper">
                        <div class="column-left last wow fadeInLeft">
							<h4>Vision</h4>
							<p>Vision of Bitlit Flow is to become a leading infrastructure solution provider to multiple various industries by leveraging our well- researched technology developed under careful supervision of reputed and tenured domain experts.</p>
                        </div>
                        <div class="column-right wow fadeInRight col-md-6" style="border-bottom:none;">
							<h4>Outstanding</h4>
                            <p>Our product ranges from agriculture to home care. We aim to make a positive impact in various aspects of daily life of mankind. This is not a company, but a collaborative effort towards a better life and community for all.</p>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>
	</section>

    <!--service section start-->
    <section class="section-padding service-section service-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-title text-center section-padding padding-bottom-0">
                        <h2>Our Services</h2>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp">
                <div class="col-md-12 col-sm-12">
                    <div class="service-wrapper text-center">
                        <p>While catalogue of our services can be as extensive as an individual page; here is quick summary. We help people in blowing life to their ideas. If you have been sitting long enough to make sketches of brilliant ideas,  we are here with our toolkit at your disposal, to bring that sketch to life.</p>
                        <p>Now that you are geared up and ready to roll, let’s show the world what has been going in your creative section of business!</p>
                    </div>
                </div>
                <!--<div class="col-md-6 col-sm-6">
                    <div class="service-wrapper text-center ">
						<img src="assets/img/Aboutus.jpg">
                    </div>
                </div> -->                
            </div>
        </div>
    </section><!--service section end-->
    
	 <!--testimonial section start-->
    <section class="section-padding  testimonial-section testimonial-bg">
        <!--<div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-title text-center">
                         <h2 class="color-text">What People Say</h2>
                     </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                   <div class="slider-activation">
                        <div class="testimonial-carousel">
                            <div class="single-testimonial-wrapper">
                                <div class="single-testimonial-top">
                                   <div class="testimoanial-top-text">
                                       <h4 data-animate="flipInX animated">Abir Khan <span>Soft company</span></h4>
                                    </div>
                                    <div class="testimonial-bottom">
                                        <p> <i class="fa fa-quote-left"></i>I have purchased many great templates over the years but this product and this company have taken it to the next level. Exceptional customizability. <i class="fa fa-quote-right"></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-carousel">
                            <div class="single-testimonial-wrapper">
                                <div class="single-testimonial-top">
                                   <div class="testimoanial-top-text">
                                        <h4>Travis hannon <span>Infotech company</span></h4>

                                    </div>
                                    <div class="testimonial-bottom">
                                        <p> <i class="fa fa-quote-left"></i> I’m grateful and happy for the sky above. It’s a little cloudy today and the sun is working hard to break through. <i class="fa fa-quote-right"></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-carousel">
                            <div class="single-testimonial-wrapper">
                                <div class="single-testimonial-top">
                                   <div class="testimoanial-top-text">
                                       <h4>Dev Robin <span>King company</span></h4>
                                    </div>
                                    <div class="testimonial-bottom">
                                        <p> <i class="fa fa-quote-left"></i> A poor broke person will complain that MLM doesn’t work while a successful leader will ask himself “How can it work?” <i class="fa fa-quote-right"></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                   </div>
                   
                </div>
            </div>
        </div>-->
    </section><!--testimonial section end-->
    
    
    <!--Our Top Investor Section Start-->
    <section class="section-padding top-investor">
        <!--<div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-title text-center">
                         <h2 class="color-text">Our top Investors</h2>
                         <p></p>
                     </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4 col-sm-6 wow fadeInLeft">
                   <div class="single-investor-wrapper">
                        <h4>Abir Khan</h4>
                        <p>Invested : <strong>$30054</strong></p>                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                   <div class="single-investor-wrapper">
                        <h4>Sohidul islam</h4>
                        <p>Invested : <strong>$60554</strong></p>                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow fadeInRight">
                   <div class="single-investor-wrapper">
                        <h4>Rafayet Rifat</h4>
                        <p>Invested : <strong>$80848</strong></p>                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow fadeInLeft">
                   <div class="single-investor-wrapper">
                        <h4>Hasan Rahman</h4>
                        <p>Invested : <strong>$50125</strong></p>                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                   <div class="single-investor-wrapper">
                        <h4>Saddam Hossain</h4>
                        <p>Invested : <strong>$70000</strong></p>                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow fadeInRight">
                   <div class="single-investor-wrapper">
                        <h4>Joi Khan</h4>
                        <p>Invested : <strong>$100000</strong></p>                        
                    </div>
                </div>
            </div>
        </div>-->
    </section><!--Our Top Investor Section Start-->
           
	<?php include('footer.php'); ?>    