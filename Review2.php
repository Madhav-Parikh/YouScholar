
<?php

include('dbcon.php');
include('securityuser.php');
?>


<!DOCTYPE html>

<head></head>
<html dir="ltr" lang="en-US"><head><meta http-equiv="content-type" content="text/html;charset=UTF-8"><meta charset="utf-8"><title>YouScholar | Reviews</title><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"><meta name="description" content="Leave a message for us"><link rel="canonical" href="https://www.scholarshipsads.com/contact/"><meta name="google-signin-client_id" content="869511197857-11levhiri5mpr0lt7rgsa63ad97bq7pl.apps.googleusercontent.com"><link href="favicons/2019-favicon.png" rel="icon"><link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i%7CPoppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"><link href="css/css-external.css" rel="stylesheet"><link href="css/css-style.css" rel="stylesheet"><!--[if lt IE 9]>
  <script src="https://www.scholarshipsads.com/assets/js/html5shiv.js?version=3"></script>
  <script src="https://www.scholarshipsads.com/assets/js/respond.min.js?version=3"></script>
  <![endif]--></head><body>
<div class="preloader hide">
<div class="signal"></div>
</div>
<!--<div id="wrapperParallax" class="wrapper clearfix">-->
<?php

include('Header_pages.php');

?> </section><section id="Scholarship" class="post-scholarship pt-0"><div class="container">
<div class="row">
<div class="col-12 col-sm-12 col-md-12 col-lg-8 offset-lg-2">
<div class="row">
<div class="col-12 col-sm-12 col-md-12 col-lg-10">
<div class="heading pt-50">
<br><br><br><br><br><br><br><br><br><br>
<h1 class="mb-20">Scholarship Reviews</h1>
<p>Help out the wonderful community of brilliant individual talents by writing about your experience with a particular scholarship - either good or bad. We encourage you to share your experience as it potentially can help out thousands of students. You can also read other's reviews.</p>
<br><br>
<form method="post" action="review_working.php" onSubmit="return validateForm();">
<div style="max-width: 400px;">
</div>
<div style="padding-bottom: 18px;">Name<span style="color: red;"> *</span><br/>
<input type="text" id="data_2" name="data_2" style="max-width : 450px;" class="form-control"/>
</div>
<div style="padding-bottom: 18px;">Email Address<span style="color: red;"> *</span><br/>
<input type="text" id="data_10" name="data_10" style="max-width : 450px;" class="form-control"/>
</div>
<div style="padding-bottom: 18px;">Scholarship Name<span style="color: red;"> *</span><br/>
<input type="text" id="data_11" name="data_11" style="max-width : 450px;" class="form-control"/>
</div>
<div style="padding-bottom: 18px;">Rate this scholarship<span style="color: red;"> *</span><br/>
<select id="data_4" name="data_4" style="max-width : 150px;" class="form-control"><option value="★">★</option>
<option value="★★">★★</option>
<option value="★★★">★★★</option>
<option value="★★★★">★★★★</option>
<option value="★★★★★">★★★★★</option>
</select>
</div>
<div style="padding-bottom: 18px;">Detailed Review<span style="color: red;"></span><br/>
<textarea id="data_8" false name="data_8" style="max-width : 450px;" rows="9" class="form-control"></textarea>
</div>
<div style="padding-bottom: 18px;"><input name="skip_Submit" value="Submit" type="submit"/></div>
<div>
<div style=""><a href="" id="" title=""></a></div>
<script src="" type=""></script>
</div>
</form>

<script type="text/javascript">
function validateForm() {
if (isEmpty(document.getElementById('data_2').value.trim())) {
alert('Name is required!');
return false;
}
if (isEmpty(document.getElementById('data_10').value.trim())) {
alert('Email Address is required!');
return false;
}
if (isEmpty(document.getElementById('data_8').value.trim())) {
alert('Detailed Review is required!');
return false;
}
return true;
}
function isEmpty(str) { return (str.length === 0 || !str.trim()); }
function validateEmail(email) {
var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z]{2})?)$/i;
return isEmpty(email) || re.test(email);
}
</script>
</div>
</div>
</script>

  <?php
                $query = "SELECT * FROM review_master ORDER BY review_id DESC";
                $query_run = mysqli_query($con, $query);
            ?>

<h1 style="text-align:center;"><br> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; Current Scholarship Reviews </h1>
<div class="row">
<div class="col-12 col-sm-12 col-md-12 col-lg-8 offset-lg-2">
<div class="row">
<div class="col-12 col-sm-12 col-md-12 col-lg-10">
<div class="heading pt-50">



</div></div></div></div></div>

