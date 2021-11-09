 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "job_portle";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$jid = $_GET['jid'];

echo "data" .$jid;
// sql to delete a record
$jid = "DELETE FROM new_postjob WHERE j_id=$jid";

if ($conn->query($jid) === TRUE) {
 ?> 
  <script type="text/javascript">location.href = 'index.php';</script>
  <?php
  
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?> 