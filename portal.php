<?php
include "Rajat.php";
$wanda = @$_GET["id"];
$Avengers_Assemble = Rajat();
$BLOODY_SWEET = json_decode(jio_data(), true);
if ($Avengers_Assemble['latest_script'] === rajat_kumar()) {
    if (file_exists("$RAJAT_PRO_DEV_X_DARK_SIDE/authToken.txt") && !empty("$RAJAT_PRO_DEV_X_DARK_SIDE/authToken.txt") && isset(($BLOODY_SWEET["authToken"]))) {
        $vision = doctor_strange($wanda);
        if (isset($vision["js"]["cmd"])) {
            $d7 = $vision["js"]["cmd"];
            header("Location: " . $d7);
            die;
        }
    } else {
        video();
        echo "#please login first";
        echo "#KEY IS MISSING";
    }
} else {
    echo video();
    echo "#UPDATED YOUR SCRIPT";
}
?>