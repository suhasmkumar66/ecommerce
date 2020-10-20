<?php include 'includes/session.php'; ?>
<?php
	$category = isset($_GET['category']) ? $_GET['category'] : '';
	$subcategoryid1 = isset($_GET['subcategorya']) ? $_GET['subcategorya'] : '';
	$subcategoryid2 = isset($_GET['subcategoryb']) ? $_GET['subcategoryb'] : '';
	
	// $conn = $pdo->open();


	// try{
	// 	$stmt = $conn->prepare("SELECT * FROM category WHERE name = :slug");
	// 	$stmt->execute(['slug' => $slug]);
	// 	$cat = $stmt->fetch();
	// 	$catid = $cat['id'];
	// }
	// catch(PDOException $e){
	// 	echo "There is some problem in connection: " . $e->getMessage();
	// }

	// $pdo->close();
	if(!empty($category)){
		$condtion = "category_id = '$category'";
	}
	if(!empty($subcategoryid1)){
		$condtion = "sub_category_id1 = '$subcategoryid1'";
	}
	if(!empty($subcategoryid2)){
		$condtion = "sub_category_id2 = '$subcategoryid2'";
	}

?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
		            <!-- <h1 class="page-header"><?php echo $cat['name']; ?></h1> -->
		       		<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM products WHERE $condtion");
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
	        	</div>
	        </div>
	      </section>
	     
	    </div>
	  </div>
  
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>

<style>
#trending li:before {
    content: "\f046";
    font-family: FontAwesome;
    display: inline-block;
    margin-left: -1.3em;
    width: 1.3em;
    color: #6dbe50;
}
</style>
</body>
</html>