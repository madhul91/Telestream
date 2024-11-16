<?php
include("Rajat.php");

$Avengers_Assemble = Rajat();
$id = @$_GET["id"];
$cid = @$_GET["cid"];
$ck = @$_GET["ck"];
$ckk = hex2bin($ck);
$key = @$_GET["key"];
$hls = @$_GET["hls"];
$ts = @$_GET["ts"];
$CHANNELS = explode('-', $id);
header("Content-Type: application/vnd.apple.mpegurl");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Expose-Headers: Content-Length,Content-Range");
header("Access-Control-Allow-Headers: Range");
header("Accept-Ranges: bytes");
if (isset($id) && !empty($id) && isset($ck) && !empty($ck)) {
    $RAJAT_PRO_DEV_X_URL = "https://jiotvmblive.cdn.jio.com/bpk-tv/{$CHANNELS[0]}/Fallback/$id";
    $THOR = RAJAT_PRO_DEV_x_rolex($RAJAT_PRO_DEV_X_URL, $cid, $ckk);
    $CHRISTINE = $THOR["Rajat"]["data"];
    $DEVARA = [
        ',URI="https://tv.media.jio.com/fallback/bpk-tv/',
        "{$CHANNELS[0]}-",
        "ts.php?ck=$ck&ts=keyframes/ts.php?ckk=$ck&ts=",
        "#EXTM3U",
    ];

    $LEO = [
        ',URI="ts.php?key=' . $key . '&ck=' . $ck . '&id=' . $cid . '&pkey=',
        "ts.php?key=$key&ck=$ck&id=$cid&ts=bpk-tv/{$CHANNELS[0]}/Fallback/{$CHANNELS[0]}-",
        "ts.php?key=$key&ck=$ck&id=$cid&ts=keyframes/",
        "#EXTM3U\n#DEVELOPED_BY_RAJAT_PRO_DEV\n#AUTHOR-rajat-KUMAR",
    ];
    $LEO = str_replace($DEVARA, $LEO, $CHRISTINE);
    echo $LEO;
}
if (isset($hls) && !empty($hls) && isset($ck) && !empty($ck)) {
    $RAJAT_PRO_DEV_X_URL = "https://jiotvmblive.cdn.jio.com/bpk-tv/$cid/HLSPartner/$hls";
    $THOR = RAJAT_PRO_DEV_x_rolex($RAJAT_PRO_DEV_X_URL, $cid, $ckk);
    $CHRISTINE = $THOR["Rajat"]["data"];
    $SYLVIE = explode("#", $CHRISTINE);
    $SYLVIE = explode("_", $SYLVIE[5]);
    $SYLVIE = explode("\n", $SYLVIE[0]);

    $DEVARA =
        [
            "$SYLVIE[1]",
            "#EXTM3U",
        ];
    $LEO =
        [
            "ts.php?ck=$ck&key=$key&ts=bpk-tv/$cid/HLSPartner/$SYLVIE[1]",
            "#EXTM3U\n#DEVELOPED_BY_RAJAT_PRO_DEV\n#AUTHOR-rajat-KUMAR",
        ];
    $Rajat = str_replace($DEVARA, $LEO, $CHRISTINE);
    echo $Rajat;
}
if (isset($ts) && !empty($ts) && isset($ck) && !empty($ck)) {
    $RAJAT_PRO_DEV_X_URL = "https://jiotvmblive.cdn.jio.com/$cid/$ts";
    $THOR = RAJAT_PRO_DEV_x_rolex($RAJAT_PRO_DEV_X_URL, $id, $ckk);
    $CHRISTINE = $THOR["Rajat"]["data"];

    $DEVARA = [
        "$cid",
        "#EXTM3U",
    ];
    $LEO = [
        "ts.php?ck=$ck&id=$id&key=$key&ts=$cid/$cid",
        "#EXTM3U\n#DEVELOPED_BY_RAJAT_PRO_DEV\n#AUTHOR-rajat-KUMAR",
    ];
    $LEO = str_replace($DEVARA, $LEO, $CHRISTINE);
    echo $LEO;
}
?>