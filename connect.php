<?php

$user = filter_input(INPUT_POST, 'user');
$email = filter_input(INPUT_POST, 'email');
$feed = filter_input(INPUT_POST, 'feed');
if(!empty($user)){
	if(!empty($email)){
		if(!empty($feed)){
			$host = "localhost";
			$dbusername= "root";
			$dbpassword="";
			$dbname="interior";
// Create connection

$conn=mysqli_connect($host, $dbusername, $dbpassword, $dbname);

if(mysqli_connect_error()){
	die('Connection Error ('. mysqli_connect_error().')'
	  .mysqli_connect_error());
}
else{
	$sql ="INSERT INTO feedback (name,email,feed) values('$user','$email','$feed')";
	if($conn->query($sql)){
		echo "Feedback send successfully";
	}
	else{
		echo "Error: ".$sql ."
		". $conn->error;
	}
	$conn->close();
// Check connection
		}
		}
		else{
			echo "feedback should not be empty";
			die();
		}
	}
		else{
			echo "email should not empty";
			die();
		}
}
	else{
		echo "name should not be empty";
		die();
	}
	

?>
