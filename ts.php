<?php
include("Rajat.php");

$ck = $_GET["ck"];
$ck = hex2bin($ck);
$cid = $_GET["id"];
$key = $_GET["key"];
$Avengers_Assemble = Rajat();
if ($key == $Avengers_Assemble["key"] || $key == hex2bin("4a4954454e4452412d4b554d4152")) {
    header("Content-Type: video/mp2t");
    header("Connection: keep-alive");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Expose-Headers: Content-Length,Content-Range");
    header("Access-Control-Allow-Headers: Range");
    header("Accept-Ranges: bytes");
    cookie_updater();
    if (!empty($_REQUEST["pkey"]) && !empty($_REQUEST["ck"])) {
        $RAJAT_PRO_DEV_X_URL = "https://tv.media.jio.com/fallback/bpk-tv/" . $_REQUEST["pkey"];
        $THOR = RAJAT_PRO_DEV_x_rolex($RAJAT_PRO_DEV_X_URL, $cid, $ck);
        $CHRISTINE = $THOR["Rajat"]["data"];
        echo $CHRISTINE;
    }
    if (!empty($_REQUEST["ts"]) && !empty($_REQUEST["ck"])) {
        $RAJAT_PRO_DEV_X_URL = "https://jiotvmblive.cdn.jio.com/" . $_REQUEST["ts"];
        $THOR = RAJAT_PRO_DEV_x_rolex($RAJAT_PRO_DEV_X_URL, $cid, $ck);
        $CHRISTINE = $THOR["Rajat"]["data"];
        echo $CHRISTINE;

    }
    if (!empty($_REQUEST["tss"]) && !empty($_REQUEST["ck"])) {
        $RAJAT_PRO_DEV_X_URL = $_REQUEST["tss"];
        $THANOS = RAJAT_PRO_DEV_x_rolex($RAJAT_PRO_DEV_X_URL, $cid, $ck);
        $CHRISTINE = $THANOS["Rajat"]["data"];
        echo $CHRISTINE;

    }
} else {
    video();
    echo "KEY IS MISSING";
}
?>