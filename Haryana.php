<?php

include 'dbcon.php';
?><!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><meta http-equiv="content-type" content="text/html;charset=UTF-8"><meta charset="utf-8"><title>Scholarships in Haryana</title><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"><meta name="description" content="Scholarships in Haryana. Scholarships from Government and Universities in Haryana."><meta name="twitter:title" content="Haryana"><meta name="twitter:description" content=""><meta name="twitter:image" content="https://www.scholarshipsads.com/files/flags/Haryana_flag.png"><meta name="twitter:site" content="@scholarshipads"><meta name="twitter:card" content="summary"><meta property="og:title" content="Haryana"><meta property="og:image" content="https://www.scholarshipsads.com/files/flags/Haryana_flag.png"><meta property="og:description" content=""><meta property="og:type" content="website"><link rel="canonical" href="https://www.scholarshipsads.com/category/country/Haryana-scholarships/"><link rel="next" href="https://www.scholarshipsads.com/category/country/Haryana-scholarships/page/2/"><meta name="google-signin-client_id" content="869511197857-11levhiri5mpr0lt7rgsa63ad97bq7pl.apps.googleusercontent.com"><link href="favicons/2019-favicon.png" rel="icon"><link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i%7CPoppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"><link href="css/css-external.css" rel="stylesheet"><link href="css/css-style.css" rel="stylesheet"><!--[if lt IE 9]>
  <script src="https://www.scholarshipsads.com/assets/js/html5shiv.js?version=3"></script>
  <script src="https://www.scholarshipsads.com/assets/js/respond.min.js?version=3"></script>
  <![endif]--></head><body>
<div class="preloader hide">
<div class="signal"></div>
</div>
<div id="wrapperParallax" class="wrapper clearfix">
     <?php

     include('header_pages.php');
     
     ?><section class="header-ads"><div class="mb-20 mt-40" style="text-align:center; margin-right: auto; margin-left: auto;"><script async src="js/js-adsbygoogle.js"></script><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7405902537822315" data-ad-slot="8434813041" data-ad-format="auto" data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script></div> </section><section id="page-title" class="page-title"><div class="container">
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="title">
<ol class="breadcrumb"><li class="breadcrumb-item"><a href="www.scholarshipsads.php">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Haryana</li>
</ol><div class="title-heading">
<h3>Scholarships in Haryana</h3>
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
<div class="alert-content"><p>You can study in Haryana on fully funded or partially funded scholarships. Government of Haryana and Universities in Haryana offer scholarships. We have listed here some best PhD Scholarships in Haryana, Masters Scholarships in Haryana, and undergraduate level scholarships.</p></div>
</div>
<?php
                $query = "SELECT * FROM scholarships where scholarship_state='Haryana'  ORDER BY scholarship_id DESC";
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

<img src="https://i3p5a9h8.stackpathcdn.com/wp-content/uploads/2019/09/dr-ambedkar-scholarship-Haryana.jpg" alt=""><div class="">
<span class=""><i class=""></i></span>
<!-- <span class="card-deal-title">Expires in</span>
<span class="card-deal-time">240 Days</span> -->
</div>
</div>
<div class="card-info col-xs-12 col-md-8 col-lg-8">
<h2><a href="HR_AMC.php">Dr. Ambedkar Medhavi Chhattar Sanshodhit Yojna, Haryana</a></h2>
<ul><li>
<i class="icon-map"></i> Haryana </li>	

<li><i class="icon-dollor"></i> Upto INR 10,000 </li>

<li>
<i class="icon-book"></i> Any Stream </li>

<li>
<i class="icon-Bachelor2"></i> Bachelors/Master </li>

<li>
<i class="icon-place"></i> SC/BC Caste </li>
</ul></div>
</div>
<div class="clearfix"></div>
<div class="card-more">
<a href="HR_AMC.php"><span>Learn More</span><i class="icon-arrow-long-right"></i></a>
</div>
<div class="card-bio">
<p>The Welfare of Scheduled Castes and Backward Classes Department, Haryana Government is inviting applications from the students of Scheduled Caste, Vimukt Jati, DNTs, Taprivas and Backward Classes (Block A and B) for Dr Ambedkar Medhavi Chhattar Sanshodhit Yojna, Haryana 2020-21. The scholarship aims to encourage merit amongst SC and BC students. The students studying in Class 11 to postgraduation level will receive a scholarship ranging from INR 8,000 to INR 10,000 under this scheme.</p>
</div>
</div>
 <div class="scholarship-card">
<div class="card-warp">
<div class="card-img col-md-4 col-lg-4 col-xs-12">

<img src="https://www.noticebard.com/wp-content/uploads/2019/07/Screen-Shot-2019-07-21-at-5.53.29-PM-300x133.png" alt=""><div class="">
<span class=""><i class=""></i></span>
<span class="card-deal-title"></span>
</div>
</div>
<div class="card-info col-xs-12 col-md-8 col-lg-8">
<h2><a href="HR_NSHDF.php">Nishkam-SHDF Scholarship for Professional Courses</a></h2>
<ul><li>
<i class="icon-map"></i> Haryana </li>	

<li><i class="icon-dollor"></i> Up to INR 33,000 per year </li>

<li>
<i class="icon-book"></i> All Streams </li>

<li>
<i class="icon-Bachelor2"></i> Diploma/Degree </li>

<li>
<i class="icon-place"></i> 70% marks in Class 10 & 12 </li>
</ul></div>
</div>
<div class="clearfix"></div>
<div class="card-more">
<a href="HR_NSHDF.php"><span>Learn More</span><i class="icon-arrow-long-right"></i></a>
</div>
<div class="card-bio">
<p>SHDF-Nishkam Sikh Welfare Council, New Haryana invites Applications for Scholarships from regular students studying in recognized Colleges and Universities for Professional Courses applicants/Pursuing. This scholarship for appeared in Class X & XII Examination in March 2020 and want to pursue Diploma/Degree Courses during 2020-21. The selected scholars will receive a scholarship Up to INR 33,000 per year per student. </p>
</div>
</div>
<div class="scholarship-card">
<div class="card-warp">
<div class="card-img col-md-4 col-lg-4 col-xs-12">

