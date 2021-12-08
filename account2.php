<?php
include 'dbcon.php';

session_start();
?>


<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><meta http-equiv="content-type" content="text/html;charset=UTF-8"><meta charset="utf-8"><title>YouScholar | Registration & Login</title><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"><link rel="canonical" href="https://www.scholarshipsads.com/account/"><meta name="google-signin-client_id" content="869511197857-11levhiri5mpr0lt7rgsa63ad97bq7pl.apps.googleusercontent.com"><link href="favicons/2019-favicon.png" rel="icon"><link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i%7CPoppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"><link href="css/css-external.css" rel="stylesheet"><link href="css/css-style.css" rel="stylesheet"><!--[if lt IE 9]>
  <script src="https://www.scholarshipsads.com/assets/js/html5shiv.js?version=3"></script>
  <script src="https://www.scholarshipsads.com/assets/js/respond.min.js?version=3"></script>
  <![endif]--></head><body>
<div class="preloader hide">
<div class="signal"></div>
</div>
<div id="wrapperParallax" class="wrapper clearfix">
<?php

include('Header_pages.php');

?>
<section class="header-ads"><div class="mb-20 mt-40" style="text-align:center; margin-right: auto; margin-left: auto;"><script async src="js/js-adsbygoogle.js"></script><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7405902537822315" data-ad-slot="8434813041" data-ad-format="auto" data-full-width-responsive="true"></ins>
 </section><section id="Scholarship" class="post-scholarship pt-0"><div class="container">
<div class="row">
<div class="col-12 col-sm-12 col-md-5 col-lg-5">
<div class="row">
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
<div class="heading pt-50">
<br><br><br><br>
<h1>Login</h1>
<p>If you already have an account, kindly use the below form to login.</p>
</div>
</div>
</div>
<div class="row">
<div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-15 text-center social-login-loading" style="display: none">
<img src="images/images-loading.gif"></div>
<div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-15 text-center">
<div class="" data-width="" data-scope="public_profile,email" data-onlogin="" data-size="large" data-button-type="continue_with" data-auto-logout-link="false" data-use-continue-as="true"></div>
</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-40 text-center">
<div id="my-signin2" style="width: 240px; margin: auto"></div>
</div>
</div>
             <?php
                    if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
                    {
                        echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].' </h2>';
                        unset($_SESSION['status']);
                    }
                ?>
              


<form class="user" action="userlogin.php" method="post">
<div class="row">
<div class="col-12 col-sm-12 col-md-12 col-lg-12 form-errors hide mb-40">
</div>
</div>
<div class="row">
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
<div class="form-group">
<label for="yourLoginEmail">Email Address</label>
<input type="email" name="email" class="form-control" tabindex="1" id="yourLoginEmail" ></div>
<div class="form-group">
<label for="yourLoginPassword">Password</label>
<input type="password" name="password" class="form-control" tabindex="2" id="yourLoginPassword"></div>
</div>
</div>
<div class="row">
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
<button type="submit" name="login_btn" class="btn btn--primary">Login <i class="icon-arrow-long-right"></i></button>
</div>
</div>
</form>
</div>


<div class="col-sm col-md-1 col-lg-1">
<p class="vertical-line"></p>
</div>
<div class="col-12 col-sm-12 col-md-6 col-lg-6">
<div class="row">
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
<div class="row">
<div class="col-12 col-sm-12 col-md-12 col-lg-10">
<div class="heading pt-50">
<br><br><br><br>
<h1>Register with us</h1>
<p>Use all website functionalities by creating account with us.</p>
</div>
</div>
</div>
</div>
</div>
<form class="user" action="userregister.php" method="post">
<input type="hidden" name="redir" value=""><div class="row">
<div class="col-12 col-sm-12 col-md-12 col-lg-12 form-errors hide mb-40">
</div>
</div>
<div class="row">
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
<div class="form-group">
<label for="yourEmail">Email Address</label>
<input type="email" name="inputemail" class="form-control" tabindex="3" id="yourEmail"></div>
</div>
</div>
<div class="row">
<div class="col-12 col-sm-12 col-md-6 col-lg-6">
<div class="form-group">
<label for="yourFirstName">Your Name</label>
<input type="text" name="inputname" class="form-control" tabindex="4" id="yourFirstName" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'></div>
<div class="form-group">
<label for="yourLastName">Username</label>
<input type="text" name="user" class="form-control" tabindex="5" id="yourLastName"></div>
<div class="form-group">
<div class="g-recaptcha" data-sitekey="6LdbbLIUAAAAAJKRITwoBkagkaGft8HKZsDJm6fT"></div>
</div>
</div>
<div class="col-12 col-sm-12 col-md-6 col-lg-6">
<div class="form-group">
<label for="yourLastName">Your State</label>
<input type="text" name="state" class="form-control" tabindex="5" id="yourLastName" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'></div>
<div class="form-group">
<label for="yourVPassword">Choose Password</label>
<input type="password" name="inputpassword" class="form-control" tabindex="7" id="yourVPassword"></div>
</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-10 offset-lg-2">
<button type="submit" name="regbtn" class="btn btn--primary">create account <i class="icon-arrow-long-right"></i></button>
</div>
</div>
</form>
</div>
</div>
</div>
</section><section class="header-ads "><div class="mb-50 mt-30" style="text-align:center; margin-right: auto; margin-left: auto;"><script async src="js/js-adsbygoogle.js"></script><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7405902537822315" data-ad-slot="4696464739" data-ad-format="auto" data-full-width-responsive="true"></ins>

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
