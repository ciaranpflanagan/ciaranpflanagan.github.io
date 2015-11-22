<?php
$errors = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    // Checking to see if name is left blank
    if (empty($_POST['name'])) {
        $errors[] = 'You forgot to enter your a name!!!';
    }
    else
    {
        $n = $_POST['name'];
    }

    // Checking to see if email if left blank
    if (empty($_POST['email'])) {
        $errors[] = 'You forgot to enter your a email!!!';
    }
    else
    {
        $e = $_POST['email'];
    }

    // Checking to see if message is left blank
    if (empty($_POST['message'])) {
        $errors[] = 'You forgot to enter your a message!!!';
    }
    else
    {
        $m = $_POST['message'];
    }

$w = $_POST['website'];

    // Sending the email
    mail('ciaran@cicisoft.net', '<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Timed Notifications with CSS Animations</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Timed Notifications with CSS Animations" />
        <meta name="keywords" content="css3, animations, css, notification, timed, duration, box, overlay" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="css/main.css" />
        <link href=\'http://fonts.googleapis.com/css?family=Oswald\' rel=\'stylesheet\' type=\'text/css\'>
        <link href=\'http://fonts.googleapis.com/css?family=Alegreya+SC:700,400italic\' rel=\'stylesheet\' type=\'text/css\' />
        <script type="text/javascript" src="js/modernizr.custom.39460.js"></script>
        <style>
.tn-box {
    width: 360px;
    position: relative;
    margin: 0 auto 20px auto;
    padding: 25px 15px;
    text-align: center;
    font-family: \'Oswald\', sans-serif;
    border-radius: 5px;
    box-shadow:
        0 1px 1px rgba(0,0,0,0.1),
        inset 0 1px 0 rgba(255,255,255,0.6);
    margin-top: 15%;

}

.tn-box-color-1{
    background: #DB2C2C;
    border: 1px solid #f6db7b;
}
        </style>
    </head>
    <body>
        <div class="tn-box tn-box-color-1">
            <p>You Are Running Out Of <i>"Item Name"</i>!</p>
            <div class="tn-progress"></div>
        </div>
    </body>
</html>', 'From: webmaster@cicisoft.net');
}
else
{
    echo "$errors";
}
?>