<img src="https://i1.wp.com/sarkarigo.com/wp-content/uploads/2020/10/%E0%A4%B9%E0%A4%B0%E0%A4%BF%E0%A4%AF%E0%A4%BE%E0%A4%A3%E0%A4%BE-%E0%A4%B8%E0%A5%8D%E0%A4%95%E0%A5%89%E0%A4%B2%E0%A4%B0%E0%A4%B6%E0%A4%BF%E0%A4%AA-%E0%A4%AF%E0%A5%8B%E0%A4%9C%E0%A4%A8%E0%A4%BE-2021.png?fit=600%2C300&ssl=1" alt=""><div class="">
<span class=""><i class=""></i></span>
<span class="card-deal-title"></span>
</div>
</div>
<div class="card-info col-xs-12 col-md-8 col-lg-8">
<h2><a href="HR_HSIS.php">Haryana State Meritorious Incentive Scheme</a></h2>
<ul><li>
<i class="icon-map"></i> Haryana  </li>	

<li><i class="icon-dollor"></i> Financial support will be granted to selected students </li>

<li>
<i class="icon-book"></i> All Streams </li>

<li>
<i class="icon-place"></i> First, Second and Third Position</li>


</ul></div>
</div>
<div class="clearfix"></div>
<div class="card-more">
<a href="HR_HSIS.php"><span>Learn More</span><i class="icon-arrow-long-right"></i></a>
</div>
<div class="card-bio">
<p>The students acquiring the first, second and third position in the annual university examination can apply for this scholarship.  Financial support gives a huge respite to many students in the country as it empowers them to pursue their desired course hassle-free. Understanding this vital factory, the Department of Higher Education, Government of Haryana conducts Haryana State Meritorious Incentive Scheme every year to provide financial support to deserving students.</p>
</div>
</div>

	<!--
<h2><a href="daad-scholarship-in-Haryana-for-masters-in-public-policy-and-good-governance-helmut-schmidt-programm.php">Post Matric Scholarship for ST Students - Andaman and Nicobar </a></h2>P
<ul><li>
<i class="icon-dollor"></i> Fully Funded  <span class="text-muted xs-text"><span class="icon-info"></span> Tuition Fee + Stipend+ Allowances</span>
</li>
<li>
<i class="icon-place"></i> Haryana Universities, University of Duisburg-Essen, Hertie School of Governance Haryana, University of Potsdam, Hochschule Osnabrück, University of Osnabrück<a href="#" onclick="showMoreTaxs(event, this)"> +1 More</a><span style="display: none">, University of Passau</span> </li>
<li>
<i class="icon-Bachelor2"></i> Masters </li>
<li>
<i class="icon-book"></i> Public Policy, Governance </li>
<li>
<i class="icon-map"></i> Haryana </li>
<li>
<i class="icon-calendar"></i> 07/31/2020 </li>
</ul></div>
</div>
<div class="clearfix"></div>
<div class="card-more">
<a href="daad-scholarship-in-Haryana-for-masters-in-public-policy-and-good-governance-helmut-schmidt-programm.php"><span>Learn More</span><i class="icon-arrow-long-right"></i></a>
</div>
<div class="card-bio">
<p>The Ministry of Tribal Affairs, Government of India invites applications for Post Matric Scholarship for ST Students - Andaman and Nicobar 2020-21 from ST students of Class 11 and above. The scholarship is applicable for candidates who hold a domicile of Andaman and Nicobar. The key objective of the scholarship is to provide financial assistance to ST students studying at post-matriculation or post-secondary level to enable them to complete their education.</p>
</div>
</div>
<div class="mb-30" style="text-align:center; margin-right: auto; margin-left: auto;"><script async src="js/js-adsbygoogle.js"></script><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7405902537822315" data-ad-slot="8434813041" data-ad-format="auto" data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script></div> <div class="scholarship-card">
<div class="card-warp">
<div class="card-img col-md-4 col-lg-4 col-xs-12">

<img src="images/270-RmVhdHVyZWQlMjBJbWFnZXMvT3JnYW5pemF0aW9ucy9EQUFEX2dlcm1hbnkuanBn" alt=""><div class="">
<span class=""><i class=""></i></span>
<span class="card-deal-title">August to November 2020</span>
</div>
</div>
-->

<!--
<div class="scholarship-card">
<div class="card-warp">
<div class="card-img col-md-4 col-lg-4 col-xs-12">

<img src="images/270-RmVhdHVyZWQlMjBJbWFnZXMvT3JnYW5pemF0aW9ucy9oZWlucmljaF9ib2xsX2ZvdW5kYXRpb25fc2Nob2xhcnNoaXAucG5n" alt=""><div class="">
<span class=""><i class=""></i></span>
<span class="card-deal-title">1 March (Annual)</span>
</div>
</div>
<div class="card-info col-xs-12 col-md-8 col-lg-8">

-->

	<!--
