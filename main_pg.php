<?php

session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
}

?>


<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="main_pg.css">
	<link rel="stylesheet" type="text/css" href="txt_slide.css">
	<link rel="stylesheet" type="text/css" href="btn.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Lato|Roboto:400,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="cards.css">
	<link rel="stylesheet" type="text/css" href="services.css">
	<!-- <link rel="stylesheet" type="text/css" href="grid.css"> -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body>

	<div id="wrapper">
		<div id="header" style="background-image:url('image.jpg');background-repeat: no-repeat;background-size:100% 91vh;">
		<h2  data-aos="zoom-in" style="font-family:Comic Sans MS, cursive, sans-serif;font-style:italic;color:#1E90FF;text-align:center;font-size:60px;padding-top:300px;">SpiceShuttle</h2>
			
		</div>
		<div id="content">
			<div id="navbar">
				<div id="logo" data-aos="fade-left">SpiceShuttle</div>
				<ul data-aos="fade-left">					
					<li class="current">Welcome <?php echo $_SESSION['username'];?></li>
					<li class="current"><a href="logout.php"> LOGOUT </a></li>
					<li><a id="s4" href="#4" class="cool-link">Services</a></li>
					<li><a id="s3" href="#3" class="cool-link">Contact Us</a></li>
					<li><a id="s2" href="#2" class="cool-link">About Us</a></li>	
					<li><a id="s1" href="#1" class="cool-link">Home</a></li>
				</ul>
			</div> 
			<br><br><br><br>			
			
				<table id="2">
					<tr cellspacing="0" cellpadding="0">
						<th><img src="image1.jpg" style="width:772px;height:580px;"></img></th>
						<th style="background-image:url('image2.jpg');width:772px;color:white;" valign="top"><br><h1>About Us</h1><br><hr color="#e8491d" width="80px" style="margin-left:45%;"></hr><br><br>
						<h3><p style="text-align:justify;margin-left:40px;margin-right:40px;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</p></h3>
						</th>
					</tr>					
				</table>
			
			
		</div>
		
		<div id="main">
		
<div class="slideshow-container" style="height:400px;">

<div class="mySlides fade">
  <p style="font-size:50px;">"Find something you’re passionate about and keep tremendously interested in it."</p><br>

<p>— Julia Child</p>
</div>

<div class="mySlides fade">
 <p style="font-size:50px;">"Never work before breakfast; if you have to work before breakfast, eat your breakfast first."<p><br>

<p>— Josh Billings</p>
</div>

<div class="mySlides fade">
 <p style="font-size:50px;">"Cooking is an art, but all art requires knowing something about the techniques and materials"</p><br>

<p>— Nathan Myhrvold</p>
</div>
<br><br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div></div>
<br><br>


