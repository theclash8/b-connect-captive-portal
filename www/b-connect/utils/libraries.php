<?php 
if (isset($_POST['challenge']))    
	$challenge    = $_POST['challenge'];
elseif (isset($_GET['challenge']))    
	$challenge    = $_GET['challenge'];
else
	$challenge    = "";


if (isset($_POST['button']))
  $button       = $_POST['button'];
elseif (isset($_POST['button']))
  $button       = $_POST['button'];
else
  $button       = "";


if (isset($_GET['logout']))
  $logout       = $_GET['logout'];
elseif (isset($_GET['logout']))
  $logout       = $_GET['logout'];
else
  $logout       = "";


if (isset($_GET['prelogin']))    
	$prelogin     = $_GET['prelogin'];
elseif (isset($_GET['prelogin']))    
	$prelogin     = $_GET['prelogin'];
else
	$prelogin     = "";


if (isset($_GET['res']))    
	$res          = $_GET['res'];
elseif (isset($_GET['res']))    
	$res          = $_GET['res'];
else
	$res          = "";


if (isset($_GET['uamip']))
  $uamip        = $_GET['uamip'];
elseif (isset($_GET['uamip']))
  $uamip        = $_GET['uamip'];
else
  $uamip        = "";


if (isset($_GET['uamport']))
  $uamport      = $_GET['uamport'];
elseif (isset($_GET['uamport']))
  $uamport      = $_GET['uamport'];
else
  $uamport      = "";


if (isset($_GET['userurl']))
    $userurl    = $_GET['userurl'];
elseif (isset($_GET['userurl']))
    $userurl    = $_GET['userurl'];
else
    $userurl    = "";


if (isset($_GET['timeleft']))
  $timeleft     = $_GET['timeleft'];
elseif (isset($_GET['timeleft']))
  $timeleft     = $_GET['timeleft'];
else
  $timeleft     = "";


if (isset($_GET['redirurl']))
  $redirurl     = $_GET['redirurl'];
elseif (isset($_GET['redirurl']))
  $redirurl     = $_GET['redirurl'];
else
  $redirurl     = "";

