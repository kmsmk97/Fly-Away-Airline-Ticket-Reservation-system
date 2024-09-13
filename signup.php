 <?php
 
	include_once 'config.php';
 
 ?>
 
 <?php
	
	$fname = $_POST["field1"];
	$lname = $_POST["field2"];
	$nic = $_POST["id"];
	$dob = $_POST["field4"];
	$gender = $_POST["gender"];
	$email = $_POST["field5"];
	$mobile = $_POST["field6"];
	$password = $_POST["field7"];
	
	$sql = "insert into signup(fname,lname,nic,dob,gender,email,mobile_no,password)values('$fname','$lname','$nic','$dob','$gender','$email','$mobile','$password')"; 
 
	if(mysqli_query($conn,$sql)){
		
		echo "<script> alert('Record inserted successfully!!') </script>";
		header("Location:signup.html");
	}
	else{
		echo"<script> alert('Error inserting records') </script>";
		echo $conn->error;
	}
 
	mysqli_close($conn);
 
 ?>