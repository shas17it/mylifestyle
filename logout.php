<?php
session_start();
if(isset($_SESSION['email']))
{
    
    session_unset();
    session_destroy();
    echo "session destroyed...";
    header("Location:index.php");
}
?>