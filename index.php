<?php include_once "includes/dynamics.php";
$token = md5(rand());

?>
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
	<link rel="stylesheet"  href="css/responsive.css" href=”image.css”>
</head>
<body>
<a name="to-top"></a>
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
				<div id="hamburger">
					<div class="lines"></div>
					<div class="lines"></div>
					<div class="lines"></div>
				</div>
        <div class="flexy-cen">
          <ul>
						<li><a href="#">The Throne Abroad</a></li>
            <li><a href="#">The King Code</a></li>
            <li><a href="#" class="active-link">Hail Africa Global Awards</a></li>
            <li><a href="#">Fondation de Mont Oliviers</a></li>
						<li><a href="#">When Women Gather</a></li>
						<!-- <li><a href="#" onClick="branchModalOpen(this);">Branches</a></li> -->
            <li><a href="#">Get In Touch</a></li>
          </ul>
        </div>
      </article>
  </nav>
</header>
<main>
<!-- HERO SECTION -->
<section id="home-hero">
	<aside class="flexy-col">
			<h1><span class="w">H</span><span class="a">A</span><span class="w">G</span><span class="a">A</span></h1>
			<p>AFRICA GLOBAL AWARDS</p>
			<a href= <?php $busphone?>><button class="show-btn">Call</button></a>
	</aside>
	<article class="circles">
		<div class="circle-wrapper">
			<div class="rounds"></div>
			<div class="rounds"></div>
			<div class="rounds"></div>
			<div class="rounds"></div>
			<div class="rounds"></div>
		</div>
	</article>
</section>
<!-- PURPOSE AND BENEFIT  -->
<section id="purpose-benefit" class="container">
	<div class="wel-head flexy-col">
		<p class="welcome">WELCOME</p>
		<h3 class="about-head">Hail Africa Global Awards</h3>
	</div>
	<div class="row">
		<aside class="col-lg-6 col-md-6 flexy-cen">
			<img src="assests/gallery/medal.jpg"  alt="" />
			<div>
				<h6>The Purpose</h6>
				<p><?=$shorter ?></p>
			</div>
		</aside>
		<article class="col-lg-6 col-md-6 flexy-cen">
					<img src="assests/gallery/medal.jpg"  alt="" />
				<div>
					<h6>The Beneficiary</h6>
					<p><?=$shorter ?></p>
				</div>
		</article>
		<div class="flexy-cen">
			<img class="streched" src="assests/gallery/annualglobal.png" alt="" />
		</div>
	</div>
</section>
<article class="divider flexy-cen">
	<img src="" alt="" />
</article>
<section id="catergories">
	<div class="row">
		<aside class="col-lg-6 col-md-6">
			<img src="assests/gallery/shelvedtrophies.jpg" alt="" />
		</aside>
		<article class="col-lg-6 col-md-6 waite-load-more">
			<h3 class="populhead">Our catergories</h3>
			<div class="row">
				<div class="col-lg-12 col-md-12 content">
						<h4><span class="btn"> + </span>Game Changer Award</h4>
						<div class="hid-cotent">
							<p><?=$shorter ?></p>
						</div>
				</div>
				<div class="col-lg-12 col-md-12 content">
						<h4><span class="btn"> + </span>Influencer Award</h4>
						<div class="hid-cotent">
							<p><?=$shorter ?></p>
						</div>
				</div>
				<div class="col-lg-12 col-md-12 content">
					<h4><span class="btn"> + </span>Women in Media Award</h4>
					<div class="hid-cotent">
						<p><?=$shorter ?></p>
					</div>
				</div>
			</div>
			<img src="assests/gallery/trophy.jpg" alt="" />
	</article>
	</div>
