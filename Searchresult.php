<?php

include 'dbcon.php';
?>


<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><meta http-equiv="content-type" content="text/html;charset=UTF-8"><meta charset="utf-8"><title>Scholarship Search Results</title><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"><meta name="description" content="Scholarships in Masters. Scholarships from Government and Universities in Masters."><meta name="twitter:title" content="Germany"><meta name="twitter:description" content=""><meta name="twitter:image" content="https://www.scholarshipsads.com/files/flags/germany_flag.png"><meta name="twitter:site" content="@scholarshipads"><meta name="twitter:card" content="summary"><meta property="og:title" content="Germany"><meta property="og:image" content="https://www.scholarshipsads.com/files/flags/germany_flag.png"><meta property="og:description" content=""><meta property="og:type" content="website"><link rel="canonical" href="https://www.scholarshipsads.com/category/country/germany-scholarships/"><link rel="next" href="https://www.scholarshipsads.com/category/country/germany-scholarships/page/2/"><meta name="google-signin-client_id" content="869511197857-11levhiri5mpr0lt7rgsa63ad97bq7pl.apps.googleusercontent.com"><link href="favicons/2019-favicon.png" rel="icon"><link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i%7CPoppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"><link href="css/css-external.css" rel="stylesheet"><link href="css/css-style2.css" rel="stylesheet"><!--[if lt IE 9]>
  <script src="https://www.scholarshipsads.com/assets/js/html5shiv.js?version=3"></script>
  <script src="https://www.scholarshipsads.com/assets/js/respond.min.js?version=3"></script>
  <![endif]--></head><body>
<div class="preloader hide">
<div class="signal"></div>
</div>
<!--<div id="wrapperParallax" class="wrapper clearfix">-->
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
<li class="breadcrumb-item active" aria-current="page">Scholarship's Search Results</li>
</ol><div class="title-heading">
<h3>Scholarship's Search Results</h3>
</div>

<section id="hero" class="hero divider-double-bottom bg-white"><div class="">
<img src="" alt=""></div>
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="hero-heading">
<h1 class="heading-title" style="color:Black;">Find Your Dream Scholarship</h1>
</div>

<div class="hero-content">
<form action="Searchresult.php" method="POST">
<div class="row">
<div class="col-sm-5 col-md-5 col-lg-7">
<div class="form-group">	
<!--STATES-->
<input type="text" name="sch_name" placeholder="Enter Scholarship Name" style=width:100%>
</div>
</div>




<div class="col-12 col-sm-12 col-md-4 col-lg-3">
     <div class="form-group">	
          <!--STATES-->
          <select name="State" class="js-selector" style="width:100%" data-input="select2" data-placeholder="Your State"><option value=""></option><option value="6">Andhra Pradesh</option><option value="75">Arunachal Pradesh</option><option value="279">Assam</option><option value="68">Bihar</option><option value="63">Chhattisgarh</option><option value="3">Goa</option><option value="Gujarat">Gujarat</option><option value="99">Haryana</option><option value="195">Himachal pradesh</option><option value="86">Jharkhand</option><option value="273">Karnataka</option><option value="133">Kerala</option><option value="201">Madhya Pradesh</option><option value="19">Maharashtra</option><option value="37">Mainpur</option><option value="73">Meghalaya</option><option value="14">Mizoram</option><option value="30">Nagaland</option><option value="128">Odisha</option><option value="18">Punjab</option><option value="114">Rajasthan</option><option value="247">sikkim</option><option value="90">Tamil nadu</option><option value="268">Telangana</option><option value="42">Tripura</option><option value="36">Uttar Pradesh</option><option value="109">Uttrakhand</option><option value="67">West Bengal</option><option value="91">Delhi</option><option value="289">Chandigarh</option><option value="289">Andaman and Nicobar Island</option></select></div>
</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-2">
<button type="submit" class="btn"><i class="icon-search"></i> Find</button>
</div>
</div>

</form>

</div>
</div>
</div>
</div>
</section>
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
<div class="alert-content"><p>We have listed below some of the best available scholarships. You can study on fully funded or partially funded scholarships. Take a look and choose the scholarship which suits you the best. If you have any queries regarding the scholarships, you can always post them in the Expert Help.</p></div>
</div>


