<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Check If The Application Is Under Maintenance
|--------------------------------------------------------------------------
|
| If the application is in maintenance / demo mode via the "down" command
| we will load this file so that any pre-rendered content can be shown
| instead of starting the framework, which could cause an exception.
|
*/

if (file_exists(__DIR__.'/../storage/framework/maintenance.php')) {
    require __DIR__.'/../storage/framework/maintenance.php';
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request using
| the application's HTTP kernel. Then, we will send the response back
| to this client's browser, allowing them to enjoy our application.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = tap($kernel->handle(
    $request = Request::capture()
))->send();

$kernel->terminate($request, $response);


?>

<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Nerchapetti</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="style.css" type="text/css" media="all"/>
 
</head>
<body>
  <div class="wrapper">

    <!-- HEADER -->
    <header>
      <div class="nerchapetti_logo">
        <a id="logo" href="#home"><img src="logo.jpg" alt="NERCHAPETTI"></a>
         
      </div>      
      
      <nav class="sub-nav">
        
        <a href="#"><i style="color: rgb(255, 255, 255);"class="fas fa-search sub-nav-logo"></i></a>
        
             
      </nav>      
    </header>
    <!-- END OF HEADER -->
    
    <!-- MAIN CONTAINER -->
    <!-- TOP -->
     
    
     
   <!--image slider start-->
   <div class="slider">
    <div class="slides">
      <!--radio buttons start-->
      <input type="radio" name="radio-btn" id="radio1">
      <input type="radio" name="radio-btn" id="radio2">
      <input type="radio" name="radio-btn" id="radio3">
      <input type="radio" name="radio-btn" id="radio4">
      <!--radio buttons end-->
      <!--slide images start-->
      <div class="slide first">
        <img src="1.jpg" alt="">
      </div>
      <div class="slide">
        <img src="2.jpg" alt="">
      </div>
      <div class="slide">
        <img src="3.jpg" alt="">
      </div>
      <div class="slide">
        <img src="4.jpg" alt="">
      </div>
      <!--slide images end-->
      <!--automatic navigation start-->
      <div class="navigation-auto">
        <div class="auto-btn1"></div>
        <div class="auto-btn2"></div>
        <div class="auto-btn3"></div>
        <div class="auto-btn4"></div>
      </div>
      <!--automatic navigation end-->
    </div>
    <!--manual navigation start-->
    <div class="navigation-manual">
      <label for="radio1" class="manual-btn"></label>
      <label for="radio2" class="manual-btn"></label>
      <label for="radio3" class="manual-btn"></label>
      <label for="radio4" class="manual-btn"></label>
    </div>
    <!--manual navigation end-->
  </div>
  <!--image slider end-->

  
    <!-- END OF TOP -->
    <section class="main-container" >
  <div>
          <h1 id="Favourites">Favourites</h1>
          <main class="page-content">
            <div class="card">
                <div class="content">
                    <h2 class="title">CHURCH NAME</h2>
                    <p class="copy">If you can dream it, you can do it</p><button class="btn">View More</button>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <h2 class="title">CHURCH NAME</h2>
                    <p class="copy">Don’t limit yourself. Many people limit themselves to what they think they can do. You can go as far as your mind lets you. What you believe, remember, you can achieve</p><button class="btn">View More</button>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <h2 class="title">CHURCH NAME</h2>
                    <p class="copy">If people are doubting how far you can go, go so far that you can’t hear them anymore</p><button class="btn">View More</button>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <h2 class="title">CHURCH NAME</h2>
                    <p class="copy">All our dreams can come true, if we have the courage to pursue them</p><button class="btn">View More</button>
                </div>
            </div>
            
        
        </main>
        </div>
        </section>
        <section class="main-container">
      <h1 id="Campaigns">Campaigns</h1>
         <main class="page-content">
         <div class="product-card">
          <div class="product-tumb">
          <img src="img.jpg" alt="">
        </div>
        <div class="product-details">
          <span class="product-catagory">Covid Recovery</span>
          <h4><a href="">Lets Overcome this together</a></h4>
           <span class="organiser">St. Peters and St. Pauls Orthodox Church</span>
          <p>Shukria sews about 100 masks a day to help prevent the coronavirus  from spreading to Nakarabad, her hometown of about 1,700 people</p>
          <div class="container">
            <div class="skill html">80%</div>
        </div>
        
        <!-- <h4>&#8377;150000 &nbsp;&nbsp;  &nbsp;&nbsp;    &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  
                &#8377;500000</h4> -->
                
                 
                <p style="font-size:0.8rem; text-align:right;"><strong style="color:black">&#8377;500000</strong></p>   
        
          <div class="product-bottom-details">
            
            <div class="product-links">
                
              <a href=""><i class="fa fa-heart"></i>200</a>
              <a href=""><i class="fa fa-share-alt"></i></a> 
              <a href=""><i class="fas fa-clock"></i>52</a>
              <a href=""><i class="fas fa-handshake"></i>52</a>
             
          </div>
        </div>
      </div>
      </div>
          


         
  <!-- Amritha Card End--> 


  <div class="product-card">
    
    <div class="product-tumb">
     
    <img src="img.jpg" alt="">
  </div>
  <div class="product-details">
    <span class="product-catagory">Education Empowers! </span>
    <h4><a href="education.php">Help Us Do It For 1000 Girls!</a></h4>
     <span class="organiser">St. Peters and St. Pauls Orthodox Church</span>
    <p>Help Us Do It For 1000 Girls!by Protsahan India Foundation Rs. 50000 raised</p><br>
    
    <div class="container">
      <div class="skill html">80%</div>
  </div>
  <!-- <h4>&#8377;150000 &nbsp;&nbsp;  &nbsp;&nbsp;    &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  
          &#8377;500000</h4> -->
          
           
          <p style="font-size:0.8rem; text-align:right;"><strong style="color:black">&#8377;500000</strong></p>   
  
    <div class="product-bottom-details">
      
      <div class="product-links">
          
        <a href=""><i class="fa fa-heart"></i>200</a>
        <a href=""><i class="fa fa-share-alt"></i></a> 
        <a href=""><i class="fas fa-clock"></i>52</a>
        <a href=""><i class="fas fa-handshake"></i>52</a>
       
    </div>
  </div>
