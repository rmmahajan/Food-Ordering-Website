<html>
<head>
	<link rel="stylesheet" type="text/css" href="lg.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>
	<div class="login-box">
	<img src="avt.png" class="avatar">
	<h2 style="font-family:Comic Sans MS, cursive, sans-serif;">Register Here</h2>
		<form action="regs.php" method="post">
		<p>Username</p>
		<input type="text" name="username" placeholder="Enter Username" minlength="5" maxlength="7" required>
		<p>Password</p>
		<input type="password" name="password" placeholder="Enter Password" minlength="5" maxlength="7" required>
		<input type="submit" name="submit" value="Register">
		<p>Already Registered?<a href="log.php" style="text-decoration:none;"> Sign In</a></p>
		</form>
		
		</div>
</body>
</html>