<?php

$table = new mysqli("localhost", "root", "", "contact");

$texttd = "";

try {
  if (isset ($_REQUEST['first_name']) && isset ($_REQUEST['second_name']) && isset ($_REQUEST['email']) && isset ($_REQUEST['phone']) && isset ($_REQUEST['address']) && isset ($_REQUEST['city']) && isset ($_REQUEST['message']) && isset ($_REQUEST['subject']) && isset ($_REQUEST['state'])) {








    $xx = mysqli_query($table, "INSERT INTO `contact`(`first_name`, `second_name`, `Email`, `phone`, `address`, `City`, `State`, `Subject`, `Message`) VALUES ('" . $_REQUEST['first_name'] . "','" . $_REQUEST['second_name'] . "','" . $_REQUEST['email'] . "','" . $_REQUEST['phone'] . "','" . $_REQUEST['address'] . "','" . $_REQUEST['city'] . "','" . $_REQUEST['state'] . "','" . $_REQUEST['subject'] . "','" . $_REQUEST['message'] . "')");




    $texttd = "Message has been sent successfully. You shall be recieving a reply on your registered E-Mail within 24-48 hours.";
  }
} catch (\Exception $some) {
  $texttd = "Some Error occured. Resending the message may help.";
}





?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arav Jain Docs</title>
  <link rel="icon" type="image/x-icon" href="logo.jpg">

  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="style.css">

</head>


<body onload="xxx()" class="body">

  <button class="btp" id="scrolls" onclick="upscroll()">↑</button>

  <div class="hero ">
    <!--
        <div class="color-div">
            <h1 class="title" id="typ"></h1>



        </div>
        <div class="dividor">

        </div>

        <img src="https://www.hdwallpapers.in/download/green_leaves_in_blur_green_background_hd_nature-1920x1080.jpg" alt="Parliament" class="hero-img" style="position: relative;">

    -->













    <nav class="navbar navbar-expand-lg bg-body-tertiary modified " style="z-index: 999;">
      <div class="container-fluid additional bg-changer navs">
        <a class="navbar-brand nav-title opacity fade-in">Youth Parliament 2024</a>
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end " id="navbarNavAltMarkup">
          <div class="navbar-nav ">
            <a class="nav-link active current fade-in nav-link-ltr ammend" aria-current="page" href="index.html" id="nav-link1">Home</a>
            <a class="nav-link active fade-in nav-link-ltr ammend" aria-current="page" href="about.html" id="nav-link2">About Us</a>
            <a class="nav-link active fade-in nav-link-fade-up ammend" aria-current="page" href="accordion.html" id="nav-link3">Accordion</a>
            <a class="nav-link active fade-in nav-link-fade-up ammend" aria-current="page" href="cards.html" id="nav-link4">Cards</a>
            <a class="nav-link active fade-in nav-link-ltr ammend" aria-current="page" href="gallery.html" id="nav-link5">Gallery</a>
            <a class="nav-link active fade-in nav-link-ltr ammend" aria-current="page" href="statistics.html" id="nav-link7">Statistics</a>
            <a class="nav-link active fade-in nav-link-fade-up ammend" aria-current="page" href="contact_us.php" id="nav-link9"><b>Contact Us</b></a>


          </div>
        </div>
      </div>
    </nav>



  </div><br><br>


  <h1 class="page-title">Contact Us</h1><br><br><br><br><br>



  <div class="up justify-content-center">
    <div class="divs">
      <p style="font-size: 25px; text-align: center;">
        Headquaters: 98, London<br>
        Contact: 91+9999999999<br>
        E-Mail: administration@business.com<br>
      </p>


    </div>
    <div class="divs">

      <iframe src="https://www.google.com/maps/d/u/1/embed?mid=1J-HofAh7M4UeeZJ7j5zisnDHHggaWG4&ehbc=2E312F&z=8" class="photo photos" style="aspect-ratio: 16/11;"></iframe>

    </div>
  </div>
  <br><br><br><br>


  <form action="" method="post">
    <div class="contact-form">
      <h1 class="page-title">For Donations:</h1><br><br><br><br>
      <div style="display: flex; flex-wrap: wrap; width: 100%; margin: auto;" class="justify-content-center ">

        <div class="form-floating " style="width: 45%; ">
          <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" style="width: 100%; " name="first_name">
          <label for="floatingInput">First Name</label>
        </div>
        <div class="form-floating " style="width: 45%; ">
          <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" style="width: 100%; " name="second_name">
          <label for="floatingInput">Last Name</label>
        </div>


        <div class="form-floating " style="width: 45%; ">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" style="width: 100%; " name="email">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating " style="width: 45%; ">
          <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" style="width: 100%; " name="phone">
          <label for="floatingInput">Phone</label>
        </div>

        <div class="form-floating " style="width: calc(30% - (40px / 3)); ">
          <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" style="width: 100%; " name="address">
          <label for="floatingInput">Address</label>
        </div>
        <div class="form-floating " style="width: calc(30% - (40px / 3)); ">
          <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" style="width: 100%; " name="city">
          <label for="floatingInput">City</label>
        </div>
        <div class="form-floating " style="width: calc(30% - (40px / 3)); ">
          <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" style="width: 100%; " name="state">
          <label for="floatingInput">State</label>
        </div>

        <div class="form-floating " style="width: calc(90% + 40px); ">
          <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" style="width: 100%; " name="subject">
          <label for="floatingInput">Subject</label>
        </div>

        <div class="form-floating" style="width: calc(90% + 40px);">
          <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 150px; width: 100%;" name="message"></textarea>
          <label for="floatingTextarea2">Message</label>
        </div>

      </div>
      <br>
      <button class="btn btn-success" type="submit">Submit Form</button><br><br>
      <h4><?php echo $texttd;
      $texttd = ""; ?></h4>

    </div>
  </form>


  <div class="container" style="position: relative; top: 50px;">
    <footer class="py-3 my-4 foots">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="index.html" class="nav-link px-2 text-body-secondary foots">Home</a></li>
        <li class="nav-item"><a href="about.html" class="nav-link px-2 text-body-secondary foots">About Us</a></li>
        <li class="nav-item"><a href="accordion.html" class="nav-link px-2 text-body-secondary foots">Accordion</a></li>
        <li class="nav-item"><a href="gallery.html" class="nav-link px-2 text-body-secondary foots">Gallery</a></li>
        <li class="nav-item"><a href="cards.html" class="nav-link px-2 text-body-secondary foots">Cards</a></li>
        <li class="nav-item"><a href="statistics.html" class="nav-link px-2 text-body-secondary foots">Statistics</a></li>
        <li class="nav-item"><a href="contact_us.php" class="nav-link px-2 text-body-secondary foots">Contact Us</a></li>
      </ul>
      <p class="text-center text-body-secondary foots">&copy; 2023 Company, Inc</p>
    </footer>
  </div>


  <script src="bootstrap.js"></script>
  <script src="main.js"></script>


</body>
</html>