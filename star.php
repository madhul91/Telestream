<?php
error_reporting(0);
include "Rajat.php";
$ASUR = Rajat();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeleStream</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $ASUR['himg']; ?>">

</head>

<body>
    <center>
        <h1 style="color: white;"><?php echo $ASUR['message6']; ?></h1>
        <h1 style="color: white;"><?php echo $ASUR['message7']; ?></h1>
        <h1 style="color: white;"><?php echo $ASUR['message8']; ?></h1>
        <h1 style="color: white;"><?php echo $ASUR['message9']; ?></h1>
        <h1 style="color: white;"><?php echo $ASUR['message10']; ?></h1>
        <div class="channels">
            <?php
            $fileContent = file_get_contents($ASUR['star']);

            $lines = explode("\n", $fileContent);
            if ($ASUR['latest_script'] === rajat_kumar()) {
                foreach ($lines as $line) {
                    if (strpos($line, "#EXTINF") === 0) {
                        preg_match('/tvg-id="([^"]+)".*tvg-name="([^"]+)".*tvg-logo="([^"]+)".*group-title="([^"]+)",([^ ]+) (.*)/', $line, $matches);
                        $tvgId = $matches[1];
                        $tvgname = $matches[2];
                        $logo = $matches[3];
                        $groupTitle = $matches[4];
                        $nameAndStreamUrl = $matches[5];

                        echo '<div class="channel">';
                        echo '<img src="' . $logo . '" alt="' . $tvgname . ' Logo">';
                        echo '<div class="channel-info">';
                        echo '<h2>' . $tvgname . '</h2>';
                        echo '<a href="pplay.php?id=' . $tvgId . '" target="">Watch Now</a>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
            } else {
                echo '
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f4f4f9;">
        <div style="text-align: center; background: #ffffff; padding: 40px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
            <h1 style="color: #333; font-family: Arial, sans-serif; margin-bottom: 20px;">🆕 UPDATE IS AVAILABLE NOW</h1>
            <p style="font-size: 18px; color: #555; margin-bottom: 30px;">A new version of the script is now available. Click the button below to download the latest version.</p>
            <a href="https://github.com/Rajat?tab=repositories" style="display: inline-block; background-color: #28a745; color: #ffffff; padding: 10px 20px; font-size: 18px; border-radius: 5px; text-decoration: none; transition: background-color 0.3s;">
                Download Now
            </a>
        </div>
    </div>
    ';
            }
            ?>
        </div>
    </center>

    <script src="js/star.js"></script>
</body>

</html>