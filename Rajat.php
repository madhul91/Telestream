<?php
error_reporting(0);

$RAJAT_PRO_DEV_X_DARK_SIDE = "app/data/cache/Rajat";
if (!is_dir($RAJAT_PRO_DEV_X_DARK_SIDE)) {
    mkdir($RAJAT_PRO_DEV_X_DARK_SIDE, 0777, true);
}


$SCARLET_WITCH["user-agent"] = "plaYtv/7.1.5 (Linux;Android 13) ExoPlayerLib/2.11.7";
$SCARLET_WITCH["User-Agent"] = "okhttp/4.9.3";
$SCARLET_WITCH["deviceType"] = "phone";
$SCARLET_WITCH["devicename"] = "V2302A";
$SCARLET_WITCH["p-Name"] = "PD2302";
$SCARLET_WITCH["manufacturer"] = "vivo";
$SCARLET_WITCH["model"] = "V2302A";
$SCARLET_WITCH["x-platform"] = "android";
$SCARLET_WITCH["versionCode"] = "353";
$SCARLET_WITCH["os"] = "android";
$SCARLET_WITCH["appName"] = "TeleStream";
$SCARLET_WITCH["osversion"] = "13";


function cookie_updater()
{
    global $RAJAT_PRO_DEV_X_DARK_SIDE;
    $COOKIE = file_get_contents($RAJAT_PRO_DEV_X_DARK_SIDE . "/cookie.txt");
    // Replace with your URL for capturing cookies and use the file_put_contents function.
// Example URL: https://github.com/Rajat/JioTv/cookie.php?id=
    file_get_contents("" . $COOKIE);
}


function url($id)
{
    if (strlen($id) < 6) {
        $id = "live.php?id=$id&key=Rajat&e.m3u8";
        return $id;
    } else {
        return $id;
    }
}

function image($cid)
{
    $WANDA = Rajat();
    if (isset($WANDA['pimg'])) {
        return $WANDA['pimg'];
    } else {
        return "https://jiotvimages.cdn.jio.com/dare_images/images/$cid.png";
    }
}

function jio_data()
{
    global $RAJAT_PRO_DEV_X_DARK_SIDE;
    $ROLEX = file_get_contents("$RAJAT_PRO_DEV_X_DARK_SIDE/authToken.txt");
    $ROLEX = scarlet_witch("decrypt", $ROLEX);
    return $ROLEX;
}


function jio_tv_re_use_refreshtoken_generate()
{
    global $RAJAT_PRO_DEV_X_DARK_SIDE;
    $ASUR = file_get_contents("$RAJAT_PRO_DEV_X_DARK_SIDE/refresh.txt");
    $ASUR = scarlet_witch("decrypt", $ASUR);
    $ASUR = json_decode($ASUR, true);
    return $ASUR['authToken'];

}

function video()
{
    $ASUR = Rajat();
    $LOKI = file_get_contents("https://video.twimg.com/amplify_video/1797150287292981248/pl/-GLBpWJuiNKBrdvp.m3u8");
    $LOKI = str_replace("/amplify_video/", "https://video.twimg.com/amplify_video/", $LOKI);
    echo $LOKI;
}
function rajat_kumar()
{
    return "JioTv v2.1_01-09-2024 ✅";
}


function jio_tv_refreshtoken_generate()
{
    global $RAJAT_PRO_DEV_X_DARK_SIDE, $SCARLET_WITCH;
    $BLOODY_SWEET = file_get_contents("$RAJAT_PRO_DEV_X_DARK_SIDE/authToken.txt");
    $BLOODY_SWEET = scarlet_witch("decrypt", $BLOODY_SWEET);
    $BLOODY_SWEET = json_decode($BLOODY_SWEET, true);
    $RAJAT_PRO_DEV_X_URL = "https://auth.media.jio.com/tokenservice/apis/v1/refreshtoken?langId=6";
    $RAJAT_PRO_DEV_X_KANG = json_encode([
        "appName" => $SCARLET_WITCH["appName"],
        "deviceId" => $BLOODY_SWEET['deviceId'],
        "refreshToken" => $BLOODY_SWEET['refreshToken']
    ]);
    $RAJAT_PRO_DEV_X_ROLEX = [
        "accesstoken: " . $BLOODY_SWEET['authToken'],
        "uniqueId: " . $BLOODY_SWEET['sessionAttributes']['user']['unique'],
        "devicetype: " . $SCARLET_WITCH["deviceType"],
        "versionCode: " . $SCARLET_WITCH["versionCode"],
        "os: " . $SCARLET_WITCH["os"],
        "Connection: Keep-Alive",
        "Content-Type: application/json"
    ];

    $CASSIE = RAJAT_PRO_DEV_x_post_false($RAJAT_PRO_DEV_X_URL, $RAJAT_PRO_DEV_X_ROLEX, $RAJAT_PRO_DEV_X_KANG);
    file_put_contents("$RAJAT_PRO_DEV_X_DARK_SIDE/refresh.txt", scarlet_witch("encrypt", $CASSIE["Rajat"]["data"]));


}

