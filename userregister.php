<?php

include 'dbcon.php';



    if(null !==($email=$_POST['inputemail']));

    if(null !==($name=$_POST['inputname']));

    if(null !==($pass=$_POST['inputpassword']));

    if(null !==($state=$_POST['state']));
    
    if(null !==($user=$_POST['user']));

    $query="insert into user_master values('','$name','$user','$email','$pass','$state')";

    $res = mysqli_query($con,$query);

    header('location:index.php');
