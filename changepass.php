<?php
$con= mysqli_connect("localhost", "root","","mls") or die (mysqli_error($con));
session_start();
$pass= $_POST['new_password'];
$userid = $_SESSION['id'];
$update_password_querry = "UPDATE users SET PASSWORD = '$pass' WHERE UID = 'userid'";
$result= mysqli_query($con, $update_password_querry) or die (mysqli_error($con));
 echo "password updated";