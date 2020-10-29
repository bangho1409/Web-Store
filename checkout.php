<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link href="css/style.css" rel="stylesheet" type="text/css"  media="all"/>
	<link href='http://fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
    <div class="wrap">
		<div class="header">
			<div class="search-bar">
				<input type="text" placeholder="Search your Product"><input type="submit" value="Search"/>
			</div>
			<div class="clear"> </div>
			<div class="header-top-nav">
				<ul>
					<li><a href="#">Register</a></li>
					<li><a href="login.php">Login</a></li>
					<li><a href="cart.php"><span>Cart&nbsp;&nbsp;: </span></a><lable> &nbsp;1</lable></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="clear"> </div>
	<div class="top-header">
		<div class="wrap">
			<div class="logo">
				<div>Toy Shop</div>
			</div>
		<div class="top-nav">
			<ul>
        <li class="selected"><a href="index.php">Shopping</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="contact.php">Contact us</a></li>
			</ul>
		</div>
		<div class="clear"> </div>
		</div>
    </div>
    <div class="clear"> </div>
    <div class="back-links">
        <ul>
            <li><a href="index.php">Home</a><img src="images/arrow.png"Weight="10" height="10" alt="index.php"></li>
            <li><a href="cart.php">Cart</a><img src="images/arrow.png"Weight="10" height="10" alt="cart.php"></li>
            <li>Check out</li>
        </ul>
    </div>
    <div class="wrap">
        <div class="content">
            <div class="section group">
                <div class="col span_2_of_3">
                    <div class="contact-form">
                        <!-- Based on contact section -->
                        <h2><b>CHECK YOUR INFORMATION TO BUY</b></h2>
                        <form>
                            <div>
                                <span><label>FULL NAME</label></span>
                                <span><input type="text" value=""></span>
                            </div>
                            <div>
                                <span><label>DATE OF BIRTH</label></span>
                                <span><input type="text" value=""></span>
                            </div>
                            <div>
                                <span><label>E-MAIL</label></span>
                                <span><input type="text" value=""></span>
                            </div>
                            <div>
                                <span><label>MOBILE NUMBER</label></span>
                                <span><input type="text" value=""></span>
                            </div>
                            <div>
                                <span><label>ADDRESS</label></span>
                                <span><input type="text" value=""></span>
                            </div>
                            <div>
                                <span>PAY WAY</span>
                                <input type="radio" name="pay" value="Bank Card"/>Bank Card<br>
                                <input type="radio" name="pay" value="Recive directly at showroom"/>Recive directly at showroom<br>
                            </div>
                            <div class="buy">
                                <input type="submit" value="SUBMIT">
                                <input type="submit" value="CANCEL">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="footer">
		<div class="wrap">
			<div class="section group">
				<div class="col_1_of_4 span_1_of_4">
					<h3>Company Info</h3>
					<p>MWS Company
						<br>Specializing in distribution of imported vehicles, motor bikes.
					</p>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>Latest-News</h3>
					<li><a href="#">Become a dealer</a></li>
					<li><a href="#">Awards and reviews</a></li>
					<li><a href="#">Logistic needed</a></li>
				</div>
        <div class="col_1_of_4 span_1_of_4 footer-lastgrid">
          <h3>Follow Us:</h3>
           <ul>
            <li><a href="https://twitter.com" target="_blank"><img src="images/twitter.png" weight="30" height="30" title="twitter" />Twitter</a></li>
            <li><a href="https://www.facebook.com" target="_blank"><img src="images/facebook.png"  weight="50" height="50" title="Facebook"/>Facebook</a></li>
           </ul>
        </div>
		</div>
	</div>
</body>
</html>