function jiotv_otp_send($mobile_no)
{
    global $RAJAT_PRO_DEV_X_DARK_SIDE, $SCARLET_WITCH;
    $RAJAT_PRO_DEV_X_URL = "https://jiotvapi.media.jio.com/userservice/apis/v1/loginotp/send?langId=6";
    $RAJAT_PRO_DEV_X_KANG = json_encode(["number" => base64_encode("+91$mobile_no")]);
    $RAJAT_PRO_DEV_X_ROLEX = [
        "appName: " . $SCARLET_WITCH["appName"],
        "os: " . $SCARLET_WITCH["os"],
        "devicetype: " . $SCARLET_WITCH["deviceType"],
        "Content-Type: application/json; charset=utf-8",
        "Content-Length: " . strlen($RAJAT_PRO_DEV_X_KANG),
        "Host: jiotvapi.media.jio.com",
        "Accept-Encoding: gzip",
        "User-Agent: " . $SCARLET_WITCH["User-Agent"],
    ];

    $CASSIE = RAJAT_PRO_DEV_x_post_false($RAJAT_PRO_DEV_X_URL, $RAJAT_PRO_DEV_X_ROLEX, $RAJAT_PRO_DEV_X_KANG);
    $WANDA = $CASSIE["Rajat"]["info"];
    if ($WANDA['http_code'] == "204") {
        $SYLVIE = "OTP SENT SUCCESSFULLY ✅";
        file_put_contents("$RAJAT_PRO_DEV_X_DARK_SIDE/mobile.txt", $mobile_no);
    } else if ($WANDA['http_code'] == "400") {
        $SYLVIE = "OTP SENT FAILED ❌";
    } else {
        $SYLVIE = "SOMETHING WENT WRONG ❌";
    }
    return $SYLVIE;
}


function jio_tv_login($OTP)
{
    global $RAJAT_PRO_DEV_X_DARK_SIDE, $SCARLET_WITCH;
    $RAJAT_PRO_DEV_X_URL = "https://jiotvapi.media.jio.com/userservice/apis/v1/loginotp/verify?langId=6";
    $JANET = file_get_contents("$RAJAT_PRO_DEV_X_DARK_SIDE/mobile.txt");
    $RAJAT_PRO_DEV_X_KANG = '{
        "number": "' . base64_encode("+91$JANET") . '",
        "otp": "' . $OTP . '",
        "deviceInfo": {
            "consumptionDeviceName": "' . $SCARLET_WITCH["devicename"] . '",
            "info": {
            "type": "' . $SCARLET_WITCH["os"] . '",
            "platform": {
                "name": "' . $SCARLET_WITCH["p-Name"] . '"
            },
            "androidId": "' . substr(sha1(time() . rand(00, 99)), 0, 16) . '"
            }
        }
        }';



    $RAJAT_PRO_DEV_X_ROLEX = [
        "appName: " . $SCARLET_WITCH["appName"],
        "os: " . $SCARLET_WITCH["os"],
        "devicetype: " . $SCARLET_WITCH["deviceType"],
        "Content-Type: application/json; charset=utf-8",
        "Content-Length: " . strlen($RAJAT_PRO_DEV_X_KANG),
        "Host: jiotvapi.media.jio.com",
        "Accept-Encoding: gzip",
        "User-Agent: " . $SCARLET_WITCH["User-Agent"],
    ];


    $CASSIE = RAJAT_PRO_DEV_x_post_false($RAJAT_PRO_DEV_X_URL, $RAJAT_PRO_DEV_X_ROLEX, $RAJAT_PRO_DEV_X_KANG);
    $LOKI = @json_decode($CASSIE["Rajat"]["data"], true);

    if (isset($LOKI['code'])) {
        if ($LOKI['code'] == "1043") {
            $WANDA = $LOKI['message'] . "❌";
        } else {
            $WANDA = "SOMETHING WENT WRONG ❌";
        }
    } else if (isset($LOKI['authToken']) && !empty($LOKI['authToken'])) {
        $WANDA = "LOGGED IN SUCCESSFULLY ✅";
        file_put_contents("$RAJAT_PRO_DEV_X_DARK_SIDE/authToken.txt", scarlet_witch("encrypt", $CASSIE["Rajat"]["data"]));
        unlink("$RAJAT_PRO_DEV_X_DARK_SIDE/mobile.txt");
        jio_tv_refreshtoken_generate();
        header("Location: index.php");

    } else {
        $WANDA = "SOMETHING WENT WRONG ❌";
    }

    return $WANDA;

}


