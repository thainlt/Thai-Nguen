<?php
session_start();
if (!isset($_SESSION['user'])) {
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>YS Store|Shop Sneaker In Da Nang City</title>
	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@100&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="header">
		<div class="container">
		<div class="navbar">
			<div class="logo">
				<a href="landingpageafterlogin.php">
				<img src="asm 2/YS Store.png"width="160px">
				</a>
			</div>
			<nav>
			<ul id="MenuItems">
				<li><a class="active" href="landingpageafterlogin.php">Home</a></li>
				<li><a href="productafterlogin.php">Product</a></li>
				<li><a href="contact.html">Contact</a></li>
				<li><a href="aboutuser.php"><?php echo $_SESSION['user']; ?></a> </li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
			</nav>
			<a href="cart.html">
			<img src="asm 2/cart.png" width="30px" height="30px">
			</a>
		</div>
		<div class="row">
			<div class="col-2">
				<h1>Your Shoes & Your Style <br> The Ways You Choose</h1>
				<p>In life, love is not sure to come together but for shoes it is different, when you love it just spend money and buy them.</p>
				<a href="product.html" class="btn"> Shopping Now &#9754; </a>
			</div>
			<div class="col-2">
				<img src="asm 2/image1.png">
			</div>
		</div>
		</div>
	</div>
	<div class="categories">
	<div class="small-container">
		<h2 class="title">Styles</h2>
			<div class="row">
			<div class="col-3">
				<img src="asm 2/category-1.jpg">
			</div>
			<div class="col-3">
				<img src="asm 2/category-2.jpg">
			</div>
			<div class="col-3">
				<img src="asm 2/category-3.jpg">
			</div>
			</div>
		</div>
	</div>	
	<div class="small-container">
		<h2 class="title">Products</h2>
		<div class="row">
			<div class="col-4">
				<img src="asm 2/sneaker1.jpg">
				<h4>AIR FORCE 1</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
				</div>
				<p>159.99$</p>
			</div>
			<div class="col-4">
				<img src="asm 2/sneaker2.jpeg">
				<h4>AIR JORDAN 1 LOW SHATTERED BACKBOARD</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
				</div>
				<p>409.99$</p>
			</div>
			<div class="col-4">
				<img src="asm 2/sneaker3.jpg">
				<h4>AIR FORCE 1 SHADOW FULL WHITE</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
				</div>
				<p>164.99$</p>
			</div>
			<div class="col-4">
				<img src="asm 2/sneaker4.jpg">
				<h4>AIR FORCE 1 LUXE GREY</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
				</div>
				<p>249.99$</p>
			</div>
		</div>
	</div>
	<div class="offer">
				<div class="small-container">
					<div class="row">
						<div class="col-2">
							<img src="asm 2/highestprice.jpg" class="offer-img">
						</div>
						<div class="col-2">
							<p>Exclusively Available on YS Store</p>
							<h1>AIR JORDAN 1 HI TROPHY ROOM CHICAGO</h1>
							<small>Shoes With Identifier 6666 Of 12,000 Pairs Worldwide <br> Jordan's Signature On The Heel</small><br>
							<a href="" class="btn"> Shopping Now &#9754; </a>
						</div>
					</div>
				</div>
			</div>
		<div class="testimonial">
			<div class="small-container">
				<div class="row">
					<div class="col-3">
						<img src="asm 2/person1.jfif">
						<h3>Selena Balie</h3>
						<i class="fa fa-quote-left"></i>
						<p>This is the shop I trust the most, they always sell quality products and exceed my expectations, they always give the best price products, you should pay for this store, so good</p>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-half-o"></i>
						</div>
						<i class="fa fa-quote-right"></i>
					</div>
					<div class="col-3">
						<img src="asm 2/person2.jfif">
						<h3>Ivan Losev</h3>
						<i class="fa fa-quote-left"></i>
						<p>I only trust and buy from this store, this store always gives me great prices and extremely quality goods.I pretty sure no one store better than this store because it so good</p>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<i class="fa fa-quote-right"></i>
					</div>
					<div class="col-3">
						<img src="asm 2/person3.jfif">
						<h3>Aleksande Margolin</h3>
						<i class="fa fa-quote-left"></i>
						<p>There is no store that I have ever been to that is as good as this one and has such a favorable price for customers as this store. I will always buy product from the this store</p>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<i class="fa fa-quote-right"></i>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="brands">
			<div class="small-container">
				<div class="row">
					<div class="col-5">
						<a href="https://www.paypal.com/">
						<img src="asm 2/paypal.png">
						</a>
					</div>
					<div class="col-5">
						<a href="http://viettel.com.vn/">
						<img src="asm 2/viettel.png">
						</a>
					</div>
					<div class="col-5">
						<a href="https://mobifone.vn/">
						<img src="asm 2/mobifone.png">
						</a>
					</div>
					<div class="col-5">
						<a href="https://vinaphone.com.vn/">
						<img src="asm 2/vinaphone.jpg">
						</a>
					</div>
					<div class="col-5">
						<a href="https://www.visa.com.vn/">
						<img src="asm 2/visa.png">
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="footer-col-1">
						<h3>YS Store-Shop Sneaker Da Nang</h3>
						<ul>
						<li><a href="mailto:thainhi134@gmail.com">Mail:thainhi134@gmail.com</a></li>
							<li><a href="https://www.google.com/maps/place/658+Ng.+Quy%E1%BB%81n,+An+H%E1%BA%A3i+B%E1%BA%AFc,+S%C6%A1n+Tr%C3%A0,+%C4%90%C3%A0+N%E1%BA%B5ng+550000,+Vi%E1%BB%87t+Nam/@16.0822338,108.233743,17z/data=!3m1!4b1!4m5!3m4!1s0x31421820f41ac5b7:0x4c5f5c4abc7a1212!8m2!3d16.0822287!4d108.2359371">Address:658 Ngo Quyen, Hai Chau District, Da Nang City</li>
						</ul>
					</div>
					<div class="footer-col-2">
						<h3>Userful Links</h3>
						<ul>
							<li><a href="">News & Events</li>
							<li><a href="contact.html">Contact</li>
							<li><a href="mailto:thainhi134@gmail.com">Refund Policy</li>
							<li><a href="mailto:thainhi134@gmail.com">Join Affiliate</li>
						</ul>
					</div>
					<div class="footer-col-3">
						<h3>Follow us</h3>
						<ul>
						<li><a href="https://www.facebook.com/profile.php?id=100012824770027/">Facebook</a></li>
							<li><a href="https://www.instagram.com/thainguyen570/">Instagram</a></li>
							<li><a href="https://www.youtube.com/channel/UCqDGu9-kBwajsdYGVZSkAOQ">Youtube</a></li>
						</ul>
					</div>
				</div>
				<hr>
				<p class="copyright">&copy;Copyright 2022 - Nguyen Le Thanh Thai</p>
			</div>
		</div>
</body>
</html>