<?php
session_start();
$_SESSION["counts"]=0;
?>
<!--


author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Catchy Carz a classified ads  Category Flat Bootstrap Responsive Website Template | New Cars :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Catchy Carz Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--/web-fonts-->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,300,300italic,700,400italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Wallpoet' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
								

</head>
<body>
<!--/banner-section-->
		<div id="demo-1" class="banner-inner">
	 <div class="banner-inner-dott">
       <div class="header-top">
		    <!-- /header-left -->
		          <div class="header-left">
				  <!-- /sidebar -->
				        <div id="sidebar"> 
						     <h4 class="menu">Menu</h4>
						          <ul>
							    <li><a href="upcoming.html">New Cars <i class="glyphicon glyphicon-triangle-bottom"> </i> </a>
							      <ul>
									  <li><a href="find.html"><span>Find New Cars</span></a></li>
									  <li><a href="upcoming.html"><span>New Cars</span></a></li>
									  <li><a href="recommend.html"><span>Recommend Me A Car</span></a></li>
									  <li><a href="upcoming.html"><span>New Launches</span></a></li>
									  <li><a href="dealer.html"><span>Locate Dealer</span></a></li>
									  <li class="last"><a href="price.html"><span>On Road Price</span></a></li>
								   </ul>
							   </li>
							    <li><a href="compare.html">Compare Cars</a></li>
							    <li><a href="cars.html">Used Cars <i class="glyphicon glyphicon-triangle-bottom"> </i></a>
							      <ul>
								  <li><a href="used.html">Find Used cars</a></li>
									 <li><a href="sell.html">Sell Your Car</a></li>
									 <li><a href="cars.html"><span>Search Used Cars</span></a></li>
									 <li class="last"><a href="valuation.html"><span>Used Car Valuation</span></a></li>
									 <li><a href="dealer.html"><span>Locate Dealer</span></a></li>
									
								  </ul>
							   </li>
							   <li><a href="sell.html">Sell Your Car</a></li>
							   <li><a href="news.html">News And Reviews</a></li>
							   <li><a href="dealer.html">Dealers And Services</a></li>
							   <li><a href="#">More <i class="glyphicon glyphicon-triangle-bottom"> </i> </a>
							      <ul>
									  <li><a href="loan.html"><span>Car Loan</span></a></li>
									  <li><a href="codes.html"><span>Short Codes</span></a></li>
									  <li><a href="accessories.html"><span>Car Accessories</span></a></li>
									  <li><a href="tips.html"><span>Tips and Advices</span></a></li>
									  <li class="last"><a href="help.html"><span>Privacy Policy</span></a></li>

								 </ul>
							   </li>
							   <li><a href="insurance.html">Insurance</a></li>
							 <li><a href="app.html">Catchy Carz app</a><li>
						   </ul>
						   <div id="sidebar-btn">
							   <span></span>
							   <span></span>
							   <span></span>
						   </div>
					   </div>

							 <script>
								  var sidebarbtn = document.getElementById('sidebar-btn');
									var sidebar = document.getElementById('sidebar');
								   sidebarbtn.addEventListener('click', function () {
								  if(sidebar.classList.contains('visible')){
										sidebar.classList.remove('visible'); 
								   }else {
										sidebar.className = 'visible';
									}
								  });
								</script>
					    <!-- //sidebar -->
					  <div class="tag"><a href="#" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-tag"></span> Discounts On New Cars » </a></div>
					  <div class="tag"><a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-log-in"></span> Sign Up</a></div>
					</div>
				  <!-- //header-left -->
		             <div class="search-box">
						<div id="sb-search" class="sb-search">
							<form action="#" method="post">
								<input name="search" class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search"> </span>
							</form>
						</div>
						<!-- search-scripts -->
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
							<script>
								new UISearch( document.getElementById( 'sb-search' ) );
							</script>
						<!-- //search-scripts -->
					    <ul>
						<?php if(isset($_SESSION["idd"]))  { ?>
									<li><a href="user_advertisement.php" data-toggle="modal"
									data-target="#myModal4">
							
									<i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>Post Your Ad</a></li>
									<?php
									}
									else
										echo '<li>	<button id="showRight" class="navig">Login </button>
		</li>';
						
									?>
										<?php
										if(isset($_SESSION["idd"]))
										echo '<li><a href="logout.php"><button 
									id="showRight" class="navig">Logout </button></a></li>';
									else{
										?>
									<li>
									
									
									
								
							 <?php
							 
							 }
								?>
									
							
							<!-- login-script -->
							<script>
											$(document).ready(function()
											{
												$("#btn1").click(function()
												{
												
													var email=document.getElementById("login_email").value;
													var pass=document.getElementById("login_password").value;
													
													var page="single.php";
													$.post("login1.php",{user_name:email,password:pass,page_name:page},function(data)
													{
														$("#login_success").html(data).show();
													
													});
												});
											
											});
										
									
									</script>

							 <div class="cbp-spmenu-push">
							<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
								<h3>Login</h3>
							<div class="login-inner">
								<div class="login-top">
								
								 <form action="login1.php" method="post">
									
									<label id='login_success' style='color:red;'></label>
									
									<input type="text" id="login_email" class="email" placeholder="Email" required=""/>
									<input type="password" id="login_password" class="password" placeholder="Password" required=""/>	
									<input type="checkbox" id="brand" value="">
									<label for="brand"><span></span> Remember me</label>
								
								<div class="login-bottom">
									<ul>
										<li>
											<a href="#">Forgot password?
											</a>
										</li>
										<li>
						
						
