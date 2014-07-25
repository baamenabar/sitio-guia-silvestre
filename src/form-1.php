<?php

     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "crunchpress@info.com";
    $email_subject = "New Membership Form Submission";
	$error_message = '';

     

     
    // validation
    if(
        !isset($_POST['name']) ||
		!isset($_POST['email']) ||
		!isset($_POST['comment']))
		
		{
			
			echo "Fields are not filled properly";
			die();
    }
     
    $name = $_POST['name']; // required
	$email = $_POST['email']; // required
	$comments = $_POST['comment'];
	
     
$email_message = '<html>';
$email_message = '<body>';
$email_message = '<head>';
$email_message = '<title>Your Details Are Below</title>';
$email_message = '</head>';
$email_message .= '<h1>Your Details Are Below</h1>';
$email_message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$email_message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
$email_message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
$email_message .= "<tr><td><strong>Comment:</strong> </td><td>" . strip_tags($_POST['comment']) . "</td></tr>";
$email_message .= "</table>";
$email_message .= "</body></html>";	






$headers = "From: " . $email . "\r\n";
$headers .= "Reply-To: ". $email . "\r\n";
$headers .= "CC: susan@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


@mail($email_to, $email_subject, $email_message, $headers); 
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>ECO RESPONSIVE</title>
<!--Custom Css-->
<link href="css/custom.css" rel="stylesheet" type="text/css">
<!--Bootstrap 2.3.2 Css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!--Bootstrap Responsive Css-->
<link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
<!--Color Css Start-->
<link href="css/color.css" rel="stylesheet" type="text/css">
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300,700,600,800' rel='stylesheet' type='text/css'>
<!--Favicon Css-->
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<!--Font Awesome-->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<!--BX Slider-->
<link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css">
<!--Annimation Css-->
<link href="css/cp_load.css" rel="stylesheet" type="text/css">
<!--Pretty Photo Css-->
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen"/>
<!--HTML5 JS-->
<script src="js/html5.js"></script>
</head>
<body>
<!--Wrapper Start-->
<div id="wrapper"> 
  <!--HEADER START-->
  <header id="header"> 
    <!--Navigation Area Start-->
    <div class="navigation-box">
      <div class="container"> <strong class="logo"><a href="index.html">ECO “<span>Responsive</span></a></strong>
        <div class="top-bar-outer">
          <div class="nav-box">
            <div class="navbar">
              <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              <div class="nav-collapse collapse">
                <ul id="nav">
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="where-we-work.html">Our Work</a>
                  <ul>
                  <li><a href="where-we-work.html">Where We Work</a></li>
                  <li><a href="how-we-work.html">How We Work</a></li>
                  </ul>
                  </li>
                  <li><a href="full-gallery.html">Gallery</a>
                    <ul>
                      <li><a href="gallery-two-column.html">Gallery Two Columns</a></li>
                      <li><a href="gallery-three-column.html">Gallery Three Columns</a></li>
                      <li><a href="gallery-four-column.html">Gallery Four Columns</a></li>
                      <li><a href="gallery-six-column.html">Gallery Six Columns</a></li>
                      <li><a href="masonry-gallery.html">Masonry Gallery</a></li>
                      <li><a href="wide-gallery.html">Wide Gallery</a></li>
                    </ul>
                  </li>
                  <li><a href="event.html">Event</a>
                    <ul>
                      <li><a href="event-detail.html">Event Detail</a></li>
                    </ul>
                  </li>
                  <li><a href="blog.html">Blog</a>
                    <ul>
                      <li><a href="blog-detail.html">Blog Detail</a></li>
                    </ul>
                  </li>
                  <li><a href="crowed-funding.html">Crowed Funding</a>
                    <ul>
                      <li><a href="crowed-funding-detail.html">Crowed Funding Detail</a></li>
                    </ul>
                  </li>
                  <li><a href="contact.html">Contact</a></li>
                </ul>
              </div>
            </div>
            <!--Currency Box Start-->
            <div class="currency-box">
              <div class="btn-group"> <a class="btn cruncy" href="#">$ US Dollar </a> <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#"><i class="fa fa-euro"></i>Euro</a></li>
                  <li><a href="#"><i class="fa fa-gbp"></i>Pound</a></li>
                  <li><a href="#"><i class="fa fa-yen"></i>Yen</a></li>
                </ul>
              </div>
            </div>
            <!--Currency Box End--> 
            <!--Language Box Start-->
            <div class="language-box">
              <div class="btn-group"> <a class="btn language" href="#">EN</a> <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">FR</a></li>
                  <li><a href="#">Spe</a></li>
                  <li><a href="#">chinese</a></li>
                </ul>
              </div>
            </div>
            <!--Language Box End--> 
          </div>
          <div class="bottom-row">
            <form action="#" class="header-search">
              <div class="input-box">
                <input name="" required type="text" class="header-input">
                <button class="header-btn-search" value=""><i class="fa fa-search"></i></button>
              </div>
              <strong class="title">JOIN OUR <span>CAMPAIGN!</span></strong>
            </form>
            <div class="donate-box"> <strong class="title">DONATION SO FAR: <span class="price">$450 000</span></strong> <a href="#" class="btn-donate">Donate <span>Now</span></a> </div>
          </div>
        </div>
      </div>
    </div>
    
    <!--Navigation Area End--> 
    <!--Banner Start-->
    <div class="inner-banner"><img src="images/inner-banner.jpg" alt="img"></div>
    <!--Banner End--> 
  </header>
  <!--HEADER END-->
  <div id="main"> 
    <!-- Heading Area Start-->
    <section class="heading-box">
      <div class="container">
        <h1>Thank You</h1>
      </div>
    </section>
    <!-- Heading Area End--> 
     <!-- Start of Thank -->
    <section id="content_Wrapper" class="mbtm">
      <section class="container container-fluid">
        <section class="row-fluid">
          <section class="span12 error-page">
          <div class="holder">
            <p>Thank you for your form submission, as soon as we get this we will get back to you shortly.</p>
            </div>
          </section>
        </section>
      </section>
    </section>
	<!-- End of Thank -->
   
  </div>
  <!--Footer Start-->
  <footer id="footer"> 
    <!--Footer Top Section Start-->
    <section class="footer-top-section">
      <div class="container">
        <div class="row-fluid">
          <div class="span6">
            <div class="left"> <i class="fa fa-envelope"></i> <strong class="title">Subscribe For Event Updates</strong>
              <p>via email on how to get updated about church news &amp; events online</p>
            </div>
          </div>
          <div class="span6">
            <div class="right">
              <form action="#" class="subscribe-form">
                <input name="" type="text" class="subscribe-input" required>
                <input name="" type="submit" class="btn-signup" value="Sign up">
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Footer Top Section End--> 
    
    <!--Footer Section 2 Start-->
    <section class="footer-section-2">
      <div class="container">
        <div class="row-fluid">
          <div class="span4">
            <div class="latest-twitter-box">
              <h4>Latest twitter updates</h4>
              <div class="twitter-updates">
                <ul id="twitter-updates-slider">
                  <li>
                    <div class="twitter-text">
                      <p>New Theme Called the listner ready to rocks! Check this out!The listner Issues Fixed. <a href="#">I hope update will be ready soon.</a> Then you guys downloa</p>
                      <a href="#" class="link">http://fb.me/90DF91</a> <strong class="time">- 2 hour ago </strong> </div>
                    <div class="twitter-text">
                      <p>The listner Issues Fixed. I hope update will be ready soon. Then you guys download it. Before upload new </p>
                      <a href="#" class="link">http://fb.me/4rtIOlp9 </a> <strong class="time">- 1 hour ago </strong> </div>
                  </li>
                  <li>
                    <div class="twitter-text">
                      <p>New Theme Called the listner ready to rocks! Check this out!The listner Issues Fixed. <a href="#">I hope update will be ready soon.</a> Then you guys downloa</p>
                      <a href="#" class="link">http://fb.me/90DF91</a> <strong class="time">- 3 hour ago </strong> </div>
                    <div class="twitter-text">
                      <p>New Theme Called the listner ready to rocks! Check this out!The listner Issues Fixed. <a href="#">I hope update will be ready soon.</a> Then you guys downloa</p>
                      <a href="#" class="link">http://fb.me/90DF91</a> <strong class="time">- 4 hour ago </strong> </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="span5">
            <div class="latest-event-gallery">
              <h4>Latest Events Gallery</h4>
              <div class="gallery-box">
                <ul class="gallery">
                  <li><a href="images/events-gallery/event-gallet-img-1.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/events-gallery/event-gallet-img-1.jpg" alt="img" /></a></li>
                  <li><a href="images/events-gallery/event-gallet-img-2.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/events-gallery/event-gallet-img-2.jpg" alt="img" /></a></li>
                  <li><a href="images/events-gallery/event-gallet-img-3.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/events-gallery/event-gallet-img-3.jpg" alt="img" /></a></li>
                  <li><a href="images/events-gallery/event-gallet-img-4.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/events-gallery/event-gallet-img-4.jpg" alt="img" /></a></li>
                  <li><a href="images/events-gallery/event-gallet-img-5.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/events-gallery/event-gallet-img-5.jpg" alt="img" /></a></li>
                  <li><a href="images/events-gallery/event-gallet-img-6.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/events-gallery/event-gallet-img-6.jpg" alt="img" /></a></li>
                  <li><a href="images/events-gallery/event-gallet-img-7.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/events-gallery/event-gallet-img-7.jpg" alt="img" /></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="span3">
            <form action="form-1.php" method="post" class="get-touch-form">
              <h4>Get In Touch</h4>
              <ul>
                <li>
                  <input name="name" required pattern="[a-zA-Z ]+" type="text" placeholder="Name" class="get-touch-input">
                </li>
                <li>
                  <input name="email" required pattern="^[a-zA-Z0-9-\_.]+@[a-zA-Z0-9-\_.]+\.[a-zA-Z0-9.]{2,5}$" type="text" placeholder="E-mail" class="get-touch-input">
                </li>
                <li>
                  <textarea name="comment" required cols="10" rows="10" class="get-touch-textarea" placeholder="Comments"></textarea>
                </li>
                <li>
                  <input name="" type="submit" class="btn-send-message" value="Send message">
                </li>
              </ul>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!--Footer Section 2 End--> 
    
    <!--Footer Section 3 Start-->
    <section class="footer-section-3">
      <div class="container">
        <div class="row-fluid">
          <div class="span5">
            <div class="newsletter-box">
              <ul id="newslatter-slider">
                <li>
                  <div class="frame"><a href="#"><img src="images/newsletter-img-1.jpg" alt="img"></a></div>
                </li>
                <li>
                  <div class="frame"><a href="#"><img src="images/newsletter-img-2.jpg" alt="img"></a></div>
                </li>
                <li>
                  <div class="frame"><a href="#"><img src="images/newsletter-img-1.jpg" alt="img"></a></div>
                </li>
              </ul>
              <div class="newsletter-text-box"> <strong class="title">Victams of volcanic eruption in Kenya</strong>
                <p>Tation minim ut consequat molestie at vel hendrerit iriure dolore illum ullamcorper zzril consequat delenit, laoreet. Vero et, ea vel dolore ut feugiat ...</p>
                <ul class="detail-row">
                  <li><a href="#">Comments: 23</a></li>
                  <li><a href="#">Likes: 342</a></li>
                  <li><a href="#">Shares: 3743</a></li>
                </ul>
                <a href="#" class="more">more news<i class="fa fa-arrow-right"></i></a>
                <div class="subscribe-newsletter"> <a href="#" class="btn-subscribe">Subscribe to Newsletter</a>
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="span3">
            <address class="contact-box">
            <strong class="title">Contact Us</strong>
            <p>5/23, Loft Buildings, Executive Enclave, 
              Excel Towers, Faraway Road,
              4538FH, 105YTREW
              NY, USA</p>
            <strong class="number">0800 - Green Responsive</strong> <a href="mailto:" class="email">info@gren responsive.com</a>
            </address>
          </div>
          <div class="span4">
            <div class="footer-map"> <img src="images/footer-map-img.png" alt="img"> </div>
          </div>
        </div>
      </div>
    </section>
    <!--Footer Section 3 End--> 
    <!--CopyRights Section Start-->
    <section class="copyrights-section">
      <div class="container"> <strong class="copy">COPYRIGHT &copy; 2014  By <a href="http://crunchpress.com/" target="_blank" class="web">CrunchPress.com</a></strong> </div>
    </section>
    <!--CopyRights Section End--> 
  </footer>
  
  <!--Footer End--> 
