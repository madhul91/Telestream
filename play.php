<?php
error_reporting(0);
include "Rajat.php";
$id = $_GET['id'];
$cid = $_GET['cid'];
$cid = image($cid);
$ROLEX = Rajat();
cookie_updater();
?>
<html>

<head>
    <title><?php echo "TeleStream  " . $ROLEX['hname']; ?></title>
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
    <div id="loading" class="loading">
        <div class="loading-text">
            <span style="color:#FF9966"><?php echo @$ROLEX['span'][0]; ?></span>
            <span style="color:#FF9966"><?php echo @$ROLEX['span'][1]; ?></span>
            <span style="color:#FF9966"><?php echo @$ROLEX['span'][2]; ?></span>
            <span style="color:#FF9966"><?php echo @$ROLEX['span'][3]; ?></span>
            <span style="color:#FF9966"><?php echo @$ROLEX['span'][4]; ?></span>
            <span style="color:#FF9966"><?php echo @$ROLEX['span'][5]; ?></span>
            <span style="color:#FF9966"><?php echo @$ROLEX['span'][6]; ?></span>
            <span style="color:#FF9966"><?php echo @$ROLEX['span'][7]; ?></span>
            <span style="color:#FF0000"><?php echo @$ROLEX['span'][8]; ?></span>
            <span style="color:#FF0000"><?php echo @$ROLEX['span'][9]; ?></span>
            <span style="color:#FF0000"><?php echo @$ROLEX['span'][10]; ?></span>
            <span style="color:#FF0000"><?php echo @$ROLEX['span'][11]; ?></span>
            <span style="color:#FF0000"><?php echo @$ROLEX['span'][12]; ?></span>
            <span style="color:#66CC66"><?php echo @$ROLEX['span'][13]; ?></span>
            <span style="color:#66CC66"><?php echo @$ROLEX['span'][14]; ?></span>
            <span style="color:#66CC66"><?php echo @$ROLEX['span'][15]; ?></span>
        </div>
    </div>

    <video autoplay controls crossorigin poster="<?php echo $cid; ?>" playsinline>
        <source src="<?php echo url($id); ?>" type="application/x-mpegURL">
    </video>

    <script src="js/play.js"></script>
</body>

</html>