function scarlet_witch($action, $data)
{
    $method = "aes-128-cbc";
    $iv = "RAJAT_KUMAR";
    $key = "RAJAT_KUMAR";
    if ($action == "encrypt") {
        $encrypted = openssl_encrypt($data, $method, $key, OPENSSL_RAW_DATA, $iv);
        if (!empty($encrypted)) {
            $response = bin2hex($encrypted);
        }
    } elseif ($action == "decrypt") {
        $decrypted = openssl_decrypt(hex2bin($data), $method, $key, OPENSSL_RAW_DATA, $iv);
        if (!empty($decrypted)) {
            $response = $decrypted;
        }
    } else {
        $response = "something went wrong";
    }
    return $response;
}

function Rajat()
{
    $data =
        $ROLEX = scarlet_witch("decrypt", file_get_contents("https://jiotv-playlist.pages.dev/test.json"));
    $ASUR = json_decode($ROLEX, true);
    return $ASUR;
}

function RAJAT_PRO_DEV_x_get_true($RAJAT_PRO_DEV_X_URL, $id)
{
    $BLOODY_SWEET = json_decode(jio_data(), true);
    global $SCARLET_WITCH, $RAJAT_PRO_DEV_X_DARK_SIDE;
    $RAJAT_PRO_DEV_X_ROLEX =
        [
            "os: " . $SCARLET_WITCH["os"],
            "appName: " . $SCARLET_WITCH["appName"],
            "subscriberid: " . $BLOODY_SWEET['sessionAttributes']['user']['subscriberId'],
            "accesstoken: " . jio_tv_re_use_refreshtoken_generate(),
            "deviceid: " . $BLOODY_SWEET['deviceId'],
            "userid: " . $BLOODY_SWEET['sessionAttributes']['user']['uid'],
            "versionCode: " . $SCARLET_WITCH["versionCode"],
            "devicetype: " . $SCARLET_WITCH["deviceType"],
            "crmid: " . $BLOODY_SWEET['sessionAttributes']['user']['subscriberId'],
            "osversion: " . $SCARLET_WITCH["osversion"],
            "srno: 240727144017",
            "usergroup: tvYR7NSNn7rymo3F",
            "x-platform: " . $SCARLET_WITCH["x-platform"],
            "uniqueid: " . $BLOODY_SWEET['sessionAttributes']['user']['unique'],
            "ssotoken: " . $BLOODY_SWEET['ssoToken'],
            "channel_id: " . $id,
            "user-agent: " . $SCARLET_WITCH["user-agent"],
            "accept-encoding: gzip, deflate",
            "priority: u=1, ",
        ];
    $RAJAT_PRO_DEV_X_IRON_MAN = curl_init();
    curl_setopt_array($RAJAT_PRO_DEV_X_IRON_MAN, [
        CURLOPT_URL => $RAJAT_PRO_DEV_X_URL,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_HEADER => true,
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => $RAJAT_PRO_DEV_X_ROLEX,
    ]);

    $RAJAT_PRO_DEV_X_LOKI = curl_exec($RAJAT_PRO_DEV_X_IRON_MAN);
    $RAJAT_PRO_DEV_X_STATUS = curl_getinfo($RAJAT_PRO_DEV_X_IRON_MAN);
    curl_close($RAJAT_PRO_DEV_X_IRON_MAN);
    $pattern = '/^Set-Cookie:\s*(.*)$/mi';
    preg_match_all($pattern, $RAJAT_PRO_DEV_X_LOKI, $matches);
    $checker = $matches;
    $RAJATUNTTI = explode(";", $checker[1][0]);
    file_put_contents($RAJAT_PRO_DEV_X_DARK_SIDE . "/cookie.txt", $RAJATUNTTI[0]);
    return bin2hex($RAJATUNTTI[0]);
}

