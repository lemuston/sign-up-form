<?php
$servername = "localhost";
$username = "rooneyfi_2016fg";
$password = "{%P![[BHngpp";
$dbname = "rooneyfi_inspiralfeisgrades";

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
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$city = mysqli_real_escape_string($conn, $_POST['city']);
$reelbeginner = mysqli_real_escape_string($conn, $_POST['reelbeginner']);
$reelprimary = mysqli_real_escape_string($conn, $_POST['reelprimary']);
$reelintopen = mysqli_real_escape_string($conn, $_POST['reelintopen']);
$slipjigbeginner = mysqli_real_escape_string($conn, $_POST['slipjigbeginner']);
$slipjigprimary = mysqli_real_escape_string($conn, $_POST['slipjigprimary']);
$slipjigintopen = mysqli_real_escape_string($conn, $_POST['slipjigintopen']);
$lightjigbeginner = mysqli_real_escape_string($conn, $_POST['lightjigbeginner']);
$lightjigprimary = mysqli_real_escape_string($conn, $_POST['lightjigprimary']);
$singlejigbeginner = mysqli_real_escape_string($conn, $_POST['singlejigbeginner']);
$singlejigprimary = mysqli_real_escape_string($conn, $_POST['singlejigprimary']);
$heavyjigbeginner = mysqli_real_escape_string($conn, $_POST['heavyjigbeginner']);
$heavyjigprimary = mysqli_real_escape_string($conn, $_POST['heavyjigprimary']);
$heavyjigintopen = mysqli_real_escape_string($conn, $_POST['heavyjigintopen']);
$hornpipebeginner = mysqli_real_escape_string($conn, $_POST['hornpipebeginner']);
$hornpipeprimary = mysqli_real_escape_string($conn, $_POST['hornpipeprimary']);
$hornpipeintopen = mysqli_real_escape_string($conn, $_POST['hornpipeintopen']);
$tradsetbeginnerprimary = mysqli_real_escape_string($conn, $_POST['tradsetbeginnerprimary']);
$tradsetintopen = mysqli_real_escape_string($conn, $_POST['tradsetintopen']);
$tradsetname = mysqli_real_escape_string($conn, $_POST['tradsetname']);
$modernsetdance = mysqli_real_escape_string($conn, $_POST['modernsetdance']);
$modernsetname = mysqli_real_escape_string($conn, $_POST['modernsetname']);
$modernsetspeed = mysqli_real_escape_string($conn, $_POST['modernsetspeed']);
$treblereel = mysqli_real_escape_string($conn, $_POST['treblereel']);
$twohands = mysqli_real_escape_string($conn, $_POST['twohands']);
$twohandsmembers = mysqli_real_escape_string($conn, $_POST['twohandsmembers']);
$threehands = mysqli_real_escape_string($conn, $_POST['threehands']);
$threehandsmembers = mysqli_real_escape_string($conn, $_POST['threehandsmembers']);
$fourhands = mysqli_real_escape_string($conn, $_POST['fourhands']);
$fourhandsmembers = mysqli_real_escape_string($conn, $_POST['fourhandsmembers']);
$fourhandsname = mysqli_real_escape_string($conn, $_POST['fourhandsname']);
$sixhands = mysqli_real_escape_string($conn, $_POST['sixhands']);
$sixhandsname = mysqli_real_escape_string($conn, $_POST['sixhandsname']);
$sixhandsmembers = mysqli_real_escape_string($conn, $_POST['sixhandsmembers']);
$eighthands = mysqli_real_escape_string($conn, $_POST['eighthands']);
$eighthandsname = mysqli_real_escape_string($conn, $_POST['eighthandsname']);
$eighthandsmembers = mysqli_real_escape_string($conn, $_POST['eighthandsmembers']);
$tickets = mysqli_real_escape_string($conn, $_POST['tickets']);
$more = mysqli_real_escape_string($conn, $_POST['more']);