<?php
 if(null !==($scholarship_title=$_POST['sch_name'])); 
        
 if(null !==($scholarship_state=$_POST['State'])); 

 $query = "SELECT * FROM scholarships where scholarship_title LIKE '%{$scholarship_title}%' AND scholarship_state='{$scholarship_state}'";
                $query_run = mysqli_query($con, $query);

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

</div> 

 <?php
                            } 
                        }
                        else {
                         
                         ?>
                         <br> <br> <h2 style="text-align:center"><?php echo "Sorry, could not find the mentioned scholarship! Please recheck the search parameters and try again.";
                    }
                        
                        ?>
<!--

<div class="scholarship-card">
<div class="card-warp">
<div class="card-img col-md-4 col-lg-4 col-xs-12">

<img src="images/270-RmVhdHVyZWQlMjBJbWFnZXMvT3JnYW5pemF0aW9ucy9EQUFEX2dlcm1hbnkuanBn" alt=""><div class="">
<span class=""><i class=""></i></span>
<span class="card-deal-title">31 Oct 2020/30 April 2021 (Annual)</span>
</div>
</div>
<div class="card-info col-xs-12 col-md-8 col-lg-8">
<h2><a href="friedrich-naumann-foundation-scholarship.php">SP Jain School of Global Management - Postgraduate Merit Scholarships in India</a></h2>
<ul><li>
<i class="icon-dollor"></i> Partial Funding </li>
<li>
<i class="icon-place"></i> Germany Universities, Switzerland Universities <span class="text-muted xs-text"><span class="icon-info"></span> Other EU Universities</span>
</li>
<li>
<i class="icon-Bachelor2"></i> Masters, Masters </li>
<li>
<i class="icon-book"></i> All Subjects <span class="text-muted xs-text"><span class="icon-info"></span> Except for law, medicine, MBBS, and Dentistry</span>
</li>
<li>
<i class="icon-world"></i> International Students </li>
<li>
<i class="icon-map"></i> Germany, Switzerland </li>
</ul></div>
</div>
<div class="clearfix"></div>
<div class="card-more">
<a href="friedrich-naumann-foundation-scholarship.php"><span>Learn More</span><i class="icon-arrow-long-right"></i></a>
</div>
<div class="card-bio">
<p>SP Jain School of Global Management - Postgraduate Merit Scholarships in India, 2021 is offered for Masters, MBA degree in the field of Business Administration. You can apply to this scholarship here. The deadline for the sending your application is Always Open. This scholarship is provided by S P Jain School of Global Management and the value of this scholarship is Partial Funding, USD 5,000 to Up to USD 10,000 . This scholarship is open for: Open to all International students.</p>
</div>
</div>
<div class="scholarship-card">
<div class="card-warp">
<div class="card-img col-md-4 col-lg-4 col-xs-12">

<img src="images/270-RmVhdHVyZWQlMjBJbWFnZXMvT3JnYW5pemF0aW9ucy9EQUFEX2dlcm1hbnkuanBn" alt=""><div class="card-deal expired">
<span class="card-deal-title">Expired</span>
</div>
</div>
<div class="card-info col-xs-12 col-md-8 col-lg-8">

-->

	<!--
