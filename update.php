<?php
	include ('productCRUD.php');
		
		
		if (count($_POST)>0){
		$obj = new ProductCRUD();	
		$success = $obj->updateProduct($_POST['id'],$_POST['name'],$_POST['price'],$_POST['image'],$_POST['details']);
		header('Location: index1.php');
		}
?>