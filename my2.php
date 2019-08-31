<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      .drop {
        width:60%;
      }
	  h2{
	  text-align:center;
	  color:black;
	  font-family:tahoma,geneva,sans-serif
	  }
	  
	  td{
	  color:black;
	  width:200px;
	  }
	  h3{
	  color:black;
	  }
body{
font-family:tahoma,geneva,sans-serif;
}

input[type=text]{
	width:240px;
	font-family:'Play',sans-serif;
}
 </style>
<link rel="stylesheet" href="styles.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<link rel="stylesheet" type="text/css" href="swiper.min.css">
		<link rel="stylesheet" type="text/css" href="st.css">
		<link rel="stylesheet" type="text/css" href="about.css">
	 
   
  </head>
  <body>
  
  <header>
			<div class="container">
				<div id="branding">
					<h1 style="font-size:30px;" >Spice<span style="color:#e8491d;font-size:30px;">Shuttle</span></h1>
				</div>
				<nav>
					<ul>
						<li class="current"><a href="home.php">Home</a></li>
						<li class="current"><a href="about.html">Contacts</a></li>
						<li class="current"><a href="Services.html">Services</a></li>
					</ul>
				</nav>
			</div>			
		</header>
		<section id="showcase">
			<div class="container">
					<h1>Spice<span style="color:#e8491d;">Shuttle</span></h1>
					<p>Good Food <span style="color:#e8491d;">Good Mood</span></p>
			</div>
		</section>
		<br><br><br>
  
  
    <form action="my1.php" method="post"  style="margin-left:30%;">
<fieldset style="width:700px;height:700px;">
	<h2>Payment</h2>
	<br>
      <table cellspacing="10px" cellpadding="15px"  style="margin-left:22%;">
        <tr>
          <td>Full Name:<input type="text" name="username" required></td>
          <td>Name on Card:<input type="text" name="usercard"  required></td>
        </tr>
        <tr>
          <td>Email:<input type="text" name="email" required></td>
          <td>Card Number:<input type="text" name="cardnumber" required></td>
        </tr>
        <tr>
          <td>address:<input type="text" name="address" required></td>
          <td>Exp Month:<input type="text" name="expmonth"  required></td>
        </tr>
        <tr>
          <td>City:<input type="text" name="city" required></td>
          <td>Exp Year:<input type="text" name="expyear" required></td>
        </tr>
        <tr>
          <td>CVV:<input type="text" name="cvv" value=""  required></td>
        </tr>
      </table><br><br>
    <div class="sub">  <input style="align:center;margin-left:350px; width:100px; height:30px; border:2px white solid;" type="submit"  value="Submit"></div>
	<br><br>
	</fieldset>
    </form>
	<br><br><br><br>
  </body>
</html>