<h2><a href="heinrich-boll-foundation-scholarships.php">Heinrich Boll Foundation Scholarships</a></h2>
<ul><li>
<i class="icon-dollor"></i> Fully Funded </li>
<li>
<i class="icon-place"></i> Haryana Universities, Sweden Universities </li>
<li>
<i class="icon-Bachelor2"></i> Masters, PhD </li>
<li>
<i class="icon-book"></i> All Subjects </li>
<li>
<i class="icon-world"></i> International Students <span class="text-muted xs-text"><span class="icon-info"></span> German students and EU students</span>
</li>
<li>
<i class="icon-map"></i> Haryana </li>
</ul></div>
</div>
<div class="clearfix"></div>
<div class="card-more">
<a href="heinrich-boll-foundation-scholarships.php"><span>Learn More</span><i class="icon-arrow-long-right"></i></a>
</div>
<div class="card-bio">
<p>Heinrich Boll Foundation Scholarships is open for students intrested in Masters, PhD scholarships in Haryana.</p>
</div>
</div>
<div class="scholarship-card">
<div class="card-warp">
<div class="card-img col-md-4 col-lg-4 col-xs-12">
 
<img src="images/270-RmVhdHVyZWQlMjBJbWFnZXMvR2VybWFueS9IZWlkZWxiZXJnJTIwVW5pdmVyc2l0eS5qcGc=" alt=""><div class="card-deal expired">
<span class="card-deal-title">Expired</span>
</div>
</div>
<div class="card-info col-xs-12 col-md-8 col-lg-8">
<h2><a href="heidelberg-university-phd-in-neurobiology-scholarship-2020.php">Heidelberg University PhD in Neurobiology Scholarship 2020</a></h2>
<ul><li>
<i class="icon-dollor"></i> Fully Funded </li>
<li>
<i class="icon-place"></i> Heidelberg University </li>
<li>
<i class="icon-Bachelor2"></i> PhD </li>
<li>
<i class="icon-book"></i> Neurobiology </li>
<li>
<i class="icon-world"></i> International Students <span class="text-muted xs-text"><span class="icon-info"></span> students from all nationalities</span>
</li>
<li>
<i class="icon-map"></i> Haryana </li>
<li>
<i class="icon-calendar"></i> 01/24/2020 </li>
</ul></div>
</div>
<div class="clearfix"></div>
<div class="card-more">
<a href="heidelberg-university-phd-in-neurobiology-scholarship-2020.php"><span>Learn More</span><i class="icon-arrow-long-right"></i></a>
</div>
<div class="card-bio">
<p>Heidelberg University PhD in Neurobiology Scholarship 2020 is open for students intrested in PhD scholarships in Haryana.</p>
</div>
</div>
<div class="scholarship-card">
<div class="card-warp">
<div class="card-img col-md-4 col-lg-4 col-xs-12">

<img src="images/270-RmVhdHVyZWQlMjBJbWFnZXMvR2VybWFueS9GcmVpZSUyMFVuaXZlcnNpdCVDMyVBNHQlMjBCZXJsaW4uanBn" alt=""><div class="">
<span class=""><i class=""></i></span>
<span class="card-deal-title">April and July (Annual)</span>
</div>
</div>
<div class="card-info col-xs-12 col-md-8 col-lg-8">
<h2><a href="elsa-neumann-scholarships.php">Elsa-Neumann-Scholarships</a></h2>
<ul><li>
<i class="icon-dollor"></i> Partial Funding <span class="text-muted xs-text"><span class="icon-info"></span> 1000 euros per month + allowance of 103 euros for the costs of materials.</span>
</li>
<li>
<i class="icon-place"></i> Freie Universität Berlin </li>
<li>
<i class="icon-Bachelor2"></i> PhD  </li>
<li>
<i class="icon-book"></i> All Subjects </li>
<li>
<i class="icon-map"></i> Haryana </li>
</ul></div>
</div>
<div class="clearfix"></div>
<div class="card-more">
<a href="elsa-neumann-scholarships.php"><span>Learn More</span><i class="icon-arrow-long-right"></i></a>
</div>
<div class="card-bio">
<p>Elsa-Neumann-Scholarships is open for students intrested in PhD scholarships in Haryana.</p>
</div>
</div>
<div class="scholarship-card">
<div class="card-warp">
<div class="card-img col-md-4 col-lg-4 col-xs-12">

<img src="images/270-RmVhdHVyZWQlMjBJbWFnZXMvT3JnYW5pemF0aW9ucy9EQUFEJTIwZ2VybWFueS5qcGc=" alt=""><div class="">
<span class=""><i class=""></i></span>
<span class="card-deal-title">Deadline Varies</span>
</div>
</div>
<div class="card-info col-xs-12 col-md-8 col-lg-8">
<h2><a href="-daad-re-invitation-programme-for-former-scholarship-holders.php"> DAAD: Re-invitation Programme for Former Scholarship Holders</a></h2>
<ul><li>
<i class="icon-dollor"></i> Fully Funded <span class="text-muted xs-text"><span class="icon-info"></span> Former holders of DAAD research grants or study scholarships</span>
</li>
<li>
<i class="icon-place"></i> Haryana Universities </li>
<li>
<i class="icon-Bachelor2"></i> Undergraduate, Postgraduate </li>
<li>
<i class="icon-book"></i> All Subjects </li>
<li>
<i class="icon-world"></i> International Students <span class="text-muted xs-text"><span class="icon-info"></span> as well as Haryana students.</span>
</li>
<li>
<i class="icon-map"></i> Haryana </li>
</ul></div>
</div>
<div class="clearfix"></div>
<div class="card-more">
<a href="-daad-re-invitation-programme-for-former-scholarship-holders.php"><span>Learn More</span><i class="icon-arrow-long-right"></i></a>
</div>
<div class="card-bio">
<p> DAAD: Re-invitation Programme for Former Scholarship Holders is open for students intrested in Undergraduate, Postgraduate scholarships in Haryana.</p>
</div>
</div>
<div class="scholarship-card">
<div class="card-warp">
<div class="card-img col-md-4 col-lg-4 col-xs-12">

