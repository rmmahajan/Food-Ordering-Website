<?php

session_start();

$con = mysqli_connect('localhost','root','manvi123*');

mysqli_select_db($con, 'userreg');

$name = filter_input(INPUT_POST,'username');
$pass = filter_input(INPUT_POST,'password');
$error = "name/password incorrect";
$s = " select * from reg where username = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 0){
	$_SESSION['username'] = $name;
	header('location:log.php');
}else{
	header('location:main_pg.php');
}

?>