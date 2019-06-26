<?php
$dBServername = "localhost";
$dBUsername = "Scott_G";
$dBPassword = "Teddy2018";
$dBName = "TheGetUPLive";

// Create connection
$conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
