 <?php  
include 'connect.php';
if (isset($_POST['save'])) { 
        
               

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];





    $sql = "INSERT INTO Appointment (name,email,message,type) VALUES ('$name','$email','$message','Feedback')";
     // printf($sql);
     
     $html="<table><tr><td>Name:</td><td>$name</td></tr><tr><td>Email:</td><td>$email</td></tr><tr><td>Message:</td><td>$message</td></tr></table>";

include('smtp/PHPMailerAutoload.php');
    $mail=new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host="smtp.gmail.com";
    // $mail->SMTPDebug  = 3;
    $mail->SMTPSecure="tls";
    $mail->Port=587;
    
    $mail->SMTPAuth=true;
    $mail->CharSet = 'UTF-8';
    $mail->Username="ghugelegal@gmail.com";
     $mail->Username="ghugelegal@gmail.com";
    $mail->Password="etkpwzawpvevlbby";
    $mail->SetFrom("ghugelegal@gmail.com");
    $mail->addAddress("$email");
    $mail->addAddress("info@ghugeimmigration.com");
    $mail->IsHTML(true);
    $mail->Subject="Appointment - $cat";
    $mail->Body=$html;
    $mail->SMTPOptions=array('ssl'=>array(
        'verify_peer'=>false,
        'verify_peer_name'=>false,
        'allow_self_signed'=>false
    ));

if(!$mail->Send()){
        echo $mail->ErrorInfo;
    }else{
        echo "<div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
    <div class='modal-dialog' role='document'>
        <div class='modal-content'>
        <div class='modal-header'>
            <h5 class='modal-title' id='exampleModalLabel'>Form submitted successfully</h5>
            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
        </div>
        <div class='modal-body'>
          <h1 style='text-align: center; color:#d15555'>Thank you!!!</h1>
        </div>
        </div>
    </div>
    </div>";

    }

    if (mysqli_query($db,$sql)) {
    	header("Refresh:1; url=contact.php");
        // echo "uploaded successfully";
    	}
        
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact us | Ghuge Legal</title>
<meta name="description" content="Looking to study, work, travel, or immigrate to Canada? Connect with us to get the best immigration & paralegal consultation services." />
<link rel="canonical" href="https://ghugelegal.com/contact.php" />

<meta name="google-site-verification" content="c87QDIuBogapYGeXByyK5VS5xbAg8hU9e3fuzP52Y5I" />
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-244494317-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-244494317-1');
</script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<!-- <link rel="stylesheet" href="css/A.open-iconic-bootstrap.min.css+animate.css+owl.carousel.min.css+owl.theme.default.min.css+magnific-popup.css+aos.css+ionicons.min.css+bootstrap-datepicker.css+jquery.timepicker.css+flaticon.css+icomoon.css+style.css,Mcc.QEp-L0t-7x.css.pagespeed.cf.djr-S5i17M.css" /> -->
<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css" />
<link rel="stylesheet" href="css/animate.css" />
<link rel="stylesheet" href="css/owl.carousel.min.css" />
<link rel="stylesheet" href="css/owl.theme.default.min.css" />
<link rel="stylesheet" href="css/magnific-popup.css" />
<link rel="stylesheet" href="css/aos.css" />
<link rel="stylesheet" href="css/ionicons.min.css" />
<link rel="stylesheet" href="css/bootstrap-datepicker.css" />
<link rel="stylesheet" href="css/flaticon.css" />
<link rel="stylesheet" href="css/icomoon.css" />
<link rel="stylesheet" href="css/style111.css" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
<div class="container">
<a class="navbar-brand" href="index.php">Ghugelegal<span>.com</span></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
<span class="oi oi-menu"></span> Menu
</button>
<div class="collapse navbar-collapse" id="ftco-nav">
<ul class="navbar-nav ml-auto">
<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
<li class="nav-item"><a href="about.php" class="nav-link">About Me</a></li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="practice.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Practice Areas
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="Immigration.php">Immigration Services</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="notary_services.php">Notary Services and Commission of Oath</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="indian_visa.php">Indian Visa Services</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="landlord.php">Landlord and Tenant Board</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="smallclaims.php">Small Claims</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="administrative.php">Administrative Law</a>
    </div>
</li>
<li class="nav-item"><a href="attorney.php" class="nav-link">Team</a></li>
<li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
<li class="nav-item active"><a href="contact.php" class="nav-link">Contact</a></li>
</ul>
</div>
</div>
</nav>

