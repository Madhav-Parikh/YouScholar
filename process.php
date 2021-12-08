<?php 
include('dbcon.php');


$query = mysqli_query($con,"SELECT count(review_rating) as Total from review_master where status=1");
$row = mysqli_fetch_array($query);
$Total=$row['Total'];
$query = mysqli_query($con,"SELECT count(review_rating) as Totalreview from  review_master where status=1");
$row = mysqli_fetch_array($query);
$Total_review=$row['Totalreview'];
$review = mysqli_query($con,"SELECT review_desc,review_rating,email from review_master where status=1 order by date_time desc limit 4 ");
$rating = mysqli_query($con,"SELECT count(*) as Total,review_rating from review_master group by rating order by rating desc");
?>