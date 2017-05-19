<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<meta charset="utf-8">


<style>
	table {
		width: 60% !important;
		margin-left: 20% !important;


	}

	th {
		background-color: pink;
	}

	tr {
		background-color: white;
	}
</style>


</head>

<body>

<?php
$servername = "localhost";
$username = "root";
$password = "napunapu";
$dbname = "inspiralfeisgrades";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

mysqli_set_charset($conn, "utf8");

$grades_all = "SELECT lastname, firstname, danceschool, prelim, one, two, three, four, five, six, seven, eight, nine, ten FROM Grades";
$prelim = "SELECT lastname, firstname FROM Grades WHERE prelim = '1'";
$one = "SELECT lastname, firstname FROM Grades WHERE one = '1'";
$two = "SELECT lastname, firstname FROM Grades WHERE two = '1'";
$three = "SELECT lastname, firstname FROM Grades WHERE three = '1'";
$four = "SELECT lastname, firstname FROM Grades WHERE four = '1'";
$five = "SELECT lastname, firstname FROM Grades WHERE five = '1'";
$six = "SELECT lastname, firstname FROM Grades WHERE six = '1'";
$seven = "SELECT lastname, firstname FROM Grades WHERE seven = '1'";
$eight = "SELECT lastname, firstname FROM Grades WHERE eight= '1'";
$nine = "SELECT lastname, firstname FROM Grades WHERE nine = '1'";
$ten = "SELECT lastname, firstname FROM Grades WHERE ten = '1'";


$result = $conn->query($grades_all);
echo "<table class='table table-condensed'>
<tr>
<th>Etunimi</th>
<th>Sukunimi</th>
<th>Dance School</th>
<th>Email</th>
<th>Phone</th>
<th>Info</th>
<th>Prelim</th>
<th>1</th>
<th>2</th>
<th>3</th>
<th>4</th>
<th>5</th>
<th>6</th>
<th>7</th>
<th>8</th>
<th>9</th>
<th>10</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
	echo "<td>" . $row['lastname'] . "</td>";
	echo "<td>" . $row['firstname'] . "</td>";
	echo "<td>" . $row['danceschool'] . "</td>";
	echo "<td>" . $row['email'] . "</td>";
	echo "<td>" . $row['phone'] . "</td>";
	echo "<td>" . $row['more'] . "</td>";
	
	if ($row['prelim'] == '1') {
    echo "<td>" . "X" . "</td>";   
	}else{  
    echo "<td>" . " " . "</td>"; 
	}
	
	if ($row['one'] == '1') {
    echo "<td>" . " X " . "</td>";   
	}else{  
    echo "<td>" . " " . "</td>"; 
	}

	if ($row['two'] == '1') {
    echo "<td>" . " X " . "</td>";   
	}else{  
    echo "<td>" . " " . "</td>"; 
	}

	if ($row['three'] == '1') {
    echo "<td>" . " X " . "</td>";   
	}else{  
    echo "<td>" . " " . "</td>"; 
	}

	if ($row['four'] == '1') {
    echo "<td>" . " X " . "</td>";   
	}else{  
    echo "<td>" . " " . "</td>"; 
	}

	if ($row['five'] == '1') {
    echo "<td>" . " X " . "</td>";   
	}else{  
    echo "<td>" . " " . "</td>"; 
	}

	if ($row['six'] == '1') {
    echo "<td>" . " X " . "</td>";   
	}else{  
    echo "<td>" . " " . "</td>"; 
	}

	if ($row['seven'] == '1') {
    echo "<td>" . " X " . "</td>";   
	}else{  
    echo "<td>" . " " . "</td>"; 
	}
	
	if ($row['eight'] == '1') {
    echo "<td>" . " X " . "</td>";   
	}else{  
    echo "<td>" . " " . "</td>"; 
	}

	if ($row['nine'] == '1') {
    echo "<td>" . " X " . "</td>";   
	}else{  
    echo "<td>" . " " . "</td>"; 
	}

	if ($row['ten'] == '1') {
    echo "<td>" . " X " . "</td>";   
	}else{  
    echo "<td>" . " " . "</td>"; 
	}

echo "</tr>";
}
echo "</table>";




echo "<p>";






$result = $conn->query($prelim);

echo "<table class='table table-condensed'>
<tr>
<th colspan=3>Prelim.</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
	echo "<td>" . $row['lastname'] . " " . $row['firstname'] . "</td>";
	
echo "</tr>";
}

echo "</table>" . "</p>";






$result = $conn->query($one);

echo "<table class='table table-condensed'>
<tr>
<th colspan=3>Grade 1</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
	echo "<td>" . $row['lastname'] . " " . $row['firstname'] . "</td>";
echo "</tr>";
}

echo "</table>" . "<p>";




$result = $conn->query($two);

echo "<table class='table table-condensed'>
<tr>
<th colspan=3>Grade 2</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
	echo "<td>" . $row['lastname'] . " " . $row['firstname'] . "</td>";
echo "</tr>";
}

echo "</table>" . "<p>";



$result = $conn->query($three);

echo "<table class='table table-condensed'>
<tr>
<th colspan=3>Grade 3</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
	echo "<td>" . $row['lastname'] . " " . $row['firstname'] . "</td>";
echo "</tr>";
}

echo "</table>" . "<p>";



$result = $conn->query($four);

echo "<table class='table table-condensed'>
<tr>
<th colspan=3>Grade 4</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
	echo "<td>" . $row['lastname'] . " " . $row['firstname'] . "</td>";
echo "</tr>";
}

echo "</table>" . "<p>";


$result = $conn->query($five);

echo "<table class='table table-condensed'>
<tr>
<th colspan=3>Grade 5</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
	echo "<td>" . $row['lastname'] . " " . $row['firstname'] . "</td>";
echo "</tr>";
}

echo "</table>" . "<p>";



$result = $conn->query($six);

echo "<table class='table table-condensed'>
<tr>
<th colspan=3>Grade 6</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
	echo "<td>" . $row['lastname'] . " " . $row['firstname'] . "</td>";
echo "</tr>";
}

echo "</table>" . "<p>";




$result = $conn->query($seven);

echo "<table class='table table-condensed'>
<tr>
<th colspan=3>Grade 7</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
	echo "<td>" . $row['lastname'] . " " . $row['firstname'] . "</td>";
echo "</tr>";
}

echo "</table>" . "<p>";


$result = $conn->query($eight);

echo "<table class='table table-condensed'>
<tr>
<th colspan=3>Grade 8</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
	echo "<td>" . $row['lastname'] . " " . $row['firstname'] . "</td>";
echo "</tr>";
}

echo "</table>" . "<p>";


$result = $conn->query($nine);

echo "<table class='table table-condensed'>
<tr>
<th colspan=3>Grade 9</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
	echo "<td>" . $row['lastname'] . " " . $row['firstname'] . "</td>";
echo "</tr>";
}

echo "</table>" . "<p>";



$result = $conn->query($ten);

echo "<table class='table table-condensed'>
<tr>
<th colspan=3>Grade 10</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
	echo "<td>" . $row['lastname'] . " " . $row['firstname'] . "</td>";
echo "</tr>";
}

echo "</table>" . "<p>";

?>



</body>
</html>