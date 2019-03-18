<!DOCTYPE html>
<html lang="en">
<head>
  <title>B2H||LOG IN </title>
  <link rel="icon" type="icon/png" href="images/12.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/demo.css">
  <link rel="stylesheet" href="css/header.css">
  <link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

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
</head>

<body>

<header class="header-fixed">

  <div class="header-limiter">

    <h1><a href="#">Softwares<span style=> B2H</span></a></h1>

    <nav>
      <a href="#">Home</a>
      <a href="#" class="selected">USER ONCE</a>
      <a href="index1.php">SING IN</a>
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


<!-- Demo ads. Please ignore and remove. -->



  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100" style="width: 50%;">
          <span class="login100-form-title p-b-26s">
            CHOOSE ONCE
          </span>
          
          <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
             <a href="index2.php"> <button class="login100-form-btn" name="submit">
                DOWNLODING FILES TO CLICK

                      </button></a>
            </div>
          </div>
           <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              <a href="upload.php"><button class="login100-form-btn" name="submit">
                UPLOAD FILES TO CLICK

                      </button></a>
            </div>
          </div>
          </div>
        </div></body></html
        
    
  