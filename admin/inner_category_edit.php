<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$editsubcategoryid = $_POST['editsubcategoryid'];

		try{
			$stmt = $conn->prepare("UPDATE inner_category SET inner_name=:name,sub_categoryid=:editsubcategoryid WHERE id=:id");
			$stmt->execute(['name'=>$name,'editsubcategoryid'=>$editsubcategoryid,'id'=>$id]);
			$_SESSION['success'] = 'Inner Category updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit Inner category form first';
	}

	header('location: inner_category.php');

?>