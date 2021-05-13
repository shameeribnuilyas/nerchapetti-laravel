<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="education.css" />
    <script
      defer
      src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"
      integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9"
      crossorigin="anonymous"
    ></script>

    <title>Education</title>
  </head>
  <body>
  <!--  <div
      style="
        text-align: center;
        padding: 25px;
        background-color: gray;
        color: white;
        font-size: 1.2rem;
      "
    >
      Navbar
    </div> --> 
     <!-- HEADER -->
     <header>
      <div class="nerchapetti_logo">
        <a id="logo" href="index.php"><img src="logo.jpg" alt="NERCHAPETTI"></a>
         
      </div>      
      
      <nav class="sub-nav">
        
        <a href="#"><i style="color: rgb(255, 255, 255);"class="fas fa-search sub-nav-logo"></i></a>
        
             
      </nav>      
    </header>
    <!-- END OF HEADER -->
    <div class="main">
      <h1 style="text-align: center">EDUCATION EMPOWERS!!!</h1>
      <h3 style="text-align: center">Nerchapetti ID: 123456</h3>
      <!-- slider -->
      <div class="col-lg-6 col-md-4 slider">
        <div
          id="carouselExampleIndicators"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          <div class="carousel-indicators">
            <button
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide-to="0"
              class="active"
              aria-current="true"
              aria-label="Slide 1"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide-to="1"
              aria-label="Slide 2"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide-to="2"
              aria-label="Slide 3"
            ></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="img.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="img.jpg" class="d-block w-100" alt="..." />
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

      <!-- top div -->
      <div class="top">
        <div class="summary">
          <h4>
            <strong>Foundation: </strong>ST. PETERS AND ST. PAULS ORTHODOX
            CHURCH
          </h4>
          <h4><strong>Target Amount: </strong>₹500000</h4>
          <h4><strong>Amount Reached: </strong>₹420000</h4>
          <h4><strong>Time Left: </strong>10 Days</h4>
          <h4><strong>Supporters: </strong>1000</h4>

          <div class="share">
            <div>
              <a
                href="https://www.facebook.com/sharer/sharer.php?u=example.org"
                target="_blank"
              >
                <i class="fab fa-facebook-square"></i>
              </a>
            </div>
            <div>
              <button onclick="whatsappShare()" class="mobileShow">
                <i class="fab fa-whatsapp-square"></i>
              </button>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

              <script type="text/javascript">
                // Function to share on whatsapp
                function whatsappShare() {
                  // Getting user input
                  var message = $("input[name=message]").val();

                  // Opening URL
                  window.open(
                    "whatsapp://send?text=" + message,

                    // This is what makes it
                    // open in a new window.
                    "_blank"
                  );
                }
              </script>
            </div>
          </div>
        </div>
        <div class="bankDetails">
          <p>
            Transfer directly to the Bank account of this Fundraiser. Only INR
            transfers are allowed.
          </p>
          <div
            style="
              display: flex;
              justify-content: space-evenly;
              margin-top: 42px;
            "
          >
            <i class="fas fa-university"></i>
            <div style="margin-left: 25px">
              <h6><strong>Virtual A/C No: </strong>XXXXXXXXXXXXXXXXXX</h6>
              <h6><strong>Virtual A/C Name: </strong>XXXXXXXXXXXXXXXXXX</h6>
              <h6><strong>A/C Type: </strong>XXXXXXXXXXXXXXXXXX</h6>
              <h6><strong>IFSCo: </strong>XXXXXXXXXXXXXXXXXX</h6>
            </div>
          </div>
          <h6>Donate Now</h6>
          <div class="donateOptions">
            <input
              type="image"
              src="https://purepng.com/public/uploads/large/purepng.com-google-pay-gpay-logobrandlogobrand-logoiconssymbolslogosgoogle-681522937443muxmx.png"
              id="google-pay-button"
            />
          </div>
        </div>
      </div>

      <section id="about">
        <div class="container">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#home"
                >About</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#menu1"
                >Documents/YT Video</a
              >
            </li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div id="home" class="container tab-pane active">
              <br />
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>

              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </div>
            <div id="menu1" class="container tab-pane fade">
              <br />
              <iframe
                width="420"
                height="315"
                src="https://www.youtube.com/embed/tgbNymZ7vqY"
              >
              </iframe>
            </div>
          </div>
        </div>
      </section>

      <section id="support"></section>

      <a href="”mailto:nerchapetti@gmail.com”"
        ><button type="button" class="btn btn-light">
          Report Fundraiser
        </button></a
      >

      <p style="color: grey; text-align: center">
        Content Disclaimer: The views and opinions expressed on the campaign
        page are those of a campaigner or donors. They do not reflect or
        represent the company's views and opinions.
      </p>
    </div>

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
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
    <script src="education.js"></script>
    <script>
      var url =
        "https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?88050";
      var s = document.createElement("script");
      s.type = "text/javascript";
      s.async = true;
      s.src = url;
      var options = {
        enabled: true,
        chatButtonSetting: {
          backgroundColor: "#4dc247",
          ctaText: "",
          borderRadius: "25",
          marginLeft: "0",
          marginBottom: "40",
          marginRight: "25",
          position: "right",
        },
        brandSetting: {
          brandName: "Nerchapetti",
          brandSubTitle: "Typically replies within a day",
          brandImg: "https://nerchapetti.com/images/logo.png",
          welcomeText: "Hi, there!\nHow can I help you?",
          messageText: "Hello, I have a question about {{page_link}}",
          backgroundColor: "#0a5f54",
          ctaText: "Start Chat",
          borderRadius: "25",
          autoShow: false,
          phoneNumber: "919747121112",
        },
      };
      s.onload = function () {
        CreateWhatsappChatWidget(options);
      };
      var x = document.getElementsByTagName("script")[0];
      x.parentNode.insertBefore(s, x);
    </script>
  </body>
</html>