<?php
	include ('productCRUD.php');
		$obj = new ProductCRUD();
		$success = $obj->deleteProduct($_GET['id']);
		header('Location: index1.php');
?>