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
 
 <title> Stored Details </title>
 
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
	<table style ="background-color:white;" border = "1" width = "100%" >
		<tr>
			<th> First Name </th>
			<th> Last Name </th>
			<th> NIC NO </th>
			<th> Date of Birth </th>
			<th> Gender </th>
			<th> Email </th>
			<th> Mobile Number </th>
			<th> Password </th>
			<th> Edit </th>
			<th> Delete </th>
		</tr>
		
		<!--get the data from the table-->
		<?php
			
			$sql = "SELECT * FROM signup";
			$result = $conn->query($sql);
			
			if($result->num_rows>0){
				
				while($row = $result->fetch_assoc()){
					//print data from the table
					
					
				$id = $row["nic"];
				
					echo"<tr><td>".
					$row["fname"]."</td><td>".
					$row["lname"]."</td><td>".
					$id."</td><td>".
					$row["dob"]."</td><td>".
					$row["gender"]."</td><td>".
					$row["email"]."</td><td>".
					$row["mobile_no"]."</td><td>".
					$row["password"]."</td>
					<td> <button type = 'submit'><a href = 'EditSignupRecords.php?id=$id'>Edit</a></button></td> 
					<td> <button type = 'submit'><a href = 'DeleteSignupRecords.php?id=$id'>Delete</a></button></td>";//edit andd delete buttons
				}
				
			}
			else{
				echo"Empry Table";
			}
				echo"</table>";
				
			$conn->close();
		
		?>
	

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