<img src="images/270-RmVhdHVyZWQlMjBJbWFnZXMvR2VybWFueS9UZWNobmljYWwlMjBVbml2ZXJzaXR5JTIwb2ZCZXJsaW4ucG5n" alt=""><div class="card-deal expired">
<span class="card-deal-title">Expired</span>
</div>
</div>
<div class="card-info col-xs-12 col-md-8 col-lg-8">
<h2><a href="phd-position-in-robotics-and-computer-vision-at-technical-university-of-berlin-in-Haryana.php">PhD Position in Robotics and Computer Vision at Technical University of Berlin in Haryana</a></h2>
<ul><li>
<i class="icon-dollor"></i> Fully Funded <span class="text-muted xs-text"><span class="icon-info"></span> A salary will be given</span>
</li>
<li>
<i class="icon-place"></i> Technical University of Berlin </li>
<li>
<i class="icon-Bachelor2"></i> PhD </li>
<li>
<i class="icon-book"></i> Robotics, Computer Vision </li>
<li>
<i class="icon-world"></i> International Students </li>
<li>
<i class="icon-map"></i> Haryana </li>
<li>
<i class="icon-calendar"></i> 01/20/2020 </li>
</ul></div>
</div>
<div class="clearfix"></div>
<div class="card-more">
<a href="phd-position-in-robotics-and-computer-vision-at-technical-university-of-berlin-in-Haryana.php"><span>Learn More</span><i class="icon-arrow-long-right"></i></a>
</div>
<div class="card-bio">
<p>PhD Position in Robotics and Computer Vision at Technical University of Berlin in Haryana is open for students intrested in PhD scholarships in Haryana.</p>
</div>
</div>
<div class="scholarship-card">
<div class="card-warp">
<div class="card-img col-md-4 col-lg-4 col-xs-12">

<img src="images/270-RmVhdHVyZWQlMjBJbWFnZXMvR2VybWFueS9UaGUlMjBXaXR0ZW5iZXJnJTIwQ2VudGVyJTIwZm9yJTIwR2xvYmFsJTIwRXRoaWNzLmpwZw==" alt=""><div class="card-deal expired">
<span class="card-deal-title">Expired</span>
</div>
</div>
<div class="card-info col-xs-12 col-md-8 col-lg-8">
<h2><a href="doctoral-program-ethics-and-responsible-leadership-in-business-.php">PhD Scholarships: Doctoral Program “Ethics and Responsible Leadership in Business” at The Wittenberg Center for Global Ethics</a></h2>
<ul><li>
<i class="icon-dollor"></i> Fully Funded </li>
<li>
<i class="icon-place"></i> The Wittenberg Center for Global Ethics </li>
<li>
<i class="icon-Bachelor2"></i> PhD </li>
<li>
<i class="icon-world"></i> International Students  </li>
<li>
<i class="icon-map"></i> Haryana </li>
<li>
<i class="icon-calendar"></i> 04/26/2020 </li>
</ul></div>
</div>
<div class="clearfix"></div>
<div class="card-more">
<a href="doctoral-program-ethics-and-responsible-leadership-in-business-.php"><span>Learn More</span><i class="icon-arrow-long-right"></i></a>
</div>
<div class="card-bio">
<p>PhD Scholarships: Doctoral Program “Ethics and Responsible Leadership in Business” at The Wittenberg Center for Global Ethics is open for students intrested in PhD scholarships in Haryana.</p>
</div>
</div>
<div class="scholarship-card">
<div class="card-warp">
<div class="card-img col-md-4 col-lg-4 col-xs-12">

<img src="images/270-RmVhdHVyZWQlMjBJbWFnZXMvTmlnZXJpYS9QZXRyb2xldW0lMjBUZWNobm9sb2d5JTIwRGV2ZWxvcG1lbnQlMjBGdW5kLmpwZw==" alt=""><div class="card-deal expired">
<span class="card-deal-title">Expired</span>
</div>
</div>
<div class="card-info col-xs-12 col-md-8 col-lg-8">
<h2><a href="petroleum-technology-development-fund-nigeria-scholarships.php">Petroleum Technology Development Fund Nigeria Scholarships</a></h2>
<ul><li>
<i class="icon-dollor"></i> Fully Funded </li>
<li>
<i class="icon-place"></i> France Universities, China Universities, Malaysia Universities, Haryana Universities </li>
<li>
<i class="icon-Bachelor2"></i> Masters, PhD </li>
<li>
<i class="icon-book"></i> All Subjects </li>
<li>
<i class="icon-world"></i> Selected Countries <span class="text-muted xs-text"><span class="icon-info"></span> Nigerian nationality holders only</span>
</li>
<li>
<i class="icon-map"></i> France, Haryana, Malaysia, China </li>
<li>
<i class="icon-calendar"></i> 01/15/2020 </li>
</ul></div>
</div>
<div class="clearfix"></div>
<div class="card-more">
<a href="petroleum-technology-development-fund-nigeria-scholarships.php"><span>Learn More</span><i class="icon-arrow-long-right"></i></a>
</div>
<div class="card-bio">
<p>Petroleum Technology Development Fund Nigeria Scholarships is open for students intrested in Masters, PhD scholarships in France, Haryana, Malaysia, China.</p>
</div>
</div>
<div class="scholarship-card">
<div class="card-warp">
<div class="card-img col-md-4 col-lg-4 col-xs-12">