</div>
<!--Wrapper End--> 
<!--JQUERY Start--> 
<!--Jquery 1.11.1 Js--> 
<script src="js/jquery.js"></script> 
<!--Bootstrap Js--> 
<script src="js/bootstrap.js"></script> 
<!--Modernizr Js--> 
<script src="js/modernizr.custom.97074.js"></script> 
<!--Recent News Posts Images Effect Js--> 
<script src="js/jquery.hoverdir.js"></script> 
<!--Bx Slider Js--> 
<script src="js/jquery.bxslider.js"></script> 
<!--Next Event Contdown Js--> 
<script src="js/jquery.plugin.js"></script> 
<!--Next Event Contdown Js--> 
<script src="js/jquery.countdown.js"></script> 
<!--Our Chrity Store JS--> 
<script src="js/jquery.flexisel.js"></script> 
<!--Parallax Effect Js--> 
<script src="js/jquery.stellar.min.js"></script> 
<!--Latest Events Gallery--> 
<script src="js/blocksit.js"></script> 
<!--Footer Map Js--> 
<script src="http://maps.google.com/maps/api/js?sensor=false"></script> 
<!--Pretty Photo Js--> 
<script src="js/jquery.prettyPhoto.js"></script> 
<!--Custom Js--> 
<script src="js/custom.js"></script>
</body>

</html>
