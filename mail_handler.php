<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="img/workolab-icon.png">
    <title>Contact Us | Workolab</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="nrn_uu5zu3Crq2dZiyVvynBRJnzLOdZgsTPznBD_sbk" />
    <meta name="description" content="WORKOLAB is platform wherein people from any age, community can come together and do research as well as build up there 
business at he same place i.e, Offices and Research Hub at one place. A proper assistance will be provided o people of all age to solve real world problems">

    <meta name="keywords" content="
Workolab, Workolab Coworking,Coworking Space Delhi,Workspace Delhi,Workspace,Coworking NCR, Coworking Space India,Workspace NCR,Workspace India
">
    <meta property="og:title" content="Workolab | Co-Working Space with Research Lab" />
   <meta property="og:url" content="http://workolab.in/" />
<meta property="og:site_name" content="workolab" />
<meta property="article:publisher" content="https://www.facebook.com/workolabzv/" />
<meta name="twitter:card" content="summary"/>
<meta name="twitter:description" content="A collaborative coworking space. The Coworking spaces for businesses is 
equipped with facilities like Conference rooms, High Speed Wifi, Private/Open Rooms, Cafe,etc."/>
<meta name="twitter:title" content="Workolab | Co-Working Space with Research Lab"/>
<meta name="twitter:site" content="@workolab"/>
<meta name="twitter:creator" content="@workolab"/>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" media="all" href="css/contact.css"/>
	<link rel="stylesheet" type="text/css" media="all" href="css/media.css"/>
	<link rel="stylesheet" type="text/css" media="all" href="css/about.css"/>

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300|Montserrat:300,400,700" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">
	
	

  </head>

	<body>




<!-- Navigation -->
	 
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle">
      <i class="fa fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper">
	
      <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle">
          <i class="fa fa-times"></i>
        </a>
        <li class="sidebar-brand">
          <a class="js-scroll-trigger" href="index.html">Workolab.in</a>
        </li>
        <li>
          <a class="js-scroll-trigger" href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
        </li>
        <li>
          <a class="js-scroll-trigger" href="about.html"><i class="fa fa-info-circle" aria-hidden="true"></i> About</a>
        </li>
        <li>
          <a class="js-scroll-trigger" href="location-pricing.html"><i class="fa fa-map-marker" aria-hidden="true"></i> Locations & Pricing</a>
		  <ul>
        <li><a href="loc_PusaRoad.html"><i class="fa fa-map-marker" aria-hidden="true"></i>  Delhi - Pusa Road</a></li>
        <li><a href="loc_gurugram.html"><i class="fa fa-map-marker" aria-hidden="true"></i>  Haryana - Gurugram</a></li>
        <li><a href="loc_mru.html"><i class="fa fa-map-marker" aria-hidden="true"></i>  Haryana - MRU</a></li>
		<li><a href="loc_chandigarh.html"><i class="fa fa-map-marker" aria-hidden="true"></i>  Punjab - Chandigarh</a></li>
      </ul>
        </li>
		
        <li>
          <a href="startup-growth.html"><i class="fa fa-rocket" aria-hidden="true"></i> Startup Growth</a>
        </li>
		
		<li><a href="blog.html"><i class="fa fa-rss" aria-hidden="true"></i> Blog</a></li>
    <li><a class="js-scroll-trigger" href="contact.html"><i class="fa fa-arrow-right" aria-hidden="true"></i> Contact</a></li>
	<center>
	           <div class="nav-social">
<a href="https://www.facebook.com/workolabzv/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
<a href="https://www.instagram.com/workolab/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
<a href="https://twitter.com/workolab" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
<br>

</div>
</center>	
	
      </ul>
	  
    </nav>
<!-- Homepage Start -->
<center>

<div class="about-header">
<div class="page-header-1">
<h1>Contact Us</h1>
<p><a href="index.html">Home</a> ><a style="color:#00aeff"> Contact Us</a></p>
</div>
</div>

	<div class="white-bg jagged-border">
</div>
<br><br>

<div>
            <img src="img/right-icon.png" alt="icon" />
        </div>


