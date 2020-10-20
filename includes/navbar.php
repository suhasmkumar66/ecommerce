

<!-- Start Header Style -->
<header id="header" class="htc-header header--3 bg__white main-header">
    <!-- Start Mainmenu Area -->
    <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
                    <div class="logo">
                        <a href="index.html">
                            <img src="Swachha.Store/images/logo/swachha.store_new.png" alt="logo" style="width: 130px;">
                        </a>
                    </div>
                </div>
                <!-- Start MAinmenu Ares -->
                <div class="col-md-8 col-lg-8 col-sm-6 col-xs-6">
                    <nav class="mainmenu__nav hidden-xs hidden-sm">
                              <!--  <ul class="main__menu">
                                    <li class="drop"><a href="" class="active">Home</a></li>
									 <li class="drop"><a href="">About</a>
									  <ul class="dropdown">
                                            <li><a href="">Team</a></li>
                                            <li><a href="#">testimonials <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                                                <ul class="lavel-dropdown">
                                                    <li><a href="">Customer review</a></li>
                                                </ul>
                                            </li> 
                                        </ul>
									 </li>
									  <li class="drop"><a href="">Shop</a></li>
									   <li class="drop"><a href="">Blog</a></li>
									   
										 <li class="drop"><a href="">Contact Us</a></li>
										 
										 
                                  
                                        </ul> -->
                                        <ul class="nav navbar-nav main__menu">
                                          <li class="drop"><a href="index.php" class="active" >HOME</a></li>
                                          <li class="drop"><a href="about.php">ABOUT US</a></li>
                                          <li class="drop"><a href="contact.php">CONTACT US</a></li>
                                          <li class="dropdown drop">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">CATEGORY <span class="caret"></span></a>
                                            <ul class="dropdown-menu" role="menu">
              <!-- <?php
             
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

                ?> -->
                <div class="category-menu-list">
                    <ul>
                       <?php

                       $conn = $pdo->open();
                       try{
                          $stmt = $conn->prepare("SELECT * FROM category");
                          $stmt->execute();
                          foreach($stmt as $row){
                            $id = $row['id'];
                            $stmt1 = $conn->prepare("SELECT sub_category_id1,sub_category_id2 FROM products where category_id = '$id' GROUP BY sub_category_id1");
                            $stmt1->execute();
                            foreach ($stmt1 as $row1) {
                                $sub_category_id1 = $row1['sub_category_id1'];
                                $sub_category_id2 = $row['sub_category_id2'];
                                $stmt2 = $conn->prepare("SELECT sub_categoryname FROM sub_category where id = '$sub_category_id1'");
                                $stmt2->execute();
                                $subcategory1 = "";
                                foreach ($stmt2 as $val) {
                                    $subcategory1 = "<li><a href='category.php?subcategorya=".$sub_category_id1."'>".$val['sub_categoryname']."</a></li>";
                                    
                                }

                                $stmt3 = $conn->prepare("SELECT sub_categoryname FROM sub_category where id = '$sub_category_id2'");
                                $stmt3->execute();
                                $subcategory2 = "";
                                foreach ($stmt3 as $val1) {
                                    $subcategory2 = "<li><a href='category.php?subcategoryb=".$sub_category_id2."'>".$val1['sub_categoryname']."</a></li>";
                                }
                            }
                            if($subcategory1 != "" || $subcategory2 != ""){
                                $arrowtag = "<i class='zmdi zmdi-chevron-right'></i>";
                                $contentag = "<div class='category-menu-dropdown'>
                            <div class='category-part-1 category-common mb--30'>
                            <ul>
                            ".$subcategory1."
                            ".$subcategory2."
                            </ul>
                            </div></div>";
                            }
                            else{
                                $arrowtag = "";
                                $contentag = "";
                            }
                            echo "
                            <li><a href='category.php?category=".$row['id']."'>".$row['name']."".$arrowtag."</a>".$contentag."</li>
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
      </ul>
  </li>



</nav>



<div class="mobile-menu clearfix visible-xs visible-sm">
    <nav id="mobile_dropdown">
        <ul>
            <li class="drop"><a href="" class="active">Home</a></li>
            <li class="drop"><a href="">About</a>
             <ul class="dropdown">
                <li><a href="">Team</a></li>
                <li><a href="">Customer review</a></li>
            </ul>
        </li>
        <li class="drop"><a href="">Shop</a></li>
        <li class="drop"><a href="">Blog</a></li>

        <li class="drop"><a href="">Contact Us</a></li>



    </ul>
</li>

</ul>
</nav>
</div>                         
</div>
<!-- End MAinmenu Ares -->
<div class="col-md-2 col-sm-4 col-xs-3">  
    <ul class="menu-extra">
        <li class="search search__open hidden-xs"><span class="ti-search"></span></li>
        <li><a href="login-register.html"><span class="ti-user"></span></a></li>

        <!-- <li class="cart__menu dropdown messages-menu"> -->
           <li class=" dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
               <!-- <i class="fa fa-shopping-cart"></i> -->

               <span class="label label-success cart_count" style=""></span>
               <span class="ti-shopping-cart"></span>
           </a>
           <ul class="dropdown-menu">
              <li class="header">You have <span class="cart_count"></span> item(s) in cart</li>
              <li>
                <ul class="menu" id="cart_menu">
                </ul>
            </li>
            <li class="footer"><a href="cart_view.php">Go to Cart</a></li>
        </ul>
    </li>
    <?php
    if(isset($_SESSION['user'])){
      $image = (!empty($user['photo'])) ? 'images/'.$user['photo'] : 'images/profile.jpg';
      echo '
      <li class="dropdown user user-menu">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
      <img src="'.$image.'" class="user-image img-circle" alt="User Image">
      <span class="hidden-xs login_username">'.$user['firstname'].' '.$user['lastname'].'</span>
      </a>
      <ul class="dropdown-menu user_cardmenu">
      <!-- User image -->
      <li class="user-header text-center">
      <img src="'.$image.'" class="img-circle" alt="User Image">

      <p class="pad">
      '.$user['firstname'].' '.$user['lastname'].'
      <small>Member since '.date('M. Y', strtotime($user['created_on'])).'</small>
      </p>
      </li>
      <li class="user-footer">
      <div class="pull-left" style="padding: 10px 0px;">
      <a href="profile.php" class="" >Profile</a>
      </div>
      <div class="pull-right" style="padding: 10px 10px;">
      <a href="logout.php" class="" >Sign out</a>
      </div>
      </li>
      </ul>
      </li>
      ';
  }
  else{
      echo "
      <li><a href='login.php'>LOGIN</a></li>
      <li><a href='signup.php'>SIGNUP</a></li>

      ";
  }
  ?>


  <!-- <li class="toggle__menu hidden-xs hidden-sm"><span class="ti-menu"></span></li> -->
</ul>
</div>
</div>
<div class="mobile-menu-area"></div>
</div>
</div>
<!-- End Mainmenu Area -->
</header>
<!-- End Header Style -->

<div class="body__overlay"></div>
<!-- Start Offset Wrapper -->
<div class="offset__wrapper">
    <!-- Start Search Popap -->
    <div class="search__area">
        <div class="container" >
            <div class="row" >
                <div class="col-md-12" >
                    <div class="search__inner">
                               <!-- <form action="#" method="get">
                                    <input placeholder="Search here... " type="text">
                                    <button type="submit"></button>
                                </form> -->
                                <form method="POST" class="navbar-form navbar-left" action="search.php">
                                  <div class="input-group">
                                      <input type="text" class="form-control" id="navbar-search-input" name="keyword" placeholder="Search for Product" required>
                                      <span class="input-group-btn" id="searchBtn" style="display:none;">
                                          <button type="submit" class="btn btn-default btn-flat"><i class="fa fa-search"></i> </button>
                                      </span>
                                  </div>
                              </form>
                              <div class="search__close__btn">
                                <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Popap -->
        <!-- Start Offset MEnu -->
        <div class="offsetmenu">
            <div class="offsetmenu__inner">
                <div class="offsetmenu__close__btn">
                    <a href="#"><i class="zmdi zmdi-close"></i></a>
                </div>
                <div class="off__contact">
                    <div class="logo">
                        <a href="index.html">
                            <img src="images/logo/logo.png" alt="logo">
                        </a>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetu adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
                </div>
                <ul class="sidebar__thumd">
                    <li><a href="#"><img src="images/sidebar-img/1.jpg" alt="sidebar images"></a></li>
                    <li><a href="#"><img src="images/sidebar-img/2.jpg" alt="sidebar images"></a></li>
                    <li><a href="#"><img src="images/sidebar-img/3.jpg" alt="sidebar images"></a></li>
                    <li><a href="#"><img src="images/sidebar-img/4.jpg" alt="sidebar images"></a></li>
                    <li><a href="#"><img src="images/sidebar-img/5.jpg" alt="sidebar images"></a></li>
                    <li><a href="#"><img src="images/sidebar-img/6.jpg" alt="sidebar images"></a></li>
                    <li><a href="#"><img src="images/sidebar-img/7.jpg" alt="sidebar images"></a></li>
                    <li><a href="#"><img src="images/sidebar-img/8.jpg" alt="sidebar images"></a></li>
                </ul>
                <div class="offset__widget">
                    <div class="offset__single">
                        <h4 class="offset__title">Language</h4>
                        <ul>
                            <li><a href="#"> Engish </a></li>
                            <li><a href="#"> French </a></li>
                            <li><a href="#"> German </a></li>
                        </ul>
                    </div>
                    <div class="offset__single">
                        <h4 class="offset__title">Currencies</h4>
                        <ul>
                            <li><a href="#"> USD : Dollar </a></li>
                            <li><a href="#"> EUR : Euro </a></li>
                            <li><a href="#"> POU : Pound </a></li>
                        </ul>
                    </div>
                </div>
                <div class="offset__sosial__share">
                    <h4 class="offset__title">Follow Us On Social</h4>
                    <ul class="off__soaial__link">
                        <li><a class="bg--twitter" href="#"  title="Twitter"><i class="zmdi zmdi-twitter"></i></a></li>

                        <li><a class="bg--instagram" href="#" title="Instagram"><i class="zmdi zmdi-instagram"></i></a></li>

                        <li><a class="bg--facebook" href="#" title="Facebook"><i class="zmdi zmdi-facebook"></i></a></li>

                        <li><a class="bg--googleplus" href="#" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a></li>

                        <li><a class="bg--google" href="#" title="Google"><i class="zmdi zmdi-google"></i></a></li>
                    </ul>
                </div>
            </div>
        </div> 
        <!-- End Offset MEnu -->
        <!-- Start Cart Panel -->
        <div class="shopping__cart">
            <div class="shopping__cart__inner">
                <div class="offsetmenu__close__btn">
                    <a href="#"><i class="zmdi zmdi-close"></i></a>
                </div>
                <div class="shp__cart__wrap">
                    <div class="shp__single__product">
                        <div class="shp__pro__thumb">
                            <a href="#">
                                <img src="images/product/sm-img/1.jpg" alt="product images">
                            </a>
                        </div>
                        <div class="shp__pro__details">
                            <h2><a href="product-details.html">BO&Play Wireless Speaker</a></h2>
                            <span class="quantity">QTY: 1</span>
                            <span class="shp__price">$105.00</span>
                        </div>
                        <div class="remove__btn">
                            <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                        </div>
                    </div>
                    <div class="shp__single__product">
                        <div class="shp__pro__thumb">
                            <a href="#">
                                <img src="images/product/sm-img/2.jpg" alt="product images">
                            </a>
                        </div>
                        <div class="shp__pro__details">
                            <h2><a href="product-details.html">Brone Candle</a></h2>
                            <span class="quantity">QTY: 1</span>
                            <span class="shp__price">$25.00</span>
                        </div>
                        <div class="remove__btn">
                            <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                        </div>
                    </div>
                </div>
                <ul class="shoping__total">
                    <li class="subtotal">Subtotal:</li>
                    <li class="total__price">$130.00</li>
                </ul>
                <ul class="shopping__btn">
                    <li><a href="cart.html">View Cart</a></li>
                    <li class="shp__checkout"><a href="checkout.html">Checkout</a></li>
                </ul>
            </div>
        </div> 
        <!-- End Cart Panel -->
    </div>
    <!-- End Offset Wrapper -->

    <style>
        .header--3 .main__menu > li > a {
            font-size: 15px;
            font-weight: 500;
            line-height: 50px;
        }
        .sticky__header.scroll-header .main__menu > li > a {
            height: 70px;
            line-height: 50px;
        }

        .nav .open>a, .nav .open>a:focus, .nav .open>a:hover {
            background-color: #fff;
            border-color: #337ab7;
        }
        .nav>li>a:hover, .nav>li>a:active, .nav>li>a:focus {
            color: #6dbe50;
            background: #fff;
        }
        .nav>li>a {
            position: relative;
            display: block;
            padding: 10px 0px;
            color: #666666;
        }
        .skin-blue .main-header .logo:hover {
            background-color: #fff;
        }

        .skin-blue .main-header .logo {
            background-color: #fff;
            color: #fff;
            border-bottom: 0 solid transparent;
        }

        .menu-extra li span.cart_count{
         padding: 5px !important;
         font-size: 12px;
         position: absolute;
         top: 0px;
         right: 30px;
         text-align: center;
         font-size: 9px;
         padding: 2px 3px;
         line-height: .9;
         height: 18px;
     }
     .sticky__header.scroll-header .menu-extra li a span.cart_count{
         padding: 5px !important;
         font-size: 12px;
         position: absolute;
         top: 15px;
         right: 30px;
         text-align: center;
         font-size: 9px;
         padding: 2px 3px;
         line-height: .9;
         height: 18px;
     }

     .login_username { 
        font-size: 12px !important;
        position: absolute;
        line-height: 30px !important;
        width: max-content;
    }

    .user-image {
       border-radius: 50%;
   }

   .user_cardmenu {
       padding: 5px 5px;
       left: -25px;
   }

   .skin-blue .main-header li.user-header {
    background-color: #6dbe50;
}
</style>