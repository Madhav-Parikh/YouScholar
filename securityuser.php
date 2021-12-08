<?php
session_start();
include('dbcon.php');
if($con)
{
    // echo "Database Connected";
}
else
{
    header("Location: dbcon.php");
}

if(!$_SESSION['username'])
{
    header('Location: account2.php');
}
?>