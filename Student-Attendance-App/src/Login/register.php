<?php
$con=mysqli_connect("localhost","root","","studentattendanceapp");
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$type=$_POST['type'];
$division=$_POST['division'];
$sql = "INSERT INTO `registration`(`username`, `password`, `email`, `mobile`, `type`, `division`) VALUES ('$username', '$password', '$email', '$mobile', '$type', '$division')";


if (mysqli_query($con,$sql)) 
{

	$response["success"] = 1;

    echo json_encode($response);
}
else {

    $response["failed"] = 1;

    echo json_encode($response);
}
?>