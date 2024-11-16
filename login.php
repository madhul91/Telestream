<?php
include "Rajat.php";
$check_NB = "";

$ASUR = Rajat();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['mn'])) {
    $mobile_no = @$_POST['mn'];
    $count_NB = strlen($mobile_no);
    $check_pass = "10";

    if ($check_pass == $count_NB) {
      if ($mobile_no != "") {

        $check_NB = "<button>" . jiotv_otp_send($mobile_no);
      } else {
        $check_NB = "<button>" . "Enter Mobile number" . "</button>";
      }
    } else {
      $check_NB = "<button> please Enter 10 digits Number </button>";
    }
  } elseif (isset($_POST['OTP'])) {
    $OTP = @$_POST['OTP'];

    $check_NB = "<button >" . jio_tv_login($OTP) . "</button>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>TeleStream</title>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo $ASUR['himg']; ?>">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
</head>

<body>
  <div class="wrapper">
    <form action="" method="POST">
      <h1>TeleStream</h1>

      <?php
      if ($check_NB == "") {
        echo '<div class="input-box">';
        echo '<input type="text" name="mn" placeholder="Mobile number" required>';
        echo '<i class="bx bxs-mobile"></i>';
        echo '</div>';
        echo '<button type="submit" class="btn">Submit</button>';
      } else {
        echo '<div class="input-box">';
        echo '<input type="text" name="OTP" placeholder="Enter OTP" required>';
        echo '<i class="bx bxs-lock-alt"></i>';
        echo '</div>';
        echo '<button type="submit" class="btn">Submit OTP</button>';
      }
      ?>

      <center>
        <?php echo $check_NB; ?>
        <?php echo '<p style="color: red;">⚠️Before sending the OTP, please note that you are in India.</p>'; ?>
      </center>
    </form>
  </div>
  <footer>

  </footer>
</body>

</html>