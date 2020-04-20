<html>
<body>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: white;
}

li {
  float: left;
}

li a {
  display: block;
  color: red;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: black;
}
</style>
<body>

<ul>
  <li><a href="MuseumMainPage.php">Home</a></li>
  <li><a href="AddEmployee.php">Employee Login</a></li>
  <li><a href="#contact">View ArtWorks</a></li>
  <li><a href="#about">View Events</a></li>
</ul>

<br></br>

<?php
 
$servername = "104.155.156.117";
$username = "root";
$password = "Museum508Database";
$dbname = "DatabaseProject";
$conn = mysqli_connect($servername, $username, $password, $dbname);

$employee = $_POST["empId"];
$employee = stripslashes($employee);
$lastName = $_POST["lastname"];
$lastName = stripslashes($lastName);


$selectQuery = "select empId, last_name from Employee where empId = '$employee' and last_name = '$lastName'";

$result = mysqli_query($conn, $selectQuery);
$row = mysqli_fetch_assoc($result);


if (($row["empId"] == $employee) && ($row["last_name"] == $lastName)) 
{
    echo "Employee logged in " . $row["last_name"];
    header("Location: ./EmployeeScreen.php");
} else {
    header("Location: ./MuseumMainPage.php");
}



?>
</body>

</html> 