<?php
    include 'connecttodb.php';


$licensenum = $_POST["licensenum"];

$query = "CREATE VIEW v1 as SELECT doctor.firstname, doctor.lastname, looksafter.ohipnum FROM doctor, looksafter WHERE doctor.licensenum = looksafter.licensenum AND looksafter.licensenum = '$licensenum'";

if (!mysqli_query($connection, $query)){
die ("Error while trying to assign". mysqli_error($connection));
}else{
$query2 = "SELECT * FROM v1";
$result2 = mysqli_query($connection, $query2);

echo "<table border='1'>
<tr>
    <th>firstname</th>
    <th>lastname</th>
    <th>ohipnum</th>
</tr>";

while ($row = mysqli_fetch_assoc($result2)){
        echo "<tr>";
        echo "<td>" .$row['firstname']. "</td>";
        echo "<td>" .$row['lastname']. "</td>";
        echo "<td>" .$row['ohipnum']. "</td>";
        echo "</tr>";
}
}

mysqli_free_result($result2);
?> 
