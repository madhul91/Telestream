<?php
include("Rajat.php");
$id = @$_GET["id"];
$hls = @$_GET["hls"];
$ck = @$_GET["ck"];
$ck = hex2bin($ck);
$key = @$_GET["key"];
header("Content-Type: application/vnd.apple.mpegurl");
$THOR = RAJAT_PRO_DEV_x_rolex($hls, $id, $ck);
$CHRISTINE = $THOR["Rajat"]["data"];
$JANE_FOSTER = explode("/", $hls);
$BLACK_WIDOW = explode("_", $JANE_FOSTER[5]);
$DEVARA = [
    "WL/$BLACK_WIDOW[1]",
    "sonyliv_splash_",
    "#EXTM3U",

];
$ck = bin2hex($ck);
$LEO = [
    "ts.php?ck=$ck&key=$key&id=$id&tss=$JANE_FOSTER[0]/$JANE_FOSTER[1]/$JANE_FOSTER[2]/$JANE_FOSTER[3]/$JANE_FOSTER[4]/WL/$BLACK_WIDOW[1]",
    "ts.php?ck=$ck&key=$key&id=$id&tss=$JANE_FOSTER[0]/$JANE_FOSTER[1]/$JANE_FOSTER[2]/$JANE_FOSTER[3]/$JANE_FOSTER[4]/sonyliv_splash_",
    "#EXTM3U\n#DEVELOPED_BY_RAJAT_PRO_DEV\n#AUTHOR-rajat-KUMAR",
];
$LEO = str_replace($DEVARA, $LEO, $CHRISTINE);
echo $LEO;

?>