<section class="js-fullheight">
<div class="third about-img js-fullheight"  style="background-image:url(images/xbg_5.jpg.pagespeed.ic.BmCBt1rLBB.webp)">
<div class="overlay"></div>
<div class="container">
<div class="row slider-text justify-content-center align-items-center">
<div class="col-md-7 col-sm-12 text-center ftco-animate">
<h1 class="mb-3 mt-5 bread">Contact Me</h1>
<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Contact</span></p>
</div>
</div>
</div>
</div>
</section>
<section class="ftco-section contact-section">
<div class="container">
<div class="row d-flex mb-5 contact-info">
<div class="col-md-12 mb-4">
<h2 class="heading">Contact Information</h2>
</div>
<div class="w-100"></div>
<div class="col-md-3 d-flex">
<div class="con align-self-stretch p-3">
<p><span>Address:</span> 52 Village Center Pl, Suite 103, Mississauga, Ontario. L4Z 1V9</p>
</div>
</div>
<div class="col-md-3 d-flex">
<div class="con align-self-stretch p-3">
<p><span>Phone:</span><a href="tel:+1 416-816-9249">+1 416-816-9249</a></p>
</div>
</div>
<div class="col-md-3 d-flex">
<div class="con align-self-stretch p-3">
<p><span>Email:</span> <a href="mailto:info@ghugelegal.com"><span class="__cf_email__" data-cfemail="bdd4d3dbd2fdc4d2c8cfced4c9d893ded2d0">info@ghugelegal.com</span></a></p>
</div>
</div>
</div>
<div class="row block-9">
<div class="col-md-6 pr-md-5">
<form method="post">
<div class="form-group">
<input type="text" id="name" name="name" class="form-control" placeholder="Your Name">
</div>
<div class="form-group">
<input type="text" id="email" name="email" class="form-control" placeholder="Your Email">
</div>
<!-- <div class="form-group">
<input type="text" class="form-control" placeholder="Subject">
</div> -->
<div class="form-group">
<textarea id="message" name="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
</div>
<div class="form-group">
<input type="submit" name="save" value="Send Message" class="btn btn-primary py-3 px-5">
</div>
</form>
</div>
<div class="col-md-6 d-flex">
<div id="map"></div>
</div>
</div>
</div>
</section>
<footer class="ftco-footer ftco-bg-dark ftco-section">
<div class="container">
<div class="row mb-5 d-flex">
<div class="col-md">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2">About Me</h2>
<p>Licensed Paralegal, Notary Public and Regulated Canadian Immigration Consultant</p>
<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
<li class="ftco-animate"><a target = '_blank' href="https://www.facebook.com/Ghugelegal"><span class="icon-facebook"></span></a></li>
<li class="ftco-animate"><a target = '_blank' href="https://www.instagram.com/ghugelegal"><span class="icon-instagram"></span></a></li>
</ul>
</div>
</div>
<div class="col-md">
<div class="ftco-footer-widget mb-4 ml-md-4">
<h2 class="ftco-heading-2">Usefull Links</h2>
<ul class="list-unstyled">
<li><a href="practice.php#link">Immigration Services</a></li>
<li><a href="practice.php#link">Notary Services</a></li>
<li><a href="practice.php#link">Small Claims</a></li>
<li><a href="practice.php#link">Landlord & Tenant Board</a></li>
<li><a href="practice.php#link">Indian Visa Services</a></li>
</ul>
</div>
</div>
<div class="col-md">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2">Quick Links</h2>
<ul class="list-unstyled">
<li><a href="#">About Us</a></li>
<li><a href="#">Practice Areas</a></li>
<li><a href="#">Appointment</a></li>
<li><a href="#">Terms &amp; Conditions</a></li>
<li><a href="#">FAQ</a></li>
</ul>
</div>
</div>
<div class="col-md">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2">Have a Questions?</h2>
<div class="block-23 mb-3">
<ul>
<li><span class="icon icon-map-marker"></span><span class="text">52 Village Center Pl, Suite 103, Mississauga, Ontario. L4Z 1V9</span></li>
<li><a href="tel:+1 416-816-9249"><span class="icon icon-phone"></span><span class="text">+1 416-816-9249</span></a></li>
<li><a href="mailto:info@ghugelegal.com"><span class="icon icon-envelope"></span><span class="text"><span class="__cf_email__" data-cfemail="9cf5f2faf3dce5f3e9eef8f3f1fdf5f2b2fff3f1">info@ghugelegal.com</span></span></a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12 text-center">
<p>
Copyright &copy;<script data-cfasync="false" src="js/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | Ghuge Legal Services
</p>
</div>
</div>
</div>
</footer>

<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" /><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>
<script src="js/jquery.min.js"></script>
<!-- <script src="js/jquery-migrate-3.0.1.min.js+popper.min.js+bootstrap.min.js+jquery.easing.1.3.js.pagespeed.jc.E8J79OZgT1.js"></script><script> -->

<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js.pagespeed.jc.E8J79OZgT1.js"></script>




<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js.pagespeed.jc.Ooq5mjv5-e.js"></script>



<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js.pagespeed.jc.E2EXlsLxSa.js"></script>




<script src="js/scrollax.min.js"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js.pagespeed.jc.9itvz-kvdk.js"></script>

eval(mod_pagespeed_KC55CzVDDl);</script>
<script>eval(mod_pagespeed_iHmypBWNFp);</script>
<script>eval(mod_pagespeed_CqIeFRz52A);</script>
<script>eval(mod_pagespeed_G88wUcvWeA);</script>
<!-- <script src="js/jquery.waypoints.min.js+jquery.stellar.min.js+owl.carousel.min.js+jquery.magnific-popup.min.js.pagespeed.jc.Ooq5mjv5-e.js"></script> -->
<script>eval(mod_pagespeed__gPKz9Igt7);</script>
<script>eval(mod_pagespeed_C8vla874hU);</script>
<script>eval(mod_pagespeed_BSwXZH_IjI);</script>
<script>eval(mod_pagespeed_Cg4Qv3M1Z0);</script>
<!-- <script src="js/aos.js+jquery.animateNumber.min.js+bootstrap-datepicker.js.pagespeed.jc.E2EXlsLxSa.js"></script> -->

<script>eval(mod_pagespeed_g7tY7fS6FC);</script>
<script>eval(mod_pagespeed_uL4PF9GPGr);</script>
<script>eval(mod_pagespeed_2GW74oBafB);</script>
<script src="js/jquery.timepicker.min.js"></script>
<!-- <script src="js/scrollax.min.js+google-map.js+main.js.pagespeed.jc.9itvz-kvdk.js"></script> -->

<script>eval(mod_pagespeed_KA88T91QG9);</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script>eval(mod_pagespeed_oka7wjI_4Y);</script>
<script>eval(mod_pagespeed_x3fPozwB0K);</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"71b9cb1f9ff63c13","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.6.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>