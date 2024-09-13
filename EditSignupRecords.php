<?php

include 'config.php';

?>
<!DOCTYPE html>

<html>

<head>

	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel = "stylesheet" text = "text/css" href = "css/signup.css">
	<script src = "js/signup.js"></script>
 
 <title> Edit Pofile </title>
 
 <header>	
			<img class = "logo" src = "images/HeadPic.jpg" width = 100% height="300px">

		</header>
		<ul class="one" position="fixed">
			<li><a href="#">Home</a></li>
			<li><a href="signup.html">Sign Up</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a href="about.html">About us</a></li>
		</ul>
 
 </head>


<hr>
 <body>
 
<?php
$recordId = $_GET['id'];

$sql = "SELECT * FROM signup where nic=`$recordId`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$fname = $row["fname"];
		$lname = $row["lname"];
		$id = $row["nic"];
		$dob = $row["dob"];
		$gender = $row["gender"];
		$email = $row["email"];
		$mobile = $row["mobile_no"];
		$password = $row["password"];
		
        }
}

?>

<div align=center id ="bor" >
	<form = action = "SubmitSignupUpdates.php" id = "signupform"  method = "POST" >
		<h3>Edit Profile</h3><br/>
		<!--get new records-->
		<label>NIC No</label>&nbsp:&nbsp<br>
		<input type = "nic" name = "id" id = "nic" value= <?php echo $id; ?>  disabled ><br /><br />
		
		<label>First Name</label>&nbsp:&nbsp<br>
		<input type = "text" name = "field1" id = "fname" value= <?php echo $fname; ?> ><br /><br />
			   
		<label>Last Name</label>&nbsp:&nbsp<br>
		<input type = "text" name = "field2" id = "lname" value= <?php echo $lname; ?> ><br /><br />
		
		<label>Date of Birth</label>&nbsp:&nbsp<br>
		<input type = "text" name = "field4" id = "dob" value= <?php echo $dob; ?> disabled><br /><br />
			    	   
		<label>Gender</label>&nbsp:&nbsp<br>
		<input type = "text" name = "gender" id = "dob" value= <?php echo $gender; ?> disabled ><br /><br />
		
			   
		<label>E-mail Address</label>&nbsp:&nbsp<br>
		<input type = "text" name = "field5" id = "email" value= <?php echo $email; ?> ><br /><br />
			   
		<label>Mobile Number</label>&nbsp:&nbsp<br>
		<input type = "phone" name = "field6" id = "mn" value= <?php echo $mobile; ?> ><br /><br />
			   
		<label>Password</label>&nbsp:&nbsp<br>
		<input type = "password" name = "field7" id = "pwd" value= <?php echo $password; ?> disabled >&nbsp&nbsp&nbsp <a href = "updater.html">RESET PASSWORD</a></br /><br />
			   
		
			   
		
		<input type = "submit"  value = "UPDATE"><br><br>
	</form>



</div>
 
 </body>
<hr>
 <footer class="footer">
		<div class="footer__addr">
		  <h1 class="footer__logo">flyaway</h1>
			  
		  <h2>About</h2>
		  
		  <address>
			

			Tourist Board License No : TS/TA/1387<br><br>
			Civil Aviation License No: A-922 <br><br>
			© 2020 Flyaway (Pvt) LTD Sri Lanka (Reg: PV72478) <br><br>
			
			<br><br>
			
			<br>
		  </address>
		</div>
		
		<ul class="footer__nav">
		  <li class="nav__item">
			<h2 class="nav__title">Media</h2>
	  
			<ul class="nav__ul">
			  <li>
				<a href="#">Facebook</a>
				<br>
			  </li>
	  
			  <li>
				  <br>
				  <br>
				<a href="#">Twitter</a>
			  </li>
				  <br>
			  <li>
				<a href="#">Instergram</a>
			  </li>
			</ul>
		  </li>
		  
		  <li class="nav__item nav__item--extra">
			<h2 class="nav__title">Support</h2>
			
			<ul class="nav__ul">
			  <li>
				<a href="#">Contact us</a>
			  </li>
			  
			  <li>
				<a href="#">F&Q</a>
			  </li>
			  
			</ul>
		  </li>


</footer>


<html> 