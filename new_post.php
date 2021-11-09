<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}


//academic Qualification without subjects
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "job_portle";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	
}

$sql = "INSERT INTO new_postjob( job_title,company ,job_type, location, discription )
 VALUES  
 ('$_POST[jn]', ' $_POST[com]', '$_POST[job_type]', '$_POST[loc]', '$_POST[dic]')";
 

 	

  if (mysqli_query($conn, $sql)) {
    readfile ("new-post.php");
	
			
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	
}

mysqli_close($conn);

?>