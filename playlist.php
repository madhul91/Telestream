<?php
error_reporting(0);
header("Content-Type: application/json");
include "Rajat.php";


$Avengers_Assemble = Rajat();
$SYLVIE = $_SERVER['REQUEST_URI'];
$THOR = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
$JANE_FOSTER = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';


$DOCTOR_STRANGE = $THOR . $JANE_FOSTER . $SYLVIE;
$CHRISTINE = $DOCTOR_STRANGE;
$DEVARA = "http://localhost/jiotv-plus/live.php";
$WANDA = file_get_contents($Avengers_Assemble['play'][0]);
$DOCTOR_STRANGE = str_replace($DEVARA, "$DOCTOR_STRANGE", $WANDA);
$DOCTOR_STRANGE = str_replace("playlist.php", "live.php", $DOCTOR_STRANGE);


echo $DOCTOR_STRANGE;
$WANDA = file_get_contents($Avengers_Assemble['star']);
$DEVARA = "http://localhost/jiotv-plus/live.php";
$CHRISTINE = str_replace($DEVARA, "$CHRISTINE", $WANDA);
$CHRISTINE = str_replace("playlist.php", "portal.php", $CHRISTINE);


echo $CHRISTINE;


echo file_get_contents($Avengers_Assemble['play'][1]);
echo file_get_contents($Avengers_Assemble['play'][2]);
echo file_get_contents($Avengers_Assemble['play'][3]);
echo file_get_contents($Avengers_Assemble['play'][4]);
echo file_get_contents($Avengers_Assemble['play'][5]);
echo file_get_contents($Avengers_Assemble['play'][6]);
echo file_get_contents($Avengers_Assemble['play'][7]);
echo file_get_contents($Avengers_Assemble['play'][8]);
echo file_get_contents($Avengers_Assemble['play'][9]);
echo file_get_contents($Avengers_Assemble['play'][10]);
echo file_get_contents($Avengers_Assemble['play'][11]);
echo file_get_contents($Avengers_Assemble['play'][12]);
echo file_get_contents($Avengers_Assemble['play'][13]);
echo file_get_contents($Avengers_Assemble['play'][14]);