<h2><a href="daad-scholarship-in-germany-for-masters-in-public-policy-and-good-governance-helmut-schmidt-programm.php">Post Matric Scholarship for ST Students - Andaman and Nicobar </a></h2>P
<ul><li>
<i class="icon-dollor"></i> Fully Funded  <span class="text-muted xs-text"><span class="icon-info"></span> Tuition Fee + Stipend+ Allowances</span>
</li>
<li>
<i class="icon-place"></i> Germany Universities, University of Duisburg-Essen, Hertie School of Governance Germany, University of Potsdam, Hochschule Osnabrück, University of Osnabrück<a href="#" onclick="showMoreTaxs(event, this)"> +1 More</a><span style="display: none">, University of Passau</span> </li>
<li>
<i class="icon-Bachelor2"></i> Masters </li>
<li>
<i class="icon-book"></i> Public Policy, Governance </li>
<li>
<i class="icon-map"></i> Germany </li>
<li>
<i class="icon-calendar"></i> 07/31/2020 </li>
</ul></div>
</div>
<div class="clearfix"></div>
<div class="card-more">
<a href="daad-scholarship-in-germany-for-masters-in-public-policy-and-good-governance-helmut-schmidt-programm.php"><span>Learn More</span><i class="icon-arrow-long-right"></i></a>
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
<i class="icon-place"></i> Germany Universities, Sweden Universities </li>
<li>
<i class="icon-Bachelor2"></i> Masters, Masters </li>
<li>
<i class="icon-book"></i> All Subjects </li>
<li>
<i class="icon-world"></i> International Students <span class="text-muted xs-text"><span class="icon-info"></span> German students and EU students</span>
</li>
<li>
<i class="icon-map"></i> Germany </li>
</ul></div>
</div>
<div class="clearfix"></div>
<div class="card-more">
<a href="heinrich-boll-foundation-scholarships.php"><span>Learn More</span><i class="icon-arrow-long-right"></i></a>
</div>
<div class="card-bio">
<p>Heinrich Boll Foundation Scholarships is open for students intrested in Masters, Masters scholarships in Germany.</p>
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
<h2><a href="heidelberg-university-Masters-in-neurobiology-scholarship-2020.php">Heidelberg University Masters in Neurobiology Scholarship 2020</a></h2>
<ul><li>
<i class="icon-dollor"></i> Fully Funded </li>
<li>
<i class="icon-place"></i> Heidelberg University </li>
<li>
<i class="icon-Bachelor2"></i> Masters </li>
<li>
<i class="icon-book"></i> Neurobiology </li>
<li>
<i class="icon-world"></i> International Students <span class="text-muted xs-text"><span class="icon-info"></span> students from all nationalities</span>
</li>
<li>
<i class="icon-map"></i> Germany </li>
<li>
<i class="icon-calendar"></i> 01/24/2020 </li>
</ul></div>
</div>
<div class="clearfix"></div>
<div class="card-more">
<a href="heidelberg-university-Masters-in-neurobiology-scholarship-2020.php"><span>Learn More</span><i class="icon-arrow-long-right"></i></a>
</div>
<div class="card-bio">
<p>Heidelberg University Masters in Neurobiology Scholarship 2020 is open for students intrested in Masters scholarships in Germany.</p>
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
<i class="icon-Bachelor2"></i> Masters  </li>
<li>
<i class="icon-book"></i> All Subjects </li>
<li>
<i class="icon-map"></i> Germany </li>
</ul></div>
</div>
<div class="clearfix"></div>
<div class="card-more">
<a href="elsa-neumann-scholarships.php"><span>Learn More</span><i class="icon-arrow-long-right"></i></a>
</div>
<div class="card-bio">
<p>Elsa-Neumann-Scholarships is open for students intrested in Masters scholarships in Germany.</p>
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
<i class="icon-place"></i> Germany Universities </li>
<li>
<i class="icon-Bachelor2"></i> Undergraduate, Postgraduate </li>
<li>
<i class="icon-book"></i> All Subjects </li>
<li>
<i class="icon-world"></i> International Students <span class="text-muted xs-text"><span class="icon-info"></span> as well as germany students.</span>
</li>
<li>
<i class="icon-map"></i> Germany </li>
</ul></div>
</div>
<div class="clearfix"></div>
<div class="card-more">
<a href="-daad-re-invitation-programme-for-former-scholarship-holders.php"><span>Learn More</span><i class="icon-arrow-long-right"></i></a>
</div>
<div class="card-bio">
<p> DAAD: Re-invitation Programme for Former Scholarship Holders is open for students intrested in Undergraduate, Postgraduate scholarships in Germany.</p>
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
<h2><a href="Masters-position-in-robotics-and-computer-vision-at-technical-university-of-berlin-in-germany.php">Masters Position in Robotics and Computer Vision at Technical University of Berlin in Germany</a></h2>
<ul><li>
<i class="icon-dollor"></i> Fully Funded <span class="text-muted xs-text"><span class="icon-info"></span> A salary will be given</span>
</li>
<li>
<i class="icon-place"></i> Technical University of Berlin </li>
<li>
<i class="icon-Bachelor2"></i> Masters </li>
<li>
<i class="icon-book"></i> Robotics, Computer Vision </li>
<li>
<i class="icon-world"></i> International Students </li>
<li>
<i class="icon-map"></i> Germany </li>
<li>
<i class="icon-calendar"></i> 01/20/2020 </li>
</ul></div>
</div>
<div class="clearfix"></div>
<div class="card-more">
<a href="Masters-position-in-robotics-and-computer-vision-at-technical-university-of-berlin-in-germany.php"><span>Learn More</span><i class="icon-arrow-long-right"></i></a>
</div>
<div class="card-bio">
<p>Masters Position in Robotics and Computer Vision at Technical University of Berlin in Germany is open for students intrested in Masters scholarships in Germany.</p>
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
<h2><a href="doctoral-program-ethics-and-responsible-leadership-in-business-.php">Masters Scholarships: Doctoral Program “Ethics and Responsible Leadership in Business” at The Wittenberg Center for Global Ethics</a></h2>
<ul><li>
<i class="icon-dollor"></i> Fully Funded </li>
<li>
<i class="icon-place"></i> The Wittenberg Center for Global Ethics </li>
<li>
<i class="icon-Bachelor2"></i> Masters </li>
<li>
<i class="icon-world"></i> International Students  </li>
<li>
<i class="icon-map"></i> Germany </li>
<li>
<i class="icon-calendar"></i> 04/26/2020 </li>
</ul></div>
</div>
<div class="clearfix"></div>
<div class="card-more">
<a href="doctoral-program-ethics-and-responsible-leadership-in-business-.php"><span>Learn More</span><i class="icon-arrow-long-right"></i></a>
</div>
<div class="card-bio">
<p>Masters Scholarships: Doctoral Program “Ethics and Responsible Leadership in Business” at The Wittenberg Center for Global Ethics is open for students intrested in Masters scholarships in Germany.</p>
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
<i class="icon-place"></i> France Universities, China Universities, Malaysia Universities, Germany Universities </li>
<li>
<i class="icon-Bachelor2"></i> Masters, Masters </li>
<li>
<i class="icon-book"></i> All Subjects </li>
<li>
<i class="icon-world"></i> Selected Countries <span class="text-muted xs-text"><span class="icon-info"></span> Nigerian nationality holders only</span>
</li>
<li>
<i class="icon-map"></i> France, Germany, Malaysia, China </li>
<li>
<i class="icon-calendar"></i> 01/15/2020 </li>
</ul></div>
</div>
<div class="clearfix"></div>
<div class="card-more">
<a href="petroleum-technology-development-fund-nigeria-scholarships.php"><span>Learn More</span><i class="icon-arrow-long-right"></i></a>
</div>
<div class="card-bio">
<p>Petroleum Technology Development Fund Nigeria Scholarships is open for students intrested in Masters, Masters scholarships in France, Germany, Malaysia, China.</p>
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
<h2><a href="friedrich-ebert-foundation-scholarship-germany.php">Friedrich Ebert Foundation Scholarship, Germany</a></h2>
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
<i class="icon-map"></i> Germany </li>
<li>
<i class="icon-calendar"></i> 11/30/2019 </li>
</ul></div>
</div>
<div class="clearfix"></div>
<div class="card-more">
<a href="friedrich-ebert-foundation-scholarship-germany.php"><span>Learn More</span><i class="icon-arrow-long-right"></i></a>
</div>
<div class="card-bio">
<p>Friedrich Ebert Foundation Scholarship, Germany is open for students intrested in Masters, Bachelor scholarships in Germany.</p>
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
<i class="icon-place"></i> <span class="text-muted xs-text"><span class="icon-info"></span> International Journalists Program (IPJ), Germany</span>
</li>
<li>
<i class="icon-Bachelor2"></i> Short Training </li>
<li>
<i class="icon-book"></i> Journalism </li>
<li>
 <i class="icon-world"></i> Middle East Students </li>