<img src="images/270-MjAxOS8wNi9GcmllZHJpY2gtRWJlcnQtRm91bmRhdGlvbi5qcGc=" alt=""><div class="card-deal expired">
<span class="card-deal-title">Expired</span>
</div>
</div>
<div class="card-info col-xs-12 col-md-8 col-lg-8">
<h2><a href="friedrich-ebert-foundation-scholarship-Haryana.php">Friedrich Ebert Foundation Scholarship, Haryana</a></h2>
<ul><li>
<i class="icon-dollor"></i> Partial Funding </li>
<li>
<i class="icon-place"></i> Friedrich Ebert Foundation </li>
<li>
<i class="icon-Bachelor2"></i> Masters, Bachelor </li>
<li>
<i class="icon-book"></i> All Subjects </li>
<li>
<i class="icon-world"></i> International Students </li>
<li>
<i class="icon-map"></i> Haryana </li>
<li>
<i class="icon-calendar"></i> 11/30/2019 </li>
</ul></div>
</div>
<div class="clearfix"></div>
<div class="card-more">
<a href="friedrich-ebert-foundation-scholarship-Haryana.php"><span>Learn More</span><i class="icon-arrow-long-right"></i></a>
</div>
<div class="card-bio">
<p>Friedrich Ebert Foundation Scholarship, Haryana is open for students intrested in Masters, Bachelor scholarships in Haryana.</p>
</div>
</div>
<div class="scholarship-card">
<div class="card-warp">
<div class="card-img col-md-4 col-lg-4 col-xs-12">

<img src="images/aHR0cHM6Ly93d3cuc2Nob2xhcnNoaXBzYWRzLmNvbS8-cD01MDI5NA==" alt=""><div class="card-deal expired">
<span class="card-deal-title">Expired</span>
</div>
</div>
<div class="card-info col-xs-12 col-md-8 col-lg-8">
<h2><a href="the-middle-east-traveling-fellowship-in-germant-2019.php">The Middle East Traveling Fellowship in Germant 2019</a></h2>
<ul><li>
<i class="icon-dollor"></i> Partial Funding <span class="text-muted xs-text"><span class="icon-info"></span> single payment of 4,000 euro per person</span>
</li>
<li>
<i class="icon-place"></i> <span class="text-muted xs-text"><span class="icon-info"></span> International Journalists Program (IPJ), Haryana</span>
</li>
<li>
<i class="icon-Bachelor2"></i> Short Training </li>
<li>
<i class="icon-book"></i> Journalism </li>
<li>
 <i class="icon-world"></i> Middle East Students </li>
<li>
<i class="icon-map"></i> Haryana </li>
<li>
<i class="icon-calendar"></i> 06/16/2019 </li>
</ul></div>
</div>
<div class="clearfix"></div>
<div class="card-more">
<a href="the-middle-east-traveling-fellowship-in-germant-2019.php"><span>Learn More</span><i class="icon-arrow-long-right"></i></a>
</div>
<div class="card-bio">
<p>The Middle East Traveling Fellowship in Germant 2019 is open for students intrested in Short Training scholarships in Haryana.</p>
</div>
</div>
<div class="scholarship-card">
<div class="card-warp">
<div class="card-img col-md-4 col-lg-4 col-xs-12">

<img src="images/270-MjAxOS8wNS9Vbml2ZXJzaXR5LU9mLUhhbWJ1cmcuanBn" alt=""><div class="card-deal expired">
<span class="card-deal-title">Expired</span>
</div>
</div>
<div class="card-info col-xs-12 col-md-8 col-lg-8">
<h2><a href="university-of-hamburg-doctoral-scholarships-in-Haryana-2020.php">University Of Hamburg Doctoral Scholarships in Haryana, 2020</a></h2>
<ul><li>
<i class="icon-dollor"></i> Partial Funding </li>
<li>
<i class="icon-place"></i> University of Hamburg </li>
<li>
<i class="icon-Bachelor2"></i> PhD, Post Doctorate </li>
<li>
<i class="icon-book"></i> All Subjects </li>
<li>
<i class="icon-world"></i> International Students </li>
<li>
<i class="icon-map"></i> Haryana </li>
<li>
<i class="icon-calendar"></i> 10/31/2019 </li>
</ul></div>
</div>
<div class="clearfix"></div>
<div class="card-more">
<a href="university-of-hamburg-doctoral-scholarships-in-Haryana-2020.php"><span>Learn More</span><i class="icon-arrow-long-right"></i></a>
</div>
<div class="card-bio">
<p>University Of Hamburg Doctoral Scholarships in Haryana, 2020 is open for students intrested in PhD, Post Doctorate scholarships in Haryana.</p>
</div>
</div>



<div class="mb-30" style="text-align:center; margin-right: auto; margin-left: auto;"><script async src="js/js-adsbygoogle.js"></script><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7405902537822315" data-ad-slot="4696464739" data-ad-format="auto" data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
<div class="row">
 <div class="col-sm-12 col-md-12 col-lg-12 clearfix text--center">
<ul class="pagination"><li>
<a href="Haryana-scholarships.php" aria-label="Prev" class="prev disable">
<span aria-hidden="true"><i class="icon-arrow-long-left"></i> Prev</span>
</a>
</li>
<li class="active">
<a href="1.php">1</a>
</li>
<li class="">
<a href="2.php">2</a>
</li>
<li class="">
<a href="3.php">3</a>
</li>
<li class="">
<a href="4.php">4</a>
</li>
<li class="">
<a href="5.php">5</a>
</li>
<li class="">
<a href="6.php">6</a>
</li>
<li>
<a href="2.php" aria-label="Next" class="next ">
<span aria-hidden="true">Next <i class="icon-arrow-long-right"></i></span>
</a>
</li>
</ul></div>

</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-3 col-secondary">
<div class="sidebar sidebar-blog">

<div class="widget widget-qlinks">
<div class="widget-title">
<h5>Quick Links</h5>
</div>
<div class="widget-content">
<ul><li>
<a href="uk-scholarships.php">
<div class="entry-img">
<img src="images/flags-uk_flag.png" alt=""></div>
<div class="entry-title">
UK </div>
</a>
</li>
<li>
<a href="usa-scholarships.php">
<div class="entry-img">
<img src="images/flags-usa_flag.png" alt=""></div>
<div class="entry-title">
USA </div>
</a>
</li>
<li>
<a href="australia-scholarships.php">
<div class="entry-img">
<img src="images/flags-australia.png" alt=""></div>
<div class="entry-title">
Australia </div>
</a>
</li>
<li>
<a href="canada-scholarships.php">
<div class="entry-img">
<img src="images/09-flagbuttonround250.png" alt=""></div>
<div class="entry-title">
Canada </div>
</a>
</li>
</ul></div>
</div>

