<html>
<body>
<style>

* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

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

ul.Nav {
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

button.color{
    background-color: #260E46;
    color: red;
}

input.color{
    background-color: #260E46;
    color: red;
    margin-left: 10px;
}

li.options{
    display: inline;
}

input.colorNoMargin{
    background-color: #260E46;
    color: red;
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
<a class="og" href="AddEmployee.php">Add Employee</a>
</div>

<div>
  <a class="og" href="#contact">View ArtWorks</a>
</div>

<div>
  <a class="og" href="#about">View Events</a>
</div>


</div>

<br>
  
</br>



<?php
 
$servername = "104.155.156.117";
$username = "root";
$password = "Museum508Database";
$dbname = "DatabaseProject";
$conn = mysqli_connect($servername, $username, $password, $dbname);


$ViewWorker = "SELECT * FROM DatabaseProject.Works as w, DatabaseProject.Employee as e, DatabaseProject.Event as v
where w.empId = e.empId and w.eventId = v.eventId;";

$ListWorker = mysqli_query($conn, $ViewWorker);


if (mysqli_num_rows($ListWorker) > 0) {
    while($row = mysqli_fetch_assoc($ListWorker)) {
        
       echo "First name " . $row["first_name"] ."<br>"."Last name: " . $row["last_name"] ."<br>"."Event name: " . $row["event_Title"] ."<br>";

        echo "<br>";
        echo "<br>";
    }

} else {
    echo "0 results";
}


mysqli_close($conn);


?>
</body>

</html> 