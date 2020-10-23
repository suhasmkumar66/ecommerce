<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		$stmt = $conn->prepare("select ics.inner_sub_categoryname,ics.inner_categoryid,ics.id,ic.inner_name from inner_sub_category as ics,inner_category as ic where ics.inner_categoryid = ic.id and ics.id = '$id'");
		$stmt->execute();
		$categoryarray = array();
		foreach ($stmt as $row) {
			$categoryarray[] = array("id" => $row['id'],"inner_name" => $row['inner_name'],"inner_categoryid" => $row['inner_categoryid'],"inner_sub_categoryname" => $row['inner_sub_categoryname']);
		}
		$pdo->close();

		echo json_encode($categoryarray);
	}
?>