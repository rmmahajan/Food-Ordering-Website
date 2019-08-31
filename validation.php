<?php

session_start();

$con = mysqli_connect('localhost','root','manvi123*');

mysqli_select_db($con, 'userregistration');

$name = filter_input(INPUT_POST,'user');
$pass = filter_input(INPUT_POST,'password');

$s = " select * from usertable where name = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['username'] = $name;
	header('location:home.php');
}else{
	header('location:login.php');
}

?>