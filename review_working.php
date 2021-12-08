<?php

include 'dbcon.php';


    if(null !==($review_person_name=$_POST['data_2']));

   

    if(null !==($email=$_POST['data_10']));

    if(null !==($scholarshipname=$_POST['data_11']));

    if(null !==($review_rating=$_POST['data_4']));

    if(null !==($review_desc=$_POST['data_8']));



    $query="insert into review_master values('','$review_person_name','$email','$scholarshipname','$review_rating','$review_desc')";

    $res = mysqli_query($con,$query);


    header('location:Review2.php');



    
  




?>

