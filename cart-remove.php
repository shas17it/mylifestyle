<?php
require 'commom.php';


if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_POST["id"]; 
    $user_id = $_SESSION['user_id'];
    
    // Delete the rows from user_items table where item_id and user_id equal to the item_id and user_id we got from the cart page and session
    $query = "DELETE FROM user_items WHERE IID='$item_id' AND UID='$user_id' ";
    $res = mysqli_query($con, $query) or die($mysqli_error($con));
    header("location:cart.php");
}
?>