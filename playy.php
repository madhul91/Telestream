<?php
error_reporting(0);
include "Rajat.php";
$id = $_GET['id'];
$cid = $_GET['cid'];
$cidd = $cid;
$cid = image($cid);
$ROLEX = Rajat();
?>

<html lang="en">

<head>
    <title><?php echo $cidd; ?> | TeleStream</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="author" content="rajat">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.2/plyr.css" />
    <script src="https://cdn.plyr.io/3.6.3/plyr.js"></script>
    <meta name="referrer" content="no-referrer-when-downgrade">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $ROLEX['himg']; ?>">
    <script type='text/javascript' src='https://content.jwplatform.com/libraries/IDzF9Zmk.js'></script>

</head>

<body>
    <video id="myElement"></video>
    <script src="js/playy.js"></script>
</body>

</html>