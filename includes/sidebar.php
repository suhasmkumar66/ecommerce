<div class="row">
	<div class="box box-solid">
	  	<div class="box-header with-border">
	    	<h3 class="box-title"><b>Most Viewed Today</b></h3>
	  	</div>
	  	<div class="box-body">
	  		<ul id="trending">
	  		<?php
	  			$now = date('Y-m-d');
	  			$conn = $pdo->open();

	  			$stmt = $conn->prepare("SELECT * FROM products WHERE date_view=:now ORDER BY counter DESC LIMIT 10");
	  			$stmt->execute(['now'=>$now]);
	  			foreach($stmt as $row){
	  				echo "<li><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></li>";
	  			}

	  			$pdo->close();
	  		?>
	    	<ul>
	  	</div>
	</div>
</div>

<div class="row">
	<div class="box box-solid">
	  	<div class="box-header with-border">
	    	<h3 class="box-title"><b>Become a Subscriber</b></h3>
	  	</div>
	  	<div class="box-body">
	    	<p>Get free updates on the latest products and discounts, straight to your inbox.</p>
	    	<form method="POST" action="">
		    	<div class="input-group">
	                <input type="text" class="form-control">
	                <span class="input-group-btn">
	                    <button type="button" class="btn btn-info btn-flat"><i class="fa fa-envelope"></i> </button>
	                </span>
	            </div>
		    </form>
	  	</div>
	</div>
</div>

<!--<div class="row">
	<div class='box box-solid'>
	  	<div class='box-header with-border'>
	    	<h3 class='box-title'><b>Follow us on Social Media</b></h3>
	  	</div>
	  	<div class='box-body'>
	    	<a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
	    	<a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
	    	<a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
	    	<a class="btn btn-social-icon btn-google"><i class="fa fa-google-plus"></i></a>
	    	<a class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
	  	</div>
	</div>
</div> -->
<style>
.pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
    z-index: 3;
    color: #fff;
    cursor: default;
      background-color: #6dbe50 !important;
    border-color: #6dbe50 !important;
	cursor:pointer;
}

.btn-info.active.focus, .btn-info.active:focus, .btn-info.active:hover, .btn-info:active.focus, .btn-info:active:focus, 
.btn-info:active:hover, .open>.dropdown-toggle.btn-info.focus, .open>.dropdown-toggle.btn-info:focus, .open>.dropdown-toggle.btn-info:hover {
   background-color: #425382;
border-color: #425382;
}
  
.btn-info {
    background-color: #425382;
    border-color: #425382;
}
.btn-info:hover, .btn-info:active, .btn-info.hover {
     background-color: #425382;
    border-color: #425382;
}
.btn-info:hover, .btn-info:active, .btn-info.hover {
    background-color: #425382;
    border-color: #425382;
}

</style>