<div class="mb-30" style="text-align:center; margin-right: auto; margin-left: auto;"><script async src="js/js-adsbygoogle.js"></script><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7405902537822315" data-ad-slot="4696464739" data-ad-format="auto" data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script></div>

<div class="widget widget-social">
<div class="widget-content">
<ul><li class="mb-15">
<div class="fb-like" data-href="" data-width="225" data-layout="button_count" data-action="recommend" data-size="large" data-show-faces="true" data-share="true"></div>
</li>
<li>
<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="true" data-size="large">Tweet</a>
</li>
</ul></div>
</div>

<div class="widget widget-fbsubscribe p-0">
<div class="fb-page" data-href="https://www.scholarshipsads.com/category/country/Haryana-scholarships/" data-tabs="timeline" data-width="285" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true">
<blockquote cite="https://www.facebook.com/ScholarshipsAds/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ScholarshipsAds/">ScholarshipsAds</a></blockquote>



</div>
</div>
</div> </div>
</div>
</div>
</section><section class="latest-scholarship bg-white"><div class="container">
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-6">
<div class="heading heading-1">
<h2 class="heading-title">Recent Updates</h2>
</div>
</div>

</div>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<ul class="nav nav-tabs" id="myTab" role="tablist"><li class="nav-item">
<a class="nav-link active" id="recent-tab" data-toggle="tab" href="#recent" role="tab" aria-controls="recent" aria-selected="true">Scholarships</a>
</li>
<li class="nav-item">
<a class="nav-link" id="latest-tab" data-toggle="tab" href="#blogs" role="tab" aria-controls="latest" aria-selected="false">Blogs</a>
</li>
<li class="nav-item">
<a class="nav-link nav-all" href="latest-scholarships.php">View all <i class="icon-arrow-right"></i></a>
</li>
</ul><div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="recent" role="tabpanel" aria-labelledby="recent-tab">
<div class="row">
<div class="col-12 col-md-4 col-lg-3 mb-30">
<div class="card-scholarships">
<div class="card-img" style="background-image: url('https://www.scholarshipsads.com/files/Featured%20Images/UK/university_of_exeter.jpg');"></div>
<div class="card-body">
<h5 class="card-title"><a href="global-commitment-scholarship-in-the-uk-2020-21.php">Global Commitment Scholarship in the UK, 2020-21</a></h5>
<div class="card-meta">
<span class="card-date">14 Aug 2020</span>
<span class="card-more"><a href="global-commitment-scholarship-in-the-uk-2020-21.php"><i class="icon-arrow-long-right"></i></a></span>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-4 col-lg-3 mb-30">
<div class="card-scholarships">
<div class="card-img" style="background-image: url('https://www.scholarshipsads.com/files/Featured%20Images/Canada/concordia_university_in_canada_scholarships.jpg');"></div>
<div class="card-body">
<h5 class="card-title"><a href="concordia-university-undergraduate-graduate-entrance-scholarships.php">Concordia University - Undergraduate Graduate Entrance Scholarships</a></h5>
<div class="card-meta">
<span class="card-date">14 Aug 2020</span>
<span class="card-more"><a href="concordia-university-undergraduate-graduate-entrance-scholarships.php"><i class="icon-arrow-long-right"></i></a></span>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-4 col-lg-3 mb-30">
<div class="card-scholarships">
<div class="card-img" style="background-image: url('https://www.scholarshipsads.com/files/Featured%20Images/Austria/tu_wien_in_austria_scholarships.jpg');"></div>
<div class="card-body">
<h5 class="card-title"><a href="helmut-veith-stipend-in-austria-for-international-female-students.php">Helmut Veith Stipend in Austria for International Female Students</a></h5>
<div class="card-meta">
<span class="card-date">13 Aug 2020</span>
<span class="card-more"><a href="helmut-veith-stipend-in-austria-for-international-female-students.php"><i class="icon-arrow-long-right"></i></a></span>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-4 col-lg-3 mb-30">
<div class="card-scholarships">
<div class="card-img" style="background-image: url('https://www.scholarshipsads.com/files/Featured%20Images/USA/oklahoma_baptist_university_in_usa_scholarship.png');"></div>
<div class="card-body">
<h5 class="card-title"><a href="international-diversity-scholarship-usa.php">International Diversity Scholarship, USA</a></h5>
<div class="card-meta">
<span class="card-date">13 Aug 2020</span>
<span class="card-more"><a href="international-diversity-scholarship-usa.php"><i class="icon-arrow-long-right"></i></a></span>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-4 col-lg-3 mb-30">
<div class="card-scholarships">
<div class="card-img" style="background-image: url('https://www.scholarshipsads.com/files/Featured%20Images/UK/newcastle_university_in_uk_scholarships.jpg');"></div>
<div class="card-body">
<h5 class="card-title"><a href="newcastle-university-phd-studentship-2020-21.php">Newcastle University PhD Studentship, 2020-21</a></h5>
<div class="card-meta">
<span class="card-date">13 Aug 2020</span>
<span class="card-more"><a href="newcastle-university-phd-studentship-2020-21.php"><i class="icon-arrow-long-right"></i></a></span>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-4 col-lg-3 mb-30">
<div class="card-scholarships">
<div class="card-img" style="background-image: url('https://www.scholarshipsads.com/files/2015/08/British-Chevening-Scholarships-for-International-Students-2015-2016.jpg');"></div>
<div class="card-body">
<h5 class="card-title"><a href="british-chevening-scholarships-for-international-students.php">British Chevening Scholarships for International Students</a></h5>
<div class="card-meta">
<span class="card-date">12 Aug 2020</span>
<span class="card-more"><a href="british-chevening-scholarships-for-international-students.php"><i class="icon-arrow-long-right"></i></a></span>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-4 col-lg-3 mb-30">
<div class="card-scholarships">
<div class="card-img" style="background-image: url('https://www.scholarshipsads.com/files/Featured%20Images/Australia/queensland_university_of_technology_australia_scholarships.png');"></div>
<div class="card-body">
<h5 class="card-title"><a href="international-phd-scholarship-in-health-and-community-202021.php">International PhD Scholarship in Health and community, 2020/21</a></h5>
<div class="card-meta">
<span class="card-date">12 Aug 2020</span>
<span class="card-more"><a href="international-phd-scholarship-in-health-and-community-202021.php"><i class="icon-arrow-long-right"></i></a></span>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-4 col-lg-3 mb-30">
<div class="card-scholarships">
<div class="card-img" style="background-image: url('https://www.scholarshipsads.com/files/Featured%20Images/denmark/technical_university_of_denmark_scholarships.jpg');"></div>
<div class="card-body">
<h5 class="card-title"><a href="phd-positionsin-organic-and-medicinal-chemistry-denmark-202021.php">PhD Positionsin Organic and Medicinal Chemistry, Denmark 2020/21</a></h5>
<div class="card-meta">
<span class="card-date">12 Aug 2020</span>
<span class="card-more"><a href="phd-positionsin-organic-and-medicinal-chemistry-denmark-202021.php"><i class="icon-arrow-long-right"></i></a></span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="blogs" role="tabpanel" aria-labelledby="latest-tab">
<div class="row">
<div class="col-12 col-md-4 col-lg-3 mb-30">
<div class="card-scholarships">
<div class="card-img" style="background-image: url('https://www.scholarshipsads.com/files/2020/07/SIT_Alumni__SMM_banners_speakers_announce002.png');"></div>
<div class="card-body">
<h5 class="card-title"><a href="sit-master-in-computer-science-software-engineering-alumni-insights.php">SIT Master in Computer Science &amp; Software Engineering - ALUMNI Insights</a></h5>
<div class="card-meta">
<span class="card-date">17 Jul 2020</span>
<span class="card-more"><a href="sit-master-in-computer-science-software-engineering-alumni-insights.php"><i class="icon-arrow-long-right"></i></a></span>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-4 col-lg-3 mb-30">
<div class="card-scholarships">
<div class="card-img" style="background-image: url('https://www.scholarshipsads.com/files/blog-pics/ielts-instruction.png');"></div>
<div class="card-body">
<h5 class="card-title"><a href="how-to-score-band-8-in-ielts.php">How to Score Band 8 in IELTS</a></h5>
<div class="card-meta">
<span class="card-date">04 Mar 2020</span>
<span class="card-more"><a href="how-to-score-band-8-in-ielts.php"><i class="icon-arrow-long-right"></i></a></span>
</div>
</div>
</div>
</div>
 <div class="col-12 col-md-4 col-lg-3 mb-30">