</section>
<!-- NOMINEES -->
<section id="portfolio" class="portfolio pb-0 pt-5">
	<div class="container-fluid">
		<div class="row mb-5">
			<div class="col-md-12 text-center mb-3">
				<div class="heading wow fadeInUp" data-wow-delay="0.3s">
					<h1>Our Nominess</h1>
					<div class="bord-bot"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-6 p-0 color-2">
				<div class="port-cont">
					<a href="assests/gallery/nominees/nominess-1.jpg" title="Caroline">
						<img src="assests/gallery/nominees/nominess1.png" alt="Caroline" class="img-fluid">
					</a>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 p-0 color-1">
				<div class="port-cont">
					<a href="assests/gallery/nominees/nominess2.png" title="Caroline">
						<img src="assests/gallery/nominees/nominess2.png" alt="Caroline" class="img-fluid">
					</a>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 p-0 color-2">
				<div class="port-cont">
					<a href="assests/gallery/nominees/nominess3.png" title="Caroline">
						<img src="assests/gallery/nominees/nominess3.png" alt="Caroline" class="img-fluid">
					</a>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 p-0 color-1">
				<div class="port-cont">
					<a href="assests/gallery/nominees/nominess4.png" title="Caroline">
						<img src="assests/gallery/nominees/nominess4.png" alt="Caroline" class="img-fluid">
					</a>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 p-0 color-1">
				<div class="port-cont">
					<a href="assests/gallery/nominees/nominess4.png" title="Caroline">
						<img src="assests/gallery/nominees/nominess4.png" alt="Caroline" class="img-fluid">
					</a>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 p-0 color-2">
				<div class="port-cont">
					<a href="assests/gallery/nominees/nominess3.png" title="Caroline">
						<img src="assests/gallery/nominees/nominess3.png" alt="Caroline" class="img-fluid">
					</a>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 p-0 color-1">
				<div class="port-cont">
					<a href="assests/gallery/nominees/nominess2.png" title="Caroline">
						<img src="assests/gallery/nominees/nominess2.png" alt="Caroline" class="img-fluid">
					</a>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 p-0 color-2">
				<div class="port-cont">
					<a href="assests/gallery/nominees/nominess1.png" title="Caroline">
						<img src="assests/gallery/nominees/nominess1.png" alt="Caroline" class="img-fluid">
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<aside class="flexy-cen" id="how-to-btn">
	<button class="add-more"><a href="#">How to Vote</a></button>
	<button class="add-more"><a href="#">How it works</a></button>
</aside>
<!-- about section -->
<section id="about-us" class="container">

</section>



<!--<section class="articles">
	<h3 class="title-head">ARTICLES</h3>
	<div class="row">
		<article class="col-lg-4 col-md-4">
			<aside>
				<div class="overlayed">
					<p><?=$shorter?></p>
				</div>
				<a data-toggle="modal" data-target="#functional-modal"><button class="show-btn">Show More</button></a>
			</aside>
		</article>
		<article class="col-lg-4 col-md-4">
			<aside>
				<div class="overlayed">
					<p><?=$shorter?></p>
				</div>
				<a data-toggle="modal" data-target="#functional-modal"><button class="show-btn">Show More</button></a>
			</aside>
		</article>
		<article class="col-lg-4 col-md-4">
			<aside>
				<div class="overlayed">
					<p><?=$shorter?></p>
				</div>
				<a data-toggle="modal" data-target="#functional-modal"><button class="show-btn">Show More</button></a>
			</aside>

		</article>
	</div>
</section>
-->
<section id="branche modal" class="container-fluid customed-modal">
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





<section id="branche modal" class="container-fluid customed-modal">
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
	<div  class="container content">
		<div class="row flexy-col">
			<article class="col-lg-12 col-md-12 flexy-col">
				<div class="header">
					<button type="button" onClick="formModalClose();" aria-hidden="true"> &times; </button>
				</div>
			<div class="col-lg-12 col-md-12 form">
				<form class="contact-form form-horizontal flexy-col" role="form" action="mail/contact_us.php" Method="POST">
						<div class="flexy-cen">
							<label>Name</label>
							<input type="text" placeholder="Your name here..."  />
						</div>
						<div class="flexy-cen">
							<label>Email</label>
							<input type="text" placeholder="Your email adress here..."  />
						</div>
						<div class="flexy-col">
							<label>Message</label>
							<textarea type="text" placeholder="let us know here..." col="12" ></textarea>
						</div>
					</form>
				</div>
				<div class="col-lg-12 col-md-12 footer">
						<button type="button" onClick="formModalClose();" aria-hidden="true">Close </button>
				</div>
		</article>
	</div>
</div>
</section>
<section id="faqs" class="waite-load-more">
	<div class="container">
	<h3 class="populhead">Frequently Asked Questions</h3>
	<div class="row">
			<div class="col-lg-6 col-md-6 content">
			  <h4><span class="btn"> + </span>Who qualifies?</h4>
			  <div class="hid-cotent">
					<p><?=$shorter ?></p>
			  </div>
			</div>
			<div class="col-lg-6 col-md-6 content">
				  <h4><span class="btn"> + </span>Who to nominate?</h4>
					<div class="hid-cotent">
						<p><?=$shorter ?></p>
					</div>
			</div>
			<div class="col-lg-6 col-md-6 content">
			  <h4><span class="btn"> + </span>How to donate?</h4>
			  <div class="hid-cotent">
			  	<p><?=$shorter ?></p>
			  </div>
			</div>
			<div class="col-lg-6 col-md-6 content">
			  <h4><span class="btn"> + </span>How to vote?</h4>
			  <div class="hid-cotent">
			  	<p><?=$shorter ?></p>
			  </div>
			</div>
		</div>
	</div>
