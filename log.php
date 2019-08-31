<html>
<head>
	<link rel="stylesheet" type="text/css" href="lg.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>
	<div class="login-box">
	<img src="avt.png" class="avatar">
	<h1 style="font-family:Comic Sans MS, cursive, sans-serif;">Login Here</h1>
		<form action="vld.php" method="post">
		<p>Username</p>
		<input type="text" name="username" placeholder="Enter Username" required>
		<p>Password</p>
		<input type="password" name="password" placeholder="Enter Password" required>
		<input type="submit" name="submit" value="Login">
		<p>Not Registered?<a href="reg.php" style="text-decoration:none;"> Sign Up</a></p>
		</form>
		
		</div>
</body>
</html>