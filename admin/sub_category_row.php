<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT sc.id,sc.sub_categoryname,sc.category_id,cat.name as category_name FROM sub_category as sc,category as cat WHERE sc.category_id = cat.id and sc.id='$id'");
		$stmt->execute();
		$categoryarray = array();
		foreach ($stmt as $row) {
			$categoryarray[] = array("id" => $row['id'],"sub_categoryname" => $row['sub_categoryname'],"category_id" => $row['category_id'],"category_name" => $row['category_name']);
		}
		$pdo->close();

		echo json_encode($categoryarray);
	}
?>