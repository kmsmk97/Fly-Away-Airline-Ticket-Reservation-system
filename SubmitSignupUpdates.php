<?php
    include_once 'config.php';
?>

<?php
	// Escape user inputs for security
	$idN = $_POST["id"];
	$fname = $_POST["field1"];
	$lname = $_POST["field2"];
	$dob = $_POST["field4"];
	$gender = $_POST["gender"] ;
	$email = $_POST["field5"] ;
	$mobile = $_POST["field6"] ;
	$password = $_POST["field7"] ;
	 
	//echo $_GET['id'];
	// Attempt update query execution
	
	$sql = "UPDATE signup SET fname=`$fname`,lname=`$lname`,email=`$email`,mobile_no=`$mobile` WHERE nic = `$idN`";
	
	if($conn -> query($sql)){
		echo "<script> alert('Records added successfully!!!!')</script>";
		header("Location:signupr.php");
	} 
	else{
		echo "<script> alert('ERROR: Could not able to execute $sql. ')</script>" ;
	}
	 
	// Close connection
	mysqli_close($conn);

?>