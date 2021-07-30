<!DOCTYPE html>
<?php
    if(isset($_POST['name']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $company  = $_POST['company'];
        $msg = $_POST['message'];        
        $to = "info@virtuecorporate.in";
        $sub = $_POST['subject'];
        $subject = "'$name' - Virtue Corporate Member Contact";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: Virtue Corporate - Website <info@virtuecorporate.in>' . "\r\n";
        $message = `This Email is auto generated from virtuecorporate.in and the Booking /  Query has been submitted to you with the below provided Details, 
        	Name: '$name',\n 
        	Email ID: '$email',\n  
        	Mobile: '$mobile',\n 
        	Company: '$company',\n 
        	Subject: '$sub',\n 
        	Message: '$msg'
        `;
    }
?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-180459487-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-180459487-1');
</script>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">
	<meta name="author" content="Virtue Corporate branding Service and Brand Validation Agency">
	<meta name="description" content="Virtue Corporate serves Corporate Branding by Strategic Brand Validation and Social Media Promotions and Business Services for Start Ups to Industrial sector such as Building Construction, IT BPO Services, Business Service, Home Care, Food and Restaurant, Customer Support, Automobile, Retail, Health, Fitness">
	<meta name="keywords" content="Virtue Corporate, Corporate Branding, Brand Validation, Social Media, Promotion, Business Services, IT Services, Start Ups, Companies, Industries, Building Construction, IT BPO Services, Business Service, Customer Support, Paid promotion, India, Chennai, Tamil Nadu">
	<!-- <title>Contact Virtue Corporate for Social Media Promotion and Business Services</title> -->
	<title>Contact- Virtue Corporate
	<link rel="apple-touch-icon" sizes="180x180" href="assets/img/fav/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/img/fav/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/img/fav/favicon-16x16.png">
	<link rel="mask-icon" href="assets/img/fav/safari-pinned-tab.svg" color="#fa7070">
	<meta name="msapplication-TileColor" content="#fa7070">
	<meta name="theme-color" content="#fa7070">
	<link rel="stylesheet" href="dependencies/bootstrap/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="dependencies/fontawesome/css/all.min.css" type="text/css">
	<link rel="stylesheet" href="dependencies/swiper/css/swiper.min.css" type="text/css">
	<link rel="stylesheet" href="dependencies/wow/css/animate.css" type="text/css">
	<link rel="stylesheet" href="dependencies/magnific-popup/css/magnific-popup.css" type="text/css">
	<link rel="stylesheet" href="dependencies/components-elegant-icons/css/elegant-icons.min.css" type="text/css">
	<link rel="stylesheet" href="dependencies/simple-line-icons/css/simple-line-icons.css" type="text/css">
	<link rel="stylesheet" href="assets/css/app.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
</head>

<body id="home-version-1" class="home-version-1" data-style="default"><a href="#main_content" data-type="section-switch" class="return-to-top"><i class="fa fa-chevron-up"></i></a>
	<div class="page-loader">
		<div class="loader">
			<div class="blobs">
				<div class="blob-center"></div>
				<div class="blob"></div>
				<div class="blob"></div>
				<div class="blob"></div>
				<div class="blob"></div>
				<div class="blob"></div>
				<div class="blob"></div>
			</div>
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1">
				<defs>
					<filter id="goo">
						<feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
						<feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
						<feBlend in="SourceGraphic" in2="goo" />
					</filter>
				</defs>
			</svg>
		</div>
	</div>
	<div id="main_content">
		<header class="site-header header-dark header_trans-fixed" data-top="992">
			<div class="container">
				<div class="header-inner">
					<div class="site-mobile-logo">
						<a href="index.php" title="Virtue Corporate Logo" class="logo"><img src="assets/img/logo-two.png" alt="Virtue Corporate logo" class="main-logo"> <img src="assets/img/logo-two.png" alt="Virtue Corporate Logo" class="sticky-logo"></a>
					</div>
					<div class="toggle-menu"><span class="bar"></span> <span class="bar"></span> <span class="bar"></span></div>
					<nav class="site-nav nav-dark">
						<div class="close-menu"><span>Close</span> <i class="ei ei-icon_close"></i></div>
						<div class="site-logo">
							<a href="index.php" title="Virtue Corporate Logo" class="logo"><img src="assets/img/logo-two.png" alt="Virtue Corporate logo" class="main-logo"> <img src="assets/img/logo-two.png" alt="site logo" alt="Virtue Corporate Logo" class="sticky-logo"></a>
						</div>
						<div class="menu-wrapper" data-top="992">
							<ul class="site-main-menu">
								<li><a title="Home - Virtue Corporate" href="index.php">Home</a>
								</li>
								<li><a title="About - Virtue Corporate" href="about.html">About</a></li>
								<li><a title="Services Virtue Corporate" href="service.html">Services</a></li>
								<li><a title="Plans - Virtue Corporate" href="plan.html">Plans</a></li>
								<li><a title="Team - Virtue Corporate" href="team.html">Team</a></li>
								<li><a title="Contact - Virtue Corporate" href="contact.php">Contact</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</header>
		<section class="page-banner-contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="page-title-wrapper">
							<div class="page-title-inner">
								<h1 class="page-title">Contact Us for your Brand Validations</h1>
								<p>You can reach us via any of the below mentioned way for any kind of enquiry.
									<br>Feel Free to contact us for any queries.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="animate-element-contact"><img src="media/animated/001.png" alt="Contact Virtue Corporate Professional Services" class="wow pixFadeDown" data-wow-duration="1s"> <img src="media/animated/002.png" alt="" class="wow pixFadeUp" data-wow-duration="2s"> <img src="media/animated/003.png" alt="Virtue Corporate Professional Services" class="wow pixFadeLeft" data-wow-delay="0.3s" data-wow-duration="2s"> <img src="media/animated/004.png" alt="Virtue Corporate Professional  Services" class="wow pixFadeUp" data-wow-duration="2s"></div>
					</div>
				</div>
			</div>
			<svg class="circle" data-parallax='{"y" : 250}' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="950px" height="950px">
				<path fill-rule="evenodd" stroke="rgb(250, 112, 112)" stroke-width="100px" stroke-linecap="butt" stroke-linejoin="miter" opacity="0.051" fill="none" d="M450.000,50.000 C670.914,50.000 850.000,229.086 850.000,450.000 C850.000,670.914 670.914,850.000 450.000,850.000 C229.086,850.000 50.000,670.914 50.000,450.000 C50.000,229.086 229.086,50.000 450.000,50.000 Z" />
			</svg>
			<ul class="animate-ball">
				<li class="ball"></li>
				<li class="ball"></li>
				<li class="ball"></li>
				<li class="ball"></li>
				<li class="ball"></li>
			</ul>
		</section>
		<section class="contactus" id="order-contact-form">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="contact-infos">
							<div class="contact-info">
								<h3 class="title">Virtue Corporate Physical Location</h3>
								<p class="description">
Tidel Park ,Hope College, Peelamedu, Coimbatore, 
									<br>Tamil Nadu, India- 641008</p>
								<div class="info phone"><i class="ei ei-icon_phone"></i> <span>+91 95979 65848</span></div>
							</div>
							<div class="contact-info">
								<h3 class="title">Virtue Corporate Contact Links</h3>
									<a title="Call/Phone Virtue Corporate" href="tel:+919597965848">Phone: +91 95979 65848 </a><br/>
									<a title="WhatsApp Virtue Corporate" href="https://api.whatsapp.com/send?phone=918610384884&text=Hi%20There%21">WhatsApp: +91 86103 84884 </a><br>
									<a title="E-Mail Virtue Corporate" href="mailto: info@virtuecorporate.in">Mail: info@virtuecorporate.in </a>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="contact-froms">
							<form role="form" action="contact.php" method="post" class="contact-form">
								<div class="row">
									<div class="col-md-6">
										<input type="text" name="name" placeholder="Name*" required>
									</div>
									<div class="col-md-6">
										<input type="email" name="email" placeholder="Email*" required>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<input type="text" name="company" placeholder="Company">
									</div>
									<div class="col-md-6">
										<input type="text" name="mobile" placeholder="Mobile Number*" required>
									</div>
								</div>
								<input type="text" name="subject" placeholder="Subject">
								<textarea name="message" placeholder="Your Message" required></textarea>
								<button type="submit" class="pix-btn submit-btn"><span class="btn-text">Send Your Message</span></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<footer id="footer" class="footer-two">
			<div class="container">
				<div class="footer-inner wow pixFadeUp">
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="widget footer-widget">
								<h3 class="widget-title">Virtue Corporate</h3>
								<ul class="footer-menu">
									<li><a href="service.html">Services</a></li>
									<li><a href="plan.html">Plans</a></li>
									<li><a href="contact.php">Contact</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="widget footer-widget">
								<h3 class="widget-title">Links for Booking &amp; Enquiry</h3>
								<ul class="footer-menu">
									<li><a href="tel:+919597965848">Phone: +91 95979 65848 </a></li>
									<li><a href="https://api.whatsapp.com/send?phone=918610384884&text=Hi%20There%21">WhatsApp: +91 86103 84884 </a></li>
									<li><a href="mailto: info@virtuecorporate.in">Mail: info@virtuecorporate.in </a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="widget footer-widget">
								<h3 class="widget-title">Our Address</h3>
								<p>
Tidel Park ,Hope College, Peelamedu, Coimbatore, Tamil Nadu, India- 641008</p>
								<ul class="footer-social-link">
								<li>
									<a href="https://www.facebook.com/VirtueCorporate/"
										><i class="fab fa-facebook-f"></i
									></a>
								</li>
								<li>
									<a href="https://twitter.com/VirtueCorporate"
										><i class="fab fa-twitter"></i
									></a>
								</li>
								<li>
									<a href="https://www.instagram.com/VirtueCorporate/"
										><i class="fab fa-instagram"></i
									></a>
								</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="site-info">
					<div class="copyright">
						<p>© <script>document.write(new Date().getFullYear())</script> All Rights Reserved | Virtue Corporate</p>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<?php
    if(isset($_POST['name']))
    {
        if(mail($to,$subject,$message,$headers)){
            echo "<script>
                    alert('Success! We will get back to you shortly.');
                </script>";
        }
        else{
            echo "<script>
                    consoel.log('Cannot send the Message');
                </script>";
        }
    }
?>
	<script src="dependencies/jquery/jquery.min.js"></script>
	<script src="dependencies/bootstrap/js/bootstrap.min.js"></script>
	<script src="dependencies/swiper/js/swiper.min.js"></script>
	<script src="dependencies/jquery.appear/jquery.appear.js"></script>
	<script src="dependencies/wow/js/wow.min.js"></script>
	<script src="dependencies/countUp.js/countUp.min.js"></script>
	<script src="dependencies/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="dependencies/imagesloaded/imagesloaded.pkgd.min.js"></script>
	<script src="dependencies/jquery.parallax-scroll/js/jquery.parallax-scroll.js"></script>
	<script src="dependencies/magnific-popup/js/jquery.magnific-popup.min.js"></script>
	<script src="dependencies/gmap3/js/gmap3.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&amp;ver=2.1.6"></script>
	<script src="assets/js/header.js"></script>
	<script src="assets/js/app.js"></script>
</body>

</html>