<?php 

$con=mysqli_connect("localhost","root","","mls") or die (mysqli_error($con));

$email= mysqli_real_escape_string($con, $_POST['email']);
$password= mysqli_real_escape_string($con,$_POST['password']);
 $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/"; 
 $sql = "SELECT UID FROM users WHERE EMAIL = '$email' and PASSWORD = '$password'";
 $result = mysqli_query($con,$sql);
 $result = mysqli_query($con, $sql) or die(mysqli_error($con));
$count = mysqli_num_rows($result);
    if($count == 1) {
        session_start();
         
         $_SESSION['email'] = $email;
         $_SESSION['id']= mysqli_insert_id($con);
         header ("Location:products.php");
         
      }
      else {
          echo "Your Login Name or Password is invalid";
          header ("Location: login.php");
      }
   
?>