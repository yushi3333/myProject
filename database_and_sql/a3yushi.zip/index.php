<!DOCTYPE html>
<html>
<head>
<script>
    function myFunction() {
        var x;
        var site = prompt("Are you sure you want to delete this doctor?:", "Write Here");
        if (site != null) {
         x = "Welcome to " + Popupsmart + "! Have a great day";
         document.getElementById("demo").innerHTML = x;
     }
}
</script>
</head>
<meta charset="utf-8">

<title>a3</title>

<body>

<?php
    include 'connecttodb.php';

?>

<form action = "postDoctors.php" method = "post">
<h1>Doctors</h1>
<h2>Select your doctors order by Lastname or Birthdate</h2>

<section>


<input type="radio" name="doctor" value="lastname">Last Name
<input type = "radio" name="doctor" value="birthdate">Birthdate

</section>

<section>
<h2>Sort by</h2>
<input type="radio" name="order" value="Ascending">Ascending
<input type = "radio" name ="order" value = "Descending">Descending 
</section>
<br>
<input type = "submit" value="submit"> 

</form>
<br>





<form action="getDoctors.php" method="post">

<select name="speciality">
 <option value="1">Select Here</option>
 <option value="surgeon">Surgeon</option>
 <option value="urologist">Urologist</option>
 <option value="podiatrist">Podiatrist</option>
</select>
<input type = "submit" value="submit">
</form>






<br>
<h2>Insert a new doctor</h2>
<form action="addthedoctor.php" method="get" >

<h3>Please enter the doctor last name and first name</h3>
<h3>lastname</h4>
<input type = "text" name = "lastname" value = ""><br>
<h3>firstname</h3>
<input type = "text" name = "firstname" value=""><br>

<h3>What's the name of hospital code?</h3>
<input type="text" name="code" value = ""><br>

<h3>Insert a new speciality for the doctor</h3>
<input type = "textbox" name="speciality" value =""><br>

<h3>Pick from a list of hospitals</h3>
<input type = "radio" name = "list" value = "victoriaOn">Victoria(ON)
<input type = "radio" name = "list" value = "joseph">St. Joseph
<input type = "radio" name = "list" value = "victoriaBC">Victoria(BC)

<br>

<h3>Please enter the License number</h3>
<input type = "text" name = "licensenum" >
<br>

<h3>Please enter the license date</h3>
<input type = "date" name = "licensedate" value="">
<br>
<h3>Please enter the birthdate for the doctor</h3>
<input type = "date" name = "birthdate"value = ""</h3>
<br>
<input type="submit" value="submit">
</form>

<br>



<h3>Do you want to delete?</h3>
<form method="get" action="deldoctor.php">
<input type = "text" name = "licensenum" >

<input type = "submit" name = "submit" onclick = "myFunction()">
</form>     

<br>

<h3>Assign a doctor to a patient</h3>
<form method = "post" action = "assign.php">
<h3>Please enter the doctor's license number</h3>
<input type = "text" name = "licensenum">
<br>
<h3>Please enter the patient's ohipnum</h3>
<input type = "text" name = "ohipnum">
<br>
<input type = "submit" name = "submit">
</form>


<br>
<h3>User selection</h3>
<form method = "post" action = "user1.php">
<h3>Please select a doctor by licensenum</h3>
<input type = "text" name = "licensenum">
<br>
<input type = "submit" name = "submit">
</form>

<br>
<form method = "post" action = "user2.php">
<h3>Please select a hospital by hoscode</h3>
<input type = "text" name = "hoscode">
<br>
<input type = "submit" name = "submit">
</form>

<br>
<form method="post" action = "user3.php">
<h3>Please select a hospital(hoscode) and update the numofbed</h3>
<input type = "text" name = "hoscode">
<br>
<h3>Please update the number of bed</h3>
<input type = "number" name = "numofbed">
<br>
<input type = "submit" name = "submit">
</form>
 


</body>
</html>

