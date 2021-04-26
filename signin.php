<?php 
	session_start();
	//if (isset($_SESSION['status_login']))
	//if ($_SESSION['status_login'] == true)
		//header("location:info.php");
	$conn = mysqli_connect('localhost', 'root', '', 'shopee');
	$errors = array();

	if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($conn, $_POST['reg-email']);
  $pw = mysqli_real_escape_string($conn, $_POST['reg-password']);

  if (empty($email)) {
  	array_push($errors, "email is required");
  }
  if (empty($pw)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$pw = md5($pw);
  	$query = "SELECT * FROM `account` WHERE `email`='$email' AND `password`='$pw'";
  	$results = mysqli_query($conn, $query);
  
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
      //$_SESSION['type'] = $results;
  	  $_SESSION['success'] = "You are now logged in";
       
            header('location: cart.php'); 
           
  	}else {
  		array_push($errors, "Wrong email/password combination");
  	}
  }
}
 ?>