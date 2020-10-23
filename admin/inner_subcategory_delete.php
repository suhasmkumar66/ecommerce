<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE FROM inner_sub_category WHERE id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'Inner Sub category deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select Inner Category to delete first';
	}

	header('location: inner_subcategory.php');
	
?>