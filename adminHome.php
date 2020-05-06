<?php
$db = mysqli_connect('localhost', 'root', 'root1234', 'itproject');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<header>
 
  <script>
    
    function addflight(){
      window.location.href="http://localhost/Airline/AddFlight.html";
    };
    function updateflight(){
      window.location.href="http://localhost/Airline/UpdateFlight.html";
    };
    function deleteflight(){
      window.location.href="http://localhost/Airline/DeleteFlight.html";
    };

    function addairline(){
      window.location.href="http://localhost/Airline/AddAirline.html";
    };
    function updateairline(){
      window.location.href="http://localhost/Airline/UpdateAirline.html";
    };
    function deleteairline(){
      window.location.href="http://localhost/Airline/DeleteAirline.html";
    };

    function addairplane(){
      window.location.href="http://localhost/Airline/AddAirplane.html";
    };
    function updateairplane(){
      window.location.href="http://localhost/Airline/UpdateAirplane.html";
    };
    function deleteairplane(){
      window.location.href="http://localhost/Airline/DeleteAirplane.html";
    };

    function addairport(){
      window.location.href="http://localhost/Airline/AddAirport.html";
    };
    function updateairport(){
      window.location.href="http://localhost/Airline/UpdateAirport.html";
    };
    function deleteairport(){
      window.location.href="http://localhost/Airline/DeleteAirport.html";
    };
  
  </script>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>
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
  <link rel="stylesheet" type="text/css" href="css/StyleAdmin.css">
  <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
  <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">

 

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

</header>

<body id="page-top">
  <nav id="flights" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span>
          <span class="icon-bar"></span> </button>
        <a class="navbar-brand page-scroll" href="#page-top">Admin</a> </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#flight" class="page-scroll">Flights</a></li>
          <li><a href="#airline" class="page-scroll">Airlines</a></li>
          <li><a href="#airplan" class="page-scroll">Airplanes</a></li>
          <li><a href="#airport" class="page-scroll">Airports</a></li>
          
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
              <p>Admin</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  <!-- flight Section -->
  <div id="flight">
  <div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
        <h2>Flight</h2>
        <hr>
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">From_</th>
                <th class="column2">To_</th>
                <th class="column1">FlightNumber</th>
                <th class="column2">DepTime</th>
                <th class="column1">DepDate</th>
                <th class="column2">ArrivalTime</th>
                <th class="column1">ArrivalDate</th>
                <th class="column2">Cost</th>
                <th class="column2">AdminID</th>
                
							</tr>
            </thead>
            <?php
               $user_check_query = "SELECT * FROM flight";
               $result = mysqli_query($db, $user_check_query);
               while($user=mysqli_fetch_assoc($result)){
                 echo "<tr><td>".$user['From_']."<//td> <td>".$user['To_']
                 ."<//td> <td>".$user['FlightNum']."<//td><td>".$user['DepTime']."<//td><td>".$user['DepDate']
                 ."<//td><td>".$user['ArrTime']."<//td><td>".$user['ArrDate']
                 ."<//td><td>".$user['Cost']."<//td><td>".$user['AdminID']."<//td><//tr>";
               }
              ?>
					</table>
        </div>
        <button id="add" class="buttom" onclick="addflight();">ADD</button>
        <button id="update" class="buttom" onclick="updateflight();">UPDATE</button>
        <button id="delete" class="buttom" onclick="deleteflight();">DELETE</button>
        <!-- <button class="buttom" onclick="flight();">Edit</button> -->
			</div>
		</div>
  </div>
  </div>
  <!-- airline Section -->
  <div id="airline">
  <div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
        <h2>Airlins</h2>
        <hr>
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">AirlineCode</th>
								<th class="column2">AirlineName</th>
							</tr>
            </thead>
            <?php
               $user_check_query = "SELECT * FROM airline";
               $result = mysqli_query($db, $user_check_query);
               while($user=mysqli_fetch_assoc($result)){
                 echo "<tr><td>".$user['AirLineCode']."<//td> <td>".$user['AirLineName']."<//td><//tr>";
               }
              ?>
					</table>
        </div>
        <button id="add1" class="buttom" onclick="addairline();">ADD</button>
        <button id="update1" class="buttom" onclick="updateairline();">UPDATE</button>
        <button id="delete1" class="buttom" onclick="deleteairline();">DELETE</button>
        <!-- <button class="buttom" onclick="Airline();">Edit</button> -->
			</div>
		</div>
  </div>
  </div>
  <!-- airplan Section -->
  <div id="airplan">
  <div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
        <h2>Airplanes</h2>
        <hr>
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">RegNumber</th>
								<th class="column2">AirlineCode ID</th>
								<th class="column3">Seats</th>
							</tr>
            </thead>
            <?php
                $user_check_query = "SELECT * FROM airplane";
                $result = mysqli_query($db, $user_check_query);
                while($user=mysqli_fetch_assoc($result)){
                  echo "<tr><td>".$user['RegNum']."<//td> <td>".$user['AirLineCode']."<//td> <td>".$user['Seats']."<//td><//tr>";
                }
              ?>
					</table>
        </div>
        <button id="add2" class="buttom" onclick="addairplane();">ADD</button>
        <button id="update2" class="buttom" onclick="updateairplane();">UPDATE</button>
        <button id="delete2" class="buttom" onclick="deleteairplane();">DELETE</button>
			</div>
		</div>
  </div>
  </div>


  <!-- airport Section -->



  <div id="airport">
  
  <div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">

         <h2>Airports</h2>
        <hr> 
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Code</th>
								<th class="column2">Country</th>
								<th class="column3">City</th>
							</tr>
            </thead>
            <?php
                $user_check_query = "SELECT * FROM airport";
                $result = mysqli_query($db, $user_check_query);
                while($user=mysqli_fetch_assoc($result)){
                  echo "<tr><td>".$user['Code']."<//td> <td>".$user['Country']."<//td> <td>".$user['City']."<//td><//tr>";
                }
              ?>
					</table>
        </div>
        <button id="add3" class="buttom" onclick="addairport();">ADD</button>
        <button id="update3" class="buttom" onclick="updateairport();">UPDATE</button>
        <button id="delete3" class="buttom" onclick="deleteairport();">DELETE</button>
        <!-- <button class="buttom" onclick="Airport();">Edit</button> -->
			</div>
		</div>
  </div>
  </div>
      </div>
    </div>
  </div>
  <div>
</body>

</html>