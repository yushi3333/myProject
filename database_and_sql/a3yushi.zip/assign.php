<?php
include 'connecttodb.php';
$licensenum = $_POST["licensenum"];
$ohipnum = $_POST["ohipnum"];

$query = "INSERT INTO looksafter values('$licensenum', '$ohipnum')";

$result = mysqli_query($connection, $query);
if (!$result) {
die ("Error while trying to assign". mysqli_error($connection));
}else{
$query2 = "SELECT * FROM looksafter";
$result2 = mysqli_query($connection, $query2);
echo "<table border='1'>
<tr>
    <th>License Number</th>
    <th>ohipnum</th>
</tr>";

while ($row = mysqli_fetch_assoc($result2)){
        echo "<tr>";
        echo "<td>" .$row['licensenum']. "</td>";
        echo "<td>" .$row['ohipnum']. "</td>";
        echo "</tr>";
}
}

mysqli_free_result($result2);
?>

