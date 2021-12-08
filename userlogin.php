<?php
include('dbcon.php');
include('securityuser.php');

if(isset($_POST['login_btn']))
{
    $email_login = $_POST['email']; 
    $password_login = $_POST['password']; 
   

    $query = "SELECT * FROM user_master WHERE user_email='$email_login' AND user_password='$password_login' LIMIT 1";
    $query_run = mysqli_query($con, $query);

   if(mysqli_fetch_array($query_run))
   {
        $_SESSION['username'] = $email_login;
        header('Location: index.php');
   } 
   else
   {
        $_SESSION['status'] = "Email / Password is Invalid";
        header('Location: account2.php');
   }
}
?>