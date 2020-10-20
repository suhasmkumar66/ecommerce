<?php
	include 'includes/session.php';
	include 'includes/slugify.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$slug = slugify($name);
		$category = $_POST['category'];
		$price = $_POST['price'];
		$description = $_POST['description'];
		$sub_category_id1 = $_POST['subcategorya'];
		$sub_category_id2 = $_POST['subcategoryb'];
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE products SET name=:name, slug=:slug, category_id=:category, sub_category_id1=:sub_category_id1, sub_category_id2=:sub_category_id2, price=:price, description=:description WHERE id=:id");
			
			$stmt->execute(['name'=>$name, 'slug'=>$slug, 'category'=>$category, 'sub_category_id1'=>$sub_category_id1, 'sub_category_id2'=>$sub_category_id2, 'price'=>$price, 'description'=>$description, 'id'=>$id]);
			$_SESSION['success'] = 'Product updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit product form first';
	}

	header('location: products.php');

?>