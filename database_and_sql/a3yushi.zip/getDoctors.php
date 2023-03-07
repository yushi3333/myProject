<?php
include 'connecttodb.php';
$name = $_POST['speciality'];
if($name == "surgeon"){
    $query = "SELECT * FROM doctor WHERE speciality='surgeon'";
}
else if($name == 'urologist'){
    $query = "SELECT * FROM doctor WHERE speciality = 'urologist'";
}
else if($name == 'podiatrist'){
    $query = "SELECT * FROM doctor WHERE speciality = 'podiatrist'";
}
else {
}
$result = mysqli_query($connection,$query);
if (!$result) {
die("databases query failed.");
}

echo "<table border='1'>

    <tr>
    <th>License Number</th>
    <th>Last Name</th>
    <th>First Name</th>
    <th>License Date</th>
    <th>Birthdate</th>
    <th>Hosworksat</th>
    <th>Speciality</th>
    </tr>";

while ($row = mysqli_fetch_assoc($result)) {

 echo "<option value='".$row["speciality"] ."'>";
 echo "<tr>";
        echo "<td>" .$row['licensenum']. "</td>";
        echo "<td>" .$row['lastname']. "</td>";
        echo "<td>" .$row['firstname']. "</td>";
        echo "<td>" .$row['licensedate']. "</td>";
        echo "<td>" .$row['birthdate']. "</td>";
        echo "<td>" .$row['hosworksat']. "</td>";
        echo "<td>" .$row['speciality']. "</td>";
 echo "</option>";
}
mysqli_free_result($result);
?>
