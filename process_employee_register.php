<?php
	
	
	
	if(empty($_POST))
	{
		exit;
	}
	$msg=array();
	if(empty($_POST['nm'])|| empty($_POST['gender'])|| empty($_POST['email'])|| empty($_POST['addr'])||
	empty($_POST['ph'])|| empty($_POST['mobile'])|| empty($_POST['cl'])|| empty($_POST['cas'])||
	empty($_POST['cindustry'])||empty($_POST['quali'])|| empty($_POST['profile']) || empty($_POST['pwd'] ))
	{
		$msg[]="one of your field is empty";
	}
	if(strlen($_POST['pwd'])<6)
	{
		$msg[]="please enter atlist 6 digit password";
	}

	if(strlen($_POST['ph'])!=10)
	{
	
		$msg[]="please enter 10 digit number";

	}
	if(strlen($_POST['mobile'])!=10)
	{
		$msg[]="please enter 10 digit number";
	}
	if(!is_numeric($_POST['cas']))
	{
		$msg[]="only numeric valueis valid";
	}
		

	if(!empty($msg))
	{
		echo "<b> errors:</b><br>";
		foreach($msg as $k)
		{
			echo "<li>".$k;
		}
	}
	else
	{
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "job_portle";


                    // Create connection
            $link = mysqli_connect($servername, $username, $password, $dbname);

           if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
		
		$q = "INSERT INTO employees(ee_fnm,ee_pwd,ee_gender,ee_email,ee_add,ee_phno, ee_mobileno,ee_current_location,ee_annualsalary,ee_current_industry,ee_qualification,ee_profile )
 VALUES  
 ('$_POST[nm]',' $_POST[pwd]' , '$_POST[gender]', '$_POST[email]', '$_POST[addr]', '$_POST[ph]', '$_POST[mobile]', '$_POST[cl]', '$_POST[cas]', '$_POST[cindustry]', '$_POST[quali]', '$_POST[profile]')";

 

  
 if (mysqli_query($link, $q)) {
    echo  "successful";
			
} else {
    echo "Error: " . $q . "<br>" . mysqli_error($link);
}
mysqli_query($link,$q)or die("wrong query");

mysqli_close($link);
header("location:employeeregister.php");
		   
		
		
		
	}
?>