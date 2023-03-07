<?php
    include 'connecttodb.php';

$licensenum = $_GET["licensenum"];
$query = "DELETE FROM doctor WHERE doctor.licensenum ='$licensenum'";
if (!mysqli_query($connection,$query)) {
die ("Error while trying to add". mysqli_error($connection));
} else {
header('Location: index.php');

}



?>

