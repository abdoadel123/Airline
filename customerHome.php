<?php
$db = mysqli_connect('localhost', 'root', 'root1234', 'itproject');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Discover</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Favicons
    ================================================== -->
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

  <!-- Stylesheet
    ================================================== -->
  <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
  <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/UpdateStyle.css" />


  <link rel="stylesheet" type="text/css" href="css/style.css">


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
  <!-- Navigation
    ==========================================-->
  <nav id="flights" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span>
          <span class="icon-bar"></span> </button>
        <a class="navbar-brand page-scroll" href="#page-top">Discover</a> </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#about" class="page-scroll">About</a></li>
          <li><a href="#flights_list" class="page-scroll">Flights</a></li>
          <li><a href="#portfolio" class="page-scroll">Gallery</a></li>
          <li><a href="#call-reservation" class="page-scroll">Contact</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
  </nav>


  <!-- Header -->
  <header id="header">
    <div class="intro">
      <div class="overlay">
        <div class="container">
          <div class="row">
            <div class="intro-text">
              <h1>Discover</h1>
              <p>Booking Flights</p>
              <a href="#about" class="btn btn-custom btn-lg page-scroll">Discover Story</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>


  <!-- About Section -->
  <div id="about">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-6 ">
          <div class="about-img"><img src="img/pageabout.jpg" class="img-responsive" alt=""></div>
        </div>
        <div class="col-xs-12 col-md-6">
          <div class="about-text">
            <h2>Our Discover</h2>
            <hr>
            <p>Dicover is designed to ...</p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Flights Section -->

  <script>
    function add() {
      var PID = document.getElementById('UName').value;
      var FNum = document.getElementById('Num').value;

      var xhttp = new XMLHttpRequest(); // class connect with server ..  b3red al message mn 3'eer ma y3ml reload 
      
      xhttp.open("GET", "addPassenger.php?ID=" + PID + "&FNum=" + FNum, true);
      xhttp.send();
      xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) { //200 y3nii al connection fe 
          if (xhttp.responseText === "ok") { 
              // mn php
              alert("okay");
          }
          else if (xhttp.responseText === "No") {
            alert("Error"); // mn ll php
          }
        }
      }
    }
  </script>
  <div id="flights_list">
    <div class="section-title text-center center">
      <div class="overlay">
        <h2>Flights List</h2>
        <hr>
        <div style="overflow-x:auto;">
          <table class="table table-striped table-bordered">
              <tr>
                <th>From</th>
                <th>To</th>
                <th>Fligt Number</th>
                <th>Dep Time</th>
                <th>Dep Date</th>
                <th>Arrival Time</th>
                <th>Arrival Date</th>
                <th>Cost</th>
                <?php
                  $user_check_query = "SELECT * FROM flight";
                  $result = mysqli_query($db, $user_check_query);
                  while($user=mysqli_fetch_assoc($result)){
                    echo "<tr><td>".$user['From_']."<//td> <td>".$user['To_']
                    ."<//td> <td>".$user['FlightNum']."<//td><td>".$user['DepTime']."<//td><td>".$user['DepDate']
                    ."<//td><td>".$user['ArrTime']."<//td><td>".$user['ArrDate']
                    ."<//td><td>".$user['Cost']."<//td><//tr>";
                  }
                ?>
              </tr>
          </table>
        </div>
      </div>
    </div>

    <div class="booking-form row">
    <div class="container">

      <div class="col-md-4">
        <div class="form-group">
          <span class="form-label">Username</span>
          <input class="form-control" type="text" placeholder="Username" required id = "UName">
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <span class="form-label">Flight Number</span>
          <input class="form-control" type="number" placeholder="Flight Number" required id = "Num">
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-btn">
          <button id = "add" class="submit-btn" onclick = "add();">Add</button>
        </div>
      </div>

    </div>
    </div>
  </div>


  <!-- Portfolio Section -->
  <div id="portfolio">
    <div class="section-title text-center center">
      <div class="overlay">
        <h2>Gallery</h2>
        <hr>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="categories">
          <ul class="cat">
            <li>
              <ol class="type">
                <li><a href="#" data-filter="*" class="active">All</a></li>
              </ol>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="row">
        <div class="portfolio-items">
          <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/1.jpg" title="" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                  </div>
                  <img src="img/portfolio/1.jpg" class="img-responsive" alt="Project Title">
                </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 dinner">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/2.jpg" title="" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4></h4>
                  </div>
                  <img src="img/portfolio/2.jpg" class="img-responsive" alt="Project Title">
                </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/3.jpg" title="" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4></h4>
                  </div>
                  <img src="img/portfolio/3.jpg" class="img-responsive" alt="Project Title">
                </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/4.jpg" title="" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4></h4>
                  </div>
                  <img src="img/portfolio/4.jpg" class="img-responsive" alt="Project Title">
                </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 dinner">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/5.jpg" title="" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4></h4>
                  </div>
                  <img src="img/portfolio/5.jpg" class="img-responsive" alt="Project Title">
                </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 lunch">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/6.jpg" title="" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4></h4>
                  </div>
                  <img src="img/portfolio/6.jpg" class="img-responsive" alt="Project Title">
                </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 lunch">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/8.jpg" title="" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4></h4>
                  </div>
                  <img src="img/portfolio/8.jpg" class="img-responsive" alt="Project Title">
                </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/9.jpg" title="" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4></h4>
                  </div>
                  <img src="img/portfolio/9.jpg" class="img-responsive" alt="Project Title">
                </a> </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 lunch">
            <div class="portfolio-item">
              <div class="hover-bg"> <a href="img/portfolio/123.jpg" title="" data-lightbox-gallery="gallery1">
                  <div class="hover-text">
                    <h4></h4>
                  </div>
                  <img src="img/portfolio/123.jpg" class="img-responsive" alt="Project Title">
                </a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Call Reservation Section -->
  <div id="call-reservation" class="text-center">
    <div class="container">
      <h2>Want to make a reservation? Call <strong>01157325954</strong></h2>
    </div>
  </div>

  
  <!-- Contact Section -->
  <div id="contact" class="text-center">
    <div class="container">
      <div class="section-title text-center">
        <h2>Contact Form</h2>
        <hr>
      </div>
      <div class="col-md-10 col-md-offset-1">
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
        </form>
      </div>
    </div>
  </div>
  <div id="footer">
    <div class="container text-center">
      <div class="col-md-4">
        <h3>Address</h3>
        <div class="contact-item">
          <p>Haram St,</p>
          <p>Giza, Egypt</p>
        </div>
      </div>
      <div class="col-md-4">
        <h3>Opening Hours</h3>
        <div class="contact-item">
          <p>Mon-Thurs: 10:00 AM - 11:00 PM</p>
          <p>Fri-Sun: 11:00 AM - 02:00 AM</p>
        </div>
      </div>
      <div class="col-md-4">
        <h3>Contact Info</h3>
        <div class="contact-item">
          <p>Phone: 01157325954</p>
          <p>Email: marwan.mahmoud63@yahoo.com</p>
        </div>
      </div>
    </div>
    <div class="container-fluid text-center copyrights">
      <div class="col-md-8 col-md-offset-2">
        <div class="social">
          <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          </ul>
        </div>
        <p>&copy; 2016 Dicover. All rights reserved. Designed by <a href="https://www.facebook.com/Marwan603" rel="nofollow">Marwan</a></p>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/SmoothScroll.js"></script>
  <script type="text/javascript" src="js/nivo-lightbox.js"></script>
  <script type="text/javascript" src="js/jquery.isotope.js"></script>
  <script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
  <script type="text/javascript" src="js/contact_me.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
</body>

</html>