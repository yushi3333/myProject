<?php
include 'connecttodb.php';

$hoscode = $_POST["hoscode"];
$numofbed = $_POST["numofbed"];
$query = "UPDATE hospital SET numofbed = '$numofbed' WHERE hoscode = '$hoscode'";
if (!mysqli_query($connection, $query)){
die ("Error while trying to assign". mysqli_error($connection));
}else{
$query2 = "SELECT hoscode, hosname, numofbed FROM hospital";
$result2 = mysqli_query($connection, $query2);

echo "<table border='1'>
<tr>
    <th>hospital name</th>
    <th>hospital code</th>
    <th>numofbed</th>
</tr>";

while ($row = mysqli_fetch_assoc($result2)){
        echo "<tr>";
        echo "<td>" .$row['hosname']. "</td>";//attribute name
        echo "<td>" .$row['hoscode']. "</td>";
        
        echo "<td>" .$row['numofbed']. "</td>";
        
        echo "</tr>";
}
}

mysqli_free_result($result2);
?>

~                                                                                                                                                                                                           
~                        