<li>
<i class="icon-map"></i> Germany </li>
<li>
<i class="icon-calendar"></i> 06/16/2019 </li>
</ul></div>
</div>
<div class="clearfix"></div>
<div class="card-more">
<a href="the-middle-east-traveling-fellowship-in-germant-2019.php"><span>Learn More</span><i class="icon-arrow-long-right"></i></a>
</div>
<div class="card-bio">
<p>The Middle East Traveling Fellowship in Germant 2019 is open for students intrested in Short Training scholarships in Germany.</p>
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
<h2><a href="university-of-hamburg-doctoral-scholarships-in-germany-2020.php">University Of Hamburg Doctoral Scholarships in Germany, 2020</a></h2>
<ul><li>
<i class="icon-dollor"></i> Partial Funding </li>
<li>
<i class="icon-place"></i> University of Hamburg </li>
<li>
<i class="icon-Bachelor2"></i> Masters, Post Doctorate </li>
<li>
<i class="icon-book"></i> All Subjects </li>
<li>
<i class="icon-world"></i> International Students </li>
<li>
<i class="icon-map"></i> Germany </li>
<li>
<i class="icon-calendar"></i> 10/31/2019 </li>
</ul></div>
</div>
<div class="clearfix"></div>
<div class="card-more">
<a href="university-of-hamburg-doctoral-scholarships-in-germany-2020.php"><span>Learn More</span><i class="icon-arrow-long-right"></i></a>
</div>
<div class="card-bio">
<p>University Of Hamburg Doctoral Scholarships in Germany, 2020 is open for students intrested in Masters, Post Doctorate scholarships in Germany.</p>
</div>
</div>



