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

<?php
include("db.php");

$rr=mysqli_query($con,"select * from add_vehicle  order by id desc limit 3");


$cname=array();
$id=array();

$price=array();
$photo=array();
$mi=array();


while($row=mysqli_fetch_array($rr))
{

	array_push($cname,$row[1]);
	array_push($price,$row[4]);
	$pname=explode(",",$row[10]);
	array_push($photo,$pname[0]);
	array_push($mi,$row[7]);
	array_push($id,$row[0]);
}
$rr=mysqli_query($con,"select * from upcoming_cars order by id desc limit 3");


$cname1=array();
$id1=array();

$price1=array();
$photo1=array();
$mi1=array();


while($row=mysqli_fetch_array($rr))
{

	array_push($cname1,$row[1]);
	array_push($price1,$row[4]);
	$pname=explode(",",$row[5]);
	array_push($photo1,$pname[0]);
	
	array_push($id1,$row[0]);
}

?>
<html>

<head>

<title>Catchy Carz a classified ads Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
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
	<div id="demo-1" data-zs-src='["images/2.jpg", "images/1.jpg", "images/3.jpg"]' data-zs-overlay="dots">
		<div class="demo-inner-content">
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
									  <li><a href="upcoming.html"><span>Upcoming Cars</span></a></li>
									  <li><a href="recommend.html"><span>Recommend Me A Car</span></a></li>
									  <li><a href="upcoming.html"><span>New Launches</span></a></li>
									   <li class="last"><a href="price.html"><span>On Road Price</span></a></li>
								   </ul>
							   </li>
							    <?php
									  if(isset($_SESSION["idd"]))
									 echo '<li><a href="inbox.php"><span>Advertisement Inbox</span></a></li>';
									  ?>
									
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
						</div>
						<!-- search-scripts -->
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
							<script><script>
								new UISearch( document.getElementById( 'sb-search' ) );
							</script>
							
						<!-- //search-scripts -->
					    <ul>
							
					
							<?php if(isset($_SESSION["idd"]))  { ?>
									<li><a href="user_advertisement.php" data-toggle="modal" data-target="#myModal4">
							<i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>Post Your Ad</a></li>
									<?php
									}
									?>
										<?php
										if(isset($_SESSION["idd"]))
										echo '<li><a href="logout.php"><button 
									id="showRight" class="navig">Logout </button></a></li>';
									else{
										?>
								<li><button id="showRight" class="navig">Login</button>
								</li>
											 <?php
							 
							 }
								?>
								</ul>
								<!--
								Script For Login Here...
								-->
								
											<script>
											$(document).ready(function()
											{
												$("#btn1").click(function()
												{
													var email=document.getElementById("login_email").value;
													var pass=document.getElementById("login_password").value;
													var remember=document.getElementById("remember").value;
													
													
													var page="index.php";
													
													$.post("login1.php",{user_name:email,password:pass,page_name:page,rem:remember
													},function(data)
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
									
									<input type="text" id="login_email"  value='<?php if(isset($_COOKIE["user"]))  echo $_COOKIE["user"]; ?>' class="email" placeholder="Email" required=""/>
									<input type="password" id="login_password" value='<?php if(isset($_COOKIE["pass"]))  echo $_COOKIE["pass"]; ?>' class="password" placeholder="Password" required=""/>	
									<input type="checkbox" id="remember" checked  disabled=false value="Yes">
									<label for="remember"><span></span> Remember me</label>
								
								<div class="login-bottom">
									<ul>
										<li>
											<a href="forgot_password.php">Forgot password?
											</a>
										</li>
										<li>
						
						
<?php  if(isset($_SESSION["counts"]))
			{
			if($_SESSION["counts"]==3)
			{
	echo "<input type='button' class='btn btn-danger'  disabled id='btn1' value='Disabled'/>
		";
				
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
				
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
		    <!--banner-info-->
			<div class="banner-info">
			  <h1><a href="index.php">Catchy <span class="logo-sub">Carz</span> </a></h1>
			    <h2><span>COME LOOK </span> <span>AT THE SELECTION! </span></h2>
				<p>Eye it – try it – buy it!</p>
			       <form action="search.php" method="post">
					<div class="search-two">
					<select id="country"  name='brands' onchange="change_country(this.value)" class="frm-field required">
						<option value="null"><img src="images/rupee.png" alt=" " class="img-responsive" />Brands</option>
							<?php
							
								include('db.php');
								
								$r=mysqli_query($con,"select * from add_brand");
							
							
								while($rows=mysqli_fetch_array($r))
								{
							
									echo "<option  value='$rows[1]'>$rows[1]</option>";
								}
							?>
							
					</select>
				</div>
				<div class="section_room">
					<select id="country" name='price' onchange="change_country(this.value)" class="frm-field required">
						<option value="null"><i class="fa fa-inr" style="font-size:24px"></i>&#8377; Budget</option>
						<option value="null">0</option>     
										
					<?php
							
								$r=mysqli_query($con,"select  distinct price from add_vehicle");
							while($rows=mysqli_fetch_array($r))
							{
							
							?>
							
					<option value="<?php  echo $rows[0]; ?>">&#8377;<?php echo $rows[0]; ?> Lac</option>

					<?php
					}
					?>
					</select>
					
				</div>

					<input type="submit" value="Find Car">
					<div class="clearfix"></div>
				</form>
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
									<p>Catchy Carz Brand VL in Udaipur</p>
										<form action="advance_booking.php" method="post">
											<select id="country5" name='time' class="frm-field required">
												<option selected="selected" value="-1">-Buying Time Period-</option>
												<option value="0">Just Researching</option>
												<option value="7">1 Week</option>
												<option value="14">2 Weeks</option>
												<option value="30">1 Month</option>
												<option value="60">2 Months</option>
											</select>
											<input type="text" name="pincode" class="Pin code" placeholder="Pin code" required="">
										
								</div>							
						</div>
						 <div class="modal-body about">
								
								<div class="dis-contact">
								  <h4>Contact Information</h4>
												
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
<!--//banner-section-->
	<!--/featured_section-->
	<div class="featured_section_w3l">
		<div class="container">
				
				<?php
				
				
					$id=$_SESSION["idd"];
					
					include('db.php');
					
					$r=mysqli_query($con,"select * from user_registration where id='$id'");
					if($row=mysqli_fetch_array($r))
					{
					echo "<h4 class='tittle' style='text-align:right;color:black'><span class='glyphicon glyphicon-user'></span>Welcome To <span 
					style='color:blue'>$row[1]<span></h4>";
					}
				?>
		      <h3 class="tittle">FEATURED CARS</h3>
	               <div class="inner_tabs">
		<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">
							Upcoming Cars</a></li>
							<li role="presentation"><a href="#tours" role="tab" id="tours-tab" data-toggle="tab" aria-controls="tours">Popular</a></li>
							<li role="presentation"><a href="#tree" role="tab" id="tree-tab" data-toggle="tab" aria-controls="tree">Just Launched</a></li>
							
						</ul>
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="expeditions" 
							aria-labelledby="expeditions-tab">
							   <div class="section__content clearfix">
							   <!-- /card1 -->
								  <div class="card effect__hover">
									<div class="card__front">
									  <span class="card__text">
									       <div class="img-grid">
													<img src="admin/upcoming_cars/<?php echo $photo1[0]; ?>" alt="Catchy Carz">
													
													<div class="car_description">
														 <h4><a href="single.html"><?php  echo $cname1[0];  ?></a></h4>
														 <div class="price"><span class="fa fa-rupee"></span>
														 <span class="font25"><?php  echo $price1[0]; ?> Lacs Onward</span></div>
														 <div class="date"></div>
														 <p>Expected Launch</p>
														</div>
												
													</div>
									  </span>
									</div>
									<div class="card__back">
									  <span class="card__text">
									     	 <div class="login-inner2">
												<h4>Be the first to know</h4>
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
									  </span>
									</div>
								  </div>
								    <!-- //card1 -->
									<!-- /card2 -->
								  <div class="card effect__hover">
									<div class="card__front">
									  <span class="card__text">
									        <div class="img-grid">
													<img src="admin/upcoming_cars/<?php echo $photo1[1]; ?>" alt="Catchy Carz">
													
													<div class="car_description">
														 <h4><a href="single.html"><?php  echo $cname1[1];  ?></a></h4>
														 <div class="price"><span class="fa fa-rupee"></span>
														 <span class="font25"><?php  echo $price1[1]; ?> Lacs onward </span></div>
														 
														 <div class="date"></div>
														 <p>Expected Launch</p>
														</div>
												
													</div>
									  </span>
									</div>
									<div class="card__back">
									  <span class="card__text">
									     	 <div class="login-inner2">
												<h4>Be the first to know</h4>
											<div class="login-top sign-top">
												<form action="up_car_info.php" method="post">
													<input type="hidden" name="id" value="<?php echo $id1[1] ?>" placeholder="Name" required=""/>

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
									  </span>
									</div>
								  </div>
								    <!-- //card2 -->
									<!-- /card3 -->
								  <div class="card effect__hover">
									<div class="card__front">
									  <span class="card__text">
									  
									    <div class="img-grid">
													<img src="admin/upcoming_cars/<?php echo $photo1[2]; ?>" alt="Catchy Carz">
													
													<div class="car_description">
														 <h4><a href="single.html"><?php  echo $cname1[2];  ?></a></h4>
														 <div class="price"><span class="fa fa-rupee"></span>
														 <span class="font25"><?php  echo $price1[2]; ?> Lacs onward</span></div>
														 
														 <div class="date"></div>
														 <p>Expected Launch</p>
														</div>
												
													</div>
									  </span>
									</div>
									<div class="card__back">
									  <span class="card__text">
									     	 <div class="login-inner2">
												<h4>Be the first to know</h4>
											<div class="login-top sign-top">
												 <form action="up_car_info.php" method="post">
	<input type="hidden" name="id" value="<?php echo $id1[2] ?>" placeholder="Name" required=""/>

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
									  </span>
									</div>
								  </div>
								    <!-- //card3 -->
								 </div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tours" aria-labelledby="tours-tab">
								   <div class="section__content clearfix">
							   <!-- /card1 -->
								  <div class="card effect__hover">
									<div class="card__front">
									  <span class="card__text">
									       <div class="img-grid">
													<img src="images/f4.jpg" alt="Catchy Carz">
													<div class="car_description">
														 <h4><a href="single.html"> Ford Mustang GT 350</a></h4>
														 <div class="price"><span class="fa fa-rupee"></span><span class="font25">$ 8000 - $ 11000</span></div>
														 <p>Estimated Price</p>
														 <div class="date">June 2016</div>
														 <p>Expected Launch</p>
														</div>
												
													</div>
									  </span>
									</div>
									<div class="card__back">
									  <span class="card__text">
									     	 <div class="login-inner2">
												<h4><img src="images/rupee.png" alt="Catchy Carz"> Check On-Road Price</h4>
											<div class="login-top sign-top">
												 <form action="#" method="post">
													<input type="text" name="name" class="name active" placeholder="Name" required=""/>
													<input type="text" name="email" class="email" placeholder="Email" required=""/>
													<div class="section_drop">
													<select id="country1" onchange="change_country(this.value)" class="frm-field required">
														<option value="null"> Select City</option>
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
													</div>
													<input type="password" name="password" class="password" placeholder="Password" required=""/>		
													<input type="submit" value="Check Now">
													
													
												</form>
											</div>
											
													</div>
									  </span>
									</div>
								  </div>
								    <!-- //card1 -->
									<!-- /card2 -->
								  <div class="card effect__hover">
									<div class="card__front">
									  <span class="card__text">
									       <div class="img-grid">
													<img src="images/f5.jpeg" alt="Catchy Carz">
													<div class="car_description">
														 <h4><a href="#">Ferrari F430</a></h4>
														 <div class="price"><span class="fa fa-rupee"></span><span class="font25">$ 7000 - $ 13000</span></div>
														 <p>Estimated Price</p>
														 <div class="date">July 2016</div>
														 <p>Expected Launch</p>
														</div>
												
													</div>
									  </span>
									</div>
									<div class="card__back">
									  <span class="card__text">
									     	 <div class="login-inner2">
												<h4><img src="images/rupee.png" alt="Catchy Carz">  Check On-Road Price</h4>
											<div class="login-top sign-top">
												 <form action="#" method="post">
													<input type="text" name="name" class="name active" placeholder="Name" required=""/>
													<input type="text" name="email" class="email" placeholder="Email" required=""/>
													<div class="section_drop">
													<select id="country1" onchange="change_country(this.value)" class="frm-field required">
														<option value="null"> Select City</option>
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
												   </div>
													<input type="password" name="password" class="password" placeholder="Password" required=""/>		
													<input type="submit" value="Check Now">
													
													
												</form>
											</div>
													</div>
									  </span>
									</div>
								  </div>
								    <!-- //card2 -->
									<!-- /card3 -->
								  <div class="card effect__hover">
									<div class="card__front">
									  <span class="card__text">
									       <div class="img-grid">
													<img src="images/f6.jpeg" alt="Catchy Carz">
													<div class="car_description">
														 <h4><a href="single.html"> Mercedes-Benz C250 CDI</a></h4>
														 <div class="price"><span class="fa fa-rupee"></span><span class="font25">$ 5000 - $ 10000</span></div>
														 <p>Estimated Price</p>
														 <div class="date">Aug 2016</div>
														 <p>Expected Launch</p>
														</div>
												
													</div>
									  </span>
									</div>
									<div class="card__back">
									  <span class="card__text">
									     	 <div class="login-inner2">
												<h4><img src="images/rupee.png" alt="Catchy Carz">  Check On-Road Price</h4>
											<div class="login-top sign-top">
											   <form action="#" method="post">
													<input type="text" name="name" class="name active" placeholder="Name" required=""/>
													<input type="text" name="email" class="email" placeholder="Email" required=""/>
													<div class="section_drop">
													<select id="country1" onchange="change_country(this.value)" class="frm-field required">
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
												   </div>
													<input type="password" name="password" class="password" placeholder="Password" required=""/>		
													<input type="submit" value="Check Now">
													
													
												</form>
											</div>
										</div>
									  </span>
									</div>
								  </div>
								    <!-- //card3 -->
								 </div>
								
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tree" aria-labelledby="tree-tab">
								
								<div class="section__content clearfix">
							   <!-- /card1 -->
								  <div class="card effect__hover">
									<div class="card__front">
									  <span class="card__text">
									       <div class="img-grid">
													<img src="images/f7.jpg" alt="Catchy Carz">
													<div class="car_description">
														 <h4><a href="single.html">BMW M4</a></h4>
														 <div class="price"><span class="fa fa-rupee"></span><span class="font25">$ 6000 - $ 11000</span></div>
														 <p>Estimated Price</p>
														 <div class="date">Mar 2017</div>
														 <p>Expected Launch</p>
														</div>
												
													</div>
									  </span>
									</div>
									<div class="card__back">
									  <span class="card__text">
									     	 <div class="login-inner2">
												<h4><img src="images/rupee.png" alt="Catchy Carz"> Check On-Road Price</h4>
											<div class="login-top sign-top">
												 <form action="#" method="post">
													<input type="text" name="name" class="name active" placeholder="Name" required=""/>
													<input type="text" name="email" class="email" placeholder="Email" required=""/>
													<div class="section_drop">
													<select id="country1" onchange="change_country(this.value)" class="frm-field required">
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
													</div>
													<input type="password" name="password" class="password" placeholder="Password" required=""/>		
													<input type="submit" value="Check Now">
													
													
												</form>
											</div>
										</div>
									  </span>
									</div>
								  </div>
								    <!-- //card1 -->
									<!-- /card2 -->
								  <div class="card effect__hover">
									<div class="card__front">
									  <span class="card__text">
									       <div class="img-grid">
													<img src="" alt="Catchy Carz">
													<div class="car_description">
														 <h4><a href="single.html"> BMW X4 M Sport</a></h4>
														 <div class="price"><span class="fa fa-rupee"></span><span class="font25">$ 7000 - $ 12000</span></div>
														 <p>Estimated Price</p>
														 <div class="date">Mar 2017</div>
														 <p>Expected Launch</p>
														</div>
												
													</div>
									  </span>
									</div>
									<div class="card__back">
									  <span class="card__text">
									     	 <div class="login-inner2">
												<h4><img src="images/rupee.png" alt="Catchy Carz">  Check On-Road Price</h4>
											<div class="login-top sign-top">
												 <form action="#" method="post">
													<input type="text" name="name" class="name active" placeholder="Name" required=""/>
													<input type="text" name="email" class="email" placeholder="Email" required=""/>
													<div class="section_drop">
													<select id="country1" onchange="change_country(this.value)" class="frm-field required">
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
												   </div>
													<input type="password" name="password" class="password" placeholder="Password" required=""/>		
													<input type="submit" value="Check Now">
													
													
												</form>
											</div>
										</div>
									  </span>
									</div>
								  </div>
								    <!-- //card2 -->
									<!-- /card3 -->
								  <div class="card effect__hover">
									<div class="card__front">
									  <span class="card__text">
									       <div class="img-grid">
													<img src="images/f9.jpg" alt="Catchy Carz">
													<div class="car_description">
														 <h4><a href="single.html">BMW M3 </a></h4>
														 <div class="price"><span class="fa fa-rupee"></span><span class="font25">&nbsp;$ 5000 - $ 10000</span></div>
														 <p>Estimated Price</p>
														 <div class="date">Mar 2017</div>
														 <p>Expected Launch</p>
														</div>
												
													</div>
									  </span>
									</div>
									<div class="card__back">
									  <span class="card__text">
									     	 <div class="login-inner2">
												<h4><img src="images/rupee.png" alt="Catchy Carz">  Check On-Road Price</h4>
											<div class="login-top sign-top">
											 <form action="#" method="post">
													<input type="text" name="name" class="name active" placeholder="Name" required=""/>
													<input type="text" name="email" class="email" placeholder="Email" required=""/>
													<div class="section_drop">
													<select id="country1" onchange="change_country(this.value)" class="frm-field required">
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
												   </div>
													<input type="password" name="password" class="password" placeholder="Password" required=""/>		
													<input type="submit" value="Check Now">
													
													
												</form>
											</div>
										</div>
									  </span>
									</div>
								  </div>
								    <!-- //card3 -->
								 </div>
								
							</div>
						</div>
					</div>
				</div>
					
			</div>
		</div>
	<!--//featured_section-->
	<!--/select-cars-agile-->
	<div class="select-cars-agile">
	   <div class="container">
	         <div class="grid cars-main">
			  <div class="col-md-7 slide-show-w3l">
			     <!--//screen-gallery-->
				 
				 <h3 class="tittle top">NEW CARS</h3>
				 <h6 class="sub">Great Prices. Great Vehicles. Great Service.</h6>
							<div class="car-view-slider">
					         <ul id="flexiselDemo">
							 
								<?php
								include("db.php");

								$rr=mysqli_query($con,"select * from add_vehicle");


								$cname=array();
								$price=array();
								$photo=array();
								$mi=array();


								while($row=mysqli_fetch_array($rr))
								{
								$rr1=$row[10];
								$pnames=explode(",",$rr1);
								print_r($pnames);
								
															?>

							 <li>
								 <a href="new_cars.php"><img src="admin/new_cars/<?php echo $pnames[0] ?>" alt=""/>
								  <div class="caption">
										<h3><a href="upcoming.php"><?php echo $row[1] ?></a></h3>
										<span>CATCHY CARZ</span>
										
									</div>
								 </a>
								
							 </li>
							 <?php
							 }
							 ?>
							</ul>
						</div>
						<!--//screen-gallery-->

					</div>
					<div class="col-md-5 new-car-used">
					  <h3 class="tittle top">USED CARS</h3>
					  <h6 class="sub">Used Cars at Shocking Prices.</h6>
					  <div class="used-one">
					     <figure class="effect-zoe">
							 <a href="user_ads.php"><img src="images/used_car.jpg" alt="Used Car"></a>
							<figcaption>
								<h4>CATCHY <span>CARZ</span></h4>
								<p class="icon-links">
									<a href="#"><i class="glyphicon glyphicon-heart-empty"></i></a>
									<a href="#"><i class="glyphicon glyphicon-eye-open"></i></a>
									<a href="#"><i class="glyphicon glyphicon-paperclip"></i></a>
								</p>
							<p class="description">Click this link to check out USED CARS.</p>
							</figcaption>			
						</figure>
					  </div>
					  <div class="clearfix"> </div>
					   <div class="used-one second">
					     <figure class="effect-zoe">
							<a href="used.html"><img src="images/used_car1.jpg" alt="Used Car"></a>
							<figcaption>
								<h4>CATCHY <span>CARZ</span></h4>
								<p class="icon-links">
									<a href="#"><i class="glyphicon glyphicon-heart-empty"></i></a>
									<a href="#"><i class="glyphicon glyphicon-eye-open"></i></a>
									<a href="#"><i class="glyphicon glyphicon-paperclip"></i></a>
								</p>
							<p class="description">Click this link to check out USED CARS.</p>
							</figcaption>			
						</figure>
					  </div>
					</div>
					<div class="clearfix"> </div>
				</div>
	   </div>
	</div>
	<!-- /bottom-banner -->
	<div class="banner-bottom">
	   <div class="container">
          <div class="bottom-form">
			<div class="inner-text">
				
				<style>
				
				</style>
			 <form action="book_cars1.php" method="post">
				<h3>Choose Your Best Car</h3>
					<div class="best-hot">
						<h5>Full Name</h5>
						<input type="text" name='fn' class="name active" placeholder="Name" required="">
					</div>
					<div class="best-hot">
						<h5>Email</h5>
						<input type="text" name='em' class="" placeholder="Email" required="">
					</div>
					<div class="best-hot">
						<h5>Contact Number</h5>
						<input type="text" name='cn' class="phone"  placeholder="Phone" required="">
					</div> 
					
					<div class="section_drop2">
					<h5>City</h5>
						<select name='ci' class="frm-field required form-control">
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
												   <br/>	 
					<input type="submit" value="Book Now">
				</form>
			</div>
		</div>
	</div>
</div>
	<!-- //bottom-banner -->
	<!-- /slider1 -->
			<div class="slider1">
		<div class="arrival-grids">			 
			 <ul id="flexiselDemo1">
				 <li>
					 <a href="single.html"><img src="images/f1.jpg" alt=""/>
					  <div class="caption">
							<h3><a href="single.html">Mercedes-Benz C250 CDI</a></h3>
							<span>Catchy Carz</span>
							
						</div>
					 </a>
					
				 </li>
				 <li>
					 <a href="single.html"><img src="images/f2.jpg" alt=""/>
					 <div class="caption">
							<h3><a href="single.html">Audi A4 2.0 TDI</a></h3>
							<span>Catchy Carz</span>
							
						</div>
					 </a>
				 </li>
				 <li>
					 <a href="single.html"><img src="images/f3.jpg" alt=""/>
					  <div class="caption">
							<h3><a href="single.html">Ford Mustang GT 500</a></h3>
							<span>Catchy Carz</span>
							
						</div>
					 </a>
				 </li>
				 <li>
					 <a href="single.html"><img src="images/f4.jpg" alt=""/>
					    <div class="caption">
							<h3><a href="single.html">Ford Mustang GT 350</a></h3>
						<span>Catchy Carz</span>
							
						</div>
					 </a>
				 </li>
				 <li>
					 <a href="single.html"><img src="images/f7.jpg" alt=""/>
					    <div class="caption">
							<h3><a href="single.html">BMW M4</a></h3>
							<span>Catchy Carz</span>
							
						</div>
					 </a>
				 </li>
				 <li>
					 <a href="single.html"><img src="images/f5.jpeg" alt=""/>
					 <div class="caption">
							<h3><a href="single.html">Ferrari F430</a></h3>
							<span>Catchy Carz</span>
							
						</div>
					 </a>
				 </li>
				  <li>
					 <a href="single.html"><img src="images/f8.jpg" alt=""/>
					    <div class="caption">
							<h3><a href="single.html">BMW X4 M Sport</a></h3>
							<span>Catchy Carz</span>
					    </div>
					 </a>
				 </li>
				</ul>
		  </div>
	  </div>
	<!-- //slider -->
	<!-- Services -->
	<div class="updates-agile">
		<div class="container">

		      <h3 class="tittle">LATEST CAR UPDATES</h3>
		<div class="inner_tabs">
		<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs" role="tablist">
							<li role="presentation" class=""><a href="#updates" id="updates-tab" role="tab" data-toggle="tab" aria-controls="updates" aria-expanded="false">Car News</a></li>
							<li role="presentation" class=""><a href="#expert" role="tab" id="expert-tab" data-toggle="tab" aria-controls="expert" aria-expanded="false">Expert Reviews</a></li>
							<li role="presentation" class="active"><a href="#video-text" role="tab" id="video-text-tab" data-toggle="tab" aria-controls="video-text" aria-expanded="true">Videos</a></li>
							
						</ul>
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade" id="updates" aria-labelledby="updates-tab">
							 <div class="news-updates">
									<div class="update-info-w3l">
										<div class="col-md-5 tab-image">
											<div class="view second-effect">
												<a href="http://auto.ndtv.com/news/maruti-suzuki-s-cross-facelift-spotted-in-india-launch-during-diwali-1696761" title="Catchy Carz">
													<img src="images/scross.jpg" alt="" class="img-responsive">
													<div class="mask">
														<p>Catchy <span>Carz</span> </p>
													</div>
												</a>	
											</div>
											
										</div>
										<div class="col-md-7 tab-info one">
										<h4><a href="http://auto.ndtv.com/news/maruti-suzuki-s-cross-facelift-spotted-in-india-launch-during-diwali-1696761">Maruti Suzuki S-Cross Facelift Spotted In India; Launch During Diwali</a></h4>
											<p>The 2017 Maruti Suzuki S-Cross facelift is expected to be launched in India during Diwali this year. 
											The upcoming 2017 Maruti Suzuki S-Cross facelift was recently spotted testing in India. The car is slated to be launched in the country around Diwali this year and it will come with a host of cosmetic updates and several new features. Though completely camouflaged, this is the first clear image of the S-Cross facelift being tested in India and this also indicates its imminent arrival. Upon its launch, the S-Cross will continue to be retailed via Maruti's premium dealership outlet - Nexa - and will compete with the Renault Duster and the Hyundai Creta.The car will come with a host of cosmetic updates and several new features.</p>
											<a href="http://auto.ndtv.com/news/maruti-suzuki-s-cross-facelift-spotted-in-india-launch-during-diwali-1696761" class="read hvr-shutter-in-horizontal">Read More</a>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="update-info-w3l two">
										<div class="col-md-7 tab-info two">
										<h4><a href="http://indiatoday.intoday.in/auto/story/has-elon-musk-postponed-teslas-india-debut-for-2017/1/959744.html">Has Elon Musk postponed Tesla's India debut for 2017?</a></h4>
											<p>
											We had earlier reported that Tesla will be coming to India this year, most likely by July. Elon Musk, CEO, Tesla, had confirmed on social media that the new age electric vehicle making company will finally come to India this summer. However, going by his recent tweet, it seems that Elon Musk has postponed his plan to launch Tesla in India at least for this year.
											Now that's a bummer. We had expected Tesla to make its debut at the Auto Expo 2018, but with the latest development, it seems we will have to wait for more time for the all-electric vehicles to come to the Indian shores.
											</p>
											<a href="http://indiatoday.intoday.in/auto/story/has-elon-musk-postponed-teslas-india-debut-for-2017/1/959744.html" class="read hvr-shutter-in-horizontal">Read More</a>
										</div>
										<div class="col-md-5 tab-image">
											<div class="view second-effect">
												<a href="http://indiatoday.intoday.in/auto/story/has-elon-musk-postponed-teslas-india-debut-for-2017/1/959744.html" title="Catchy Carz">
													<img src="images/tesla.jpg" alt="" class="img-responsive">
													<div class="mask">
														<p>Catchy <span>Carz</span> </p>
													</div>
												</a>	
											</div>
										</div>
										
										<div class="clearfix"></div>
									</div>
										
								 </div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="expert" aria-labelledby="expert-tab">
								<div class="news-updates">
									<div class="update-info-w3l">
										<div class="col-md-5 tab-image">
											<div class="view second-effect">
												<a href="single.html" title="Catchy Carz">
													<img src="images/tata_hexa.jpg" alt="" class="img-responsive">
													<div class="mask">
														<p>Catchy <span>Carz</span> </p>
													</div>
												</a>	
											</div>
										</div>
										<div class="col-md-7 tab-info">
										<h4><a href="http://www.autocarindia.com/auto-reviews/2017-tata-hexa-review-road-test-404554.aspx">2017 Tata Hexa review, road test</a></h4>
											<p>Tata Motors’ ongoing effort at brand reinvention started, in earnest, with the Tiago, a car that got the whole country to sit up and take notice again. The sales numbers back that up too, with an average of 5,000 units every month. 
											It was quite an impressive feat – giving a mid-range hatchback a truly premium look and feel – something the brand was never previously known for.</p>
											<a href="http://www.autocarindia.com/auto-reviews/2017-tata-hexa-review-road-test-404554.aspx" class="read hvr-shutter-in-horizontal">Read More</a>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="update-info-w3l two">
										<div class="col-md-7 tab-info one">
										<h4><a href="http://www.autocarindia.com/auto-reviews/2016-renault-kwid-10-review-road-test-404291.aspx">2016 Renault Kwid 1.0 review, road test</a></h4>
											<p><b>With a 1.0-litre engine and an AMT option, is the Kwid experience now complete?</b><br/>
											The Renault Kwid’s success story in India is a case study of how a multinational wiggled its way into the budget end of the Indian market that’s dominated by local giant, Maruti. The winning formula involving competitive pricing, SUV-inspired styling, great ride quality, plenty of space and low running costs is what made the Kwid click. And yes, there’s that much-coveted touchscreen too. But the Kwid hasn’t been all perfect. Its biggest weakness has been the 799cc engine which, to put it plainly, has been a ‘work-in-progress’ from the day it was launched. While performance is at best decent and on par with the competition, noise levels and inconsistent power delivery were major issues. So, the larger (and more sorted) 1.0-litre engine hasn’t come a day too soon.
											And, the automatic option too promises to seriously transform the way the Kwid drives.</p>
											<a href="http://www.autocarindia.com/auto-reviews/2016-renault-kwid-10-review-road-test-404291.aspx" class="read hvr-shutter-in-horizontal">Read More</a>
										</div>
										<div class="col-md-5 tab-image">
											<div class="view second-effect">
											<a href="http://www.autocarindia.com/auto-reviews/2016-renault-kwid-10-review-road-test-404291.aspx" title="Catchy Carz">
													<img src="images/kwid.jpg" alt="" class="img-responsive">
													<div class="mask">
														<p>Catchy <span>Carz</span> </p>
													</div>
												</a>	
											</div>
										</div>
										
										<div class="clearfix"></div>
									</div>
										
								 </div>
								
							</div>
							<div role="tabpanel" class="tab-pane fade active in" id="video-text" aria-labelledby="video-text-tab">
								
								<div class="news-updates">
									<div class="update-info-w3l">
										<div class="col-md-5 tab-image">
											<iframe src="https://www.youtube.com/embed/mN6oFhBcCHE" frameborder="0" allowfullscreen></iframe>
										</div>
										<div class="col-md-7 tab-info">
										<h4><a href="https://www.youtube.com/watch?v=mN6oFhBcCHE">Toyota Innova Touring Sport | First Look</a></h4>
											  							<p>Toyota has expanded its Innova line-up with the launch of the new Touring Sport. Priced from Rs 17.79 lakh (ex-showroom, Delhi), the Innova Touring Sport gets cosmetic tweaks to set it apart from the standard Innova Crysta.
																		But is it worth the premium?</p>
											<a href="https://www.youtube.com/watch?v=mN6oFhBcCHE" class="read hvr-shutter-in-horizontal">Read More</a>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="update-info-w3l two">
										<div class="col-md-7 tab-info two">
										    <h4><a href="single.html">Jeep Compass | India First Look | Autocar India</a></h4>
											<p>All-new made-in-India Compass from Jeep to launch around August. It will come with two engine options: 2.0-litre MultiJet (diesel) and 1.4-litre MultiAir (petrol). Expected price is Rs 18-25 lakh. Shapur Kotwal gives you a first look. </p>
											<a href="https://www.youtube.com/watch?v=U1MxSkXItt4" class="read hvr-shutter-in-horizontal">Read More</a>
										</div>
										<div class="col-md-5 tab-image">
											<iframe src="https://www.youtube.com/embed/U1MxSkXItt4" frameborder="0" allowfullscreen></iframe>
										</div>
										
										<div class="clearfix"></div>
									</div>
										
								 </div>
								
							</div>
						
						
						</div>
					</div>
				</div>
            </div>
		</div>
		<div class="clearfix"></div>
		<!-- //Services -->
			<!-- footer -->

	<?PHP
		include('footer.php');
	
	?>