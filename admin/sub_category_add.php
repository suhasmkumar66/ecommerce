
<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$categoryid = $_POST['categoryid'];
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM sub_category WHERE sub_categoryname=:name");
		$stmt->execute(['name'=>$name]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Sub Category already exist';
		}
		else{
			try{
				$stmt = $conn->prepare("INSERT INTO sub_category (category_id,sub_categoryname) VALUES (:categoryid,:name)");
				$stmt->execute(['categoryid' =>$categoryid,'name'=>$name]);
				$_SESSION['success'] = 'Sub Category added successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up Subcategory form first';
	}

	header('location: sub_category.php');

?>