<?php
$conn = mysqli_connect("localhost","root","","mydata");
if(isset($_POST['button'])){
  $_name = $_POST['name'];
  $_pass = $_POST['pass'];
  $query = mysqli_query($conn,"INSERT INTO login(`name`,`pass`)VALUES('$_name','$_pass')");
  echo mysqli_error($conn);
}

?>
<?php
    if(isset($_POST['submit']))
    {
        $_name = $_POST['name'];
        $_pass = $_POST['pass'];

        $result = mysqli_query($conn,"SELECT * FROM `register` WHERE `name`='$_name' AND `pass`='$_pass'");
        $row = mysqli_fetch_array($result);

        $row_count = mysqli_num_rows($result);

        if($row_count == 1)
        {
            echo "<script> alert('Login Successfully'); </script>";

            header("Location:check.php");
        }else{
            echo "<script> alert('Username or Password are Incorrect'); </script>";
        }


    }
    
?>

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
</head>

<body>

<header class="header-fixed">

  <div class="header-limiter">

    <h1><a href="#">Softwares<span style=> B2H</span></a></h1>

    <nav>
      <a href="#">Home</a>
      <a href="register.php" class="selected">LOG IN</a>
      <a href="index1.php">SING IN</a>
      <a href="#">About</a>
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
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100" style="width: 50%;">
        <form class="login100-form validate-form" style="width: 100%;" action="#" method="POST">
          <span class="login100-form-title p-b-26s">
            Log In Here
          </span>
          <span class="login100-form-title p-b-48">
            
          </span>

          <div class="wrap-input100 validate-input" data-validate = "Valid email is: name">
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
          <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              <button class="login100-form-btn" name="submit">
                LOG IN

                      </button>
            </div>
          </div>
          <div class="text-center p-t-50">
            <span class="txt1">
              Don’t have an account?
            </span>

            <a class="txt2" href="index1.php">
              Sign Up
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
<script src="http://cdn.tutorialzine.com/misc/enhance/v3.js" async></script>
</body>
</html>