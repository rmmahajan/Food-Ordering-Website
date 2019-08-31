<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root','manvi123*');

mysqli_select_db($con, 'userregistration');

$name = filter_input(INPUT_POST,'user');
$pass = filter_input(INPUT_POST,'password');

$s = " select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo" Usename Already Taken";
}else{
	$reg = " insert into usertable(name , password) values ('$name' , '$pass')";
	mysqli_query($con,$reg);
	echo" Registration Successful";
}

?>