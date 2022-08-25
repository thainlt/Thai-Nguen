<?php
function component($productname,$productprice,$productimg,$productid){
	$element="
	<div class=\"col-4\">
		<form action=\"product.php\" method = \"post\">
			<div class = \"card shadow\">
				<div>
					<img src=\"$productimg\" alt=\"image1\" class=\"img-fluid card-img-top\">
				</div>
				<div class= \"card-body\">
					<h5 class =\"card-title\">$productname</h5>
					<h6>
						<i class=\"fa fa-star\"></i>
						<i class=\"fa fa-star\"></i>
						<i class=\"fa fa-star\"></i>
						<i class=\"fa fa-star\"></i>
						<i class=\"fa fa-star\"></i>
					</h6>
					<p class=\"card-text\">
						Sneaker for your life
					</p>
					<h5>
						<span class=\"price\">$productprice$</span>
					</h5>
					<button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart</button>
					<input type='hidden' name='product_id' value='$productid'>
				</div>
			</div>
		</form>
	</div>
	";
	echo $element;
}





function cartElement($productimg, $productname, $productprice, $productid){
	$element="
		<form action=\"cart.php?action=remove&id=$productid\" method=\"get\" class=\"cart-items\">
     		<div class=\"col-4\">
       		<img src=\"$productimg\" alt=\"image1\" class=\"img-fluid card-img-top\">
     		</div>
     		<div class=\"col-6\">
       		<h5 class=\"pt-2\">$productname</h5>
      	 	<small class=\"text-secondary\">Seller: Thai</small>
       		<h5 class=\"pt-2\">$productprice$</h5>
       		<button type=\"submit\" class=\"btn\">Save for Later</button>
       		<button type=\"submit\" class=\"btn\" name=\"remove\">Remove</button>
     		</div>
     		<div class=\"col-3\">
       		<div>
         	<button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fa fa-minus\"></i></button>
         	<input type=\"text\" value=\"1\" class=\"form-control\">
         	<button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fa fa-plus\"></i></button>
       	</div>
     	</div>
   		</div>
 		</div>
		</form>


	";
	echo $element;
}
function getUser($name,$phonenumber,$email,$password){
	$element="
	<div class=\"col-4\">
		<form action=\"aboutuser.php\" method = \"post\">
			<div class = \"card shadow\">
				<div class= \"card-body\">
					<h5 class =\"card-title\">$name</h5>
					<p class=\"card-text\">
						User of YSstore
					</p>
					<h5>
						<span class=\"price\">phonenumber</span>
					</h5>
					<button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart</button>
					<input type='hidden' name='pass' value='$password'>
				</div>
			</div>
		</form>
	</div>
	";
	echo $element;
}