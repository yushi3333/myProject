
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>showq1</title>
</head>
<body>


<?php
    include 'connecttodb.php';
    $whichone = $_POST["doctor"];
    $order = $_POST["order"];
    if (empty($whichone)){
        echo "it is empty";
    }

    if ($whichone == "lastname"){
        if ($order == "Ascending"){
            $query = "SELECT * FROM doctor ORDER BY lastname ASC";
        }else{
            $query = "SELECT * FROM doctor ORDER BY lastname DESC";
        }
    }

    if ($whichone == "birthdate"){
        if($order == "Ascending"){
            $query = "SELECT * FROM doctor ORDER BY birthdate ASC";
        }else{
            $query = "SELECT * FROM doctor ORDER BY birthdate DESC";
        }
    }

    $result = mysqli_query($connection, $query);
    if (!$result){
        die("database query failed");
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
      
   while ($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>" .$row['licensenum']. "</td>";
        echo "<td>" .$row['lastname']. "</td>";
        echo "<td>" .$row['firstname']. "</td>";
        echo "<td>" .$row['licensedate']. "</td>";
        echo "<td>" .$row['birthdate']. "</td>";
        echo "<td>" .$row['hosworksat']. "</td>";
        echo "<td>" .$row['speciality']. "</td>";
       
    }
    
    mysqli_free_result($result);

?>      

</body>
</html>
 
