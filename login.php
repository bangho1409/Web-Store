<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout</title>
	<link rel="stylesheet" href="css/loginform.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link href="css/style.css" rel="stylesheet" type="text/css"  media="all"/>
	<link href='http://fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="top-nav">
			<ul>
				<li class="selected"><a href="index.php">Shopping</a></li>
				<li class="selected"><a href="about.php">About</a></li>
				<li class="selected"><a href="contact.php">Contact us</a></li>
			</ul>
		</div>
<form  action="index1.php" method="post" 
  <div class="imgcontainer">
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button href="../index1.php"type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
  
</form>
</body>
</html>