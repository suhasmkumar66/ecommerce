
<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$subcategoryid = $_POST['subcategoryid'];
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM inner_category WHERE inner_name=:name");
		$stmt->execute(['name'=>$name]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Inner Category already exist';
		}
		else{
			try{
				$stmt = $conn->prepare("INSERT INTO inner_category (sub_categoryid,inner_name) VALUES (:subcategoryid,:name)");
				$stmt->execute(['subcategoryid' =>$subcategoryid,'name'=>$name]);
				$_SESSION['success'] = 'Inner Category added successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up Inner category form first';
	}

	header('location: inner_category.php');

?>