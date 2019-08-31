<?php

session_start();
header('location:log.php');

$con = mysqli_connect('localhost','root','manvi123*');

mysqli_select_db($con, 'userreg');

$nm = filter_input(INPUT_POST,'username');
$pass = filter_input(INPUT_POST,'password');

$s = " select * from reg where username = '$nm'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo" Usename Already Taken";
}else{
	$reg = " insert into reg(username , password) values ('$nm' , '$pass')";
	mysqli_query($con,$reg);
	echo" Registration Successful";
}

?>