<?php include_once "includes/dynamics.php"; ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="EI=egde">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo $description ?>">
	<meta name="keywords" content="<?php echo $keywords ?>">
	<link rel="shortcut icon" type="images/png" href="favicon.png" />
	<!-- FACEBOOK -->
	<meta name="keywords" content="<?php echo $keywords ?>">
	<meta property="og:url" content="http://maobatechsolutions.com">
	<meta property="og:type" content="website">
	<meta property="og:title" content="<?php echo $title ?>">
	<meta property="og:description" content= "<?php echo $description ?>">
	<meta property="og:image" content="http://maobatechsolutions.com/fblogo.png">

	<!-- DEPENDENCY -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<title><?php echo $title ?></title>
	<link rel="stylesheet"  href="css/style.css" href=”image.css”>
	<link rel="stylesheet"  href="css/sample.css" href=”image.css”>
</head>
<body>
<header>
  <nav>
      <aside>
        <div class="social-links">
          <a href="<?=$calltell ; ?>"><img src="assests/social/call.png" alt="call-icon" /></a>
          <a href="<?=$facebook ; ?>"><img src="assests/social/facebook.png" alt="facebook-icon" /></a>
          <a href="<?=$whatApp ; ?>"><img src="assests/social/whatsapp.png" alt="whatsapp-icon" /></a>
          <a href="#" onClick="formModalOpen();"><img src="assests/social/email.png" alt="email-icon" /></a>
        </div>
      </aside>
      <article >
        <img src="logo.png" alt="logo" />
        <div class="flexy-cen">
          <ul>
            <li><a href="index.php">About Us</a></li>
            <li><a href="services">Services</a></li>
            <li><a href="fleets">Fleets</a></li>
						<li><a href="#" onClick="branchModalOpen(this);">Branches</a></li>
            <li><a href="contact-us">Get In Touch</a></li>
          </ul>
        </div>
      </article>
  </nav>
</header>
<main>

<!-- HERO SECTION -->
<section id="home-hero">
  <div id="hero-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active slide-Item1">
      <aside>
					<h2>WE ARE HERE TO SERVE YOU WITH PRIDE AND DIGNITY.</h2>
					<p>WRebangwe Funerals believe in the passionate pursuit of excellence with uncompromising services and integrity.</p>
					<button>Whtas app</button>
			</aside>
      </div>
  	<div class="carousel-item slide-Item2">
      <aside><h1>this is 2</h1></aside>
      </div>
  	<div class="carousel-item slide-Item3">
  		<aside><h1>this is 3</h1></aside>
      </div>
    <a class="carousel-control-prev caro-btn" href="#hero-carousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next caro-btn" href="#hero-carousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</section>
<!-- about section -->
<section id="about-us" class="container">
  <div class="row">
    <article class="col-lg-6 col-md-6 flexy-cen ">
			<img src="assests/gallery/about-ero.png" />
    </article>
    <aside class="col-lg-6 col-md-6 flexy-col">
      <p class="head-small">Welcome to <?=$busName ;?></p>
      <p class="head-medius common-para">Experience the Difference</p>
      <p>Rebangwe funerals is funeral parlor business located in Zeerust, in a neat facility specifically designed and equipped to provide excellent funeral parlor services. Rebangwe Funerals is juristic representative of The Pyramid Funeral Group which is an Authorized Financial Services Provider |FSP 51428. Rebangwe Funerals believe in the passionate pursuit of excellence and financial success with uncompromising services and integrity.</p>
      <div class="more flexy-col">
        <p class="content">Our values will help us drive the business to creating value for all stakeholders and also help us attract the numbers of clients that will make our business breakeven within the shortest time frame possible. We will arrange services in accordance with the wishes of surviving friends and family members of the deceased, whether immediate next of kin or an executor so named in a legal will. We will take care of the necessary paperwork, permits, and other details, such as making arrangements with the cemetery. We have the required staff strength and we will run a 24 hours a day and seven days a week services.</p>
        <button class="add-more btn-col-1">Read More</button>
      </div>
    </aside>
  </div>
</section>
<!-- services -->
<section id="services" class="container-fluid flexy-col">
  <p class="head-small">Our funeral</p>
  <h3 class="title-head">Services</h3>
  <div class="row">
    <article class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
        <aside class="pop-forwards flexy-col">
          <img src="assests/icons/group_work.svg" />
          <h2>Grieving Support</h2>
        </aside>
      </article>
    <article class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
        <aside class="pop-forwards flexy-col">
          <img src="assests/icons/video.svg" />
				<h2>Funeral Service Recordings</h2>
        </aside>
      </article>
    <article class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
        <aside class="pop-forwards flexy-col">
					<img src="assests/icons/book.svg" />
          <h2>Memorial Book</h2>
        </aside>
      </article>
    <article class="col-lg-3 col-md-3  col-sm-6 col-xs-6 ">
        <aside  class="pop-forwards flexy-col">
				<img src="assests/icons/flag.svg" />
          <h2>Grave Marker</h2>
        </aside>
    </article>
    <div class="flexy-cen">
      <button class="go-to add-more btn-col-1"><a href="services" >VIEW ALL</a></button>
    </div>
  </div>
