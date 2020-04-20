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
<a class="og" href="EmployeeScreen.php">Employee Screen</a>
</div>

<div>
  <a class="og" href="ViewArtworks.php">View ArtWorks</a>
</div>

<div>
  <a class="og" href="ViewEvents.php">View Events</a>
</div>

</div>


<?php
 
$servername = "104.155.156.117";
$username = "root";
$password = "Museum508Database";
$dbname = "DatabaseProject";
$conn = mysqli_connect($servername, $username, $password, $dbname);

$employeeIdDelete = $_POST["Employed_ID"];
$employeeIdDelete = stripslashes($employeeIdDelete);

//echo "employee ID delete: ". $employeeIdDelete;


//Running into constraints, Make delete employee delete curator/housekeeper/security first then inside if delete it from the employee table
$deleteQueryCurator = "delete from Curator where empId = '$employeeIdDelete'";
$deleteQueryEmployee = "delete from Employee where empId = '$employeeIdDelete'";

if (mysqli_query($conn, $deleteQueryCurator)) {
    echo "deleted from Curator\n";
    if (mysqli_query($conn, $deleteQueryEmployee)) {
        echo "deleted from employee";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}


?>

</body>
</html> 