<div class="card-scholarships">
<div class="card-img" style="background-image: url('https://www.scholarshipsads.com/files/blog-pics/ielts.png');"></div>
<div class="card-body">
<h5 class="card-title"><a href="best-books-for-ielts-preparation.php">Best books for IELTS preparation</a></h5>
<div class="card-meta">
<span class="card-date">03 Mar 2020</span>
<span class="card-more"><a href="best-books-for-ielts-preparation.php"><i class="icon-arrow-long-right"></i></a></span>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-4 col-lg-3 mb-30">
<div class="card-scholarships">
<div class="card-img" style="background-image: url('https://www.scholarshipsads.com/files/2015/10/schengen-visa1.jpg');"></div>
<div class="card-body">
<h5 class="card-title"><a href="schengen-visa.php">Schengen Visa</a></h5>
<div class="card-meta">
<span class="card-date">25 Sep 2016</span>
<span class="card-more"><a href="schengen-visa.php"><i class="icon-arrow-long-right"></i></a></span>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-4 col-lg-3 mb-30">
<div class="card-scholarships">
<div class="card-img" style="background-image: url('https://www.scholarshipsads.com/files/2015/10/fittosize__620_0_f667aa7424721c91a08f96641831fc53_flughafen_koffer_student_ziegert-daad.jpg');"></div>
<div class="card-body">
<h5 class="card-title"><a href="Haryana-student-visa.php">Haryana Student Visa</a></h5>
<div class="card-meta">
<span class="card-date">25 Sep 2016</span>
<span class="card-more"><a href="Haryana-student-visa.php"><i class="icon-arrow-long-right"></i></a></span>
</div>
</div>
</div>
</div>

-->

<!--

<div class="col-12 col-md-4 col-lg-3 mb-30">
<div class="card-scholarships">
<div class="card-img" style="background-image: url('https://www.scholarshipsads.com/files/2014/11/study-in-Haryana.jpg');"></div>
<div class="card-body">
<h5 class="card-title"><a href="study-visa-for-Haryana-for-international-students.php">Study VISA for Haryana for International Students</a></h5>
<div class="card-meta">
<span class="card-date">10 Nov 2014</span>
<span class="card-more"><a href="study-visa-for-Haryana-for-international-students.php"><i class="icon-arrow-long-right"></i></a></span>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-4 col-lg-3 mb-30">
<div class="card-scholarships">
<div class="card-img"></div>
<div class="card-body">
<h5 class="card-title"><a href="list-of-praxis-ii-subjects.php">LIST of PRAXIS II Subjects</a></h5>
<div class="card-meta">
<span class="card-date">30 Nov 2013</span>
<span class="card-more"><a href="list-of-praxis-ii-subjects.php"><i class="icon-arrow-long-right"></i></a></span>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-4 col-lg-3 mb-30">
<div class="card-scholarships">
<div class="card-img"></div>
<div class="card-body">
<h5 class="card-title"><a href="praxis-ii-test.php">PRAXIS II TEST</a></h5>
<div class="card-meta">
<span class="card-date">30 Nov 2013</span>
<span class="card-more"><a href="praxis-ii-test.php"><i class="icon-arrow-long-right"></i></a></span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

