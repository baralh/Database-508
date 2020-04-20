<html>
<body>
<style>
.navbar {
  overflow: hidden;
  background-color: #000000;
 
}
.og{
    
     float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 0px 16px;
  text-decoration: none;
  margin-top: 45px;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  
 
}
.logo {
    display: inline-block;
    vertical-align: top;
    width: 100px;
    height: 80px;
    margin-right: 20px;
    margin-left: 10px;
    margin-top: 0px;    
}

.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: #c88f57;
}
</style>
<body>

<div class="navbar">

<img class="logo" src="logo.png" align="left">

<div>
  <a class="og" href="MuseumMainPage.php">Home</a>
</div>

<div>
<a class="og" href="AddEmployee.php">Employee Login</a>
</div>

<div>
  <a class="og" href="#contact">View ArtWorks</a>
</div>

<div>
  <a class="og" href="#about">View Events</a>
</div>

</div>

<?php
 
$servername = "104.155.156.117";
$username = "root";
$password = "Museum508Database";
$dbname = "DatabaseProject";
$conn = mysqli_connect($servername, $username, $password, $dbname);

echo($_POST["firstname"]);

$firstNameToAdd = $_POST["firstname"];
$firstNameToAdd = stripslashes($firstNameToAdd);

$lastNameToAdd = $_POST["lastname"];
$lastNameToAdd = stripslashes($lastNameToAdd);

$phoneNumberToAdd = $_POST["phoneNumber"];
$phoneNumberToAdd = stripslashes($phoneNumberToAdd);

$snnToAdd = $_POST["ssn"];
$snnToAdd = stripslashes($snnToAdd);

$salaryToAdd = $_POST["salary"];
$salaryToAdd = stripslashes($salaryToAdd);

$shiftToAdd = $_POST["shift"];
$shiftToAdd = stripslashes($shiftToAdd);

$insertEmployee = "insert into Employee (last_name, first_name, phone_number, SSN) values ('$lastNameToAdd', '$firstNameToAdd', '$phoneNumberToAdd', '$snnToAdd')";

if (mysqli_query($conn, $insertEmployee))
{
    echo " Added Employee to Database\n";
}
else{
    echo " could not add employee to database";
}

$getThatEmployeeIdUsingSSN = "select empId from Employee where SSN = '$snnToAdd'";
$employeeIDResult = mysqli_query($conn,$getThatEmployeeIdUsingSSN);
$employeeIDResultNumber = "11111";


echo "$employeeIDResultNumber". "first time \n";

if(mysqli_num_rows($employeeIDResult) > 0){
  while($row = mysqli_fetch_assoc($employeeIDResult))
  {
    $employeeIDResultNumber = $row['empId'];
  }
}

echo "$employeeIDResultNumber". "second time \n";


$insertSecurity = "insert into Security values ('$employeeIDResultNumber', '$salaryToAdd', '$shiftToAdd')";

if (mysqli_query($conn, $insertSecurity))
{
    echo " Added Curator to Database\n";
}
else{
    echo " could not add Curator to database\n";
}

mysqli_close($conn);


?>

</body>
</html> 