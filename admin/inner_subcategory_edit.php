<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$editinnercategoryid = $_POST['editinnercategoryid'];

		try{
			$stmt = $conn->prepare("UPDATE inner_sub_category SET inner_sub_categoryname=:name,inner_categoryid=:editinnercategoryid WHERE id=:id");
			$stmt->execute(['name'=>$name,'editinnercategoryid'=>$editinnercategoryid,'id'=>$id]);
			$_SESSION['success'] = 'Inner Sub Category updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit Inner sub category form first';
	}

	header('location: inner_subcategory.php');

?>