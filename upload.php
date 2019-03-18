<?php
$conn = mysqli_connect("localhost","root","","mydata");
if(isset($_POST['submit'])){
$_filename = $_POST['filename'];
$_type = $_POST['type'];
$_discription = $_POST['description'];
$_disposition = $_POST['disposition'];
$_expires = $_POST['expires'];
$_cache = $_POST['cache'];
$_pragma = $_POST['pragma'];
$query = mysqli_query($conn,"INSERT INTO newfiles(`filename`,`type`,`description`,`disposition`,`expires`,`cache`,`pragma`)Values('$_filename','$_type','$_discription','$_disposition','$_expires','$_cache','$_pragma')");
echo mysqli_error($conn);

}




?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Upload files</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
    <link href="css/bootstrap.css" rel="stylesheet">
  <link rel="icon" type="icon/png" href="images/12.png">
  <link rel="stylesheet" href="css/header.css">
  <link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>

<body>

<header class="header-fixed">

  <div class="header-limiter">

    <h1><a href="#">Softwares<span> B2H</span></a></h1>

    <nav>
      <a href="#">Home</a>
      <a href="#" class="selected">FILE UPLOAD</a>
      <a href="check.php">DOWNLOAD</a>
      <a href="register.php">LOG IN</a>
    </nav>

  </div>

</header>

<!-- You need this element to prevent the content of the page from jumping up -->
<div class="header-fixed-placeholder"></div>

<!-- The content of your page would go here. -->





<script>

  $(document).ready(function(){

    var showHeaderAt = 150;

    var win = $(window),
        body = $('body');

    // Show the fixed header only on larger screen devices

    if(win.width() > 400){

      // When we scroll more than 150px down, we set the
      // "fixed" class on the body element.

      win.on('scroll', function(e){

        if(win.scrollTop() > showHeaderAt) {
          body.addClass('fixed');
        }
        else {
          body.removeClass('fixed');
        }
      });

    }

  });

</script>
<body>
	<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" style="width: 100%; height: 20%;" >
      <div class="carousel-item active">
        <img src="images/3.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/4.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/11.jpg" class="d-block" style=" height:10%; width:100%;" >
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><span style="color: orange;">B2H	</span> TECH_MINI</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Dapartments</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          SELECTIONS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">FILES</a>
          <a class="dropdown-item" href="#">IMAGES</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">ANY SOMETHING</a>
        </div>
      </li>
    
    </ul>
    <form class="form-inline my-2 my-lg-1">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>




	<form action="#" method="POST">
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100" style="width: 50%;">
				<form class="login100-form validate-form" style="width: 100%;" action="#" method="POST">
					<span class="login100-form-title p-b-26s">
						UPLOAD YOUR FILES HERE
					</span>
					<span class="login100-form-title p-b-80">
						
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="file" name="filename" required/>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input">
						<span class="btn-show-pass">
					
						</span>
						<input class="input100" type="text" name="type" required/>
						<span class="focus-input100" data-placeholder="Enter type"></span>
					</div>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="description" required/>
						<span class="focus-input100" data-placeholder=" Enter discription"></span>
					</div>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="disposition" required/>
						<span class="focus-input100" data-placeholder="Enter file Number"></span>
					</div>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="date" name="expires" required/>
						<span class="focus-input100" data-placeholder="Enter last date"></span>
					</div>
					<div class="wrap-input100 validate-input">
						<input class="input100" ype="text" name="cache" required/>
						<span class="focus-input100" data-placeholder=" enter DEPARTMENT"></span>
					</div>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="pragma" required/>
						<span class="focus-input100" data-placeholder="Enter Advice"></span>
					</div>
					

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="submit">
							upload
								
							</button>
						</div>
					</div>

					<div class="text-center p-t-30">
						<span class="txt1">
							<h5>UPLOAD YOUR FILES THEN CLICK LOG OUT</h5>
						</span>

						<a class="txt2" href="register.php">
							</h3>LOG OUT</h3>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>