<?php  if(isset($_SESSION["counts"]))
			{
			if($_SESSION["counts"]==3)
			{
			echo "<input type='button' class='btn btn-danger'  disabled id='btn1' value='Disabled'/>";
				
			?>
				<script>
				
				</script>
			
			
			<?php
			}
	}
	else
	{
	
	echo "<input type='button' class='btn btn-danger'  id='btn1' value='LOGIN'/>
		";
		
	//		echo "<input type='image' src='add_laptop\login.jpg' height=75  width=75>";
	
	}
	if(isset($_SESSION["counts"]))
	{
		if($_SESSION["counts"]<3)
		echo "<input type='button' class='btn btn-danger'  id='btn1' value='LOGIN'/>
		";
		
	
	}
	?>
											</form>
										</li>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
													
							</div>
							<div class="social-icons">
							<ul> 
								<li><a href="#"><span class="icons"></span><span class="text">Facebook</span></a></li>
								<li class="twt"><a href="#"><span class="icons"></span><span class="text">Twitter</span></a></li>
								<li class="ggp"><a href="#"><span class="icons"></span><span class="text">Google+</span></a></li>
							</ul> 
						</div>		
							</div> 
							</nav>
						</div> 
					<script src="js/classie2.js"></script>
						<script>
							var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
								showRight = document.getElementById( 'showRight' ),
								body = document.body;
				
							showRight.onclick = function() {
								classie.toggle( this, 'active' );
								classie.toggle( menuRight, 'cbp-spmenu-open' );
								disableOther( 'showRight' );
							};
				
							function disableOther( button ) {
								if( button !== 'showRight' ) {
									classie.toggle( showRight, 'disabled' );
								}
							}
						</script>
						<!--Navigation from Right To Left-->
						    </li>
						</ul>
						
					</div>
				   
						
					</div>
					<div class="clearfix"></div>
		    <!--banner-info-->
			<div class="banner-info">
			  <h1><a href="index.php">Catchy <span class="logo-sub">Carz</span> </a></h1>
			    <h2><span>COME LOOK </span> <span>AT THE SELECTION! </span></h2>
				<p>Eye it – try it – buy it!</p>
			     
			</div>
		<!--//banner-info-->	
		</div>
	 </div>
