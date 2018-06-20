<?php 
session_start();
$con=mysqli_connect("localhost","root","","mls") or die (mysqli_error($con));
session_start();
$First_Name = mysqli_real_escape_string($con,$_POST['First_Name']);
$Last_Name= mysqli_real_escape_string($con, $_POST['Last_Name']);
$email= mysqli_real_escape_string($con, $_POST['email']);
$password= mysqli_real_escape_string($con,$_POST['Password']);
$Address = mysqli_real_escape_string($con,$_POST['Address']);
$Contact_Number = $_POST['Contact_Number'];
$gender = $_POST['gender'];
$City =$_POST['city'];
$user_registration_query = "insert into users (FIRST_NAME , LAST_NAME , EMAIL , CONTACT, PASSWORD , GENDER , ADDRESS , CITY ) values
         ('$First_Name' , '$Last_Name' ,'$email','$Contact_Number' , '$password' , '$gender' ,'$Address','$City')";

$user_registration_submit = mysqli_query($con, $user_registration_query)
or die(mysqli_error($con));

$_SESSION['email']=$email;
$_SESSION['id']= mysqli_insert_id($con);
 header("Location:products.php");

?>