<div class="mb-30" style="text-align:center; margin-right: auto; margin-left: auto;"><script async src="js/js-adsbygoogle.js"></script><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7405902537822315" data-ad-slot="4696464739" data-ad-format="auto" data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
<div class="row">
 <div class="col-sm-12 col-md-12 col-lg-12 clearfix text--center">
<ul class="pagination"><li>
<a href="germany-scholarships.php" aria-label="Prev" class="prev disable">
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
<div class="fb-page" data-href="https://www.scholarshipsads.com/category/country/germany-scholarships/" data-tabs="timeline" data-width="285" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true">
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
<h5 class="card-title"><a href="newcastle-university-Masters-studentship-2020-21.php">Newcastle University Masters Studentship, 2020-21</a></h5>
<div class="card-meta">
<span class="card-date">13 Aug 2020</span>
<span class="card-more"><a href="newcastle-university-Masters-studentship-2020-21.php"><i class="icon-arrow-long-right"></i></a></span>
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
<h5 class="card-title"><a href="international-Masters-scholarship-in-health-and-community-202021.php">International Masters Scholarship in Health and community, 2020/21</a></h5>
<div class="card-meta">
<span class="card-date">12 Aug 2020</span>
<span class="card-more"><a href="international-Masters-scholarship-in-health-and-community-202021.php"><i class="icon-arrow-long-right"></i></a></span>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-4 col-lg-3 mb-30">
<div class="card-scholarships">
<div class="card-img" style="background-image: url('https://www.scholarshipsads.com/files/Featured%20Images/denmark/technical_university_of_denmark_scholarships.jpg');"></div>
<div class="card-body">
<h5 class="card-title"><a href="Masters-positionsin-organic-and-medicinal-chemistry-denmark-202021.php">Masters Positionsin Organic and Medicinal Chemistry, Denmark 2020/21</a></h5>
<div class="card-meta">
<span class="card-date">12 Aug 2020</span>
<span class="card-more"><a href="Masters-positionsin-organic-and-medicinal-chemistry-denmark-202021.php"><i class="icon-arrow-long-right"></i></a></span>
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
<h5 class="card-title"><a href="germany-student-visa.php">Germany Student Visa</a></h5>
<div class="card-meta">
<span class="card-date">25 Sep 2016</span>
<span class="card-more"><a href="germany-student-visa.php"><i class="icon-arrow-long-right"></i></a></span>
</div>
</div>
</div>
</div>

-->

<!--

<div class="col-12 col-md-4 col-lg-3 mb-30">
<div class="card-scholarships">
<div class="card-img" style="background-image: url('https://www.scholarshipsads.com/files/2014/11/study-in-germany.jpg');"></div>
<div class="card-body">
<h5 class="card-title"><a href="study-visa-for-germany-for-international-students.php">Study VISA for Germany for International Students</a></h5>
<div class="card-meta">
<span class="card-date">10 Nov 2014</span>
<span class="card-more"><a href="study-visa-for-germany-for-international-students.php"><i class="icon-arrow-long-right"></i></a></span>
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
