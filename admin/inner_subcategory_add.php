
<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$innercategoryid = $_POST['innercategoryid'];
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM inner_sub_category WHERE inner_sub_categoryname=:name");
		$stmt->execute(['name'=>$name]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Inner Sub Category already exist';
		}
		else{
			try{
				$stmt = $conn->prepare("INSERT INTO inner_sub_category (inner_categoryid,inner_sub_categoryname) VALUES (:innercategoryid,:name)");
				$stmt->execute(['innercategoryid' =>$innercategoryid,'name'=>$name]);
				$_SESSION['success'] = 'Inner Sub Category added successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up Inner Sub category form first';
	}

	header('location: inner_subcategory.php');

?>