<?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>

<div class="scholarship-card">
<div class="card-warp">
<div class="card-img col-md-4s col-lg-4 col-xs-12">

<img src="https://cdn.pixabay.com/photo/2018/04/18/18/56/user-3331257__340.png" alt=""><div class="">
<span class=""><i class=""></i></span>
<!-- <span class="card-deal-title">Expires in</span>
<span class="card-deal-time">240 Days</span> -->
</div>
</div>

<br>
<div class="card-info col-xs-12 col-md-8 col-lg-8">
<h2><?php  echo $row['review_person_name']; ?></a></h2>
<h5><?php  echo $row['scholarship_title']; ?></h3>
<h6><?php  echo $row['review_rating']; ?></h6>
<!--

<ul><li>
<i class="icon-dollor"></i> Engineering </li>
<li>
<i class="icon-place"></i> Andaman & Nicobar Islands, Andaman & Nicobar Islands and Tamil Nadu </li>
<li>
 <i class="icon-Bachelor2"></i> Masters </li>
<li>
<i class="icon-book"></i> Climate Change </li>
<li>
<i class="icon-world"></i> International Students </li> 
<i class="icon-map"></i> More the 60% in Class 12 </li>
 <li> |
<i class="icon-calendar"></i> 04/12/2021 </li> 
</ul>--> 

<p><?php  echo $row['review_desc']; ?></p></div>

</div>


 <?php
                            } 
                        }
                        else {
                            
                        }
                        ?>

 
  

<!--

<h1 class="mt-30 mb-20">Expert Help</h1>

<br>

<p>We understand that finding the right scholarship and applying for it can be quite a tedious process and above all, a little complicated. Hence, the experts are always happy and ready to help solve all of your queries regarding scholarships. <br> <br>


Please write down any queries you have regarding any of the scholarships, and our experts will get back to you as early as possible to assist you in this process.</p>

-->
<!--

</div>
</div>
</div>
</div>
</div>
<form action="" method="post" class="form-scholarship ajax-form">
<div class="row">
<div class="col-12 col-sm-12 col-md-12 col-lg-8 offset-lg-2 form-errors hide mb-40">
</div>
</div>
<div class="row">
<div class="col-12 col-sm-12 col-md-5 col-lg-3 offset-lg-2">
<div class="form-group">
<label for="yourName">Your Name</label>
<input type="text" name="name" class="form-control" id="yourName" required></div>
<div class="form-group">
<label for="yourEmail">Your Email</label>
<input type="text" name="email" class="form-control" id="yourEmail" required></div>
<div class="form-group">
<label for="contSubject">Scholarship Name</label>
<input type="text" name="subject" class="form-control" id="contSubject" required></div>
</div>
<div class="col-12 col-sm-12 col-md-7 col-lg-5">
<div class="form-group">
<label for="contMessage">Scholarship Details</label>
<textarea name="message" class="form-control" id="contMessage" required></textarea></div>
</div>
<div class="col-12 col-sm-12 col-md-5 col-lg-3 offset-lg-2">
<div class="g-recaptcha" data-sitekey="6LdbbLIUAAAAAJKRITwoBkagkaGft8HKZsDJm6fT"></div>
</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-8 offset-lg-2">
<button type="submit" class="btn btn--primary">send message <i class="icon-arrow-long-right"></i></button>
</div>
</div>
</form>
</div>
-->
<!--

</section><section class="header-ads "><div class="mb-50 mt-30" style="text-align:center; margin-right: auto; margin-left: auto;"><script data-cfasync="false" src="js/cloudflare-static-email-decode.min.js"></script><script async src="js/js-adsbygoogle.js"></script><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7405902537822315" data-ad-slot="4696464739" data-ad-format="auto" data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script></div></section><section class="social-bar"><div class="container">
<div class="row">
<div class="col">
<div class="social-card">
<a class="facebook" href="#">
<span class="social-card-icon facebook">
<i class="icon-facebook"></i>
<i class="icon-facebook"></i>
</span>
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
<p><a href="email-protection.php" class="__cf_email__" data-cfemail="dbb8b4b5afbab8af9ba8b8b3b4b7baa9a8b3b2aba8babfa8f5b8b4b6">[email protected]</a></p>
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

<script data-cfasync="false" src="js/cloudflare-static-email-decode.min.js"></script><script src="js/js-jquery-3.3.1.min.js"></script><script src="js/js-plugins.js"></script><script src="js/js-functions.js"></script><script type="text/javascript" src="js/recaptcha-api.js"></script><script async src="https://www.googletagmanager.com/gtag/js?id=UA-34843362-1"></script><script>
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
