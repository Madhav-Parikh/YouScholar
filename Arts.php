<?php

include 'dbcon.php';
?>




<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><meta http-equiv="content-type" content="text/html;charset=UTF-8"><meta charset="utf-8"><title>Scholarships in Arts</title><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"><meta name="description" content="Scholarships in Andaman & Nicobar Islands. Scholarships from Government and Universities in Andaman & Nicobar Islands."><meta name="twitter:title" content="Arts"><meta name="twitter:description" content=""><meta name="twitter:image" content="https://www.scholarshipsads.com/files/flags/Arts_flag.png"><meta name="twitter:site" content="@scholarshipads"><meta name="twitter:card" content="summary"><meta property="og:title" content="Arts"><meta property="og:image" content="https://www.scholarshipsads.com/files/flags/Arts_flag.png"><meta property="og:description" content=""><meta property="og:type" content="website"><link rel="canonical" href="https://www.scholarshipsads.com/category/country/Arts-scholarships/"><link rel="next" href="https://www.scholarshipsads.com/category/country/Arts-scholarships/page/2/"><meta name="google-signin-client_id" content="869511197857-11levhiri5mpr0lt7rgsa63ad97bq7pl.apps.googleusercontent.com"><link href="favicons/2019-favicon.png" rel="icon"><link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i%7CPoppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"><link href="css/css-external.css" rel="stylesheet"><link href="css/css-style.css" rel="stylesheet"><!--[if lt IE 9]>
  <script src="https://www.scholarshipsads.com/assets/js/html5shiv.js?version=3"></script>
  <script src="https://www.scholarshipsads.com/assets/js/respond.min.js?version=3"></script>
  <![endif]--></head><body>
<div class="preloader hide">
<div class="signal"></div>
</div>
<div id="wrapperParallax" class="wrapper clearfix">
     <?php

     include('Header_pages.php');
     
     ?><section class="header-ads"><div class="mb-20 mt-40" style="text-align:center; margin-right: auto; margin-left: auto;"><script async src="js/js-adsbygoogle.js"></script><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7405902537822315" data-ad-slot="8434813041" data-ad-format="auto" data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script></div> </section><section id="page-title" class="page-title"><div class="container">
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="title">
<ol class="breadcrumb"><li class="breadcrumb-item"><a href="www.scholarshipsads.php">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Arts</li>
</ol><div class="title-heading">
<h3>Scholarships in Arts</h3>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
</section><section id="scholarship" class="scholarship-search divider-bottom pt-20"><div class="container">
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-9 col-main">
<div class="alerts alert-primary">
<div class="alert-icon"><i class="fa fa-info-circle"></i></div>
<div class="alert-content"><p>Are you looking for scholarships in the field of Arts? We have listed some of the best available scholarships for you down below. Choose your preferred scholarship based on the englibility and your requirements.</p></div>
</div>
<?php
                $query = "SELECT * FROM scholarships where scholarship_course='Arts'  ORDER BY scholarship_id DESC";
                $query_run = mysqli_query($con, $query);
                   ?>
                     <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                              ?>




<div class="scholarship-card">
<div class="card-warp">
<div class="card-img col-md-4 col-lg-4 col-xs-12">




     <img src=<?php  echo $row['scholarship_img_url']; ?> alt=""><div class="">

          <span class=""></span>
          <!-- <span class="card-deal-title">Expires in</span>
          <span class="card-deal-time">240 Days</span> -->
          </div>
          </div>
          
          <div class="card-info col-xs-12 col-md-8 col-lg-8">
          <h2><a href=trial.php?sid=<?php  echo $row['scholarship_id']; ?>><?php  echo $row['scholarship_title']; ?></a></h2>
          <ul>
          
          <li>
          <i class="icon-map"></i><?php  echo $row['scholarship_state']; ?></li>  
          
          <li><i class="icon-dollor"></i><?php  echo $row['scholarship_benefit']; ?></li>
          
          <li>
          <i class="icon-book"></i><?php  echo $row['scholarship_course']; ?></li>
          
          <li>
          <i class="icon-Bachelor2"></i><?php  echo $row['scholarship_degree']; ?></li>
          
          <li>
          <i class="icon-place"></i><?php  echo $row['scholarship_requirement']; ?></li>
          
          
          </ul></div>
          </div>
          <div class="clearfix"></div>
          <div class="card-more">
          <a href=trial.php?sid=<?php  echo $row['scholarship_id']; ?>><span>Learn More</span><i class="icon-arrow-long-right"></i></a>
          </div>
          <div class="card-bio">
          <p><?php  echo $row['scholarship_desc']; ?></p>


          
</div>
</div>




 <?php
                            } 
                        }
                        ?>

<div class="scholarship-card">
<div class="card-warp">
<div class="card-img col-md-4 col-lg-4 col-xs-12">

<img src="https://s3-ap-southeast-1.amazonaws.com/cdn.buddy4study.com/static/scholarship_logo/logo_9507_Vinod-&-Saryu-Doshi-Foundation.png" alt=""><div class="">
<span class=""><i class=""></i></span>
<!-- <span class="">Expires in</span>
<span class="card-deal-time">240 Days</span> -->
</div>
</div>
<div class="card-info col-xs-12 col-md-8 col-lg-8">
<h2><a href="AT_SDPGFLA.php"> Saryu Doshi Post Graduate Fellowships In Liberal Arts & Sciences </a></h2>
<ul>	
<li>
<i class="icon-map"></i> All States </li>	

<li><i class="icon-dollor"></i> Up to INR 8,000 </li>

<li>
<i class="icon-book"></i> Arts </li>

<li>
<i class="icon-Bachelor2"></i> Diploma/Degree </li>

</ul></div>
</div>
<div class="clearfix"></div>
<div class="card-more">
<a href="AT_SDPGFLA.php"><span>Learn More</span><i class="icon-arrow-long-right"></i></a>
</div>
<div class="card-bio">
<p>Saryu Doshi Post Graduate Fellowships In Liberal Arts & Sciences 2017 aims to provide fellowships program to enhance the higher education for the financially weaker section of the society with the belief that mind is enriched through education and the spirit through art and culture. This fellowship is a good opportunity for the brilliant and aspiring students with a drive to climb the ladder of success. It fosters the emerging talent in the visual and performing arts through fellowships.</p>
</div>
</div>

