<?php

include 'dbcon.php';


    if(null !==($stu_name=$_POST['name']));

    if(null !==($stu_email=$_POST['email']));

    if(null !==($scholarship_title=$_POST['subject']));

    if(null !==($expert_help_desc=$_POST['message']));


    $query="insert into expert_help values('','$stu_name','$stu_email','$scholarship_title','$expert_help_desc','notanswered')";

    $res = mysqli_query($con,$query);

    header('location:Experthelp.php');
    exit();


    



    
  




?>

