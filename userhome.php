<?php
session_start();
include("dbconnect.php");
extract($_POST);

$uid=$_SESSION['id'];


$ctg=$_REQUEST['ctg'];


if($_REQUEST['act']=="add")
{
$pid=$_REQUEST['pid'];
$amnt=$_REQUEST['price'];
$fid=$_REQUEST['fid'];
$mq=mysql_query("select max(id) from addcart");
$mr=mysql_fetch_array($mq);
$id=$mr['max(id)']+1;
$ins=mysql_query("insert into addcart(id,uid,orderid,pid,price,quantity,amount,status,fid)
values($id,'$uid','0','$pid','0','0','0','0','$fid')");
header("location:userhome.php");
}
?> 	

<!DOCTYPE html>
<html>
<head>
<title>ARTISAN AVENUE</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<style type="text/css">
<!--
.style2 {font-weight: bold; color: #000000;}
-->
</style>
</head>
	
<body>
<!-- header -->
	<div class="agileits_header">
		<div class="w3l_offers">
			<a href="index.html">E-STORE!</a>
		</div>
		<div class="w3l_header_right">
			<ul>
				<li class="dropdown profile_details_drop">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
					<div class="mega-dropdown-menu">
						<div class="w3ls_vegetables">
							<ul class="dropdown-menu drp-mnu">
								<li><a href="login.php">Customers</a></li> 
								
							</ul>
						</div>                  
					</div>	
				</li>
			</ul>
		</div>
		<div class="w3l_header_right1">
			<h2><a href="mail.html">Contact Us</a></h2>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- script-for sticky-nav -->
	<script>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });
		 
	});
	</script>
	<style>
.active{
background-color:#00CC00;
}
</style>s
<!-- //script-for sticky-nav -->
	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<h1><a href="index.html"><span></span> ARTISAN AVENUE</a></h1>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="special_items">
					<li><a class="active" href="userhome.php">View Product</a><i></i></li>
					<li><a href="viewcart.php">View Cart</a><i></i></li>
					<li><a href="purchase.php">View Status</a><i></i></li>
					<li><a href="login.php">Logout</a></li>
				</ul>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>(+0123) 234 567</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="JJE-Commerce@mail.com">artisanavenue@mail.com</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.html">Home</a><span>|</span></li>
				<li>Sign In & Sign Up</li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->
<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_left">
		<nav class="navbar nav_bottom">
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
						<li><a href="userhome.php">Collections</a></li>
						<li><a href="userhome.php">Pots</a></li>
						<li class="dropdown mega-dropdown active">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Hand Made<span class="caret"></span></a>				
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>	
										<li><a href="userhome.php">Pots</a></li>
										<li><a href="userhome.php">Sculptures</a></li>
									</ul>
								</div>                  
							</div>				
						</li>
						<li><a href="userhome.php">Wood Carvings</a></li>
						<li><a href="userhome.php">Antiques</a></li>
						<li class="dropdown">
							
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>
								
									
									</ul>
								</div>                  
							</div>	
						</li>
						
					</ul>
				 </div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
<!-- login --><br>
<br>

					<h1 class="style12"></h1>
    <p align="center" class="style30">&nbsp;</p>
     <form id="form1" name="form1" method="post" action="">
      <table width="97%" align="center">
        <tr>
          <td colspan="10" align="center" class="style2">Buy Products</td>
        </tr>
        <tr>
          <td colspan="10">&nbsp;</td>
        </tr>
        <tr>
          <td width="5%">&nbsp;</td>
          <td width="8%"><div align="center" class="style6"><strong>Id</strong> </div></td>
          <td width="13%"><div align="center" class="style6"><strong>Product name</strong> </div></td>
          <td width="12%"><div align="center" class="style6"><strong>Quantity</strong> </div></td>
          <td width="13%"><div align="center" class="style6"><strong>Price</strong> </div></td>
          <td width="13%"><div align="center" class="style6"><strong>Description</strong> </div></td>
          <td width="12%"><div align="center" class="style6"><strong>Buy</strong> </div></td>
        </tr>
        <tr>
          <td colspan="10">&nbsp;</td>
        </tr>
        <?php
		$qry=mysql_query("select * from product1");
		$i=1;
		while($row=mysql_fetch_array($qry))
		{
		?>
        <tr>
          <td width="5%">&nbsp;</td>
          <td><div align="center"><?php echo $row['id'];?></div></td>
          <td><div align="center"><?php echo $row['pname'];?></div></td>
          <td><div align="center"><?php echo $row['qty'];?></div></td>
          <td><div align="center"><?php echo $row['price'];?></div></td>
          <td><div align="center"><?php echo $row['desc'];?></div></td>
          <td><div align="center"><img src="images\<?php echo $row['img'];?>" alt="1" width="100" height="100" /></div></td>
          <td width="24%" colspan="1" align="center"><a href="userhome.php?act=add&pid=<?php echo $row['id'];?>&price=<?php echo $row['price'];?>&fid=<?php echo $row['fid'];?>" class="style3 style12" style=" background-color: #00CC66;, color: black;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;">add to cart</a>
        </div></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td width="13%">&nbsp;</td>
          <td width="12%">&nbsp;</td>
        </tr>
        <?php
		$i++;
		}
		
		?>
      </table>
    </form>
   	
<!-- //login -->
			</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<!-- newsletter-top-serv-btm -->
<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-3 w3_footer_grid">
				<h3>&nbsp;</h3>
				<ul class="w3_footer_grid_list">
					
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>policy info</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="#">FAQ</a></li>
					<li><a href="#">privacy policy</a></li>
					<li><a href="#">terms of use</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>what in stores</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="#">Pots</a></li>
					<li><a href="#">Sculptures</a></li>
					<li><a href="#">Antiques</a></li>
					<li><a href="#">Wood Carvings</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<div class="agile_footer_grids">
				<div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
				  <div class="w3_footer_grid_bottom">
						<h4>100% secure payments</h4>
						<img src="images/card.png" alt=" " class="img-responsive" />
					</div>
				</div>
				<div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
					<div class="w3_footer_grid_bottom">
						<h5>connect with us</h5>
						<ul class="agileits_social_icons">
							<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="wthree_footer_copy">
				<p>© 2019 E-Store| Design by Admin</p>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.js"></script>
<script>
		paypal.minicart.render();

		paypal.minicart.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});

	</script>
</body>
</html>