</section>
<!-- HERO CENTER -->
<section id="hero-center" class="container-fluid">
  <article class="">
    <aside class="flexy-col">
			<h1>Carry Momerial Forever</h1>
			<p>Rebangwe funerals is funeral parlor business located in Zeerust, in a neat facility specifically designed and equipped to provide excellent funeral parlor services. Rebangwe Funerals is juristic representative of The Pyramid Funeral Group which is an Authorized Financial Services Provider |FSP 51428. Rebangwe Funerals believe in the passionate pursuit of excellence and financial success with uncompromising services and integrity.</p>
      <div class="flexy-cen">
        <button class="go-to add-more btn-col-2"><a href="<?=$calltell?>">GET IN TOUCH</a></button>
      </div>
    </aside>
  </article>
</section>
<!-- <section id="section" class="container-fluid flexy-cen">
  <h1>why us</h1>
</section> -->
<!-- TESTIMONIALS -->
<section id="testimoanial" class="container-fluid flexy-cen">
  <div id="testimoanial-carousel" class="carousel slide" data-ride="carousel">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
      <li data-target="#testimoanial-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#testimoanial-carousel" data-slide-to="1"></li>
      <li data-target="#testimoanial-carousel" data-slide-to="2"></li>
      <li data-target="#testimoanial-carousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active slide-Item1">
        <h3>SLIDE 1</h3>
      </div>
  	<div class="carousel-item slide-Item2">
        <h3>SLIDE 2</h3>
      </div>
  	<div class="carousel-item slide-Item3">
  		<h3>SLIDE 3</h3>
    </div>
    <div class="carousel-item slide-Item4">
  		<h3>SLIDE 3</h3>
    </div>
  </div>
</div>
</section>

<!-- Love ones -->
<section id="love-one" class="container-fluid">
  <div class="row flexy-cen">
    <article class="col-lg-7 col-md-9 col-ms-10">
			<h3>Have you lost a loved one?</h3>
      <p>We understand it’s never easy to lose a loved one. That is why we offer the highest quality of personalized services and support through this traumatic time. We can help you with all the necessary arrangements of the funeral while you take time to grieve and spend these trying times with your family while you ret assured that everything is being sorted out by us and our team.</p>
      <div class="flexy-cen">
        <button class=""><a href="#">Request Funeral Arrangements</a></button>
      </div>
    </article>
  </div>
</section>


<section class="news-update">
	<h3 class="title-head">RECENT MEMORIES</h3>
	<div class="row">
		<article class="col-lg-6 col-md-6">
				<img src="assests/gallery/recent2.jpg" />
			<h4>Johan en Raquel</h4>
			<div class="content">
				<p><?=$who ?></p>
			</div>
			<a data-toggle="modal" data-target="#functional-modal"><button class="show-btn">Show More</button></a>
		</article>
		<article class="col-lg-6 col-md-6">
			<img src="assests/gallery/recent1.jpg" />
			<h4>Lebogang & Refilwe</h4>
			<div class="content">
				<p><?=$who ?></p>
			</div>
			<a data-toggle="modal" data-target="#functional-modal"><button class="show-btn">Show More</button></a>
		</article>
	</div>
</section>

<section id="branches-modal" class="container-fluid customed-modal">
	<div  class="container content ">
			<article class="flexy-col">
				<div class="header">
					<button type="button" onClick="branchModalClose();" aria-hidden="true"> &times; </button>
				</div>
				<div class="row">
					 	<aside class="col-lg-4 col-md-4 flexy-col">
							<img src="assests/carousels/office.jpg" alt="rebangwe-office-image" />
								<h4>Zeerust Branch</h4>
							<button>Directions</button>
						</aside>
						<aside class="col-lg-4 col-md-4 flexy-col">
							<img src="assests/carousels/office.jpg" alt="rebangwe-office-image" />
								<h4>Mafikeng Branch</h4>
							<button>Directions</button>
						</aside>
						<aside class="col-lg-4 col-md-4 flexy-col">
							<img src="assests/carousels/office.jpg" alt="rebangwe-office-image" />
								<h4>Rustenburg Branch</h4>
							<button>Directions</button>
						</aside>
				</div>
					<div class="footer">
						<button type="button" onClick="branchModalClose();" aria-hidden="true">Close </button>
					</div>
		</article>
	</div>