$sql = "INSERT INTO Feis (firstname, lastname, birthday, email, phone, city, reelbeginner, reelprimary, reelintopen, slipjigbeginner, slipjigprimary, slipjigintopen, lightjigbeginner, lightjigprimary, singlejigbeginner, singlejigprimary, heavyjigbeginner, heavyjigprimary, heavyjigintopen, hornpipebeginner, hornpipeprimary, hornpipeintopen, tradsetbeginnerprimary, tradsetintopen, tradsetname, modernsetdance, modernsetname, modernsetspeed, treblereel, twohands, twohandsmembers, threehands, threehandsmembers, fourhands, fourhandsname, fourhandsmembers, sixhands, sixhandsname, sixhandsmembers, eighthands, eighthandsname, eighthandsmembers, tickets, more)
                  VALUES ('$firstname', '$lastname', '$birthday', '$email', '$phone', '$city', '$reelbeginner', '$reelprimary', '$reelintopen', '$slipjigbeginner', '$slipjigprimary', '$slipjigintopen', '$lightjigbeginner', '$lightjigprimary', '$singlejigbeginner', '$singlejigprimary', '$heavyjigbeginner', '$heavyjigprimary', '$heavyjigintopen', '$hornpipebeginner', '$hornpipeprimary', '$hornpipeintopen', '$tradsetbeginnerprimary', '$tradsetintopen', '$tradsetname', '$modernsetdance', '$modernsetname', '$modernsetspeed', '$treblereel', '$twohands', '$twohandsmembers', '$threehands', '$threehandsmembers', '$fourhands', '$fourhandsname', '$fourhandsmembers', '$sixhands', '$sixhandsname', '$sixhandsmembers', '$eighthands', '$eighthandsname', '$eighthandsmembers', '$tickets', '$more')";


if ($conn->query($sql) === TRUE) 

{

	if ($reelbeginner == '1') {
    echo "<li>" . "Beginner reel";    
	}else{  
    echo " ";
	}

	if ($reelprimary == '1') {
    echo "<li>" . "Primary reel";    
	}else{  
    echo " ";
	}

	if ($reelintopen == '1') {
    echo "<li>" . "Intermediate/open reel";    
	}else{  
    echo " ";
	}

	if ($slipjigbeginner == '1') {
    echo "<li>" . "Beginner slipjig";    
	}else{  
    echo " ";
	}

	if ($slipjigprimary == '1') {
    echo "<li>" . "Primary slipjig";    
	}else{  
    echo " ";
	}

	if ($slipjigintopen == '1') {
    echo "<li>" . "Intermediate/open slipjig";    
	}else{  
    echo " ";
	}

	if ($lightjigbeginner == '1') {
    echo "<li>" . "Beginner lightjig";    
	}else{  
    echo " ";
	}

	if ($lightjigprimary == '1') {
    echo "<li>" . "Primary lightjig";    
	}else{  
    echo " ";
	}

	if ($singlejigbeginner == '1') {
    echo "<li>" . "Beginner singlejig";    
	}else{  
    echo " ";
	}

	if ($singlejigprimary == '1') {
    echo "<li>" . "Primary singlejig";    
	}else{  
    echo " ";
	}

	if ($heavyjigbeginner == '1') {
    echo "<li>" . "Beginner heavyjig";    
	}else{  
    echo " ";
	}

	if ($heavyjigprimary == '1') {
    echo "<li>" . "Primary heavyjig";    
	}else{  
    echo " ";
	}

	if ($heavyjigintopen == '1') {
    echo "<li>" . "Intermediate/Open heavyjig";    
	}else{  
    echo " ";
	}

if ($hornpipeintopen == '1') {
    echo "<li>" . "Intermediate/Open hornpipe";    
	}else{  
    echo " ";
	}

	if ($hornpipebeginner == '1') {
    echo "<li>" . "Beginner hornpipe";    
	}else{  
    echo " ";
	}

	if ($hornpipeprimary == '1') {
    echo "<li>" . "Primary hornpipe";    
	}else{  
    echo " ";
	}

	if ($tradsetbeginnerprimary == '1') {
    echo "<li>" . "Beginner/primary tradiotional set dance: " . $tradsetname;    
	}else{  
    echo " ";
	}

	if ($tradsetintopen == '1') {
    echo "<li>" . "Intermediate/open tradiotional set dance: " . $tradsetname;    
	}else{  
    echo " ";
	}

	if ($modernsetdance == '1') {
    echo "<li>" . "Modern set dance: " . $modernsetname;    
	}else{  
    echo " ";
	}

	if ($treblereel == '1') {
    echo "<li>" . "Treble reel";    
	}else{  
    echo " ";
	}

	if ($twohands == '1') {
    echo "<li>" . "2 hands ";   
	}else{  
    echo " ";
	}

	if ($threehands == '1') {
    echo "<li>" . "3 hands ";   
	}else{  
    echo " ";
	}

	if ($fourhands == '1') {
    echo "<li>" . "4 hands ";   
	}else{  
    echo " ";
	}

	if ($sixhands == '1') {
    echo "<li>" . "6 hands ";   
	}else{  
    echo " ";
	}

	if ($eighthands == '1') {
    echo "<li>" . "8 hands ";   
	}else{  
    echo " ";
	}



$link_address = 'http://www.irishdancefinland.net/tapahtumat/class-feis/';
	echo "<p>" . "Kiitos ilmoittautumisesta. Tarkempi info ja maksuohjeet: ";
   echo "<p>" . "<a href='".$link_address."'>http://www.irishdancefinland.net/tapahtumat/class-feis</a>";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}