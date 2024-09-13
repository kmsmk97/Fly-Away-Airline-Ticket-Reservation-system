<?php
    include_once 'config.php';
?>

<?php
	$recordId = $_GET['id'];
	
	$sql = "DELETE FROM signup WHERE nic = '$recordId'";
	
	if($conn -> query($sql)){
		echo "<script> alert('Records deleted successfully!!!!')</script>";
		header("Location:signupr.php");
	} 
	else{
		echo "<script> alert('ERROR: Could not able to execute $sql. ')</script>" ;
	}
	 
	//Close connection
	mysqli_close($conn);

?>

