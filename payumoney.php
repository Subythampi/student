<?php

include('config.php');

	  if(isset($_GET['course_id']))
	{
	$id=$_GET['course_id'];
	if(isset($_POST['submit']))
	{
	$amt=$_POST['amt'];
	$fname=$_POST['firstname'];
	$email=$_POST['email'];
	$phn=$_POST['phone'];
	$lname=$_POST['lastname'];
	$add1=$_POST['address1'];
	$add2=$_POST['address2'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$zcode=$_POST['zipcode'];
	$query=mysql_query("INSERT INTO `payu`(`amount`,`firstname`, `lastname`, `email`, `phone`, `address1`,
	`address2`, `city`, `state`, `zipcode`) VALUES ('".$amt."','".$fname."','".$lname."','".$email."',
	'".$phn."','".$email."','".$phn."','".$add1."','".$add2."','".$city."','".$state"','".$zcode."')");
	}
	
	
	if($query1)
		{
			echo "success";
		}
	}
	
?>
<html>
<head>
<title>Ably Shop A Ecommerce Category Flat Bootstrap Responsive Website| Checkout</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shopin Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndroId Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--theme-style-->
<link href="css/style4.css" rel="stylesheet" type="text/css" media="all" />	

<!--//theme-style-->
<script src="js/jquery.min.js"></script>
<!--- start-rate---->
<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!---//End-rate---->
</head>
<body>
<!--header-->
<div class="header">
<div class="container">
		<div class="head">
			<div class=" logo">
				<a style="color:orange;font-size:20px;" href="index.html">AblyShop</a>	
			</div>
		</div>
	</div>
	<div class="header-top">
		<div class="container">
		<div class="col-sm-5 col-md-offset-2  header-login">
					<ul >
						<li><a href="login.html">Login</a></li>
						<li><a href="register.html">Register</a></li>
						<li><a href="checkout.html">Checkout</a></li>
					</ul>
				</div>
				
			<div class="col-sm-5 header-social">		
					<ul >
						<li><a href="#"><i></i></a></li>
						<li><a href="#"><i class="ic1"></i></a></li>
						<li><a href="#"><i class="ic2"></i></a></li>
						<li><a href="#"><i class="ic3"></i></a></li>
						<li><a href="#"><i class="ic4"></i></a></li>
					</ul>
					
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
		
		<div class="container">
		
			<div class="head-top">
			
		 <div class="col-sm-100 col-md-offset-1">
				<nav class="navbar nav_bottom" role="navigation">
 
 <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
   </div> 
   <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
            <li><a class="color" href="index.html">Home</a></li>
            
    		<li class="dropdown mega-dropdown active">
			    <a class="color1" href="#" class="dropdown-toggle" data-toggle="dropdown">Accessories<span class="caret"></span></a>				
				<div class="dropdown-menu ">
                    <div class="menu-top">
						<div class="col1">
							<div class="h_nav">
								<h4>Watches</h4>
									<ul>
										<li><a href="product.html">Accessories</a></li>
										<li><a href="product.html">Bags</a></li>
										<li><a href="product.html">Caps & Hats</a></li>
										<li><a href="product.html">Hoodies & Sweatshirts</a></li>
										
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Cosmetics</h4>
								<ul>
										<li><a href="product.html">Jackets & Coats</a></li>
										<li><a href="product.html">Jeans</a></li>
										<li><a href="product.html">Jewellery</a></li>
										<li><a href="product.html">Jumpers & Cardigans</a></li>
										<li><a href="product.html">Leather Jackets</a></li>
										<li><a href="product.html">Long Sleeve T-Shirts</a></li>
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Handbags</h4>
									<ul>
										<li><a href="product.html">Shirts</a></li>
										<li><a href="product.html">Shoes, Boots & Trainers</a></li>
										<li><a href="product.html">Sunglasses</a></li>
										<li><a href="product.html">Sweatpants</a></li>
										<li><a href="product.html">Swimwear</a></li>
										<li><a href="product.html">Trousers & Chinos</a></li>
										
									</ul>	
								
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Jewellery</h4>
								<ul>
									<li><a href="product.html">T-Shirts</a></li>
									<li><a href="product.html">Underwear & Socks</a></li>
									<li><a href="product.html">Vests</a></li>
									<li><a href="product.html">Jackets & Coats</a></li>
									<li><a href="product.html">Jeans</a></li>
									<li><a href="product.html">Jewellery</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1 col5">
						<img src="images/me.png" class="img-responsive" alt="">
						</div>
						<div class="clearfix"></div>
					</div>                  
				</div>				
			</li>
			<li class="dropdown mega-dropdown active">
			    <a class="color2" href="#" class="dropdown-toggle" data-toggle="dropdown">Appliances<span class="caret"></span></a>				
				<div class="dropdown-menu mega-dropdown-menu">
                    <div class="menu-top">
						<div class="col1">
							<div class="h_nav">
								<h4>Home</h4>
									<ul>
										<li><a href="product.html">Accessories</a></li>
										<li><a href="product.html">Bags</a></li>
										<li><a href="product.html">Caps & Hats</a></li>
										<li><a href="product.html">Hoodies & Sweatshirts</a></li>
										
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Electronics</h4>
								<ul>
										<li><a href="product.html">Jackets & Coats</a></li>
										<li><a href="product.html">Jeans</a></li>
										<li><a href="product.html">Jewellery</a></li>
										<li><a href="product.html">Jumpers & Cardigans</a></li>
										<li><a href="product.html">Leather Jackets</a></li>
										<li><a href="product.html">Long Sleeve T-Shirts</a></li>
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Digital</h4>
								
<ul>
										<li><a href="product.html">Shirts</a></li>
										<li><a href="product.html">Shoes, Boots & Trainers</a></li>
										<li><a href="product.html">Sunglasses</a></li>
										<li><a href="product.html">Sweatpants</a></li>
										<li><a href="product.html">Swimwear</a></li>
										<li><a href="product.html">Trousers & Chinos</a></li>
										
									</ul>	
								
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Pest Control</h4>
								<ul>
									<li><a href="product.html">T-Shirts</a></li>
									<li><a href="product.html">Underwear & Socks</a></li>
									<li><a href="product.html">Vests</a></li>
									<li><a href="product.html">Jackets & Coats</a></li>
									<li><a href="product.html">Jeans</a></li>
									<li><a href="product.html">Jewellery</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1 col5">
						<img src="images/me1.png" class="img-responsive" alt="">
						</div>
						<div class="clearfix"></div>
					</div>                  
				</div>				
			</li>
			<li class="dropdown mega-dropdown active">
			    <a class="color2" href="#" class="dropdown-toggle" data-toggle="dropdown">Clothing<span class="caret"></span></a>				
				<div class="dropdown-menu mega-dropdown-menu">
                    <div class="menu-top">
						<div class="col1">
							<div class="h_nav">
								<h4>Men</h4>
									<ul>
										<li><a href="product.html">Accessories</a></li>
										<li><a href="product.html">Bags</a></li>
										<li><a href="product.html">Caps & Hats</a></li>
										<li><a href="product.html">Hoodies & Sweatshirts</a></li>
										
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Women</h4>
								<ul>
										<li><a href="product.html">Jackets & Coats</a></li>
										<li><a href="product.html">Jeans</a></li>
										<li><a href="product.html">Jewellery</a></li>
										<li><a href="product.html">Jumpers & Cardigans</a></li>
										<li><a href="product.html">Leather Jackets</a></li>
										<li><a href="product.html">Long Sleeve T-Shirts</a></li>
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Kids</h4>
								
<ul>
										<li><a href="product.html">Shirts</a></li>
										<li><a href="product.html">Shoes, Boots & Trainers</a></li>
										<li><a href="product.html">Sunglasses</a></li>
										<li><a href="product.html">Sweatpants</a></li>
										<li><a href="product.html">Swimwear</a></li>
										<li><a href="product.html">Trousers & Chinos</a></li>
										
									</ul>	
								
							</div>							
						</div>
						<li class="dropdown mega-dropdown active">
			    <a class="color2" href="#" class="dropdown-toggle" data-toggle="dropdown">Shoes & Footwear<span class="caret"></span></a>				
				<div class="dropdown-menu mega-dropdown-menu">
                    <div class="menu-top">
						<div class="col1">
							<div class="h_nav">
								<h4>Men</h4>
									<ul>
										<li><a href="product.html">Accessories</a></li>
										<li><a href="product.html">Bags</a></li>
										<li><a href="product.html">Caps & Hats</a></li>
										<li><a href="product.html">Hoodies & Sweatshirts</a></li>
										
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Women</h4>
								<ul>
										<li><a href="product.html">Jackets & Coats</a></li>
										<li><a href="product.html">Jeans</a></li>
										<li><a href="product.html">Jewellery</a></li>
										<li><a href="product.html">Jumpers & Cardigans</a></li>
										<li><a href="product.html">Leather Jackets</a></li>
										<li><a href="product.html">Long Sleeve T-Shirts</a></li>
									</ul>	
							</div>							
						</div>
								
						</div>
			<li><a class="color3" href="product.html">Sale</a></li>
			
            <li ><a class="color6" href="contact.html">Contact</a></li>
        </ul>
     </div><!-- /.navbar-collapse -->

</nav>
			</div>
			<div>
				<ul class="heart">
				<li>
				<a href="wishlist.html" >
				<span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
				</a></li>
				<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i></a></li>
					</ul>
					<div class="cart box_1">
						<a href="checkout.html">
						<h3> <div class="total">
							<span class="simpleCart_total"></span></div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

					</div>
					<div class="clearfix"> </div>
					
						<!----->

						<!---pop-up-box---->					  
			<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
			<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
			<!---//pop-up-box---->
			<div id="small-dialog" class="mfp-hide">
				<div class="search-top">
					<div class="login-search">
						<input type="submit" value="">
						<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}">		
					</div>
					<p>Ably shop</p>
				</div>				
			</div>
		 <script>
			$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
			});
																						
			});
		</script>
						<!----->
			</div>
			<div class="clearfix"></div>
		</div>	
	</div>	
