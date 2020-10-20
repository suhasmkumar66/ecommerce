<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
 <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(Swachha.Store/images/bg/2.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">About Us</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor">/</span>
                                  <span class="breadcrumb-item active">About Us</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area --> 
       <!-- Start Contact Area -->
        <section class="htc__contact__area ptb--10 bg__white">
            <div class="container">
			
		
                <div class="row">
                     <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 smt-30 xmt-30">
                        <div class="map-contacts">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.9624550569197!2d77.54964631430444!3d12.974253218331699!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3dfae6e289ab%3A0xcbed607de34a7098!2sPrasanna%20Theatre!5e0!3m2!1sen!2sin!4v1599995658437!5m2!1sen!2sin" 
						   width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                        <div class="htc__contact__container container">
                            <div class="htc__contact__address col-md-6 col-lg-6 col-sm-12 col-xs-12 pt--50 pb--30">
                                <h2 class="contact__title">contact info</h2>
                                <div class="contact__address__inner">
                                    <!-- Start Single Adress -->
                                    <div class="single__contact__address">
                                        <div class="contact__icon">
                                            <span class="ti-location-pin"></span>
                                        </div>
                                        <div class="contact__details">
                                            <p>Location : <br> NO: 3673, Manjunatha Nilaya,<br>
												9th cross, 12th Main road,
												Kaveri nagara,<br>Banashankari 2nd Stage
												Banglore <br> Karnataka-560011</p>
                                        </div>
                                    </div>
                                    <!-- End Single Adress -->
                                </div>
                                <div class="contact__address__inner">
                                    <!-- Start Single Adress -->
                                    <div class="single__contact__address">
                                        <div class="contact__icon">
                                            <span class="ti-mobile"></span>
                                        </div>
                                        <div class="contact__details">
                                            <p> Phone : <br><a href="#">+000 000 0000 </a></p>
                                        </div>
                                    </div>
                                    <!-- End Single Adress -->
                                    <!-- Start Single Adress -->
                                    <div class="single__contact__address">
                                        <div class="contact__icon">
                                            <span class="ti-email"></span>
                                        </div>
                                        <div class="contact__details">
                                            <p> Mail :<br><a href="#">info@example.com</a></p>
                                        </div>
                                    </div>
                                    <!-- End Single Adress -->
                                </div>
                            </div>
                            <div class="contact-form-wrap col-md-6 col-lg-6 col-sm-12 col-xs-12 pt--50 pb--30">
                            <div class="contact-title">
                                <h2 class="contact__title">Get In Touch</h2>
                            </div>
                            <form id="contact-form" action="mail.php" method="post">
                                <div class="single-contact-form">
                                    <div class="contact-box name">
                                        <input type="text" name="name" placeholder="Your Nme*">
                                        <input type="email" name="email" placeholder="Mail*">
                                    </div>
                                </div>
                                <div class="single-contact-form">
                                    <div class="contact-box subject">
                                        <input type="text" name="subject" placeholder="Subject*">
                                    </div>
                                </div>
                                <div class="single-contact-form">
                                    <div class="contact-box message">
                                        <textarea name="message"  placeholder="Massage*"></textarea>
                                    </div>
                                </div>
                                <div class="contact-btn">
                                    <button type="submit" class="fv-btn">SEND</button>
                                </div>
                            </form>
                        </div> 
                        <div class="form-output">
                            <p class="form-messege"></p>
                        </div>
                        </div>
                   
                   
                </div>
            </div>
        </section>
        <!-- End Contact Area -->
      

	  </div>
  
  	<?php include 'includes/footer.php'; ?>
  	<?php include 'includes/profile_modal.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
<script>
</script>
</body>
</html>