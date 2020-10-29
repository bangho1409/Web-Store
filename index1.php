<?php
	include('productCRUD.php');
	
	
	$obj = new ProductCRUD();
	//read data
	$list = $obj->readProducts();
	if($list)
	{
	/*	foreach($list as $item)
		{
			$content = "";
			foreach($item as $key => $value)
			{
				$content = $content . $key . ": " . $value . "<br>";
			}
			echo $content . "<br>";
		}
	} */


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>
<body>
	<div class="container">
	<td><a href="insert.php">Add New</a></td>
		<table class="table table-striped">
			<tr>
				<th>Product ID</th>
				<th>Product Name</th>
				<th>Product Price</th>
				<th>Product Image</th>
				<th>Product Details</th>
				<th>Action</th>
			</tr>
			<?php foreach($list as $item) { ?>
			<tr>
				<td><?php echo $item["id"] ?> </td>
				<td><?php echo $item["name"] ?> </td>
				<td><?php echo $item["price"] ?> </td>
				<td><img src="img\<?= $item['image'] ?>" width="144" height="140" /></td>
				<td><?php echo $item["details"] ?> </td>
				<td><a href="update.php?code<?= $item["id"]?>">Edit</a> &nbsp; | &nbsp; <a href="delete.php?code<?= $item["id"]?>">Delete</a>  </td>
			</tr>
			<?php } ?>
			<?php } ?>
		</table>
	</div>
</body>
</html>