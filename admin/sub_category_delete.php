<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE FROM sub_category WHERE id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'Sub Category deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select Sub Category to delete first';
	}

	header('location: sub_category.php');
	
?>