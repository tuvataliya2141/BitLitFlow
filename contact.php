<?php 
	include('connection.php');
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$msg=$_POST['message'];
		
		mysqli_query($conn,"INSERT INTO contact_us(name,email,message) values('$name','$email','$msg')");
		
		//header("Location: index.php");
	}
	include('header.php'); 
?>        
    <!--header section start-->
			<section class="breadcrumb-section contact-bg section-padding">
			<div class="container">
			    <div class="row">
			        <div class="col-md-6 col-md-offset-3 text-center">
			            <h1>contact us</h1>
			             <p></p>
			        </div>
			    </div>
			</div>
			</section><!--Header section end-->

      <section class="get-in-touch section-padding text-center">
          <div class="container">
              <div class="row text-center">
                  <div class="col-md-4 wow pulse ">
                      <div class="single-shape-box">
                          <div class="get-in-tuch-icon">
                              <i class="fa fa-phone"></i>
                          </div>
                          <div class="get-in-touch-text">
                              <h4>Call Us</h4>
                              <p>(880) 123456789 </p>
                              <p>(880) 123456789 </p>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4 wow pulse">
                      <div class="single-shape-box color-onvestor">
                          <div class="get-in-tuch-icon">
                              <i class="fa fa-location-arrow"></i>
                          </div>
                          <div class="get-in-touch-text">
                              <h4>Address </h4>
                              <p>21 East 22 Street
                               <br /> New-York - 10010,</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4 wow pulse" >
                      <div class="single-shape-box">
                          <div class="get-in-tuch-icon">
                              <i class="fa fa-envelope"></i>
                          </div>
                          <div class="get-in-touch-text">
                              <h4>Email</h4>
                              <p>info@bitlitcoin.com </p>   
                              <p><br></p>                           
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--get in touch section end-->
		
		<!--Contact Form Start-->
		<section class="contact-section wow fadeInUp ">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="contact-form">
							<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<h2 class="title">Send Your Masseage</h2>
									<form action="contact.php" method="post">
										<input type="text" class="name" name="name" placeholder="Name">
										<input type="email" class="email" name="email" placeholder="Email">
										<textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
										<div class="col-md-12 col-sm-12">
											<input type="submit" value="Send Message Now!" name="submit">
                                        </div>                         
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!--Contact Form end-->
		<!--get in touch section start-->

    <!--pament method section start-->
    <section class="section-padding payment-method payment-bg ">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 style="color:#fff;">Thank You!</h1>	
				</div>
			</div>
		</div>
    </section><!--pament method section end-->

<?php include('footer.php'); ?>    



