<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];

		$to='hisumit.js@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h2>Sent Successfully! <br><b>Thank you"." ".$name.",</b><br> We will contact you shortly!</h2>
			<br><a href='index.html'><button class='btn5'>Back to Homepage</button></a>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>
<br><br>
<!-- footer start -->
<center>

<div class="footer-main">
<div class="footer-box">
<div class="footer-col">
<p>CONTACT US</p>
<br>
<i class="fa fa-envelope" aria-hidden="true"></i>
<span><a  href="#">mail@workolab.in</a></span>
<br>
<i class="fa fa-phone" aria-hidden="true"></i>
<span><a href="#">+91-9971173173</a></span>
<br>
<i class="fa fa-user-secret" aria-hidden="true"></i>
<span><a href="privacy-policy.html">Privacy Policy</a></span>
<br>
<i class="fa fa-user-secret" aria-hidden="true"></i>
<span><a href="terms-and-conditions.html">Terms & Conditions</a></span>
<br>
<i class="fa fa-user-secret" aria-hidden="true"></i>
<span><a href="refund-and-cancellation-policy.html">Refund & Cancellation Policy</a></span>
<br>

</div>
<div class="footer-col">
<p>QUICK LINKS</p>
<br>
<i class="fa fa-arrow-right" aria-hidden="true"></i>
<span><a href="index.html">Home</a></span>
<br>
<i class="fa fa-arrow-right" aria-hidden="true"></i>
<span><a href="about.html">About Workolab</a></span>
<br>
<i class="fa fa-arrow-right" aria-hidden="true"></i>
<span><a href="coming-soon.html">Startup Growth</a></span>
<br>
<i class="fa fa-arrow-right" aria-hidden="true"></i>
<span><a href="contact.html">Contact Us</a></span>
<br>
<i class="fa fa-arrow-right" aria-hidden="true"></i>
<span><a href="meet-the-team.html">Meet the Team</a></span>

</div>
<div class="footer-col">
<p>LOCATIONS</p>
<br>
<i class="fa fa-map-marker" aria-hidden="true"></i>
<span><a href="loc_PusaRoad.html">Delhi - <a style="color:#00aeff;" href="loc_PusaRoad.html">Pusa Road</a></a></span>
<br>
<i class="fa fa-map-marker" aria-hidden="true"></i>
<span><a href="loc_gurugram.html">Haryana - <a style="color:#00aeff;" href="loc_gurugram.html">Gurugram</a></a></span>
<br>
<i class="fa fa-map-marker" aria-hidden="true"></i>
<span><a href="loc_mru.html">Haryana - <a style="color:#00aeff;" href="loc_mru.html">Manav Rachna University</a></a></span>
<br>
<i class="fa fa-map-marker" aria-hidden="true"></i>
<span><a href="loc_chandigarh.html">Punjab - <a style="color:#00aeff;" href="loc_chandigarh.html">Chandigarh</a></a></span>
<br>
</div>
</div>
</div>

<!--Current page Owner-->
<div class="about-designer">
<p style="border:1px solid #ffffff; max-width:1024px; padding:20px;">
<a style="  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 300; color:#00aeff; font-size:26px;">Workolab<br>
<a style="  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 300; color:#ffffff; font-size:20px;">7th Floor, Plot 25, NH8, Udyog Vihar Phase IV, Gurgaon,
Haryana -122015, 
<a style="  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 300; color:#00aeff; font-size:20px;">Ph: +91-9971173173</a></p>

<div class="sign-up">

</div>

<div class="footer-social">
<a href="https://www.facebook.com/workolabzv/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
<a href="https://www.instagram.com/workolab/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
<a href="https://twitter.com/workolab" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
<br>

</div>
<p style="  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 300; color:#d7d7d8;">Workolab - Copyright 2017-18. Designed & Developed by <a style="  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 300; color:#9f9fa3; text-decoration:none;" href="https://www.linkedin.com/in/sumit-singh-62510b58" target="_blank">Sumit Singh</a></p>

</div>
</center>
</div>
<!-- footer closed -->



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/stylish-portfolio.js"></script>

</body>
</html>
<!--Current page BODY Closed-->