<!-- discounts-->
			<div class="modal ab fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog about" role="document">
					<div class="modal-content about">
						<div class="modal-header">
							<button type="button" class="close ab" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
								<div class="discount">
									<h3>Get Offers & Discount of</h3>
									<p>Catchy Carz Brand VL in New York</p>
										<form action="#" method="post">
											<select id="country5" onchange="change_country(this.value)" class="frm-field required">
												<option selected="selected" value="-1">-Buying Time Period-</option>
												<option value="0">Just Researching</option>
												<option value="7">1 Week</option>
												<option value="14">2 Weeks</option>
												<option value="30">1 Month</option>
												<option value="60">2 Months</option>
											</select>
											<input type="text" class="Pin code" placeholder="Pin code" required="">
										</form>
								</div>							
						</div>
						 <div class="modal-body about">
								
								<div class="dis-contact">
								  <h4>Contact Information</h4>
												<form action="#" method="post">
													<input type="text" name="name" class="name active" placeholder="Name" required="">
													<input type="text" name="email" class="email" placeholder="Email" required="">
													<input type="text" name="phone" class="phone" placeholder="Phone" required="">
													<div class="d-c">	
														<span class="checkbox1">
															<label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>I agree to Terms and Conditions.</label>
														</span>													

													</div>
													<input type="submit" value="Find Offers">
													
													</form>
								</div>
						 </div>
					</div>
				</div>
			</div>
			<!-- //discounts-->
				<!-- //sign-up-->
				<div class="modal ab fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog sign" role="document">
					<div class="modal-content about">
						<div class="modal-header one">
							<button type="button" class="close sg" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
								<div class="discount one">
								<h3>Sign Up</h3>
									
								</div>							
						</div>
						 <div class="modal-body about">
								<div class="login-top sign-top one">
								 <form action="user1.php" method="post">
									<input type="text" name="name" class="name active" placeholder="Your Name" required="">
									<input type="text" name="email" class="email" placeholder="Email" required="">
									<input type="password" name="password" class="password" placeholder="Password" required="">
									<input type='text' name='cn' value='' placeholder="Contact number" class='phone' required="">									
									
									<input type="checkbox" id="brand1" value="">
									
									
									<div class="form-group has-feedback">
										<i class="glyphicon glyphicon-user form-control-feedback"></i>
										<textarea name='ad' placeholder="Address" class='form-control' required></textarea>
									</div>
									
									<select name='st' class='form-control' required>
											<option value='Rajasthan'>Rajasthan</option>
											<option value='Punjab'>Punjab</option>
											<option value='Gujarat'>Gujarat</option>
											<option value='Haryana'>Haryana</option>
											<option value='Other'>Other</option>
									</select>
									<br/>
									<input type='text' name='ci' value='' placeholder='Enter city name' class='city' required>
									<input type='text' name='pn' value='' placeholder='Pincode' class='form-control' required>
										<br/>
								<input type='radio' name='r1' value='Male' >Male
								&nbsp;
									<input type='radio' name='r1' value='FeMale' >Female
									<br/>
									<br/>
									<input type="checkbox" name='remember'> 
									<label for="brand1"><span></span>Remember me?</label>
									<div class="login-bottom one">
									<ul>
										<li>
											<a href="#">Forgot password?</a>
										</li>
										<li>
										
										  <input type="submit" value="SIGN UP">
										
										</li>
									<div class="clearfix"></div>
								</ul>
								</div>	
								</form>
							</div>
							
							
						 </div>
						 <div class="social-icons">
									<ul> 
										<li><a href="#"><span class="icons"></span><span class="text">Facebook</span></a></li>
										<li class="twt"><a href="#"><span class="icons"></span><span class="text">Twitter</span></a></li>
										<li class="ggp"><a href="#"><span class="icons"></span><span class="text">Google+</span></a></li>
									</ul> 
									</div>
								
					</div>
				</div>
			</div>
			<!-- //sign-up-->
				<!-- /location-->
				<div class="modal ab fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog sign" role="document">
					<div class="modal-content about">
						<div class="modal-header one">
							<button type="button" class="close sg" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
								<div class="discount one">
									<h3>Please Tell Us Your City</h3>
									
								</div>							
						</div>
						 <div class="modal-body about">
								<div class="login-top sign-top location">
								 <form action="#" method="post">
				                      <select id="country12" onchange="change_country(this.value)" class="frm-field required">
														<option value="null"> Select City</option>
														<option value="city">Amsterdam</option>
														<option value="city">Bahrain</option>
														<option value="city">Cannes</option>
														<option value="city">Dublin</option>
														<option value="city">Edinburgh</option>
														<option value="city">Florence</option>
														<option value="city">Georgia</option>
														<option value="city">Hungary</option>
														<option value="city">Hong Kong</option>
														<option value="city">Johannesburg</option>
														<option value="city">Kiev</option>
														<option value="city">London</option>
													    <option value="city">Others...</option>
										</select>
								</form>
							     </div>
							
							
						 </div>

								
					</div>
				</div>
			</div>
			<!-- //location-->
			<!-- /get-->
				<div class="modal ab fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog sign" role="document">
					<div class="modal-content about">
						<div class="modal-header one">
							<button type="button" class="close sg" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
								<div class="discount one">
									<h3>Make car insurance buying easier</h3>
									
								</div>							
						</div>
						 <div class="modal-body about">
								<div class="login-top sign-top get">
								  <ul class="car-insurance">
								       <li><i class="fa fa-signal" aria-hidden="true"></i><h6> Zero <br> Depreciation</h6></li>
									   <li><i class="fa fa-truck" aria-hidden="true"></i><h6> Road-side <br> assistance</h6></li>
									   <li><i class="fa fa-gavel" aria-hidden="true"></i><h6> Hydro-static <br> cover-lock</h6></li>
								     </ul>
							     <div class="login-top sign-top">
												<form action='up_car_info.php' method='post'>
												
													<input type="hidden" name="id" value="<?php echo $id1[0] ?>" placeholder="Name" required=""/>

												<input type="text" name="name" class="name active" placeholder="Name" required=""/>
													<input type="text" name="email" class="email" placeholder="Email" required=""/>
													<input type="text" name="phone" class="phone" placeholder="Phone" required=""/>
													<div class="section_drop">
														<select name='cy' class="frm-field required form-control">
														<option value="null"> Select City</option>
														<option value="Jaipur">Jaipur</option>
														<option value="Udaipur">Udaipur</option>
														<option value="Jodhpur">Jodhpur</option>
														<option value="Kota">Kota</option>
														<option value="Bikaner">Bikaner</option>
														<option value="Jaisalmer">Jaisalmer</option>
														<option value="Chittorgarh">Chittorgarh</option>
														<option value="city">Others...</option>
													</select>
												   </div>	
													<input type="submit" value="Done">
													
													</div>
												</form>
											</div>
								
							</div>
						
							
						 </div>
								
					</div>
				</div>
			</div>			<!-- //get-->
		<!--//banner-section-->
		<!--/breadcrumb-->
		    <div class="service-breadcrumb w3-agile">
				<div class="container">
					<div class="wthree_service_breadcrumb_left">
						<ul>
							<li><a href="index.php">Home</a> <i>|</i></li>
							<li><a href="user_ads.php">Used Cars</a> <i>|</i></li>
							
							<?php
				include('db.php');
				$id=$_REQUEST["a"];
				$r=mysqli_query($con,"select * from user_advertisement where id='$id'");
				
				if($row=mysqli_fetch_array($r)){
									
					echo "		<li><a href='index.php'>$row[3]</a>
					 </li>
					";
					}
					?>
						</ul>
					</div>
					<div class="wthree_service_breadcrumb_right">
						<h3>
						<?php
				include('db.php');
				$id=$_REQUEST["a"];
				$r=mysqli_query($con,"select * from user_advertisement where id='$id'");
				
				if($row=mysqli_fetch_array($r)){
									
					echo "	<a href='index.php'>$row[3]</a>
					 
					";
					}
					?>
					</h3>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		<!--//breadcrumb-->
		<div class="single w3ls">
		<div class="container">
			<div class="col-md-8 single-left">
				
				<?php
				
				
				include('db.php');
				$id=$_REQUEST["a"];
				$r=mysqli_query($con,"select * from user_advertisement where id='$id'");
				
				if($row=mysqli_fetch_array($r)){
				
				?>
				<div class="sample1">
				<h2 style='text-align:center'>
				<?php
				include('db.php');
				$id=$_REQUEST["a"];
				$r=mysqli_query($con,"select * from user_advertisement where id='$id'");
				
				if($row=mysqli_fetch_array($r)){
									
				echo "	<a href='index.php' style='text-align:center;'>$row[3]</a>
				 
				";	}
				?></h2>
					<div class="carousel" style="">
						<ul>
							<li> <h2 style='text-align:center;text-transform:capitalize'><center>
							<?php echo $row[3] ?></h2>
							</center>
							<img src="advertisement_photo/<?php echo $row[5] ?>" class='img-responsive' alt="maiores alias consequ"> 
							<div class="caption"><span>Nissan Terrano</span></div></li>
						</ul>
						<div class="controls">
							<div class="prev"></div>
							<div class="next"></div>
						</div>
					</div>
					</div>
				
				<div class="single-left3">
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							
							<div class="panel panel-info">
      <div class="panel-heading"><h3 style="align:center;">Specs</h3></div>
      
    </div>
							<div style=''>
							
							<table class='table table-hover '>
							
							<tr>
							<td>
								Name:</td><td><?php  echo $row[1] ?>
							</td>
							</tr>
							<tr>
							<td>
							Vehicle name:</td><td><?php echo $row[3] ?>
							</td>
							</tr>
							
							<tr>
							<td>
							Contact no.:</td><td><?php echo $row[8] ?>
							</td>
							</tr>
							<tr>
							<td>
							Address:</td><td><?php echo $row[7] ?>
							</td>
							</tr>
							
							<tr>
							<td>
							Description.:</td><td><?php echo $row[9] ?>
							</td>
							</tr>
							
							
							</table>
							</div>
							<div style='width:300px;float:left'>
						
						<table class='table table-hover'>
						<tr>
							<td>
						<div class="panel panel-default">
						<div class="panel-heading">Price: </div>
							</td>
							<td>
						<div class="panel panel-body panel-info"><?php echo $row[6] ?> &nbsp; Lacs</div>
						</div>
						</div>
							</td>
						</tr>
						
						</table>

	</div>
							<?php
					
					}
					
					?>
					</div>
					</div>
			<div class="col-md-4 single-right">
			<div class="blo-top">
						<div class="tech-btm">
						<h4>Sign up to our newsletter</h4>
						<p>Pellentesque dui, non felis. Maecenas male</p>
							<div class="name">
								 <form action="#" method="post">
									<input type="text" name="email" class="email" placeholder="Enter your email address" required="">
									<input type="submit" value="Subscribe">
								</form>
								<div class="clearfix"> </div>
						</div>
					</div>
					</div>
				<div class="blo-top1">
					<div class="agileits_twitter_posts tech-btm">
					<h4>Latest News</h4>
			<marquee direction='up' height=400 scrollamount=4>
	
						
						
					<ul>
						<?php
						
							include('db.php');
							
								$r=mysqli_query($con,"select * from latest_news");
								while($rows=mysqli_fetch_array($r)){
						?>
						
						<li><?php  echo $rows[2];?></li>
					<?php
					
					}
					
					?>
						</ul>
						</marquee>
		
		</div>
				</div>
				<div class="related-posts">
										<table class="table table-hover"><tr><td><h3>Blog Posts</h3></td>
										</tr>
										</table>
										<hr/>
					<div class="footer-grid-sub-grids">
						<div class="footer-grid-sub-grid-left">
							<a href="http://www.autocarindia.com/auto-blogs/suzuki8217s-diesel-dilemma-404725.aspx"><img src="images/ms.png" alt=" " class="img-responsive" /></a>
						</div>
						<div class="footer-grid-sub-grid-right">
							<h4><a href="http://www.autocarindia.com/auto-blogs/suzuki8217s-diesel-dilemma-404725.aspx">Suzuki’s diesel dilemma</a></h4>
							<p>Posted On 19/4/2017</p>
						</div>

						<div class="clearfix"> </div>
					</div>
					<div class="footer-grid-sub-grids">
						<div class="footer-grid-sub-grid-left">
							<a href="http://www.autocarindia.com/auto-blogs/back-to-life-404408.aspx"><img src="images/ambassador.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="footer-grid-sub-grid-right">
							<h4><a href="http://www.autocarindia.com/auto-blogs/back-to-life-404408.aspx">Back to life</a></h4>
							<p>Posted On 9/3/2017</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="footer-grid-sub-grids">
						<div class="footer-grid-sub-grid-left">
							<a href="http://www.autocarindia.com/auto-blogs/what-could-peugeot-bring-to-india-404048.aspx"><img src="images/peugeot.png" alt=" " class="img-responsive" /></a>
						</div>
						<div class="footer-grid-sub-grid-right">
							<h4><a href="http://www.autocarindia.com/auto-blogs/what-could-peugeot-bring-to-india-404048.aspx">
							What could Peugeot bring to India?</a></h4>
							<p>Posted On 27/1/2017</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				
				<div class="popular-videos">
				    <h3>Popular Videos</h3>
					<a href="https://youtu.be/ro2lNH3wkCs">TOP 5 UPCOMING CARS IN INDIA IN 2017</a>
				   <iframe src="https://www.youtube.com/embed/ro2lNH3wkCs"></iframe>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- footer -->
	
 


	<?PHP
		include('footer.php');
	
	?>
	</body>
</html>