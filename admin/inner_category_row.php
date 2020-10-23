<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT inc.id,inc.sub_categoryid,inc.inner_name,sc.sub_categoryname from inner_category as inc,sub_category as sc where inc.sub_categoryid = sc.id and inc.id = '$id'");
		$stmt->execute();
		$categoryarray = array();
		foreach ($stmt as $row) {
			$categoryarray[] = array("id" => $row['id'],"sub_categoryname" => $row['sub_categoryname'],"sub_categoryid" => $row['sub_categoryid'],"inner_name" => $row['inner_name']);
		}
		$pdo->close();

		echo json_encode($categoryarray);
	}
?>