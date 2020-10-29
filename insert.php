<?php 
	include ('productCRUD.php');
	
	if(isset($_POST['add'])) {
		$obj = new productCRUD();
		$success = $obj->createProduct($_POST['id'],$_POST['name'],$_POST['price'],$_POST['image'],$_POST['details']);
		header('Location: index1.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Vertical (basic) form</h2>
  <form action="<?php echo $_SERVER['PHP_SELF'] ?> "method ="POST" >
    <div class="form-group">
      <label for="ID">ID:</label>
      <input type="text" class="form-control" id="ID" placeholder="Enter ID" name="ID">
    </div>
	<div class="form-group">
      <label for="Name">Name:</label>
      <input type="text" class="form-control" id="Name" placeholder="Enter Name" name="Name">
    </div>
	<div class="form-group">
      <label for="Price">Price:</label>
      <input type="text" class="form-control" id="Price" placeholder="Enter Price" name="Price">
    </div>
	<div class="form-group">
      <label for="Image">Image:</label>
      <input type="text" class="form-control" id="Image" placeholder="Enter Image" name="Image">
    </div>
	<div class="form-group">
      <label for="Details">Details:</label>
      <input type="text" class="form-control" id="Details" placeholder="Enter Details" name="Details">
    </div>
    <button type="submit" class="btn btn-default" name="add">Submit</button>
  </form>
</div>

</body>
</html>
