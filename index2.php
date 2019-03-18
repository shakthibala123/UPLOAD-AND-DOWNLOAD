

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Files to download</title>
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
      <a href="#">Home</a>
      <a href="#" class="selected">DOWNLOAD</a>
      <a href="#">SING IN</a>
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

    <p><br/></p>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>File</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "config.php";
                $stmt = $db->prepare("select * from newfiles");
                $stmt->execute();
                while($row = $stmt->fetch()){
                ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['filename'] ?></td>
                    <td class="text-center"><a href="download.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Download</a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>