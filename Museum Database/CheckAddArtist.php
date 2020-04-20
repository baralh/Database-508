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
  <li><a class="active" href="MuseumMainPage.php">Home</a></li>
  <li><a href="AddArtist.php">Add Artist</a></li>
  <li><a href="#contact">View ArtWorks</a></li>
  <li><a href="#about">View Events</a></li>
</ul>

<?php


$firstNameToAdd = $_POST["firstname"];
$firstNameToAdd = stripslashes($firstNameToAdd);

$lastNameToAdd = $_POST["lastname"];
$lastNameToAdd = stripslashes($lastNameToAdd);

$NationalityToAdd = $_POST["Nationality"];
$NationalityToAdd = stripslashes($NationalityToAdd);

$SpecialityToAdd = $_POST["Speciality"];
$SpecialityToAdd = stripslashes($SpecialityToAdd);

echo "name = ". $firstNameToAdd . "\n";
echo "last Name = ". $lastNameToAdd . "\n";
echo "Mationality = ". $NationalityToAdd . "\n";
echo "Spcial = ". $SpecialityToAdd . "\n";


?>

</body>
</html> 