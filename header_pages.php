<?php
@session_start();
?>



<header id="header" class="header header-1 header-light header-fixed"><nav id="primary-menu" class="navbar navbar-expand-lg navbar-dark"><div class="container">
<a class="navbar-brand" href="index.php">
<img class="logo logo-light" src="images/2019-logolight.png" alt="Logo"><img class="logo logo-dark" src="images/2019-logodark.png" alt="Logo"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="toogle-inner"></span>
</button>
<div class="collapse navbar-collapse" id="navbarContent">
<ul class="navbar-nav mr-auto"><li>
<li class="has-dropdown">
<a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">States</a>
<ul class="dropdown-menu"><li>
<a href="Delhi.php">Delhi</a>
</li>
<li>
<a href="Maharashtra.php">Maharashtra</a>
</li>
<li>
<a href="datatry.php">Gujarat</a>
</li>
<li>
<a href="Haryana.php">Haryana</a>
</li>
<li>
<a href="Rajasthan.php">Rajasthan</a>
</li>
<li>
<a href="Karnataka.php">Karnataka</a>
</li>
<li>
<div class="view-more">
<a href="Allstates.php">View all <i class="icon-arrow-right"></i>
</a>
</div>
</a>
</li>
</ul></li>
<li>
<a href="subject-wise-scholarships.php" class="menu-item">Subjects</a>
</li>
<li class="has-dropdown">
<a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">Degree</a>
<ul class="dropdown-menu"><li>
<a href="Bachelors.php">Bachelors</a>
</li>
<li>
<a href="Masters.php">Masters</a>
</li>
<li>
<a href="PhD.php">PhD</a>
</li>
<li>
<a href="Undergraduate.php">Undergraduate</a>
</li>
</ul></li>
<li>
<a href="Experthelp.php" class="menu-item">Expert Help</a>
</li>
<li>
<a href="Review2.php" class="menu-item">Reviews</a>
</li>
<li>
<a href="News.php" class="menu-item">News' Updates</a>
</li>
<?php
if(isset($_SESSION["username"]))
        {
             echo'<li><a href="logoutuser.php"><i class="fas fa-sign-out-alt"></i>Log Out</a></li>';
       }
        else {
             echo'<li><a href="account2.php"><i class="fas fa-sign-in-alt"></i>Login</a></li>';
        }
        ?>
<!--<li class="has-dropdown">
<a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">Universities</a>
<ul class="dropdown-menu"><li>
<a href="India.php">Delhi University</a>
</li>
<li>
<a href="India.php">Hyderabad University</a>
</li>
<li>
<a href="India.php">Maharashtra University</a>
</li>
<li>
<a href="India.php">Gujarat University</a>
</li>
<li>
<a href="India.php">Rajasthan University</a>
</li>
<li>
<a href="India.php">Amity University</a>
</li>
<li>
<a href="India.php">Chandigarh University</a>
</li>
</ul></li>-->


</ul><div class="">
<div class="">
<div class="">
<i class=""></i>
<span class="title"></span>
</div>
</div>
<div class="module module-scholarship pull-left">
<a href="contact.php" class="btn">Post Scholarship</a>
</div>
</div>
<div class="">
<div id="" class="">
<form action="" method="get">
	<!--
<input class="" placeholder="" type="text" name="q" id="search"><button type="submit"><i class></i></button>
-->
</form>
</div>
</div>
</div>
</div>
</nav></header>