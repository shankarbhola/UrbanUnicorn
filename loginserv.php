<?php
//login
if(isset($_POST['login'])){
	//Define $user and $pass
	$user=$_POST['user_name'];
	$pass=$_POST['password'];
	//Establishing Connection with server by passing Host_name, user_id and pass as a patameter
	
	$conn = mysqli_connect("localhost", "root", "", "test");
	//Selecting Database
	$db = mysqli_select_db($conn, "test");
	//sql query to fetch information of registerd user and finds user match.
	$query = mysqli_query($conn, "SELECT * FROM users WHERE password='$pass' AND user_name='$user'");
	
	$rows = mysqli_num_rows($query);
	if($rows == 1){
		header("Location: home.html"); // Redirecting to other page
	}
	else
	{
		

		
	}
	mysqli_close($conn); // Closing connection
}

if(isset($_POST['register'])){
	//Define $user and $pass
	$ruid=$_POST['ruid'];
	$rpwd=$_POST['rpwd'];






	// if (!empty($ruid) && !empty($rpwd)) {
	// 	echo '<script>alert("Login Your Account)</script>';
	// }






	if (isset($ruid) && isset($rpwd) && strlen($ruid) > 1 && strlen($rpwd) > 1) {
		//Establishing Connection with server by passing Host_name, user_id and pass as a patameter	
$conn = mysqli_connect("localhost", "root", "", "test");
//Selecting Database
$db = mysqli_select_db($conn, "test");
//sql query to fetch information of registerd user and finds user match.
$sql = "INSERT INTO `users` (`user_name`, `password`) VALUES ('$ruid', '$rpwd')";

if ($conn->query($sql) === TRUE) {
	echo '<script>alert("Register Successfull")</script>';
  } else {
	echo '<script>alert("Register Unsuccessfull")</script>';
  }
mysqli_close($conn); // Closing connection
	}
	
}

?>