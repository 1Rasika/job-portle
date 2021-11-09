<?php
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

$sql = "INSERT INTO con_deatail(f_name,e_mail ,Subject,message )
 VALUES  
 ('$_POST[f_n]', '$_POST[e_m]', '$_POST[sub]', '$_POST[mess]')";
 

 	

  if (mysqli_query($conn, $sql)) {
    readfile ("contact.html");
			
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>