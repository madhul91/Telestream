<?php
include "Rajat.php";
$ASUR = Rajat();
$BLOODY_SWEET = json_decode(jio_data(), true);
if (!file_exists("$RAJAT_PRO_DEV_X_DARK_SIDE/authToken.txt") || empty(file_get_contents("$RAJAT_PRO_DEV_X_DARK_SIDE/authToken.txt")) || !isset($BLOODY_SWEET["authToken"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeleStream</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $ASUR['himg']; ?>">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"> <!-- Link to the external CSS file -->
</head>

<body>

    <center>
        <header>
            <div id="userButtons">
                <button id="loginButton" onclick="window.location.href='login.php'">Login</button>
                <button id="PlayListButton" onclick="window.location.href='playlist.php'">PlayList</button>
                <button id="PlayListButton" onclick="window.location.href='star.php'">Star Tv</button>
            </div>
        </header>
        </br>
        <div id="searchWrapper">
            <input type="text" name="searchBar" id="searchBar" placeholder="Search ..." />
        </div>
        <div class="filter">
            <label for="language">Language:</label>
            <select id="language">
                <option value="">All</option>
                <option value="Hindi">Hindi</option>
                <option value="English">English</option>
                <option value="Marathi">Marathi</option>
                <option value="Punjabi">Punjabi</option>
                <option value="Urdu">Urdu</option>
                <option value="Bengali">Bengali</option>
                <option value="Malayalam">Malayalam</option>
                <option value="Tamil">Tamil</option>
                <option value="Gujarati">Gujarati</option>
                <option value="Odia">Odia</option>
                <option value="Telugu">Telugu</option>
                <option value="Bhojpuri">Bhojpuri</option>
                <option value="Kannada">Kannada</option>
                <option value="Assamese">Assamese</option>
                <option value="Nepali">Nepali</option>
                <option value="French">French</option>
            </select>

            <label for="type">Type:</label>
            <select id="type">
                <option value="">All</option>
                <option value="Entertainment">Entertainment</option>
                <option value="Movies">Movies</option>
                <option value="Kids">Kids</option>
                <option value="Sports">Sports</option>
                <option value="Lifestyle">Lifestyle</option>
                <option value="Infotainment">Infotainment</option>
                <option value="News">News</option>
                <option value="Music">Music</option>
                <option value="Devotional">Devotional</option>
                <option value="Business">Business</option>
                <option value="Educational">Educational</option>
                <option value="Shopping">Shopping</option>
                <option value="JioDarshan">JioDarshan</option>
            </select>
        </div>
    </center>

    <div class="channels">
        <?php
        function getLanguageBadgeClass($language)
        {
            $languageClasses = [
                'Hindi' => 'badge-hindi',
                'English' => 'badge-english',
                'Marathi' => 'badge-marathi',
                'Punjabi' => 'badge-punjabi',
                'Urdu' => 'badge-urdu',
            ];

            return $languageClasses[$language] ?? 'badge-default';
        }

        if ($ASUR['latest_script'] === rajat_kumar()) {
            $fileContent = file_get_contents($ASUR['play'][0]);
            $lines = explode("\n", $fileContent);

            foreach ($lines as $line) {
                if (strpos($line, "#EXTINF") === 0) {
                    if (preg_match('/tvg-id="([^"]+)".*tvg-name="([^"]+)".*tvg-type="([^"]+)".*group-title="([^"]+)".*tvg-language="([^"]+)".*tvg-logo="([^"]+)"/', $line, $matches)) {
                        $tvgId = $matches[1];
                        $name = $matches[2];
                        $type = $matches[3];
                        $groupTitle = $matches[4];
                        $language = $matches[5];
                        $logo = $matches[6];
                        $streamUrl = trim(end($lines));

                        $logo1 = str_replace("https://jiotvimages.cdn.jio.com/dare_images/images/", "", $logo);
                        $logo1 = str_replace(".png", "", $logo1);

                        $badgeClass = getLanguageBadgeClass($language);

                        echo '<a href="playy.php?id=' . $tvgId . "&cid=" . $logo1 . '" class="channel" data-language="' . $language . '" data-type="' . $type . '" target="_blank">';
                        echo '<img src="' . $logo . '" alt="' . $name . ' Logo">';
                        echo '<div class="channel-info">';
                        echo '<h2 style="color: white;">' . $name . '</h2>';
                        echo '<div class="badges-container">';
                        echo '<span class="badge badge-' . strtolower($type) . '">' . $type . '</span>';
                        echo '<span class="badge ' . $badgeClass . '">' . $language . '</span>';
                        echo '</div>';
                        echo '</div>';
                        echo '</a>';
                    }
                }
            }
        } else {
            // Handle else case if necessary
        }
        ?>
    </div>

    <script src="js/script.js"></script> <!-- Link to the external JS file -->

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>