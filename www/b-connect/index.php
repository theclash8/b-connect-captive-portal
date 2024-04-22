<?php
$uamsecret = "testing123";
$userpassword="pap";
$loginpath = $_SERVER['PHP_SELF'];
$username    = "default-username";
$password    = "default-password";

include('utils/password.php');
include('utils/libraries.php');



(isset($_GET['reply']))      ? $reply        = $_GET['reply']       : $reply = "";

$userurldecode = $userurl;
$redirurldecode = $redirurl;

if ($button == 'Login') {

  $mysql_servername = 'mysql';
  $mysql_username = getenv('MYSQL_USER');
  $mysql_password = getenv('MYSQL_PASSWORD');
  $mysql_dbname = getenv('MYSQL_DATABASE');

  $conn = new mysqli($mysql_servername, $mysql_username, $mysql_password, $mysql_dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO `users` (email_address, gender, age) VALUES ('" . mysqli_real_escape_string($conn, $_POST['email_address']) . "', '" . mysqli_real_escape_string($conn, $_POST['gender']) . "', '" . mysqli_real_escape_string($conn, $_POST['age']) . "');";

  if ($conn->query($sql) === TRUE) {
  } 
  else {
    exit;
  }

  exit;
  $hexchal = pack ("H32", $challenge);
  if ($uamsecret) {
    $newchal = pack ("H*", md5($hexchal . $uamsecret));
  } else {
    $newchal = $hexchal;
  }
  $newpwd = pack("a32", $password);

  $response = md5("\0" . $password . $newchal);
  $pappassword = implode ("", unpack("H32", ($newpwd ^ $newchal)));

  ?>
  <!DOCTYPE html>
  <html lang="en">
    <head>
  <?php
    include("template/header.php");

    if (isset($uamsecret) && isset($userpassword) && $userpassword=="pap" ) {
      echo "  <meta http-equiv=\"refresh\" content=\"0;url=http://$uamip:$uamport/login?username=$username&password=$pappassword\">";
    } 
    else {
      echo "  <meta http-equiv=\"refresh\" content=\"0;url=http://$uamip:$uamport/login?username=$username&response=$response&userurl=$userurl\">";
    }
  ?>
    </head>
  </html>

<?php 
  exit;
}

switch($res) {
  case 'success':     $result =  1; break; // If login successful
  case 'failed':      $result =  2; break; // If login failed
  case 'notyet':      $result =  5; break; // If not logged in yet
  case 'popup1':      $result = 11; break; // If requested a logging in pop up window
  default: $result = 0; // Default: It was not a form request
}

  if ($result == 11) {
    include('template/loggingin-popup.php');
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("template/header.php"); ?>
  </head>
  <body onBlur = 'javascript:doOnBlur($result)'>
    <?php
      if ($result == 1) {
        include('template/login-successful.php');
      }
      if ($result == 2) {
        include('template/login-failed-notification.php');
      }
      if ($result == 2 || $result == 5) {
        include('template/login.php');
      }
    ?>
  </body>
</html>
