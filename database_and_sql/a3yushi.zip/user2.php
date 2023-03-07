<?php
    include 'connecttodb.php';

$hoscode = $_POST["hoscode"];
$query = "CREATE VIEW v2 as SELECT hospital.hosname, hospital.city, hospital.prov, hospital.numofbed, doctor.firstname, doctor.lastname FROM hospital, doctor WHERE doctor.hosworksat = hospital.hoscode AND hospital.hoscode = '$hoscode'";

if (!mysqli_query($connection, $query)){
die ("Error while trying to assign". mysqli_error($connection));
}else{
$query2 = "SELECT * FROM v2";
$result2 = mysqli_query($connection, $query2);

echo "<table border='1'>
<tr>
    <th>hospital name</th>
    <th>city</th>
    <th>province</th>
    <th>numofbed</th>
    <th>first name</th>
    <th>last name</th>

</tr>";

while ($row = mysqli_fetch_assoc($result2)){
        echo "<tr>";
        echo "<td>" .$row['hosname']. "</td>";//attribute name 
        echo "<td>" .$row['city']. "</td>";
        echo "<td>" .$row['prov']. "</td>";
        echo "<td>" .$row['numofbed']. "</td>";
        echo "<td>" .$row['firstname']. "</td>";
        echo "<td>" .$row['lastname']. "</td>";
        echo "</tr>";
}
}

mysqli_free_result($result2);
?>
 
