<html>
<head>
</head>
<body>
	<form method="GET" action="#">
  Email: <input type="Email" name="email"><br>
  Password: <input type="password" name="password"> <br>
   <input type="submit" name="submit" value="Login">
</form>        
</body>	
</html>

<?php
$con=mysqli_connect("localhost","root","","studentattendanceapp");
$email=$_GET['email'];
$pass=$_GET['password'];
$qry="select email,password from registration where email='$email' and password='$pass'";

$result=mysqli_query($con,$qry);

$total_rows = mysqli_num_rows($result);

if ($total_rows == 1) {

    while($row = mysqli_fetch_assoc($result))  
           {  
                $json_array[] = $row;  
           }  
           echo json_encode($json_array);
}
else {

    $response["failed"] = 1;

    echo json_encode($response);
}
?>