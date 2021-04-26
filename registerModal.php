<?php
session_start(); 
// initializing variables
$email    = "";
//check_validate
$errors = array();
// Create connection
// Procedural Style 
$conn = mysqli_connect('localhost', 'root', '', 'shopee');

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
            // REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  //This mysqli_real_escape_string function is used to create a legal SQL string that can be used in an SQL statement. 
  //The string to be escaped. Characters encoded are NUL (ASCII 0), \n, \r, \, ', ", and Control-Z.
  $fn = mysqli_real_escape_string($conn, $_POST['fn_modal']);
  $ln = mysqli_real_escape_string($conn, $_POST['ln_modal']);
  $email = mysqli_real_escape_string($conn, $_POST['email_modal']);
  $pw = mysqli_real_escape_string($conn, $_POST['pw_modal']);
  $repw = mysqli_real_escape_string($conn, $_POST['repw_modal']);
$phone = mysqli_real_escape_string($conn, $_POST['phone_modal']);
$gender = mysqli_real_escape_string($conn, $_POST['gender_modal']);
$address = mysqli_real_escape_string($conn, $_POST['address_modal']);
//$type = mysqli_real_escape_string($conn, $_POST['user-type']);
            
            // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($fn)) { array_push($errors, "Firstname is required"); }
   if (empty($ln)) { array_push($errors, "Lastname is required"); }
    $filter = "/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/";
            if (!preg_match($filter,$email)){ array_push($errors, "Email wrong format"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($pw)) { array_push($errors, "Password is required"); }
  if ($pw != $repw) {
    array_push($errors, "The two passwords do not match");
                    }
            // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM `account` WHERE `email`='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $account = mysqli_fetch_assoc($result);
  
  if ($account) { // if user exists
     if ($account['email'] === $email) {
      array_push($errors, "email already exists");
    }
    }
        //No eror input
           if (count($errors) == 0) {
                $pw= md5($pw);//encrypt the password before saving in the database

                //$fn = "'" .$fn."'";
                //$ln = "'" .$ln."'";
                $sql = "INSERT INTO `account` (`fname`, `lname`, `email`, `gender`, `password`, 
                 `phone`, `address`,`register_date`) VALUES ('$fn','$ln', '$email', '$gender', '$pw', '$phone', '$address',now())";
                mysqli_query($conn, $sql);
                        //echo "New account created successfully";
                        $_SESSION['email'] = $email;
                        $_SESSION['success'] = "You are now logged in";
                            header("Location: cart.php");
            } 
        }

            mysqli_close($conn);
            ?>