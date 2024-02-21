 <?php  
include 'connect.php';
if (isset($_POST['save'])) { 
        
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $cat = $_POST['cat'];
    $message = $_POST['message'];

$sql = "INSERT INTO Appointment	 (name,date,email,categories,message,type) VALUES ('$name','$date','$email','$cat','$message','Appointment')";

$html="<table><tr><td>Name:</td><td>$name</td></tr><tr><td>Email:</td><td>$email</td></tr><tr><td>Date:</td><td>$date</td></tr><tr><td>Category:</td><td>$cat</td></tr><tr><td>Message:</td><td>$message</td></tr></table>";

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
    $mail->Password="etkpwzawpvevlbby";
    $mail->SetFrom($email);
    $mail->addAddress("ghugelegal@gmail.com");
    $mail->addAddress("info@ghugelegal.com");
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
    	header("Refresh:1; url=index.php");
        // echo "uploaded successfully";
    	}
}

if (isset($_POST['save1'])) { 
    $name = $_POST['name1'];
    $email = $_POST['email1'];
    $cat = $_POST['cat1'];
    $message = $_POST['message1'];
    
    
    $html="<table><tr><td>Name:</td><td>$name</td></tr><tr><td>Email:</td><td>$email</td></tr><tr><td>Date:</td><td>$date</td></tr><tr><td>Category:</td><td>$cat</td></tr><tr><td>Message:</td><td>$message</td></tr></table>";

    $sub = "Enquiry - $cat";
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
    $mail->Password="etkpwzawpvevlbby";
    // $mail->SetFrom = "nandan.mrn@gmail.com";
    $mail->addAddress("ghugelegal@gmail.com");
    $mail->addAddress("info@ghugelegal.com");
    $headers = 'From: webmaster@example.com';
    $mail->IsHTML(true);
    $mail->Subject=$sub;
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
          <h1 style='text-align: center; color:#d15555 '>Thank you!!!</h1>
        </div>
        </div>
    </div>
    </div>";
    }

    $sql = "INSERT INTO Appointment	 (name,email,categories,message,type) VALUES ('$name','$email','$cat','$message','Enquiry')";
    if (mysqli_query($db,$sql)) {
    	header("Refresh:1; url=index.php");
    	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Immigration Consultant & Licensed Paralegal in Mississauga | Ghuge Legal</title>
<meta name="description" content="Ghuge Legal is one of the top immigration and paralegal consultant in Mississauga, Ontario. Book a consultation to get a free assessment & advice needed for Canadian immigration!" />
<link rel="canonical" href="https://ghugelegal.com/" />

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
<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css" />
<link rel="stylesheet" href="css/nice-select.css" />
<link rel="stylesheet" href="css/animate.css"/>
<link rel="stylesheet" href="css/owl.carousel.min.css" />
<link rel="stylesheet" href="css/owl.theme.default.min.css" />
<link rel="stylesheet" href="css/magnific-popup.css" /> 

<link rel="stylesheet" href="css/aos.css" />
<link rel="stylesheet" href="css/ionicons.min.css" />
<link rel="stylesheet" href="css/bootstrap-datepicker.css" />
<link rel="stylesheet" href="css/flaticon.css" />
<link rel="stylesheet" href="css/icomoon.css" />
<link rel="stylesheet" href="css/style111.css" />


<!-- popup -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!-- End of popup -->
</head>
<body>
<nav style="background-color:#ffffff00!important;position:absolute!important" class="navbar navbar-expand-lg navabar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
<div class="container">
<a class="navbar-brand" href="/">Ghugelegal<span>.com</span></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
<span class="oi oi-menu"></span> Menu
</button>
<div class="collapse navbar-collapse" id="ftco-nav">
<ul class="navbar-nav ml-auto">
<li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
<li class="nav-item"><a href="about.php" class="nav-link">About Me</a></li>
<!-- <li class="nav-item"><a href="practice.php" class="nav-link">Practice Areas</a></li> -->

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
<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
</ul>
</div>
</div>
</nav>

<section class="hero-wrap d-flex js-fullheight">
<div class="forth js-fullheight d-flex align-items-center">
<div class="text">
	<br /><br /><br /><br /><br /><br /><br /><br />
	<br /><br />
<span class="subheading">Welcome to,</span>
<h1>Ghuge Immigration and Legal Services</h1>
<!--<h2 class="mb-5">One stop solution to all your legal needs.</h2> -->
<!--<h2 class="mb-5">Notary services at affordable price.</h2> -->
<h2>*Our Notary Charges for the First Page is $19.99 and rest at $9.99 per page for Certified True Copies only</h2>
</div>
</div>
<div class="third about-img js-fullheight" style="background-image:url(images/xbg_2.webp)">
<!--<span class="icon-play"></a> -->
</a>
</div>
</section>
<section class="ftco-consult bg-light">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-2 text-lg-right">
<h3 class="mb-4 mb-lg-0">Enquiry Form</h3>
</div>
<div class="col-lg-10">
<form method="post" class="consult-form py-5">
<div class="d-lg-flex align-items-md-end">
<div class="form-group mb-3 mb-lg-0 mr-4">
<label for="#">Name</label>
<input type="text" id="name1" name="name1" class="form-control" placeholder="Name" required>
</div>
<div class="form-group mb-3 mb-lg-0 mr-4">
<label for="#">Email Address</label>
<input type="email" id="email1" name="email1" class="form-control" placeholder="Email Address" required>
</div>
<div class="form-group mb-3 mb-lg-0 mr-4">
<label for="#">Categories(optional)</label>
<div class="form-field">
<div class="select-wrap">
<div class="icon"><span class="ion-ios-arrow-down"></span></div>
<select  id="cat1" name="cat1" class="form-control" required>
<option id="select" value="">SELECT</option>
<option value="Immigration Services">Immigration Services</option>
<option value="Notary Services">Notary Services</option>
<option value="Landlord & Tenant Board">Landlord & Tenant Board</option>
<option value="Indian Visa Services">Indian Visa Services</option>
<option value="Small Claims">Small Claims</option>
<option value="Administritive Law">Administritive Law</option>
</select>
</div>
</div>
</div>
<div class="form-group mb-3 mb-lg-0 mr-4">
<label for="#">Message</label>
<textarea id="message1" name="message1"cols="30" rows="3" class="form-control d-flex align-items-center" placeholder="Message"></textarea>
</div>
<div class="form-group">
<input type="submit" name="save1" value="Send Message" class="btn btn-primary py-3 px-4">
</div>
</div>
</form>
</div>
</div>
</div>
</section>
<section class="ftco-section ftco-services">
<div class="container" id="link">
<div class="row justify-content-center mb-5 pb-3">
<div class="col-lg-7 heading-section ftco-animate">
<h2 class="subheading">Services</h2>

<p>At Ghuge Legal Services, we provide Legal and Immigration services to both local and international Clients, Companies, and Organizations. We endeavor hard to provide best service to our clients.</p>
<h4 class="mb-4">Our Practice Areas:</h4>
</div>
</div>
<div style="padding-left: 15%" class="row col-lg-12" >
<div class="col-md-6 col-lg-4 d-flex align-self-stretch ftco-animate">
<div class="media block-6 services">
<div class="icon d-flex justify-content-center align-items-center mb-4">
    <a href="notary_services.php#link">
<span class="flaticon-family-room"></span></a>
</div>
<div class="media-body">
<h3 class="heading">Notaries</h3>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 d-flex align-self-stretch ftco-animate">
<div class="media block-6 services">
<div class="icon d-flex justify-content-center align-items-center mb-4">
    <a href="smallclaims.php#link">
<span class="flaticon-bar-chart"></span></a>
</div>
<div class="media-body">
<h3 class="heading">Small Claims Court</h3>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 d-flex align-self-stretch ftco-animate">
<div class="media block-6 services">
<div class="icon d-flex justify-content-center align-items-center mb-4">
    <a href="administrative.php#link">
<span class="flaticon-medicine"></span></a>
</div>
<div class="media-body">
<h3 class="heading">Employment Law</h3>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 d-flex align-self-stretch ftco-animate">
<div class="media block-6 services">
<div class="icon d-flex justify-content-center align-items-center mb-4">
    <a href="landlord.php#link">
<span class="flaticon-prison"></span></a>
</div>
<div class="media-body">
<h3 class="heading">Landlord & Tenant Disputes</h3>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 d-flex align-self-stretch ftco-animate">
<div class="media block-6 services">
<div class="icon d-flex justify-content-center align-items-center mb-4">
    <a href="indian_visa.php#link">
<span class="flaticon-prison"></span></a>
</div>
<div class="media-body">
<h3 class="heading">Indian Visa Services</h3>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 d-flex align-self-stretch ftco-animate">
<div class="media block-6 services">
<div class="icon d-flex justify-content-center align-items-center mb-4">
    <a href="Immigration.php#link">
<span class="flaticon-prison"></span></a>
</div>
<div class="media-body">
<h3 class="heading">Immigration Services</h3>
</div>
</div>
</div>
</div>
</section>
<section class="ftco-section ftco-counter img" id="section-counter" style="background-image:url(images/bg_3.jpg.webp)" data-stellar-background-ratio="0.5">
<div class="container">
<div class="row d-md-flex align-items-center">
<div class="col-lg-4">
<div class="heading-section pl-md-5 heading-section-white">
<div class="ftco-animate">
<span class="subheading">Some</span>
<h2 class="mb-4">Interesting Facts</h2>
</div>
</div>
</div>
<div class="col-lg-8">
<div class="row d-md-flex align-items-center">
<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
<div class="block-18 text-center">
<div class="text">
<strong class="number" data-number="300">0</strong>
<span>Trusted clients</span>
</div>
</div>
</div>
<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
<div class="block-18 text-center">
<div class="text">
<strong class="number" data-number="500">0</strong>
<span>Consultations</span>
</div>
</div>
</div>
<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
<div class="block-18 text-center">
<div class="text">
<strong class="number" data-number="3">0</strong>
<span>Certifications</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="ftco-section ftc-no-pt">
<div class="container">
<div class="row no-gutters">
<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center order-md-last" style="background-image:url(images/bg_1.jpg.webp)">
</div>
<div class="col-md-7 wrap-about pt-md-5 ftco-animate">
<div class="heading-section mb-5 pt-5 pl-md-5">
<div class="pr-md-5 mr-md-5 text-md-right">
<span class="subheading">Facilitating</span>
<h2 class="mb-4">Access to Justice</h2>
</div>
</div>
<div class="pr-md-3 pr-lg-5 pl-md-5 mr-md-5 mb-5">
<div class="services-wrap d-flex">
<div class="icon d-flex justify-content-center align-items-center">
<span class="flaticon-auction"></span>
</div>
<div class="media-body pl-md-0 pl-4 pr-4 order-md-first text-md-right">
<h3 class="heading">Fight for Justice</h3>
<p>We relentlessly fight for your constitutional rights while handling all our cases with empathy and dexterity.</p>
</div>
</div>
<div class="services-wrap d-flex">
<div class="icon d-flex justify-content-center align-items-center">
<span class="flaticon-auction"></span>
</div>
<div class="media-body pl-md-0 pl-4 pr-4 order-md-first text-md-right">
<h3 class="heading">Best Case Strategy</h3>
<p>We work towards success by crafting winning strategies which is optimized to cater to your personal needs</p>
</div>
</div>
<div class="services-wrap d-flex">
<div class="icon d-flex justify-content-center align-items-center">
<span class="flaticon-auction"></span>
</div>
<div class="media-body pl-md-0 pl-4 pr-4 order-md-first text-md-right">
<h3 class="heading">Profound Experience</h3>
<p>With our immense knowledge and profound experience, we help clients obtain favourable decisions regardless the complexity of the case.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="testimony-section">
<div class="container">
<div class="row justify-content-center mb-5">
<div class="col-md-7 heading-section ftco-animate text-center">
<span class="subheading">Testimony</span>
<h2 class="mb-4">Client Testimony</h2>
</div>
</div>
<div class="row ftco-animate">
<div class="col-md-12">
<div class="carousel-testimony owl-carousel">
<div class="item">
<div class="testimony-wrap p-4 pb-5 text-center">
<span class="quote d-flex align-items-center justify-content-center">
<i class="icon-quote-left"></i>
</span>
<div class="text">
<p class="mb-5 pl-4 line">Sunil has been very welcoming and receptive to my needs. He understands the process very clearly and thoroughly. Despite my very complex circumstances , he explained all the procedures clearly to me and filled out all the information and submitted it to the government in a professional and timely manner without wasting any time or ambiguity.</p>
<p class="name">Imran Butt</p>
</div>
</div>
</div>
<div class="item">
<div class="testimony-wrap p-4 pb-5 text-center">
<span class="quote d-flex align-items-center justify-content-center">
<i class="icon-quote-left"></i>
</span>
<div class="text">
<p class="mb-5 pl-4 line">I would recommend Ghuge Legal Services for all your landlord tenancy issues. Mr. Ghuge is very knowledgeable and handles the cases in a very professional manner, and gets positive results</p>
<br /><br /><br />
<p class="name">Preeti Rao</p>
</div>
</div>
</div>
<div class="item">
<div class="testimony-wrap p-4 pb-5 text-center">
<span class="quote d-flex align-items-center justify-content-center">
<i class="icon-quote-left"></i>
</span>
<div class="text">
<p class="mb-5 pl-4 line">The best thing about Mr. Ghuge is him being honest. He will tell you what is possible and what is not. I have been to lawyers who were counting hours by dragging issues with law jargon. Easy to manipulate gullible clients with tech terms we don't understand.</p>
<p class="name">Mohan Reddy Timma Reddy</p>
</div>
</div>
</div>
<div class="item">
<div class="testimony-wrap p-4 pb-5 text-center">
<span class="quote d-flex align-items-center justify-content-center">
<i class="icon-quote-left"></i>
</span>
<div class="text">
<p class="mb-5 pl-4 line">Excellent service. HIGHLY recommend!</p>
<p class="name">Gina Palmer</p>
</div>
</div>
</div>
<div class="item">
<div class="testimony-wrap p-4 pb-5 text-center">
<span class="quote d-flex align-items-center justify-content-center">
<i class="icon-quote-left"></i>
</span>
<div class="text">
<p class="mb-5 pl-4 line">Ghuge helped us notarize our papers and was very willing and able to accommodate our needs accordingly. Thank you.</p>
<p class="name">Charles </p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="ftco-section ftc-no-pb ftc-no-pt bg-light">
<div class="container">
<div class="row align-items-md-center">
<div class="col-md-5 pt-5">
<form id="#dropdown" method="post" class="consult-form py-5">
<div class="row">
<div class="col-md-6">
<div class="form-group mb-4"> 
<label for="#">Name</label>
<input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
</div>
</div>
<div class="col-md-6">
<div class="form-group mb-4">
<label for="#">Email Address</label>
<input type="text" id="email" name="email" class="form-control" placeholder="Email Address" required>
</div>
</div>
<div class="col-md-6">
<div class="form-group mb-4">
<label for="#">Date</label>
<div class="form-field">
<input type="Date" id="date" name="date" class="form-control" placeholder="yyyy-mm-dd" required>
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group mb-4">
<label for="#">Categories(optional)</label>
<div class="form-field">
<div class="select-wrap">
<div class="icon"><span class="ion-ios-arrow-down"></span></div>
<select id="cat"name="cat" class="form-control" required>
<option id="select" value="">SELECT</option>
<option value="Immigration Services">Immigration Services</option>
<option value="Notary Services">Notary Services</option>
<option value="Landlord & Tenant Board">Landlord & Tenant Board</option>
<option value="Indian Visa Services">Indian Visa Services</option>
<option value="Small Claims">Small Claims</option>
<option value="Administritive Law">Administritive Law</option>
</select>
</div>
</div>
</div>
</div>
<div class="col-md-12">
<div class="form-group mb-4">
<label for="#">Message</label>
<textarea id="message" name="message" cols="30" rows="7" class="form-control form-control-2 d-flex align-items-center" placeholder="Message"></textarea>
</div>
</div>
<div class="col-md-12">
<div class="form-group mb-4">
<input type="submit" name="save" value="Make an Appointment" class="btn btn-primary py-3 px-4">
</div>
</div>
</div>
</form>
</div>
<div class="col-md-7 wrap-about pb-5 ftco-animate">
<div class="heading-section mb-md-5 pl-md-5 mt-md-5 pt-3">
<div class="pl-md-3">
<span class="subheading">Appointment</span>
<h2 class="mb-4">Make An Appointment</h2>
</div>
</div>
<div class="pl-md-3">
<p>Make an appointment or enquiry to get quotes and estimates to avail our services for Notarization, Legalization of Documents, Canadian Immigration & Citizenship applications, Wrongful dismissal, Landlord & Tenant disputes, Indian Visa Services, and Employment Law.</p>
<p>For concerns and inquiries about our legal services, you may get in touch using the contact form on this page.
</p>
</div>
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
<li><a href="about.php">About Us</a></li>
<li><a href="practice.php">Practice Areas</a></li>
<li><a href="attorney.php">Team</a></li>
<li><a href="blog.php">Blog</a></li>
<li><a href="contact.php">Contact</a></li>
</ul>
</div>
</div>
<div class="col-md">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2">Have a Question?</h2>
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
<script>eval(mod_pagespeed_KC55CzVDDl);</script>
<script>eval(mod_pagespeed_iHmypBWNFp);</script>
<script>eval(mod_pagespeed_CqIeFRz52A);</script>
<script>eval(mod_pagespeed_G88wUcvWeA);</script>
<script>eval(mod_pagespeed__gPKz9Igt7);</script>
<script>eval(mod_pagespeed_C8vla874hU);</script>
<script>eval(mod_pagespeed_BSwXZH_IjI);</script>
<script>eval(mod_pagespeed_Cg4Qv3M1Z0);</script>
<script>eval(mod_pagespeed_g7tY7fS6FC);</script>
<script>eval(mod_pagespeed_uL4PF9GPGr);</script>
<script>eval(mod_pagespeed_2GW74oBafB);</script>
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
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"71a96ce42bc93c07","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>


<!-- Popup -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
       $(document).ready(function(){
            $('#exampleModal').modal('show');
        }); 
    </script>
<!-- Popup End -->
</body>
</html>