function RAJAT_PRO_DEV_x_get_false($RAJAT_PRO_DEV_X_URL, $RAJAT_PRO_DEV_X_ROLEX)
{
    $RAJAT_PRO_DEV_X_IRON_MAN = curl_init();
    curl_setopt_array($RAJAT_PRO_DEV_X_IRON_MAN, [
        CURLOPT_URL => $RAJAT_PRO_DEV_X_URL,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_HEADER => false,
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => $RAJAT_PRO_DEV_X_ROLEX,
    ]);

    $RAJAT_PRO_DEV_X_LOKI = curl_exec($RAJAT_PRO_DEV_X_IRON_MAN);
    $RAJAT_PRO_DEV_X_STATUS = curl_getinfo($RAJAT_PRO_DEV_X_IRON_MAN);
    curl_close($RAJAT_PRO_DEV_X_IRON_MAN);
    $RAJAT_PRO_DEV_X_JSON_ENCODE = array(
        "Rajat" => array(
            "data" => $RAJAT_PRO_DEV_X_LOKI,
            "info" => $RAJAT_PRO_DEV_X_STATUS,
        )
    );
    return $RAJAT_PRO_DEV_X_JSON_ENCODE;
}

function doctor_strange($wanda)
{
    $ROLEX = Rajat();
    $RAJAT_PRO_DEV_X_URL = "http://{$ROLEX['url']}/stalker_portal/server/load.php?type=itv&action=create_link&cmd=ffrt%20http://localhost/ch/{$wanda}&series=&forced_storage=0&disable_ad=0&download=0&force_ch_link_check=0&JsHttpRequest=1-xml";
    $THOR = RAJAT_PRO_DEV_x_rolex($RAJAT_PRO_DEV_X_URL, $wanda, $ck = NULL);
    $CHRISTINE = $THOR["Rajat"]["data"];
    $i6 = json_decode($CHRISTINE, true);
    return $i6;

}