<div style="background-image:url('image2.jpg');height:1500px;"  id="3"><br><br>
		<img src="image7.png" style="width:100px;height:90px;"></img>
		<h1 style="color:#ffffff;margin-top:20px;font-weight:none;">Featured Dishes</h1><br>
		<hr color="#e8491d" width="80px" style="margin-left:48%;"></hr><br><br>
		
		
		<table style="margin-left:10%;">
		<tr>
			<td rowspan="2"><img data-aos="zoom-in" src="image3.jpg" style="height:500px;width:300px;border-radius:10%;"></img></td>
			<td rowspan="2"><div style="background-image:url('image2.jpg');width:300px;height:500px;"><br><br><br><br><br><h3 style="color:white;font-family:Comic Sans MS, cursive, sans-serif;font-style:italic;margin-top:0px;">Italian Pasta<br><i class="fas fa-arrow-left" style="color:white;"></i>     Rs. 200</h3></div></td>
			<td><img src="p6.jpg" data-aos="zoom-in" style="height:250px;width:300px;border-radius:10%;"></img></td>
			<td><div style="background-image:url('image2.jpg');width:300px;height:250px;"><br><br><h3 style="color:white;font-family:Comic Sans MS, cursive, sans-serif;font-style:italic;margin-top:0px;">Nicoise Salad<br><i class="fas fa-arrow-left" style="color:white;"></i>     Rs. 100</h3></div></td>
		</tr>
			<td ><div style="background-image:url('image2.jpg');width:300px;height:250px;"><br><br><h3 style="color:white;font-family:Comic Sans MS, cursive, sans-serif;font-style:italic;margin-top:0px;">Chowmein<br>Rs. 250     <i class="fas fa-arrow-right" style="color:white;"></i></h3></div></td>
			<td><img src="p1.jpg" data-aos="zoom-in" style="height:250px;width:300px;border-radius:10%;"></img></td>
		</tr>
		<tr>
			<td ><div style="background-image:url('image2.jpg');width:300px;height:250px;"><br><br><h3 style="color:white;font-family:Comic Sans MS, cursive, sans-serif;font-style:italic;margin-top:0px;">Ice-Cream<br>Rs. 180     <i class="fas fa-arrow-right" style="color:white;"></i></h3></div></td>
			<td><img src="p3.jpg" data-aos="zoom-in" style="height:250px;width:280px;border-radius:10%;"></img></td>
			<td rowspan="2"><img data-aos="zoom-in" src="p2.jpg" style="height:500px;width:300px;border-radius:10%;"></img></td>
			<td rowspan="2"><div style="background-image:url('image2.jpg');width:300px;height:500px;"><br><br><br><br><br><h3 style="color:white;font-family:Comic Sans MS, cursive, sans-serif;font-style:italic;margin-top:0px;">Coffee<br><i class="fas fa-arrow-left" style="color:white;"></i>     Rs. 80</h3></div></td>
		</tr>
		<tr>
			<td><img src="p5.jpg" data-aos="zoom-in" style="height:250px;width:280px;border-radius:10%;"></img></td>
			<td ><div style="background-image:url('image2.jpg');width:300px;height:250px;"><br><br><h3 style="color:white;font-family:Comic Sans MS, cursive, sans-serif;font-style:italic;margin-top:0px;">Puff Pastery<br><i class="fas fa-arrow-left" style="color:white;"></i>     Rs. 200</h3></div></td>
		</tr>
		
	</table>
	
	
		</div>
		
		<br><br>
		
		<div>
			<img src="image5.png" style="width:100px;height:100px;"></img><br><br>
			<h1>Our Restaurants</h1><br><hr color="#e8491d" width="80px" style="margin-left:48%;"></hr><br><br>
			
			<table cellspacing="0px">
		
				<tr >
					<th > <img src="https://img.etimg.com/photo/61799678/lodhi-graph4.jpg" width="250px" height="180px" style="margin-left:200px;border-radius:10% 0 0 10%;"></th> 
					<th style="background-image:url('image2.jpg');" width="250px" ><h3><a href="menu.html" style="text-decoration:none;color:white;">Indian Accent</h3> <p style="font-weight:normal;font-size:18px;"> The showcase of Indian cuisine</a></p></th><th width="100px"></th>
					<th> <img src="https://i.ndtvimg.com/i/2015-10/peshawri_625x350_51444892422.jpg" width="250px" height="180px" style="border-radius:10% 0 0 10%;"></th>
					<th style="background-image:url('image2.jpg');" width="250px" style="border-radius:10% 0 0 10%;"><h3><a href="menu.html" style="text-decoration:none;color:white;">Peshawari </h3> <p style="font-weight:normal;font-size:18px;">Devour the delicious North Indian cuisine</a></p></th>
				 </tr>
		</table><br><br><br><br>
		
		<table cellspacing="0px">
				<tr >
					<th > <img src="https://i.ndtvimg.com/i/2015-10/gulati_625x350_71444892938.jpg"  width="250px" height="180px" style="margin-left:200px;border-radius:10% 0 0 10%;"></th> 
					<th style="background-image:url('image2.jpg');" width="250px" style="border-radius:10% 0 0 10%;"><h3><a href="menu.html" style="text-decoration:none;color:white;">Gulati</h3> <p style="font-weight:normal;font-size:18px;"> The quest for creating a better dining experience</a></p></th><th width="100px"></th>
					<th> <img src="https://i.ndtvimg.com/i/2015-10/bukhara_625x350_41444984742.jpg" style="border-radius:10% 0 0 10%;" width="250px" height="180px"></th>
					<th style="background-image:url('image2.jpg');" width="250px" style="border-radius:10% 0 0 10%;"><h3><a href="menu.html" style="text-decoration:none;color:white;">Bukhara </h3> <p style="font-weight:normal;font-size:18px;">The charm of traditions</a></p></th>
				 </tr>
		</table>
			
			
		</div><br><br><br><br>
		
		<div style="background-image:url('image2.jpg');height:900px;"><br><br><br>
		
		<img src="image8.png" style="width:100px;height:100px;border-radius:50%;"></img><br><br>
			<h1 style="color:white;">Our Services</h1><br><hr color="#e8491d" width="80px" style="margin-left:48%;"></hr>	
			
			
			<div data-aos="flip-right" class="testimonials">
		<div class="card">
			<div class="layer"></div>
			
			<div class="content">
				<div class="image" >
				<img src="order1.jpg" style="height:100px;width:100px;"></img>
			</div><br>
				<h3>No-Minimum Order</h3>
				<p>Order in for yourself or for the group, with no restrictions on order value</p>
			</div>
		</div>
		
		<div class="card">
			<div class="layer"></div>
			
			<div class="content">
				<div class="image">
				<img src="order2.png" style="height:100px;width:100px;"></img>
			</div><br>
				<h3>Live Order Tracking</h3>
				<p>Know where your order is at all times, from the restaurant to your doorstep</p>
			</div>
		</div>
		
		<div class="card">
			<div class="layer"></div>
			
			<div class="content">
				<div class="image">
				<img src="order.jpg" style="height:100px;width:100px;"></img>
			</div><br>
				<h3>Lightening-Fast Delivery</h3>
				<p>Experience superfast delivery for food delivered fresh & on time</p>
			</div>
		</div>
	</div>
		</div>
		
		
		<div style="background-color:#ECEBEA;height:1000px;margin-top:0px;"><br><br><br><br>
		<img src="image9.png" style="width:100px;height:100px;"></img><br><br>
		
		<h1>Leave a Feedback</h1><br><hr color="#e8491d" width="80px" style="margin-left:48%;"></hr><br><br><br>
		
		<input type="text" name="t1" placeholder="Name" style="width:350px;height:50px;border:0;background-color:#ffffff;"> &nbsp&nbsp&nbsp <input type="text" name="t1" style="width:350px;height:50px;border:0;background-color:#ffffff;" placeholder="Email"><br><br>
						<textarea name="t2" placeholder="Message" rows="13" cols="113" Style="border:0;background-color:#ffffff;"></textarea><br><br>
						
						
						
						<div class="ccontainer">
  <a href="http://marcel-pirnay.be/" class="btn">
  <svg width="277" height="62">
    <defs>
        <linearGradient id="grad1">
            <stop offset="0%" stop-color="#499bea"/>
            <stop offset="100%" stop-color="#499bea" />
        </linearGradient>
    </defs>
     <rect x="5" y="5" rx="25" fill="none" stroke="url(#grad1)" width="266" height="50"></rect>
  </svg>

    <span style="color:#499bea;">Submit</span>