</div>
<div class="banner-top">
	<div class="container">
	<h1>Checkout</h1>
		<em></em>
		<h2><a href="index.html">Home</a><label>/</label>Checkout</a></h2>
	</div>
</div>
<!--login-->
	<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});	  
					});
			   </script>
<script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
						$('.cart-header1').fadeOut('slow', function(c){
							$('.cart-header1').remove();
						});
						});	  
					});
			   </script>
			   <script>$(document).ready(function(c) {
					$('.close3').on('click', function(c){
						$('.cart-header2').fadeOut('slow', function(c){
							$('.cart-header2').remove();
						});
						});	  
					});
			   </script>
<div class="container">
	<div class="check-out">
	
		
	 <form action="http://www.bulksmsservice.co.in/api/sentsms.php?username=ablyblood&api_password=jmpi65b5e5&to=8526183110,9750854360&priority=1&sender=ablymass@gmail.com&message=Transaction%20successfull" method="post" name="payuForm">
      
      <table>
        <tr>
          <td><b>Mandatory Parameters</b></td>
        </tr>
        <tr>
          <td>Amount </td>
          <td><label value="<?php echo $id; ?>" name="amt"/><?php echo $id; ?></label></td>
          <td>First Name </td>
          <td><input name="firstname" id="firstname" value="" /></td>
        </tr>
        <tr>
          <td>Email </td>
          <td><input name="email" id="email" value="" /></td>
          <td>Phone </td>
          <td><input name="phone" value="" /></td>
        </tr>
        
       
        <tr>
          <td><b>Optional Parameters</b></td>
        </tr>
        <tr>
          <td>Last Name </td>
          <td><input name="lastname" id="lastname" value="" /></td>
          
        </tr>
        <tr>
          <td>Address1 </td>
          <td><input name="address1" value="" /></td>
          <td>Address2 </td>
          <td><input name="address2" value="" /></td>
        </tr>
        <tr>
          <td>City </td>
          <td><input name="city" value="" /></td>
          <td>State </td>
          <td><input name="state" value="" /></td>
        </tr>
        <tr>
          <td>Country </td>
          <td><input name="country" value="" /></td>
          <td>Zipcode </td>
          <td><input name="zipcode" value="" /></td>
        </tr>
        
        <tr>
         
            <td colspan="4"><input type="submit" name="submit" value="Submit"></td>
         
        </tr>
		 
      </table>
    </form>
	</div>
  </body>
<?php } ?>
</html>
