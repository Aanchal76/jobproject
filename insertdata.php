<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$age=$_POST['age'];
$location=$_POST['location'];
$gender=$_POST['gender'];
$education=$_POST['education'];
$skills = implode(',', $_POST['userskill']);


$con=mysqli_connect("localhost", "root", "admin", "jobproject");

		$query="INSERT INTO userdetail(fname,lname,email,age,location,gender,education,skills, dateposted) VALUES('$fname','$lname','$email','$age','$location','$gender','$education','$skills',now())";
		$run= mysqli_query($con,$query);
	if ($run==TRUE) 
	{
	echo "data insert successfully";
	}
	else
	{
	echo "error";
	}

?>


