<?php
$conn=mysqli_connect("localhost","root","","mydata");


if(isset($_POST['submit'])){
	$_name = $_POST['name'];
	$_pass = $_POST['pass'];
	$_dept = $_POST['dept'];
	$_register = $_POST['register'];
	 $result = mysqli_query($conn,"SELECT * FROM `register` WHERE `name`='$_name' ");
        $row_count = mysqli_num_rows($result);

        if($row_count == 1)
        {
            echo "<script> alert('This user name is already exist'); </script>";
               }else{
$query = mysqli_query($conn,"INSERT INTO register(`name`,`pass`,`dept`,`register`)Values('$_name','$_pass','$_dept','$_register')");

  echo mysqli_error($conn);
            echo"<script>alert('Registered Susscessfully');</script>";
        }
    }



 ?>





<!DOCTYPE html>
<html lang="en">
<head>
	<title>B2H||SING IN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/12.png"/>
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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/demo.css">
  <link rel="stylesheet" href="css/header.css">
  <link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>

<body>

<header class="header-fixed">

  <div class="header-limiter">

    <h1><a href="#">Softwares<span> B2H</span></a></h1>

    <nav>
      <a href="check.php">Home</a>
      <a href="#" class="selected">SING IN</a>
      <a href="register.php">LOG IN</a>
      <a href="">About</a>
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
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100" style="width: 50%;">
				<form class="login100-form validate-form" style="width: 100%;" action="#" method="POST">
					<span class="login100-form-title p-b-26s">
						RIGESTER HERE
					</span>
					<span class="login100-form-title p-b-48">
					
					</span>
				

					<div class="wrap-input100 validate-input" data-validate = "Valid Name is: B2H">
						<input class="input100" type="text" name="name">
						<span class="focus-input100" data-placeholder="Enter Name"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid department is:mca">
						<input class="input100" type="text" name="dept">
						<span class="focus-input100" data-placeholder="Department"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid register:12345">
						<input class="input100" type="text" name="register">
						<span class="focus-input100" data-placeholder="Registernumber"></span>
					</div>
				

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="submit">
							<a href="register.php" name="submit">SING IN</a>
							
								
							</button>
						</div>
					</div>
		

					<div class="text-center p-t-10">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="register.php">
							Log In Here
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