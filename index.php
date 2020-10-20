<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container-fluid">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-12">
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>
	        		<!--<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		                <ol class="carousel-indicators">
		                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
		                </ol>
		                <div class="carousel-inner">
		                  <div class="item active">
		                    <img src="images/banner1.png" alt="First slide">
		                  </div>
		                  <div class="item">
		                    <img src="images/banner2.png" alt="Second slide">
		                  </div>
		                  <div class="item">
		                    <img src="images/banner3.png" alt="Third slide">
		                  </div>
		                </div>
		                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		                  <span class="fa fa-angle-left"></span>
		                </a>
		                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		                  <span class="fa fa-angle-right"></span>
		                </a>
		            </div>-->
					
					   <!-- Start Feature Product -->
        <section class="categories-slider-area bg__white" style="padding-top: 40px;">
            <div class="container">
                <div class="row">
                    <!-- Start Left Feature -->
                    <div class="col-md-9 col-lg-9 col-sm-8 col-xs-12 float-left-style">
                        <!-- Start Slider Area -->
                        <div class="slider__container slider--one">
                            <div class="slider__activation__wrap owl-carousel owl-theme">
                                <!-- Start Single Slide -->
                                <div class="slide slider__full--screen slider-height-inherit slider-text-right" style="background: rgba(0, 0, 0, 0) url(banner09.jpg) no-repeat scroll center center / cover ;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-10 col-lg-8 col-md-offset-2 col-lg-offset-4 col-sm-12 col-xs-12">
                                                <div class="slider__inner">
                                                    <h1>New Product <span class="text--theme">Collection</span></h1>
                                                    <div class="slider__btn">
                                                        <a class="htc__btn" href="cart.html">shop now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Slide -->
                                <!-- Start Single Slide -->
                                <div class="slide slider__full--screen slider-height-inherit  slider-text-left" style="background: rgba(0, 0, 0, 0) url(banner10.jpg) no-repeat scroll center center / cover ;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                                                <div class="slider__inner">
                                                    <h1>New Product <span class="text--theme">Collection</span></h1>
                                                    <div class="slider__btn">
                                                        <a class="htc__btn" href="cart.html">shop now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Slide -->
                            </div>
                        </div>
                        <!-- Start Slider Area -->
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 float-right-style">
                        <div class="categories-menu mrg-xs">
                            <div class="category-heading">
                               <h3> Browse Categories</h3>
                            </div>
                            <div class="category-menu-list">
                                <ul>
                                    <li><a href="#"><img alt="" src="Swachha.Store/images/icons/thum3.png"> Products <i class="zmdi zmdi-chevron-right"></i></a>
                                        <div class="category-menu-dropdown">
                                            <div class="category-part-1 category-common mb--30">
                                                <h4 class="categories-subtitle"> Products & Products</h4>
                                                <ul>
                                                    <li><a href="#"> Products</a></li>
                                                    <li><a href="#"> Products</a></li>
													 <li><a href="#"> Products</a></li>
													  <li><a href="#"> Products</a></li>
													   <li><a href="#"> Products</a></li>
                                                </ul>
                                            </div>
                                            <div class="category-part-2 category-common mb--30">
                                                <h4 class="categories-subtitle"> Products & Products</h4>
                                                <ul>
                                                   <li><a href="#"> Products</a></li>
                                                    <li><a href="#"> Products</a></li>
													 <li><a href="#"> Products</a></li>
													  <li><a href="#"> Products</a></li>
													   <li><a href="#"> Products</a></li>
                                                </ul>
                                            </div>
                                            <div class="category-part-3 category-common">
                                                <h4 class="categories-subtitle"> Products & Products</h4>
                                                <ul>
                                                   <li><a href="#"> Products</a></li>
                                                    <li><a href="#"> Products</a></li>
													 <li><a href="#"> Products</a></li>
													  <li><a href="#"> Products</a></li>
													   <li><a href="#"> Products</a></li>
                                                </ul>
                                            </div>
                                            <div class="category-part-4 category-common">
                                                <h4 class="categories-subtitle"> Products & Products</h4>
                                                <ul>
                                                    <li><a href="#"> Products</a></li>
                                                    <li><a href="#"> Products</a></li>
													 <li><a href="#"> Products</a></li>
													  <li><a href="#"> Products</a></li>
													   <li><a href="#"> Products</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#"><img alt="" src="Swachha.Store/images/icons/thum3.png"> Products Products <i class="zmdi zmdi-chevron-right"></i></a>
                                        <div class="category-menu-dropdown">
                                            <div class="category-part-1 category-common2 mb--30">
                                                <h4 class="categories-subtitle"> Products & Products</h4>
                                                <ul>
                                                    <li><a href="#"> Products</a></li>
                                                    <li><a href="#"> Products</a></li>
													 <li><a href="#"> Products</a></li>
													  <li><a href="#"> Products</a></li>
													   <li><a href="#"> Products</a></li>
                                                </ul>
                                            </div>
                                            <div class="category-part-2 category-common2 mb--30">
                                                <h4 class="categories-subtitle"> Products & Products</h4>
                                                <ul>
                                                    <li><a href="#"> Products</a></li>
                                                    <li><a href="#"> Products</a></li>
													 <li><a href="#"> Products</a></li>
													  <li><a href="#"> Products</a></li>
													   <li><a href="#"> Products</a></li>
                                                </ul>
                                            </div>
                                            <div class="category-part-3 category-common2 mb--30">
                                                <h4 class="categories-subtitle"> Products & Products</h4>
                                                <ul>
                                                    <li><a href="#"> Products</a></li>
                                                    <li><a href="#"> Products</a></li>
													 <li><a href="#"> Products</a></li>
													  <li><a href="#"> Products</a></li>
													   <li><a href="#"> Products</a></li>
                                                </ul>
                                            </div>
                                            <div class="mega-banner-img">
                                                <a href="single-product.html">
                                                    <img src="Swachha.Store/Swachha.Store/bg1.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#"><img alt="" src="Swachha.Store/images/icons/thum3.png"> Products & Products <i class="zmdi zmdi-chevron-right"></i></a>
                                        <div class="category-menu-dropdown">
                                            <div class="category-menu-dropdown-top">
                                                <div class="category-part-1 category-common2 mb--30">
                                                    <h4 class="categories-subtitle"> Products & Products</h4>
                                                <ul>
                                                    <li><a href="#"> Products</a></li>
                                                    <li><a href="#"> Products</a></li>
													 <li><a href="#"> Products</a></li>
													  <li><a href="#"> Products</a></li>
													   <li><a href="#"> Products</a></li>
                                                </ul>
                                                </div>
                                                <div class="category-part-2 category-common2 mb--30">
                                                     <h4 class="categories-subtitle"> Products & Products</h4>
                                                <ul>
                                                    <li><a href="#"> Products</a></li>
                                                    <li><a href="#"> Products</a></li>
													 <li><a href="#"> Products</a></li>
													  <li><a href="#"> Products</a></li>
													   <li><a href="#"> Products</a></li>
                                                </ul>
                                                </div>
                                                <div class="category-part-3 category-common2 mb--30">
														<h4 class="categories-subtitle"> Products & Products</h4>
                                                <ul>
                                                    <li><a href="#"> Products</a></li>
                                                    <li><a href="#"> Products</a></li>
													 <li><a href="#"> Products</a></li>
													  <li><a href="#"> Products</a></li>
													   <li><a href="#"> Products</a></li>
                                                </ul>
                                                </div>
                                            </div>
                                            <div class="category-menu-dropdown-bottom">
                                                <div class="single-category-brand">
                                                    <a href="#"><img src="Swachha.Store/brand6.png" alt=""></a>
                                                </div>
                                                <div class="single-category-brand">
                                                    <a href="#"><img src="Swachha.Store/brand2.png" alt=""></a>
                                                </div>
                                                <div class="single-category-brand">
                                                    <a href="#"><img src="Swachha.Store/brand3.png" alt=""></a>
                                                </div>
                                                <div class="single-category-brand">
                                                    <a href="#"><img src="Swachha.Store/brand4.png" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#"><img alt="" src="Swachha.Store/images/icons/thum3.png"> Products & Products <i class="zmdi zmdi-chevron-right"></i></a>
                                        <div class="category-menu-dropdown">
                                            <div class="category-menu-dropdown-left">
                                                <div class="category-part-1 category-common mb--30">
                                                    <h4 class="categories-subtitle"> Products & Products</h4>
                                                    <ul>
                                                      <li><a href="#"> Products</a></li>
                                                      <li><a href="#"> Products</a></li>
													  <li><a href="#"> Products</a></li>
													  <li><a href="#"> Products</a></li>
													  <li><a href="#"> Products</a></li>
                                                    </ul>
                                                </div>
                                                <div class="category-part-2 category-common mb--30">
                                                    <h4 class="categories-subtitle"> Products & Products</h4>
                                                    <ul>
                                                      <li><a href="#"> Products</a></li>
                                                      <li><a href="#"> Products</a></li>
													  <li><a href="#"> Products</a></li>
													  <li><a href="#"> Products</a></li>
													  <li><a href="#"> Products</a></li>
                                                    </ul>
                                                </div>
                                                <div class="category-part-3 category-common">
                                                    <h4 class="categories-subtitle"> Products & Products</h4>
                                                    <ul>
                                                      <li><a href="#"> Products</a></li>
                                                      <li><a href="#"> Products</a></li>
													  <li><a href="#"> Products</a></li>
													  <li><a href="#"> Products</a></li>
													  <li><a href="#"> Products</a></li>
                                                    </ul>
                                                </div>
                                                <div class="category-part-4 category-common">
                                                    <h4 class="categories-subtitle"> Products & Products</h4>
                                                    <ul>
                                                      <li><a href="#"> Products</a></li>
                                                      <li><a href="#"> Products</a></li>
													  <li><a href="#"> Products</a></li>
													  <li><a href="#"> Products</a></li>
													  <li><a href="#"> Products</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="category-menu-dropdown-right">
                                                <div class="menu-right-img">
                                                    <a href="#"><img src="Swachha.Store/banner033.jpg" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#"><img alt="" src="Swachha.Store/images/icons/thum3.png">Products Products <i class="zmdi zmdi-chevron-right"></i></a>
                                        <div class="category-menu-dropdown">
                                            <div class="category-menu-dropdown-left">
                                                <div class="category-part-1 category-common">
                                                   <h4 class="categories-subtitle"> Products & Products</h4>
                                                    <ul>
                                                      <li><a href="#"> Products</a></li>
                                                      <li><a href="#"> Products</a></li>
													  <li><a href="#"> Products</a></li>
													  <li><a href="#"> Products</a></li>
													  <li><a href="#"> Products</a></li>
                                                    </ul>
                                                </div>
                                                <div class="category-part-2 category-common">
                                                   <h4 class="categories-subtitle"> Products & Products</h4>
                                                    <ul>
                                                      <li><a href="#"> Products</a></li>
                                                      <li><a href="#"> Products</a></li>
													  <li><a href="#"> Products</a></li>
													  <li><a href="#"> Products</a></li>
													  <li><a href="#"> Products</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="category-menu-dropdown-right">
                                                <div class="menu-right-img">
                                                    <a href="#"><img src="Swachha.Store/banner033.jpg" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#"><img alt="" src="Swachha.Store/images/icons/thum3.png"> Products & Products</a></li>
                                    <li><a href="#"><img alt="" src="Swachha.Store/images/icons/thum3.png"> Products & Products</a></li>
                                    <li><a href="#"><img alt="" src="Swachha.Store/images/icons/thum3.png"> Products </a></li>
                                    <li><a href="#"><img alt="" src="Swachha.Store/images/icons/thum3.png"> Products & Products</a></li>
                                    <li><a href="#"><img alt="" src="Swachha.Store/images/icons/thum3.png"> Products Products</a></li>
                                    <li><a href="#"><img alt="" src="Swachha.Store/images/icons/thum3.png"> all Products</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Left Feature -->
                </div>
            </div>
        </section>
        <!-- End Feature Product -->
        <div class="only-banner ptb--100 bg__white">
            <div class="container">
                <div class="only-banner-img">
                    <a href="shop-sidebar.html"><img src="Swachha.Store/bg2.jpg" alt="new product"></a>
                </div>
            </div>
        </div>
		
		<!-- Start Our Product Area -->
        <section class="htc__product__area bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="product-categories-all">
                            <div class="product-categories-title">
                                <h3>Products & Products</h3>
                            </div>
                            <div class="product-categories-menu">
                                <ul>
                                    <li><a href="#"> Products</a></li>
                                                      <li><a href="#"> Products</a></li>
													  <li><a href="#"> Products</a></li>
													  <li><a href="#"> Products</a></li>
													  <li><a href="#"> Products</a></li>
													  <li><a href="#"> Products</a></li>
                                                      <li><a href="#"> Products</a></li>
													  <li><a href="#"> Products</a></li>
													  <li><a href="#"> Products</a></li>
													  <li><a href="#"> Products</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="product-style-tab">
                            <div class="product-tab-list">
                                <!-- Nav tabs -->
                                <ul class="tab-style" role="tablist">
                                    <li class="active">
                                        <a href="#home1" data-toggle="tab">
                                            <div class="tab-menu-text">
                                                <h4>latest </h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#home2" data-toggle="tab">
                                            <div class="tab-menu-text">
                                                <h4>best sale </h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#home3" data-toggle="tab">
                                            <div class="tab-menu-text">
                                                <h4>top rated</h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#home4" data-toggle="tab">
                                            <div class="tab-menu-text">
                                                <h4>on sale</h4>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content another-product-style jump">
                                <div class="tab-pane active" id="home1">
                                    <div class="row">
                                        <div class="product-slider-active owl-carousel">
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="Swachha.Store/8-150x150.jpg" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="*"><span class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Products 1</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="Swachha.Store/8-150x150.jpg" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="*"><span class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Products 2</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="Swachha.Store/8-150x150.jpg" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="*"><span class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Products 3</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="Swachha.Store/8-150x150.jpg" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="*"><span class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Products 5</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="Swachha.Store/8-150x150.jpg" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="*"><span class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Products 6</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="home2">
                                    <div class="row">
                                        <div class="product-slider-active owl-carousel">
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="Swachha.Store/8-150x150.jpg" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="*"><span class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Products</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="Swachha.Store/8-150x150.jpg" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="*"><span class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Products</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="Swachha.Store/8-150x150.jpg" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="*"><span class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Products</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="Swachha.Store/8-150x150.jpg" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="*"><span class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Products</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="Swachha.Store/8-150x150.jpg" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="*"><span class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Products</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="home3">
                                    <div class="row">
                                        <div class="product-slider-active owl-carousel">
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="Swachha.Store/8-150x150.jpg" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="*"><span class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Products</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="Swachha.Store/8-150x150.jpg" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="*"><span class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Products</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="Swachha.Store/8-150x150.jpg" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="*"><span class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Products</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="Swachha.Store/8-150x150.jpg" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="*"><span class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Products</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="Swachha.Store/8-150x150.jpg" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="*"><span class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Products</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="home4">
                                    <div class="row">
                                        <div class="product-slider-active owl-carousel">
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="Swachha.Store/8-150x150.jpg" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="*"><span class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Products</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="Swachha.Store/8-150x150.jpg" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="*"><span class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Products</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="Swachha.Store/8-150x150.jpg" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="*"><span class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Products</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="Swachha.Store/8-150x150.jpg" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="*"><span class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Products</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                                                <div class="product">
                                                    <div class="product__inner">
                                                        <div class="pro__thumb">
                                                            <a href="#">
                                                                <img src="Swachha.Store/8-150x150.jpg" alt="product images">
                                                            </a>
                                                        </div>
                                                        <div class="product__hover__info">
                                                            <ul class="product__action">
                                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                                <li><a title="Wishlist" href="*"><span class="ti-heart"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__details">
                                                        <h2><a href="product-details.html">Simple Productsk</a></h2>
                                                        <ul class="product__price">
                                                            <li class="old__price">$16.00</li>
                                                            <li class="new__price">$10.00</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Our Product Area -->
       
        <!-- Start Our Product Area -->
       
        <!-- End Our Product Area -->
        <div class="only-banner bg__white">
            <div class="container">
                <div class="only-banner-img">
                    <a href="shop-sidebar.html"><img src="Swachha.Store/bg1.jpg" alt="new product"></a>
                </div>
            </div>
        </div>
        <!-- Start Our Product Area -->
		
		 <!-- Start Our Product Area -->
        <section class="htc__product__area shop__page ptb--130 bg__white">
            <div class="container">
                <div class="htc__product__container">
                    <!-- Start Product MEnu -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="filter__menu__container">
                                <div class="product__menu">
                                    <button data-filter="*"  class="is-checked">All</button>
                                    <button data-filter=".cat--1">Products</button>
                                    <button data-filter=".cat--2">Products</button>
                                    <button data-filter=".cat--3">Products</button>
                                    <button data-filter=".cat--4">Products</button>
                                </div>
                              <!--   <div class="filter__box">
                                    <a class="filter__menu" href="#">filter</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- Start Filter Menu -->
                   <!--  <div class="filter__wrap">
                        <div class="filter__cart">
                            <div class="filter__cart__inner">
                                <div class="filter__menu__close__btn">
                                    <a href="#"><i class="zmdi zmdi-close"></i></a>
                                </div>
                                <div class="filter__content"> -->
                                    <!-- Start Single Content -->
                                   <!--  <div class="fiter__content__inner">
                                        <div class="single__filter">
                                            <h2>Sort By</h2>
                                            <ul class="filter__list">
                                                <li><a href="#default">Default</a></li>
                                                <li><a href="#accessories">Accessories</a></li>
                                                <li><a href="#bags">Bags</a></li>
                                                <li><a href="#chair">Chair</a></li>
                                                <li><a href="#decoration">Decoration</a></li>
                                                <li><a href="#fashion">Fashion</a></li>
                                            </ul>
                                        </div>
                                        <div class="single__filter">
                                            <h2>Size</h2>
                                            <ul class="filter__list">
                                                <li><a href="#xxl">XXL</a></li>
                                                <li><a href="#xl">XL</a></li>
                                                <li><a href="#x">X</a></li>
                                                <li><a href="#l">L</a></li>
                                                <li><a href="#m">M</a></li>
                                                <li><a href="#s">S</a></li>
                                            </ul>
                                        </div>
                                        <div class="single__filter">
                                            <h2>Tags</h2>
                                            <ul class="filter__list">
                                                <li><a href="#">All</a></li>
                                                <li><a href="#">Accessories</a></li>
                                                <li><a href="#">Bags</a></li>
                                                <li><a href="#">Chair</a></li>
                                                <li><a href="#">Decoration</a></li>
                                                <li><a href="#">Fashion</a></li>
                                            </ul>
                                        </div>
                                        <div class="single__filter">
                                            <h2>Price</h2>
                                            <ul class="filter__list">
                                                <li><a href="#">$0.00 - $50.00</a></li>
                                                <li><a href="#">$50.00 - $100.00</a></li>
                                                <li><a href="#">$100.00 - $150.00</a></li>
                                                <li><a href="#">$150.00 - $200.00</a></li>
                                                <li><a href="#">$300.00 - $500.00</a></li>
                                                <li><a href="#">$500.00 - $700.00</a></li>
                                            </ul>
                                        </div>
                                        <div class="single__filter">
                                            <h2>Color</h2>
                                            <ul class="filter__list sidebar__list">
                                                <li class="black"><a href="#"><i class="zmdi zmdi-circle"></i>Black</a></li>
                                                <li class="blue"><a href="#"><i class="zmdi zmdi-circle"></i>Blue</a></li>
                                                <li class="brown"><a href="#"><i class="zmdi zmdi-circle"></i>Brown</a></li>
                                                <li class="red"><a href="#"><i class="zmdi zmdi-circle"></i>Red</a></li>
                                                <li class="orange"><a href="#"><i class="zmdi zmdi-circle"></i>Orange</a></li>
                                            </ul>
                                        </div>
                                    </div> -->
                                    <!-- End Single Content -->
                              <!--   </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- End Filter Menu -->
                    <!-- End Product MEnu -->
                    <div class="row">
                        <div class="product__list another-product-style">
                            <!-- Start Single Product -->
                            <div class="col-md-3 single__pro col-lg-3 cat--1 col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                            <a href="#">
                                                <img src="Swachha.Store/8-150x150.jpg" alt="product images">
                                            </a>
                                        </div>
                                        <div class="product__hover__info">
                                            <ul class="product__action">
                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                <li><a title="Wishlist" href="*"><span class="ti-heart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a href="product-details.html">Simple Products</a></h2>
                                        <ul class="product__price">
                                            <li class="old__price">$16.00</li>
                                            <li class="new__price">$10.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-md-3 single__pro col-lg-3 cat--1 col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                            <a href="#">
                                                <img src="Swachha.Store/8-150x150.jpg" alt="product images">
                                            </a>
                                        </div>
                                        <div class="product__hover__info">
                                            <ul class="product__action">
                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                <li><a title="Wishlist" href="*"><span class="ti-heart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a href="product-details.html">Products Products</a></h2>
                                        <ul class="product__price">
                                            <li class="old__price">$16.00</li>
                                            <li class="new__price">$10.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--2">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                            <a href="#">
                                                <img src="Swachha.Store/8-150x150.jpg" alt="product images">
                                            </a>
                                        </div>
                                        <div class="product__hover__info">
                                            <ul class="product__action">
                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                <li><a title="Wishlist" href="*"><span class="ti-heart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a href="product-details.html">Products</a></h2>
                                        <ul class="product__price">
                                            <li class="old__price">$16.00</li>
                                            <li class="new__price">$10.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--4">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                            <a href="#">
                                                <img src="Swachha.Store/8-150x150.jpg" alt="product images">
                                            </a>
                                        </div>
                                        <div class="product__hover__info">
                                            <ul class="product__action">
                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                <li><a title="Wishlist" href="*"><span class="ti-heart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a href="product-details.html">Products</a></h2>
                                        <ul class="product__price">
                                            <li class="old__price">$16.00</li>
                                            <li class="new__price">$10.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-md-3 single__pro col-lg-3 cat--1 col-sm-4 col-xs-12 cat--2">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                            <a href="#">
                                                <img src="Swachha.Store/8-150x150.jpg" alt="product images">
                                            </a>
                                        </div>
                                        <div class="product__hover__info">
                                            <ul class="product__action">
                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                <li><a title="Wishlist" href="*"><span class="ti-heart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a href="product-details.html">Products</a></h2>
                                        <ul class="product__price">
                                            <li class="old__price">$16.00</li>
                                            <li class="new__price">$10.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--3">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                            <a href="#">
                                                <img src="Swachha.Store/8-150x150.jpg" alt="product images">
                                            </a>
                                        </div>
                                        <div class="product__hover__info">
                                            <ul class="product__action">
                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                <li><a title="Wishlist" href="*"><span class="ti-heart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a href="product-details.html">Products</a></h2>
                                        <ul class="product__price">
                                            <li class="old__price">$16.00</li>
                                            <li class="new__price">$10.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--2">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                            <a href="#">
                                                <img src="Swachha.Store/8-150x150.jpg" alt="product images">
                                            </a>
                                        </div>
                                        <div class="product__hover__info">
                                            <ul class="product__action">
                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                <li><a title="Wishlist" href="*"><span class="ti-heart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a href="product-details.html">Products</a></h2>
                                        <ul class="product__price">
                                            <li class="old__price">$16.00</li>
                                            <li class="new__price">$10.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--2">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                            <a href="#">
                                                <img src="Swachha.Store/8-150x150.jpg" alt="product images">
                                            </a>
                                        </div>
                                        <div class="product__hover__info">
                                            <ul class="product__action">
                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                <li><a title="Wishlist" href="*"><span class="ti-heart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a href="product-details.html">Products</a></h2>
                                        <ul class="product__price">
                                            <li class="old__price">$16.00</li>
                                            <li class="new__price">$10.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--4">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                            <a href="#">
                                                <img src="Swachha.Store/8-150x150.jpg" alt="product images">
                                            </a>
                                        </div>
                                        <div class="product__hover__info">
                                            <ul class="product__action">
                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                <li><a title="Wishlist" href="*"><span class="ti-heart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a href="product-details.html">Products</a></h2>
                                        <ul class="product__price">
                                            <li class="old__price">$16.00</li>
                                            <li class="new__price">$10.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--3">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                            <a href="#">
                                                <img src="Swachha.Store/8-150x150.jpg" alt="product images">
                                            </a>
                                        </div>
                                        <div class="product__hover__info">
                                            <ul class="product__action">
                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                <li><a title="Wishlist" href="*"><span class="ti-heart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a href="product-details.html">Products</a></h2>
                                        <ul class="product__price">
                                            <li class="old__price">$16.00</li>
                                            <li class="new__price">$10.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--4">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                            <a href="#">
                                                <img src="Swachha.Store/8-150x150.jpg" alt="product images">
                                            </a>
                                        </div>
                                        <div class="product__hover__info">
                                            <ul class="product__action">
                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                <li><a title="Wishlist" href="*"><span class="ti-heart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a href="product-details.html">Products</a></h2>
                                        <ul class="product__price">
                                            <li class="old__price">$16.00</li>
                                            <li class="new__price">$10.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--3">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                            <a href="#">
                                                <img src="Swachha.Store/8-150x150.jpg" alt="product images">
                                            </a>
                                        </div>
                                        <div class="product__hover__info">
                                            <ul class="product__action">
                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                <li><a title="Wishlist" href="*"><span class="ti-heart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a href="product-details.html">Products</a></h2>
                                        <ul class="product__price">
                                            <li class="old__price">$16.00</li>
                                            <li class="new__price">$10.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--3">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                            <a href="#">
                                                <img src="Swachha.Store/8-150x150.jpg" alt="product images">
                                            </a>
                                        </div>
                                        <div class="product__hover__info">
                                            <ul class="product__action">
                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                <li><a title="Wishlist" href="*"><span class="ti-heart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a href="product-details.html">Products</a></h2>
                                        <ul class="product__price">
                                            <li class="old__price">$16.00</li>
                                            <li class="new__price">$10.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--4">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                            <a href="#">
                                                <img src="Swachha.Store/8-150x150.jpg" alt="product images">
                                            </a>
                                        </div>
                                        <div class="product__hover__info">
                                            <ul class="product__action">
                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                <li><a title="Wishlist" href="*"><span class="ti-heart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a href="product-details.html">Products</a></h2>
                                        <ul class="product__price">
                                            <li class="old__price">$16.00</li>
                                            <li class="new__price">$10.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--4">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                            <a href="#">
                                                <img src="Swachha.Store/8-150x150.jpg" alt="product images">
                                            </a>
                                        </div>
                                        <div class="product__hover__info">
                                            <ul class="product__action">
                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                <li><a title="Wishlist" href="*"><span class="ti-heart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a href="product-details.html">Products</a></h2>
                                        <ul class="product__price">
                                            <li class="old__price">$16.00</li>
                                            <li class="new__price">$10.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->
                            <!-- Start Single Product -->
                            <div class="col-md-3 single__pro col-lg-3 hidden-sm col-xs-12 cat--3">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                            <a href="#">
                                                <img src="Swachha.Store/8-150x150.jpg" alt="product images">
                                            </a>
                                        </div>
                                        <div class="product__hover__info">
                                            <ul class="product__action">
                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                                <li><a title="Wishlist" href="*"><span class="ti-heart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a href="product-details.html">Products</a></h2>
                                        <ul class="product__price">
                                            <li class="old__price">$16.00</li>
                                            <li class="new__price">$10.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->
                        </div>
                    </div>
                    <!-- Start Load More BTn -->
                    <div class="row mt--60">
                        <div class="col-md-12">
                            <div class="htc__loadmore__btn">
                                <a href="#">load more</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Load More BTn -->
                </div>
            </div>
        </section>
        <!-- End Our Product Area -->
		
        <!-- End Our Product Area -->
       
		
		          <!--  <h2>Monthly Top Sellers</h2>
		       		<?php
		       			$month = date('m');
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT *, SUM(quantity) AS total_qty FROM details LEFT JOIN sales ON sales.id=details.sales_id LEFT JOIN products ON products.id=details.product_id WHERE MONTH(sales_date) = '$month' GROUP BY details.product_id ORDER BY total_qty DESC LIMIT 6");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	$image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/noimage.jpg';
						    	$inc = ($inc == 3) ? 1 : $inc + 1;
	       						if($inc == 1) echo "<div class='row'>";
	       						echo "
	       							<div class='col-sm-4'>
	       								<div class='box box-solid'>
		       								<div class='box-body prod-body'>
		       									<img src='".$image."' width='100%' height='230px' class='thumbnail'>
		       									<h5><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></h5>
		       								</div>
		       								<div class='box-footer'>
		       									<b>&#36; ".number_format($row['price'], 2)."</b>
		       								</div>
	       								</div>
	       							</div>
	       						";
	       						if($inc == 3) echo "</div>";
						    }
						    if($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>"; 
							if($inc == 2) echo "<div class='col-sm-4'></div></div>";
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
	        	</div>
	        	<div class="col-sm-3">
	        		<?php include 'includes/sidebar.php'; ?>
	        	</div> -->
	        </div>
	      </section>
	     
	    </div>
	  </div>
  
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>