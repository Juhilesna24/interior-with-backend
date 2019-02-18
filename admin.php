<?php
 $con=mysqli_connect("localhost","root","","register");
 if($con)
 {
	 
 }
 if(isset($_POST['submit']))
 {
	
 $name=$_POST['fname'];
 $pass=$_POST['fpass'];
    $query=mysqli_query($con,"select * from register where username='$name'and password='$pass';");
	$row=mysqli_num_rows($query);
	if($row>0)
	{
	    header('Location:view.php');
	}
	else{
	   echo "unknown user";
	}
 
 }
 else{
	echo"not button";  
 }
 ?>