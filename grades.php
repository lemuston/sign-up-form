<?php
$servername = "";
$username = "";
$password = "";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

mysqli_set_charset($conn, "utf8");

$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
$birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$danceschool = mysqli_real_escape_string($conn, $_POST['danceschool']);
$prelim = mysqli_real_escape_string($conn, $_POST['prelim']);
$one = mysqli_real_escape_string($conn, $_POST['one']);
$two = mysqli_real_escape_string($conn, $_POST['two']);
$three = mysqli_real_escape_string($conn, $_POST['three']);
$four = mysqli_real_escape_string($conn, $_POST['four']);
$five = mysqli_real_escape_string($conn, $_POST['five']);
$six = mysqli_real_escape_string($conn, $_POST['six']);
$seven = mysqli_real_escape_string($conn, $_POST['seven']);
$eight = mysqli_real_escape_string($conn, $_POST['eight']);
$nine = mysqli_real_escape_string($conn, $_POST['nine']);
$ten = mysqli_real_escape_string($conn, $_POST['ten']);
$noontothree = mysqli_real_escape_string($conn, $_POST['noontothree']);
$threetosix = mysqli_real_escape_string($conn, $_POST['threetosix']);
$sixtonine = mysqli_real_escape_string($conn, $_POST['sixtonine']);
$parent = mysqli_real_escape_string($conn, $_POST['parent']);
$more = mysqli_real_escape_string($conn, $_POST['more']);









$sql = "INSERT INTO Grades (firstname, lastname, birthday, email, address, phone, danceschool, prelim, one, two, three, four, five, six, seven, eight, nine, ten, noontothree, threetosix, sixtonine, parent, more)
                  VALUES ('$firstname', '$lastname', '$birthday', '$email', '$phone', '$address', '$danceschool', '$prelim', '$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$nine', '$ten', '$noontothree', '$threetosix', '$sixtonine', '$parent', '$more')";



if ($conn->query($sql) === TRUE) 

{





	if ($prelim == '1') {
    echo "<li>" . "Preliminary 12€";    
	}else{  
    echo " ";
	}

	if ($one == '1') {
		echo "<li>" . "Grade 1, 17€";
	}else {
		echo " ";
	}

	if ($two == '1') {
		echo "<li>" . "Grade 2, 17€";
	}else {
		echo " ";
	}

	if ($three == '1') {
		echo "<li>" . "Grade 3, 17€";
	}else {
		echo " ";
	}

if ($four == '1') {
		echo "<li>" . "Grade 4, 24,50€";
	}else {
		echo " ";
	}

	if ($five == '1') {
		echo "<li>" . "Grade 5, 24,50€";
	}else {
		echo " ";
	}

if ($six == '1') {
		echo "<li>" . "Grade 6, 24,50€";
	}else {
		echo " ";
	}

if ($seven == '1') {
		echo "<li>" . "Grade 7, 32€";
	}else {
		echo " ";
	}

if ($eight == '1') {
		echo "<li>" . "Grade 8, 32€";
	}else {
		echo " ";
	}

if ($nine == '1') {
		echo "<li>" . "Grade 9, 32€";
	}else {
		echo " ";
	}

	if ($ten == '1') {
		echo "<li>" . "Grade 10, 32€";
	}else {
		echo " ";
	}
   
$link_address = 'http://www.irishdancefinland.net/en/events/grade-exams';
	echo "<p>" . "Thank you! Please check payment information and dealines from ";
   echo "<p>" . "<a href='".$link_address."'>www.irishdancefinland.net/en/events/grade-exams</a>";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}