-->

<!--

<div>
24.6 K <span>Shares</span>
</div>
</a>
</div>
</div>
<div class="col">
<div class="social-card">
<a class="twitter" href="#">
<span class="social-card-icon twitter">
<i class="icon-twitter"></i>
<i class="icon-twitter"></i>
</span>
<div>
19.5 K <span>Shares</span>
</div>
</a>
</div>
</div>
<div class="col">
<div class="social-card">
<a class="linkedin" href="#">
<span class="social-card-icon linkedin">
<i class="fa fa-linkedin"></i>
<i class="fa fa-linkedin"></i>
</span>
<div>
22.5 K <span>Shares</span>
</div>
</a>
</div>
</div>
<div class="col">
<div class="social-card">
<a class="pinterest" href="#">
<span class="social-card-icon pinterest">
<i class="icon-pinterest"></i>
<i class="icon-pinterest"></i>
</span>
<div>
22.5 K <span>Shares</span>
</div>
</a>
</div>
</div>
</div>
</div>
</section><footer id="footerParallax" class="footer footer-1"><div class="footer-top">
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-4 col-lg-3 footer-widget widget-about">
<div class="widget-content">
<img class="footer-logo" src="images/2019-logofooter.png" alt="logo"><ul><li>7,488 <span>Scholarships</span></li>
<li>1,444 <span>Universities</span></li>
</ul><p class="copyright mb-0">
<span>Copyrights © ScholarshipsAds Inc. <br>All Rights Reserved.</span>
</p>
<p class="copyright">
<span>Developed By <a href="https://smartiolabs.com" target="_blank" style="color:#03A9F4">Smart IO Labs</a></span>
</p>
</div>
</div>
<div class="col-sm-12 col-md-4 col-lg-2 footer-widget widget-links">
<div class="footer-widget-title">
<h5>Quick Links</h5>
</div>
<div class="widget-content">
<ul><li>
<a href="latest-scholarships.php">Latest Scholarships</a>
</li>
<li>
<a href="account.php">Account</a>
</li>
<li>
<a href="privacy-policy.php">Privacy Policy</a>
</li>
<li>
<a href="about-us.php">About Us</a>
</li>
</ul></div>
</div>
<div class="col-sm-12 col-md-4 col-lg-2 footer-widget widget-links">
<div class="footer-widget-title">
<h5>Blog</h5>
</div>
<div class="widget-content">
<ul><li>
<a href="blog.php">Recent Topics</a>
</li>
<li>
<a href="professional-exams.php">Professional Exams</a>
</li>
<li>
<a href="visa.php">Visa</a>
</li>
<li>
<a href="courses.php">Courses</a>
</li>
</ul></div>
</div>
<div class="col-sm-12 col-md-4 col-lg-2 footer-widget widget-links">
<div class="footer-widget-title">
<h5>More</h5>
</div>
<div class="widget-content">
<ul><li>
<a href="contact.php">Contact Us</a>
</li>
<li>
<a href="dcma.php">DCMA</a>
</li>
<li><a href="https://apps.apple.com/pk/app/scholarshipsads/id1494931127" target="_blank"><img src="images/footer-store.png" alt="try iOS mobile app"></a></li>
<li><a href="https://play.google.com/store/apps/details?id=com.scholarshipsads.app&amp;hl=en" target="_blank"><img src="images/footer-play.png" alt="try Android mobile app"></a></li>
</ul></div>
</div>
<div class="col-sm-12 col-md-6 col-lg-3 footer-widget widget-contact-info">
<div class="footer-widget-title">
<h5>Contact US</h5>
</div>
<div class="widget-content">
<p><a href="email-protection.php" class="__cf_email__" data-cfemail="56353938223735221625353e393a3724253e3f26253732257835393b">[email protected]</a></p>
<div class="social--icons">
<a href="https://www.facebook.com/ScholarshipsAds/" target="_blank" class="facebook"><i class="icon-facebook-full"></i></a> <a href="https://twitter.com/scholarshipads" target="_blank" class="twitter"><i class="icon-twitter-full"></i></a> <a href="https://www.linkedin.com/company/scholarshipsads/" target="_blank" class="linkedin"><i class="icon-linkedin-full"></i></a> </div>
<a class="btn btn-primary" href="contact.php">Post Scholarship</a>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
</footer></div>

-->

<script data-cfasync="false" src="js/cloudflare-static-email-decode.min.js"></script><script src="js/js-jquery-3.3.1.min.js"></script><script src="js/js-plugins.js"></script><script src="js/js-functions.js"></script><script async src="https://www.googletagmanager.com/gtag/js?id=UA-34843362-1"></script><script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-34843362-1');
</script><script src="https://zunipush.com/integration/build/105982477"></script><script type="text/javascript" id="wau_scr_b0153903">
    var wau_p = wau_p || []; wau_p.push(["2z3u", "b0153903", false]);
    (function() {
        var s=document.createElement("script"); s.type="text/javascript";
        s.async=true; s.src="//widgets.amung.us/a_pro.js";
        document.getElementsByTagName("head")[0].appendChild(s);
    })();
</script><meta name="p:domain_verify" content="4d9a6046355e47d839b1a11aa1ee3afd"><div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&amp;version=v4.0&amp;appId=363964800447800&amp;autoLogAppEvents=1"></script><script async src="js/widgets.js" charset="utf-8"></script></body></html>
