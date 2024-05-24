<?php



$table = new mysqli("localhost", "root", "", "contact");

$texttd = "";

try {





    $res = mysqli_query($table, "SELECT COUNT(*) FROM contact;");
    $x = intval(implode("", mysqli_fetch_assoc($res)));







} catch (\Exception $some) {
    $texttd = "No Messages";
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




    <h1 class="page-title">Messages</h1><br><br><br><br>

    <div class="row upper ">
        <div class="div-message fi justify-content-center">
            <div id="list-example" class="list-group ">

                <?php

                $result = $table->query("SELECT subject FROM contact;");
                $z = 0;
                while ($row = $result->fetch_assoc()) {
                    echo "<a class='list-group-item list-group-item-action ' href='#" . $z . "'>" . $row['subject'] . "</a>";
                    $z += 1;
                }




                ?>
            </div>
        </div>
        <div class="div-message secod">
            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                
                <p class="fnt-sz">

                    <?php


                    $results = $table->query("SELECT first_name, second_name, phone, email, address, message, state, subject, city FROM contact;");
                    $zz=0;
                    while ($row = $results->fetch_assoc()) {
                       
                        echo "

                        <h4 id='".$zz."' class='title-message'>".$row['subject']."</h4><br>
                        <p class='fnt-sz'>
                        <i>From <b>".$row['first_name']." ".$row['second_name']."</b></i><br>
                        ".$row['phone']."<br>
                        <a href='mailto:".$row['email']."' target=”_blank”>Send Mail</a><br>
                        ".$row['address'].", ".$row['city'].", ".$row['state']."<br><br>".$row['message']."</p>
                        <br><br><br><br>
                       ";
                       $zz+=1;}
                     
                    

                    ?>




                </p>
               

            </div>
        </div>
    </div>

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