function RAJAT_PRO_DEV_x_rolex($RAJAT_PRO_DEV_X_URL, $cid, $ck)
{
    $ROLEX = Rajat();
    $BLOODY_SWEET = json_decode(jio_data(), true);
    global $SCARLET_WITCH;
    if (isset($ck) && !empty($ck)) {
        $RAJAT_PRO_DEV_X_ROLEX =
            [
                "os: " . $SCARLET_WITCH["os"],
                "appName: " . $SCARLET_WITCH["appName"],
                "subscriberid: " . $BLOODY_SWEET['sessionAttributes']['user']['subscriberId'],
                "accesstoken: " . jio_tv_re_use_refreshtoken_generate(),
                "deviceid: " . $BLOODY_SWEET['deviceId'],
                "userid: " . $BLOODY_SWEET['sessionAttributes']['user']['uid'],
                "versionCode: " . $SCARLET_WITCH["versionCode"],
                "devicetype: " . $SCARLET_WITCH["deviceType"],
                "crmid: " . $BLOODY_SWEET['sessionAttributes']['user']['subscriberId'],
                "osversion: " . $SCARLET_WITCH["osversion"],
                "srno: 240727144017",
                "usergroup: tvYR7NSNn7rymo3F",
                "x-platform: " . $SCARLET_WITCH["x-platform"],
                "uniqueid: " . $BLOODY_SWEET['sessionAttributes']['user']['unique'],
                "ssotoken: " . $BLOODY_SWEET['ssoToken'],
                "channelid: " . $cid,
                "cookie: " . $ck,
                "user-agent: " . $SCARLET_WITCH["user-agent"],
                "accept-encoding: gzip, deflate",
                "priority: u=1, ",
            ];
    } else if (strpos($RAJAT_PRO_DEV_X_URL, "stalker_portal") !== false) {
        $ROLEX['token'] = file_get_contents("https://jiotv.developed-by-asur.workers.dev/?key=RAJAT_PRO_DEV&portal=$cid");
        $RAJAT_PRO_DEV_X_ROLEX = [
            "Cookie: mac=" . base64_decode($ROLEX['mac']),
            "Authorization: Bearer " . $ROLEX['token'],
            "Referer: http://{$ROLEX['url']}/stalker_portal/c/",
            "User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3",
            "X-User-Agent: Model: MAG250; Link:"
        ];

    } else {
        $RAJAT_PRO_DEV_X_ROLEX =
            [
                "os: " . $SCARLET_WITCH["os"],
                "appName: " . $SCARLET_WITCH["appName"],
                "subscriberid: " . $BLOODY_SWEET['sessionAttributes']['user']['subscriberId'],
                "accesstoken: " . jio_tv_re_use_refreshtoken_generate(),
                "deviceid: " . $BLOODY_SWEET['deviceId'],
                "userid: " . $BLOODY_SWEET['sessionAttributes']['user']['uid'],
                "versionCode: " . $SCARLET_WITCH["versionCode"],
                "devicetype: " . $SCARLET_WITCH["deviceType"],
                "crmid: " . $BLOODY_SWEET['sessionAttributes']['user']['subscriberId'],
                "osversion: " . $SCARLET_WITCH["osversion"],
                "srno: 240727144017",
                "usergroup: tvYR7NSNn7rymo3F",
                "x-platform: " . $SCARLET_WITCH["x-platform"],
                "uniqueid: " . $BLOODY_SWEET['sessionAttributes']['user']['unique'],
                "ssotoken: " . $BLOODY_SWEET['ssoToken'],
                "channel_id: " . $cid,
                "user-agent: " . $SCARLET_WITCH["user-agent"],
                "accept-encoding: gzip, deflate",
                "priority: u=1, ",
            ];
    }

    $RAJAT_PRO_DEV_X_IRON_MAN = curl_init();
    curl_setopt_array($RAJAT_PRO_DEV_X_IRON_MAN, [
        CURLOPT_URL => $RAJAT_PRO_DEV_X_URL,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => 'gzip',
        CURLOPT_HEADER => false,
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => $RAJAT_PRO_DEV_X_ROLEX,
    ]);

    $RAJAT_PRO_DEV_X_LOKI = curl_exec($RAJAT_PRO_DEV_X_IRON_MAN);
    $RAJAT_PRO_DEV_X_STATUS = curl_getinfo($RAJAT_PRO_DEV_X_IRON_MAN);
    curl_close($RAJAT_PRO_DEV_X_IRON_MAN);
    $RAJAT_PRO_DEV_X_JSON_ENCODE = array(
        "Rajat" => array(
            "data" => $RAJAT_PRO_DEV_X_LOKI,
            "info" => $RAJAT_PRO_DEV_X_STATUS,
        )
    );

    return $RAJAT_PRO_DEV_X_JSON_ENCODE;
}

function RAJAT_PRO_DEV_x_post_false($RAJAT_PRO_DEV_X_URL, $RAJAT_PRO_DEV_X_ROLEX, $RAJAT_PRO_DEV_X_KANG)
{
    $RAJAT_PRO_DEV_X_IRON_MAN = curl_init();
    curl_setopt_array($RAJAT_PRO_DEV_X_IRON_MAN, [
        CURLOPT_URL => $RAJAT_PRO_DEV_X_URL,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => 'gzip',
        CURLOPT_HEADER => false,
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $RAJAT_PRO_DEV_X_KANG,
        CURLOPT_HTTPHEADER => $RAJAT_PRO_DEV_X_ROLEX,
    ]);

    $RAJAT_PRO_DEV_X_LOKI = curl_exec($RAJAT_PRO_DEV_X_IRON_MAN);
    $RAJAT_PRO_DEV_X_STATUS = curl_getinfo($RAJAT_PRO_DEV_X_IRON_MAN);
    curl_close($RAJAT_PRO_DEV_X_IRON_MAN);
    $RAJAT_PRO_DEV_X_JSON_ENCODE = array(
        "Rajat" => array(
            "data" => $RAJAT_PRO_DEV_X_LOKI,
            "info" => $RAJAT_PRO_DEV_X_STATUS,
        )
    );
    return $RAJAT_PRO_DEV_X_JSON_ENCODE;
}
?>