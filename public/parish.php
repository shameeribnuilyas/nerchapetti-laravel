<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 2px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  align-content:center;
   

  
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #1A73E8;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
/*chat*/
.open-button {
  background-color:rgb(195, 233, 203);
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.9;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 200px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>


<!-- HEADER =============================-->
<header class="item header margin-top-0">
<div class="wrapper">
	<nav role="navigation" class="navbar navbar-white navbar-embossed navbar-lg navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
			<i class="fa fa-bars"></i>
			<span class="sr-only">Toggle navigation</span>
			</button>
			<a href="index.html" class="navbar-brand brand">  </a>
		</div>
		
	</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="text-homeimage">
					<div class="maintext-image" data-scrollreveal="enter top over 1.5s after 0.1s">
						Church Name
					</div>
					<div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.3s">
						 
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<p style="margin-left: 600px;";">Nerchapetti Id :654784654</p>
<button style="margin-bottom: 50px;border-radius: 25px; margin-left: 550px; width: 24%; ">Share</button>
</header>

<section id="one" class="wrapper style2 special" style="align-content: center; justify-content: center;align-items: center;">
	<div class="container" >
		<header class="major">
			<h2>Quick Pay</h2>
			
		</header>
		<div>
			<div style="justify-content: center;">	
				<form class="donateForm">
					<span><label for="lname"> Name:</label>
					<input type="text" id="fname" name="firstname" placeholder="Your name..">
					<label for="lname">Email:</label>
					<input type="text" id="Email" name="Email" placeholder="Your Email..">
					<label for="Mobile">Mobile Number:</label>
					<input type="text" id="Mobile" name="Mobile" placeholder="Your Mobile number..">
					<label for="Amount">Amount:</label>
					<input type="text" id="Amount" name="Amount" placeholder="Amount">				
				</form></div>			
			</div>
		</div>
		<ul class="actions">
			<button style="margin-bottom: 50px;border-radius: 25px; margin-left: 550px; width: 24%; "> <li><a href="https://pages.razorpay.com/pl_GqO3CKzNw2tcv5/view" class="button special big">Donate</a></li></button>
			
			
		</ul>
	</div>
</section>
<!-- STEPS 
<div class="item content">
	<div class="container toparea">
		<div class="row text-center">
			<div class="col-md-4">
				<div class="col editContent">
					<span class="numberstep"><i class="fa fa-shopping-cart"></i></span>
					<h3 class="numbertext">Choose our Products</h3>
					<p>
						 Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam quis risus eget urna mollis ornare vel eu leo. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
					</p>
				</div>
				<!-- /.col-md-4 
			</div>
			<!-- /.col-md-4 col 
			<div class="col-md-4 editContent">
				<div class="col">
					<span class="numberstep"><i class="fa fa-gift"></i></span>
					<h3 class="numbertext">Pay with PayPal or Card</h3>
					<p>
						 Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam quis risus eget urna mollis ornare vel eu leo. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
					</p>
				</div>
				<!-- /.col 
			</div>
			<!-- /.col-md-4 col 
			<div class="col-md-4 editContent">
				<div class="col">
					<span class="numberstep"><i class="fa fa-download"></i></span>
					<h3 class="numbertext">Get Instand Download</h3>
					<p>
						 Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam quis risus eget urna mollis ornare vel eu leo. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>-->

<div class="w3-bar w3-black" style="margin-left:5px; margin-bottom: 20px; background-color: #1A73E8!important">
	<button class="w3-bar-item w3-button" onclick="openCity('London')">London</button>
	<button class="w3-bar-item w3-button" onclick="openCity('Paris')">Paris</button>
	<button class="w3-bar-item w3-button" onclick="openCity('Tokyo')">Tokyo</button>
	<button class="w3-bar-item w3-button" onclick="openCity('Tokyo1')">Payments</button>
  </div>
  <div id="London" class="w3-container city" style="margin-bottom: 30px;">
	<h2>About the Church</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
		 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
		  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
		cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
		 Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
	   cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	   Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
	   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
		Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
	  cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
  
  <div id="Paris" class="w3-container city" style="display:none; background-color:white;">
	<h2>Committe Members</h2>
	<div class="card">
		
	  <div class="card">
		<img src="3.jpg" alt="John" style="width:100%">
		<h1>Member name</h1>
		<p class="title">Member designation</p>
		<p>details</p>
		<div style="margin: 24px 0;">
		  
		  <a href="#"><i class="fa fa-twitter"></i></a>  
		  <a href="#"><i class="fa fa-linkedin"></i></a>  
		  <a href="#"><i class="fa fa-facebook"></i></a> 
		</div>
		<p><button>Contact</button></p>
	  </div>
	  
	
  </div>
  </div>
  
  <div id="Tokyo" class="w3-container city" style="display:none">
	<h2>Find the church location</h2>
	<div id="googleMap" style="width:100%;height:400px;"></div>
	
  </div>
  <div id="Tokyo1" class="w3-container city" style="display:none">
	<h2>Offerings available</h2>
	
	<div class="col-md-4">
		<div class="productbox">
			<div class="fadeshop">
				<div class="captionshop text-center" style="display: none;">
					<h3>Offering Name</h3>
					<p>
						 About Offering
					</p>
					<p>
						<a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Pay Now</a>
						<a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
					</p>
				</div>
				<span class="maxproduct"><img src="images/1.png" alt=""></span>
			</div>
			<div class="product-details">
				<a href="#">
				<h1>Offering Name</h1>
				</a>
				<span class="price">
				<span class="edd_price">RS 500.00</span>
				</span>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="productbox">
			<div class="fadeshop">
				<div class="captionshop text-center" style="display: none;">
					<h3>Offering Name</h3>
					<p>
						 About Offering
					</p>
					<p>
						<a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Pay Now</a>
						<a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
					</p>
				</div>
				<span class="maxproduct"><img src="images/1.png" alt=""></span>
			</div>
			<div class="product-details">
				<a href="#">
				<h1>Offering Name</h1>
				</a>
				<span class="price">
				<span class="edd_price">RS 500.00</span>
				</span>
			</div>
		</div>
	</div>
  </div>
  



	
	
	<!-- LATEST ITEMS ======
<section class="item content">
	<div class="container">
		<div class="underlined-title">
			<div class="editContent">
				<h1 class="text-center latestitems">LATEST ITEMS</h1>
			</div>
			<div class="wow-hr type_short">
				<span class="wow-hr-h">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="productbox">
					<div class="fadeshop">
						<div class="captionshop text-center" style="display: none;">
							<h3>Item Name</h3>
							<p>
								 This is a short excerpt to generally describe what the item is about.
							</p>
							<p>
								<a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
								<a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
							</p>
						</div>
						<span class="maxproduct"><img src="images/product1-1.jpg" alt=""></span>
					</div>
					<div class="product-details">
						<a href="#">
						<h1>Calypso Theme</h1>
						</a>
						<span class="price">
						<span class="edd_price">$49.00</span>
						</span>
					</div>
				</div>
			</div>
			<!-- /.productbox --
			<div class="col-md-4">
				<div class="productbox">
					<div class="fadeshop">
						<div class="captionshop text-center" style="display: none;">
							<h3>Item Name</h3>
							<p>
								 This is a short excerpt to generally describe what the item is about.
							</p>
							<p>
								<a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
								<a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
							</p>
						</div>
						<span class="maxproduct"><img src="images/product2.jpg" alt=""></span>
					</div>
					<div class="product-details">
						<a href="#">
						<h1>FastSell Theme</h1>
						</a>
						<span class="price">
						<span class="edd_price">$49.00</span>
						</span>
					</div>
				</div>
			</div>
			<!-- /.productbox 
			<div class="col-md-4">
				<div class="productbox">
					<div class="fadeshop">
						<div class="captionshop text-center" style="display: none;">
							<h3>Item Name</h3>
							<p>
								 This is a short excerpt to generally describe what the item is about.
							</p>
							<p>
								<a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
								<a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
							</p>
						</div>
						<span class="maxproduct"><img src="images/product2-3.jpg" alt=""></span>
					</div>
					<div class="product-details">
						<a href="#">
						<h1>Biscaya Theme</h1>
						</a>
						<span class="price">
						<span class="edd_price">$49.00</span>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>


<!-- BUTTON ==========================
<div class="item content">
	<div class="container text-center">
		<a href="shop.html" class="homebrowseitems">Browse All Products
		<div class="homebrowseitemsicon">
			<i class="fa fa-star fa-spin"></i>
		</div>
		</a>
	</div>
</div>
<br/>


<!-- AREA =============================
<div class="item content">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<i class="fa fa-microphone infoareaicon"></i>
				<div class="infoareawrap">
					<h1 class="text-center subtitle">General Questions</h1>
					<p>
						 Want to buy a theme but not sure if it's got all the features you need? Trouble completing the payment? Or just want to say hi? Send us your message and we will answer as soon as possible!
					</p>
					<p class="text-center">
						<a href="#">- Get in Touch -</a>
					</p>
				</div>
			</div>
			<!-- /.col-md-4 col -
			<div class="col-md-4">
				<i class="fa fa-comments infoareaicon"></i>
				<div class="infoareawrap">
					<h1 class="text-center subtitle">Theme Support</h1>
					<p>
						 Theme support issues prevent the theme from working as advertised in the demo. This is a free and guaranteed service offered through our support forum which is found in each theme.
					</p>
					<p class="text-center">
						<a href="#">- Select Theme -</a>
					</p>
				</div>
			</div>
			<!-- /.col-md-4 col -
			<div class="col-md-4">
				<i class="fa fa-bullhorn infoareaicon"></i>
				<div class="infoareawrap">
					<h1 class="text-center subtitle">Hire Us</h1>
					<p>
						 If you wish to change an element to look or function differently than shown in the demo, we will be glad to assist you. This is a paid service due to theme support requests solved with priority.
					</p>
					<p class="text-center">
						<a href="#">- Get in Touch -</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- TESTIMONIAL =============================-->
<div class="item content" style="border: blue; background-color: #F6F6F6;">
	<div class="container">
		<div class="col-md-10 col-md-offset-1">
			<div class="slide-text">
				<div>
					<h2><span class="uppercase">Bank Account Details</span></h2>
					
					<p>
						BANK NAME: NAME	<br>					 
BRANCH NAME: NAME                 <br>                  
A/C NO :45456468465465<br>
IFSC:2216546646545465<br>
ACCOUNT HOLDER:Name<br>


					</p>
					<a><img src="images/Gpay.png" alt="Awesome Support"></a>

					<a><img src="images/5.jpg" alt="Awesome Support"></a>
				<a><img src="images/phone-pe.png" alt="Awesome Support"></a>
				<button style="background-color: rgb(28, 107, 180); margin-bottom: 25px;">Pay Now</button>
			
					
				</div>
			</div>
		</div>
	</div>
</div>
<p style="margin-top:20px ;"><b style="font-weight:900; padding-left: 50px;">Disclaimer:</b>This content is Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>

<button class="open-button" onclick="openForm()"><i class="fa fa-whatsapp" style="font-size:48px;color:rgb(21, 207, 61)"></i></button>

<div class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Chat</h1>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
<!-- CALL TO ACTION =============================--

<section class="content-block" style="background-color:#00bba7;">
<div class="container text-center">
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="item" data-scrollreveal="enter top over 0.4s after 0.1s">
				<h1 class="callactiontitle"> Promote Items Area Give Discount to Buyers <span class="callactionbutton"><i class="fa fa-gift"></i> WOW24TH</span>
				</h1>
			</div>
		</div>
	</div>
</div>
</section>


<!-- FOOTER =============================--
<div class="footer text-center">
	<div class="container">
		<div class="row">
			<p class="footernote">
				 Connect with Scorilo
			</p>
			<ul class="social-iconsfooter">
				<li><a href="#"><i class="fa fa-phone"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
			</ul>
		
		</div>
	</div>
</div>

<!-- SCRIPTS =============================-->
<script src="js/jquery-.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/anim.js"></script>
<script>
//----HOVER CAPTION---//	  
jQuery(document).ready(function ($) {
	$('.fadeshop').hover(
		function(){
			$(this).find('.captionshop').fadeIn(150);
		},
		function(){
			$(this).find('.captionshop').fadeOut(150);
		}
	);
});


function openCity(cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(cityName).style.display = "block";  
}



function openForm() {
	document.getElementById("myForm").style.display = "block";
  }
  
  function closeForm() {
	document.getElementById("myForm").style.display = "none";
  }
	




function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>






</body>
</html>