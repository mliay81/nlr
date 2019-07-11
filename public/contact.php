<?php

if($_POST["submit"]) {
    $recipient="your@email.address";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Northern Lights Racing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Anton|Dancing+Script|Permanent+Marker|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script src="app.js"></script>
    <script src="https://snapwidget.com/js/snapwidget.js"></script>
</head>

<body>

    <!-- Localhost is pulling from this index file, inside the public folder -->

    <?=$thankYou ?>

<form method="post" action="contact.php">
    <label>Name:</label>
    <input name="sender">

    <label>Email address:</label>
    <input name="senderEmail">

    <label>Message:</label>
    <textarea rows="5" cols="20" name="message"></textarea>

    <input type="submit" name="submit">
</form>

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="container">
                    <div class="row">
                      <div class="col-sm">
                      </div>
                      <div class="col-sm">
                            <div class="card" style="width:100%">
                                    <img class="card-img-top" src="images/logo.jpg" alt="Card image cap">
                            </div>
                      </div>
                      <div class="col-sm">
                      </div>
                    </div>
                  </div>
        </div>
    </div>

    <!-- Nav Bar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-color: darkviolet;">
            <button id="nav" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto order-0">
                    <!-- <a href="./"><img src="images/logo.jpg" id="logo" alt="Norther Lights Racing Minnesota logo"
                            style="width: 75px; height: 35px"></a> -->
                    <a id="route" class="nav-item nav-link" href="/">Home</a>
                    <a id="route" class="nav-item nav-link" href="/races">Racing</a>
                    <a id="route" class="nav-item nav-link" href="/sponsors">Sponsors</a>
                    <a id="route" class="nav-item nav-link" href="/calendar">Calendar</a>
                    <a id="route" class="nav-item nav-link" href="/contact">Contact</a>
                    <a id="route" class="nav-item nav-link" href="/outreach">Community Engagement</a>
                </div>
            </div>
        </nav>

        <br><br>
        <br><br>


<h3>CONTACT!</h3>





        <br><br>

        <!-- Footer -->
        <nav class="navbar navbar-dark bg-dark" id="footer" style="background-color: black;">
            <span class="navbar-nav mx-auto order-0">
                <p>Northern Lights Racing &#169 2019</p>
            </span>
        </nav>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
</body>

</html>