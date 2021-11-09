<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "job_portal";




// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO user_login(username, Email, password, user_type)
 VALUES  
 ('$_POST[username]',' $_POST[Email]' , '$_POST[Password]', '$_POST[usertype]')";

 

if (mysqli_query($conn, $sql)) {

	if($_POST['usertype']=="company"){
		
		include 'new-post.html';
	}else{
		include 'cv01.html';
	}
   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}





mysqli_close($conn);
?>