</section>
<section class="container form-adress">
	<div class="row">
    <article class="col-lg-4 col-md-4 flexy-col">
				<h3>LET'S WORK TOGETHER</h3>
				<img class="streched" src="assests/gallery/hrm-logo.png" alt="hrm-logo" />
    </article>
    <article class="col-lg-8 col-md-8 flexy-col">
			<form class="contact-form form-horizontal" role="form" action="mail/contact_us.php" Method="POST">
				<div class="flexy-cen">
					<label>Name</label>
					<input type="text" placeholder="Your name here..."  />
				</div>
				<div class="flexy-cen">
					<label>Email</label>
					<input type="text" placeholder="Your email adress here..."  />
				</div>
				<div class="flexy-col">
					<label>Message</label>
					<textarea type="text" placeholder="let us know here..." col="12" ></textarea>
				</div>
			</form>
    </article>
  </div>
</section>
<section class="donate flexy-cen">
	<div class="flexy-col">
		<img src="assests/gallery/haga.png" alt="" />
		<button type="button" class="add-more">Donate</button>
		<div class="card-wrapper">
			<article class="card flexy-cen">
				<p>BANK : Erste Bank</p>
				<p>Bankleitzahl: 20111</p>
				<p>Kontonummer: 286 214 367 01</p>
				<p>IBAN: AT592011128621436701</p>
				<p>BIC: GIBAATWW</p>
			</article>
		</div>
	</div>
</section>
<footer >
  <aside class="refer" style="display: none">
    <div class="full-width flexy-col">
			<h3>Refer a Friend</h3>
	    <p>These are indeed trying times and preparation is the best form of defence. Grief is a very difficult process to go through, it demands a lot of emotional as well as physical strength. We pride ourselves in assuring our family take time to mourn their loved one while we handle all the aspect of your funeral arrangement. Don’t get caught unprepared and make sure you are covered for such unforeseen times.</p>
	    <div class="flexy-cen">
	      <button class="go-to add-more"><a target="_blank">Share FB</a></button>
	    </div>
		</div>
  </aside>
	<a href="#to-top" class="move-up-icon"><div>
		<img src="assests/icons/black-up.png" />
	</div></a>
	<div class="footer-links">
		<aside class="flexy-cen logo-social">
			<img src="logo.png" alt="logo" class="logo"/>
			<div class="social-links flexy-cen">
				<a href="<?=$calltell ; ?>"><img src="assests/social/call.png" alt="call-icon" /></a>
				<a href="<?=$facebook ; ?>"><img src="assests/social/facebook.png" alt="facebook-icon" /></a>
				<a href="<?=$whatApp ; ?>"><img src="assests/social/whatsapp.png" alt="whatsapp-icon" /></a>
				<a href="#" onClick="formModalOpen();"><img src="assests/social/email.png" alt="email-icon" /></a>
			</div>
		</aside>
		<div class="container">
			<div class="row">
				<aside class="col-lg-4 col-md-4 flexy-col">
					<h4>The Throne Abroad</h4>
					<div>
						<p><?=$who?></p>
					</div>
				</aside>
				<aside class="col-lg-4 col-md-4 flexy-col">
					<h4>Navigation</h4>
						<p>The Founder</p>
						<p>The Council</p>
						<p>The Advisory</p>
						<p>Subsidary Entities</p>
						<p>Our Partners</p>
						<p>Media</p>
				</aside>
				<aside class="col-lg-4 col-md-4 flexy-col">
					<h4>Get In Touch</h4>
					<div>
						<p>Street 238,52 tempor</p>
						<p>Donec ultricies mattis nulla, suscipit
						risus tristique ut.</p>

						<p>Phone: <?=$busphone ?></p>

						<p>E-mail: <?=$busmail ?></p>

						<p>Website: <?=$website ?></p>
					</div>
				</aside>
			</div>
		</div>
  </div>
	<div class="copyrightp flexy-cen">
			<p>All Copy Right Reserved <span class="year"></span></p>
	</div>
</footer>
</main>
<?php include_once "includes/modals.php"; ?>
<script src="js/jquery.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script>
	$(window).on('load', function(){ $(".loader").fadeOut(2000); });
	$(function () {
		new WOW().init();
	});

</script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>
