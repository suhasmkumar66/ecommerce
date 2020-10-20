<!-- <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>All rights reserved</b>
      </div>
      <strong>Copyright &copy; 2020 Brought to You By <a href="#">Swachha.</a></strong>
    </div>
</footer> -->

<!-- Start Footer Area -->
         <footer class="htc__foooter__area gray-bg">
            <div class="container">
                <div class="row">
                    <div class="footer__container clearfix">
                         <!-- Start Single Footer Widget -->
                        <div class="col-md-3 col-lg-3 col-sm-6">
                            <div class="ft__widget">
                                <div class="ft__logo">
                                    <a href="index.html">
                                        <img src="Swachha.Store/images/logo/logo.png" alt="footer logo" style="width: 130px;">
                                    </a>
                                </div>
                                <div class="footer-address">
                                    <ul>
                                        <li>
                                          
                                            <div class="address-text">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
												labore et dolore gna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
												laboris nisi ut aliquip ex ea commodo consequat. 
												</p>
												<br>
												<p style="text-align:right;"><a href="" style="color:#6dbe50;">Read More <a/></p>
                                            </div>
											
                                        </li>
                                      
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                        <!-- End Single Footer Widget -->
                        <!-- Start Single Footer Widget -->
                        <div class="col-md-3 col-lg-2 col-sm-6 smt-30 xmt-30">
                            <div class="ft__widget">
                                <h2 class="ft__title">Categories</h2>
                                <ul class="footer-categories">
                                    <!-- <li><a href="">Categories</a></li>
                                    <li><a href="">Categories</a></li>
                                    <li><a href="">Categories</a></li>
                                    <li><a href="">Categories</a></li>
                                    <li><a href="">Categories</a></li>
                                    <li><a href="">Categories</a></li> -->
									
									 <?php
             
                $conn = $pdo->open();
                try{
                  $stmt = $conn->prepare("SELECT * FROM category");
                  $stmt->execute();
                  foreach($stmt as $row){
                    echo "
                      <li><a href='category.php?category=".$row['cat_slug']."'>".$row['name']."</a></li>
                    ";                  
                  }
                }
                catch(PDOException $e){
                  echo "There is some problem in connection: " . $e->getMessage();
                }

                $pdo->close();

              ?>
			  
                                </ul>
                            </div>
                        </div>
                        <!-- Start Single Footer Widget -->
                        <div class="col-md-3 col-lg-2 col-sm-6 smt-30 xmt-30">
                            <div class="ft__widget">
                                <h2 class="ft__title">Infomation</h2>
                                <ul class="footer-categories">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Returns & Exchanges</a></li>
                                    <li><a href="#">Shipping & Delivery</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Start Single Footer Widget -->
                        <div class="col-md-3 col-lg-3 col-lg-offset-1 col-sm-6 smt-30 xmt-30">
                            <div class="ft__widget">
                                <h2 class="ft__title">Newsletter</h2>
                                <div class="footer-address">
                                    <ul>
                                        <li>
                                            <div class="address-icon">
                                                <i class="zmdi zmdi-pin"></i>
                                            </div>
                                            <div class="address-text">
                                                <p>NO: 3673, Manjunatha Nilaya,<br>
												9th cross, 12th Main road,
												<br>Banashankari 2nd Stage
												Banglore <br> Karnataka-560011</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="address-icon">
                                                <i class="zmdi zmdi-email"></i>
                                            </div>
                                            <div class="address-text">
                                                <a href="#"> info@example.com</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="address-icon">
                                                <i class="zmdi zmdi-phone-in-talk"></i>
                                            </div>
                                            <div class="address-text">
                                                <p>+000 000 0000 </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
								  <ul class="social__icon">
                                    <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Footer Widget -->
                    </div>
                </div>
                <!-- Start Copyright Area -->
                <div class="htc__copyright__area">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="copyright__inner">
                                <div class="copyright">
                                    <p>© 2019 <a href="" style="color:#6dbe50;">Swachha.Store</a>
                                    All Right Reserved.</p>
                                </div>
                                <ul class="footer__menu">
                                    <li><a href="">Home</a></li>
                                    <li><a href="">Products</a></li>
                                    <li><a href="">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Copyright Area -->
            </div>
        </footer>
        <!-- End Footer Area -->