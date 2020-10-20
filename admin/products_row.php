<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, products.id AS prodid, products.name AS prodname, category.name AS catname,products.sub_category_id1,products.sub_category_id2 FROM products LEFT JOIN category ON category.id=products.category_id WHERE products.id = '$id'");
		$stmt->execute();
		$productarray = array();
		foreach ($stmt as $row) {
			$sub_category_id1 = $row['sub_category_id1'];
			$sub_category_id2 = $row['sub_category_id2'];
			$stmt1 = $conn->prepare("SELECT sub_categoryname from sub_category where id = '$sub_category_id1'");
			$stmt1->execute();
			$sub_categoryname1 = "";
			foreach ($stmt1 as $row1) {
				$sub_categoryname1 = $row1['sub_categoryname'];
			}

			$stmt2 = $conn->prepare("SELECT sub_categoryname from sub_category where id = '$sub_category_id2'");
			$stmt2->execute();
			$sub_categoryname2 = "";
			foreach ($stmt2 as $row2) {
				$sub_categoryname2 = $row2['sub_categoryname'];
			}
			$productarray[] = array("description" => $row['description'],"prodname" => $row['prodname'],"prodid" => $row['prodid'],"prodname" => $row['prodname'],"category_id" => $row['category_id'],"catname" => $row['catname'],"price" => $row['price'],"sub_category_id1" => $sub_category_id1,"sub_category_id2" => $sub_category_id2,"sub_categoryname1" => $sub_categoryname1, "sub_categoryname2" =>$sub_categoryname2);
		}
		
		$pdo->close();

		echo json_encode($productarray);
	}
?>