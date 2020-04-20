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
</head>
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

<br></br>

<?php
 
$servername = "104.155.156.117";
$username = "root";
$password = "Museum508Database";
$dbname = "DatabaseProject";
$conn = mysqli_connect($servername, $username, $password, $dbname);
  

$NightShift = "Select * from Security WHERE shift = 'Night' ";
$resultNight = mysqli_query($conn, $NightShift);

echo "<table><caption>Night Shift</caption><th>Employee ID</th><th>Salary</th>"; 

while($row = mysqli_fetch_array($resultNight)){   
echo "<tr><td>" . $row['empId'] . "</td><td>" . $row['salary'] . "</td></tr>";  
}

echo "</table>"; 

$DayShift = "Select * from Security WHERE shift = 'Day' ";
$resultDay = mysqli_query($conn, $DayShift);

echo "<table><caption>Day Shift</caption><th>Employee ID</th><th>Salary</th>"; 

while($row = mysqli_fetch_array($resultDay)){   
echo "<tr><td>" . $row['empId'] . "</td><td>" . $row['salary'] . "</td></tr>";  
}

echo "</table>";


mysqli_close($conn);


?>
</body>

</html> 