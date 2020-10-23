<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT * FROM category WHERE id = '$id'");
		$stmt->execute();
		$categoryarray = array();
		foreach ($stmt as $row) {
			$categoryarray[] = array("id" => $row['id'],"name" => $row['name']);
		}
		$pdo->close();

		echo json_encode($categoryarray);
	}
?>