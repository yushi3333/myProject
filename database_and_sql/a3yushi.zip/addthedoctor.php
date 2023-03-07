<?php
include 'connecttodb.php';

$lastname = $_GET["lastname"];
$firstname = $_GET["firstname"];
$code = $_GET["code"];
$birthdate = $_GET["birthdate"];
$licensedate = $_GET["licensedate"];

$licensenum = $_GET["licensenum"];
$speciality = $_GET["speciality"];

$query = "INSERT INTO doctor (licensenum, firstname, lastname, licensedate, birthdate, hosworksat, speciality) VALUES ('$licensenum', '$firstname', '$lastname','$licensedate', '$birthdate', '$code', '$speciality')";

if (!mysqli_query($connection,$query)) {
die ("Error while trying to add". mysqli_error($connection));
} else {
header('Location: index.php');

}
?> 