</a>
</div>   
		
		</div>
		
		<div style="background-image:url('image2.jpg');height:400px;margin-top:0px;"><br><br><br>
		
		<h1 style="font-size:40px;font-weight:none;">SpiceShuttle</h1>
		<h6 style="color:white;">INFO@YOURSITE.com</h6>
		<br>
		<div class="s-m">
								<a href="https://www.facebook.com/"><i class="fab fa-facebook-f" style="color:white;"></i></a>
								<a href="https://twitter.com/"><i class="fab fa-twitter" style="color:white;margin-left:30px;"></i></a>
								<a href="https://www.youtube.com/"><i class="fab fa-youtube" style="color:white;margin-left:30px;"></i></a>
								<a href="https://aboutme.google.com/u/0/?referer=gplus" style="color:white;margin-left:30px;"><i class="fab fa-google-plus-g"></i></a>
								<a href="https://www.instagram.com/accounts/login/?hl=en" style="color:white;margin-left:30px;"><i class="fab fa-instagram"></i></a>
							</div><br><br><br><br>
		
		<p style="text-align:left;margin-left:530px;color:white;">&copy 2019 SpiceShuttle. All rights reserved. </p>
							
		
		</div>
			
		</div>
		
		
	</div>
	
	<script src="main_pg.js"></script>
</body>
<script>
  AOS.init({duration:1500,});
</script>
</html>