<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$editcategoryid = $_POST['editcategoryid'];

		try{
			$stmt = $conn->prepare("UPDATE sub_category SET sub_categoryname=:name,category_id=:editcategoryid WHERE id=:id");
			$stmt->execute(['name'=>$name,'editcategoryid'=>$editcategoryid,'id'=>$id]);
			$_SESSION['success'] = 'Sub Category updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit sub category form first';
	}

	header('location: sub_category.php');

?>