</div></div>






<!--SHAMEER CARD-->

<div class="product-card">
    <div class="product-tumb">
    <img src="img.jpg" alt="">
  </div>
  <div class="product-details">
    <span class="product-catagory">Construction</span>
    <h4><a href="">Renovation of St.Josephs church</a></h4>
     <span class="organiser">St. Peters and St. Pauls Orthodox Church</span>
    <p>The renovation of famous St.josephs church is resumed.The generous contribution from the wellwishers are required.</p>
    <div class="container">
      <div class="skill html">80%</div>
  </div>
  <!-- <h4>&#8377;150000 &nbsp;&nbsp;  &nbsp;&nbsp;    &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  
          &#8377;500000</h4> -->
          
           
          <p style="font-size:0.8rem; text-align:right;"><strong style="color:black">&#8377;500000</strong></p>   
  
    <div class="product-bottom-details">
      
      <div class="product-links">
          
        <a href=""><i class="fa fa-heart"></i>200</a>
        <a href=""><i class="fa fa-share-alt"></i></a> 
        <a href=""><i class="fas fa-clock"></i>52</a>
        <a href=""><i class="fas fa-handshake"></i>52</a>
       
    </div>
  </div>
</div>
</div>
 </main>
</section>
<section class="main-container">
      <h1 id="offerings">Parishes</h1>
      <main class="page-content">
      <a href="parish.php">
        <div class="product-card">
          <div class="church-pic">
            <i class="fas fa-church"></i>
        </div>
        <div class="product-details church-details">
          <h5 class = "churchCategory">Pilgrimage Center</h5>
          <a style = "cursor: pointer"><h4 class = "churchName">St. Peters and St. Pauls Orthodox Church</h4></a>
          <p>P.O, Thiruvalla, Parumala Seminary, Parumala, Kerala 689626</p>
          <p><strong style ="color:#999;">Location: </strong>Kerala</p>
        </div>
          <div class="product-bottom-details">
            <div class="product-links"> 
                <i class="fa fa-share-alt churchShare"></i>
          </div>
        </div></a>
      </div>
         
      <div class="product-card">
        <div class="church-pic">
          <i class="fas fa-church"></i>
      </div>
      <div class="product-details church-details">
        <h5 class = "churchCategory">Church</h5>
        <a style = "cursor: pointer"><h4 class = "churchName">St. Andrew's Church</h4></a>
        <p>115, Hill Rd, Old Rajaram Wadi, Bandra West, Mumbai, Maharashtra 400050</p>
        <p><strong style ="color:#999;">Location: </strong>Mumbai</p>
      </div>
        <div class="product-bottom-details">
          <div class="product-links"> 
              <i class="fa fa-share-alt churchShare"></i>
        </div>
      </div>
    </div>
    

    <div class="product-card">
      <div class="church-pic">
        <i class="fas fa-church"></i>
    </div>
    <div class="product-details church-details">
      <h5 class = "churchCategory">Cathedral </h5>
      <a style = "cursor: pointer"><h4 class = "churchName">Sé Catedral de Santa Catarina</h4></a>
      <p>Velha, Goa 403402</p>
      <p><strong style ="color:#999;">Location: </strong>Goa</p>
    </div>
      <div class="product-bottom-details">
        <div class="product-links"> 
            <i class="fa fa-share-alt churchShare"></i>
      </div>
    </div>
  </div>


        </main>
      </section>

     

      
     
    <!-- END OF MAIN CONTAINER -->

    <!-- LINKS -->
    <section class="link">
      <div class="logos" >
        <a href="#"><i style="color: black;"class="fab fa-facebook-square fa-2x logo"></i></a>
        <a href="#"><i style="color: black;" class="fab fa-instagram fa-2x logo"></i></a>
        <a href="#"><i style="color: black;" class="fab fa-twitter fa-2x logo"></i></a>
        <a href="#"><i style="color: black;" class="fab fa-youtube fa-2x logo"></i></a>
      </div>
      <div> <br>
      </div>
      <div class="sub-links">
        <b>
        <ul> 
          
          <li><a href="#">About</a></li>
          <li><a href="contact.php">Contact</a></li>    
          <li><a href="contact.php">Enroll</a></li>
          <li><a href="patron.html">Patron</a></li>
          <li><a href="pricing.php">Pricing</a></li>
        
        </ul>
      </b>
      </div>
    </section>
    <!-- END OF LINKS -->
    <script type="text/javascript">
      var counter = 1;
      setInterval(function(){
        document.getElementById('radio' + counter).checked = true;
        counter++;
        if(counter > 4){
          counter = 1;
        }
      }, 5000);
      </script>
    
    
    

    <!-- FOOTER -->
    <footer>
      <b> &copy; 2021, Copyright <a href="https://johnzakariah.com/">John Zakariah Technologies.</a>  All Rights Reserved
        <div style = "display:flex;flex-wrap:wrap;">
        </div>
        <a style="color: black;" href="assets/html/privacy.html"> Privacy Policy </a><span>| </span>
        <a  style="color: black;" href="assets/html/termsOfUse.html">Terms of Use </a><span>| </span>
        <a  style="color: black;" href="assets/html/refundCancellationPolicy.html">Refund Policy </a><span>| </span>
        <a style="color: black;" href="assets/html/amlPolicy.html">AML Policy</a></b>
        </div>  
    </footer>
  </div>
</body>
</html>
