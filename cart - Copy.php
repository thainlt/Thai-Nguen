<?php
session_start();
require_once('CreateDb.php');
require_once('component.php');

$db = new CreateDb(dbname:"Productdb",tablename:"Producttb");
if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["product_id"] == $_GET['id']){
              unset($_SESSION['cart'][$key]);
              echo "<script>alert('Sneaker has been Removed...!')</script>";
              echo "<script>window.location = 'cart.php'</script>";
          }	
      }
  }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Products|YS Store|Shop Sneaker In Da Nang City</title>
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
				<a href="landingpage.php">
				<img src="asm 2/YS Store.png"width="160px">
				</a>
			</div>
			<nav>
			<ul id="MenuItems">
				<li><a href="landingpage.php">Home</a></li>
				<li><a href="product.php">Product</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="account.php">Account</a></li>
			</ul>
			</nav>
			<a href="cart.php">
			<img src="asm 2/cart.png" width="30px" height="30px">
			<?php
				if(isset($_SESSION['cart'])){
					$count=count($_SESSION['cart']);
					echo"<span>$count</span>";
				}else{
					echo"<span>0</span>";
				}
			?>
			</a>
		</div>
		</div>
	</div>
	<div class="small-container">
			<div class="row">
			<?php

                $total = 0;	
                    if (isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'], 'product_id');

                        $result = $db->getData();
                        while ($row = mysqli_fetch_assoc($result)){
                            foreach ($product_id as $id){
                                if ($row['id'] == $id){
                                    cartElement($row['product_image'], $row['product_name'],$row['product_price'], $row['id']);
                                    $total = $total + (int)$row['product_price'];
                                }
                            }
                        }
                    }else{
                        echo "<h5>Cart is Empty</h5>";
                    }

                ?>
            </div>
	</div>
	<div class="small-container">
	<div class="row">
	
		<h6>PRICE DETAILS</h6>
		<hr>
		<div class="row">
			<div class="col-6">
				<?php
					if (isset($_SESSION['cart'])) {
						$count=count($_SESSION['cart']);
						echo "<h6>Price($count items)</h6>";
					}else{
						echo "<h6>Price (0 items)</h6>";
					}
				?>
				<h6>Delivery Charges</h6>
				<hr>
				<h6>Amount Payment</h6>
			</div>
			<div class="col-6">
				<h6><?php
					echo $total;
			?>$</h6>
			<h6 class="text-success">FREE</h6>
			<hr>
			<h6><?php echo $total;?></h6>
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