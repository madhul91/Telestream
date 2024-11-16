<?php
include "Rajat.php";
$id = $_GET['id'];
$ROLEX = Rajat();
?>
<html>

<head>
    <title><?php echo "TeleStream" ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $ROLEX['himg']; ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/plyr@3.6.2/dist/plyr.css" />
    <script src="https://cdn.jsdelivr.net/npm/plyr@3.6.12/dist/plyr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/hls.js@1.1.4/dist/hls.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
</head>

<body>
    <video autoplay controls crossorigin poster="" playsinline>
        <source src="<?php echo "portal.php?id=$id"; ?>" type="application/x-mpegURL">
    </video>

    <script src="js/pplay.js"></script>
</body>

</html>