</section>
<section id="form-modal" class="container-fluid customed-modal">
	<div  class="container content ">
			<article class="flexy-col">
				<div class="header">
					<button type="button" onClick="formModalClose();" aria-hidden="true"> &times; </button>
				</div>
				<div class="row">
					<form class="form-horizontal" role="form" action="" Method="POST">
						<div class="form-group">
							<label for="firstname" class="col-sm-2 control-label">First Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="firstname" placeholder="Enter First Name">
							</div>
						</div>
						<div class="form-group">
							<label for="firstname" class="col-sm-2 control-label">Email</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" id="email" placeholder="Enter email here">
							</div>
						</div>
						<div class="form-group">
							<label for="firstname" class="col-sm-2 control-label">Contact (OPTIONAL)</label>
							<div class="col-sm-10">
								<input type="tel" class="form-control" id="contact" placeholder="Enter Contact number">
							</div>
						</div>
						<div class="form-group">
							<label for="message" class="col-sm-2 control-label">Message</label>
							<div class="col-sm-10">
								<textarea class="form-control" rows="3"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-10">
								<button class="add-more" type="submit">SEND</button>
							</div>
						</div>
					</form>
				</div>
					<div class="footer">
						<button type="button" onClick="formModalClose();" aria-hidden="true">Close </button>
					</div>
		</article>
	</div>

</section>


	<section id="easy-contact" class="clr2">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-lg-6">
				<form class="form-horizontal" role="form" action="" Method="POST">
		      <div class="form-group flexy-col">
		        <label for="firstname" class="control-label">First Name</label>
		        <div class="col-sm-10">
		          <input type="text" class="form-control" id="firstname" placeholder="Enter First Name">
		        </div>
		      </div>
		      <div class="form-group flexy-col">
		        <label for="firstname" class="control-label">Email</label>
		        <div class="col-sm-10">
		          <input type="email" class="form-control" id="email" placeholder="Enter email here">
		        </div>
		      </div>
		      <div class="form-group flexy-col">
		        <label for="firstname" class="control-label">Contact (OPTIONAL)</label>
		        <div class="col-sm-10">
		          <input type="tel" class="form-control" id="contact" placeholder="Enter Contact number">
		        </div>
		      </div>
		      <div class="form-group flexy-col">
		        <label for="message" class="col-sm-2 control-label">Message</label>
		        <div class="col-sm-10">
		          <textarea class="form-control" rows="3"></textarea>
		        </div>
		      </div>
		      <div class="form-group">
		        <div class="col-sm-10">
		          <button class="add-more" type="submit">SEND</button>
		        </div>
		      </div>
		    </form>
			</div>
			<div class= "col-lg-6 col-md-12 adress clr1">
				<div class="locationIconAds" style="margin:15px;">
					<img src="assests/social/location-icon.jpg" alt="location-icon" style=" border-radius : 20px"/>
				</div>
				<h3> Adress </h3>
				<a href="https://www.google.com/maps/dir//Dinokana+2868/@-25.4432013,25.8640062,14z/data=!4m5!4m4!1m0!1m2!1m1!1s0x1ebcd74e65f1d201:0x5bca1fdebf5ea66a"><button type="submit" class="btn">DIRECTION</button></a>
				<p>Dinokana</p>
				<p>Zeerust</p>
				<p>North West</p>
				<p>2969</p>
				<p>South Africa</p>
			</div>
		</div>
	</div>
</section>
<footer >
	<article id="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3599.620971690394!2d26.08457070234678!3d-25.5509994732904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ebd1929dbe801a5%3A0x4f35ce2e77cbc22!2s41%20Klip%20St%2C%20Zeerust%2C%202865!5e0!3m2!1sen!2sza!4v1662028571227!5m2!1sen!2sza" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </article>
  <aside class="refer">
    <div class="full-width flexy-col">
			<h3>Refer a Friend</h3>
	    <p>These are indeed trying times and preparation is the best form of defence. Grief is a very difficult process to go through, it demands a lot of emotional as well as physical strength. We pride ourselves in assuring our family take time to mourn their loved one while we handle all the aspect of your funeral arrangement. Don’t get caught unprepared and make sure you are covered for such unforeseen times.</p>
	    <div class="flexy-cen">
	      <button class="go-to add-more"><a href="services">VIEW ALL</a></button>
	    </div>
		</div>
  </aside>
  <div class="footer-links">
    <h1>I AM FOOTER</h1>
  </div>
</footer>
</main>
<script src="js/app.js"></script>
<script src="js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
