<?php
$username = filter_input(INPUT_POST,'username');
$usercard = filter_input(INPUT_POST,'usercard');
$email = filter_input(INPUT_POST,'email');
$cardnumber = filter_input(INPUT_POST,'cardnumber');
$address = filter_input(INPUT_POST,'address');
$expmonth = filter_input(INPUT_POST,'expmonth');
$city = filter_input(INPUT_POST,'city');
$expyear = filter_input(INPUT_POST,'expyear');
$cvv = filter_input(INPUT_POST,'cvv');
if(!empty($username)|| !empty($usercard)||!empty($email) || !empty($cardnumber) || !empty($address) || !empty($exp) || !empty($city)|| !empty($year)||!empty($cvv) )
{
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "manvi123*";
	$dbname = "userregistration";
	
	$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
	if(mysqli_connect_error())
	{
		die('connect Error('. mysqli_connect_error().')'.mysqli_connect_error());
	}
	else
	{
		$sql = "INSERT INTO billpg (name,nameoncard,email,cardno,address,expmonth,city,expyear,cvv)
		values ('$username','$usercard','$email',$cardnumber,'$address',$expmonth,'$city',$expyear,$cvv)";
		
		
		if($conn->query($sql)){
			
		echo "Payment Successfull";
		}
		else
		{
			echo "Error: ".$sql."<br>". $conn->error;
		}
		$conn->close();
	}
	
}
else{
	echo "All Fields Are Required";
}
?>