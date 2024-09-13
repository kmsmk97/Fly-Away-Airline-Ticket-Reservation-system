<?php
session_start();
include 'config.php';
?>

 <?php  
    $nic = $_POST['nic'];
    $password = $_POST['lpwd'];
        
        
    
      $sql ="SELECT * from signup where nic='$nic' ";
      $result=$conn->query($sql);

      echo $result->num_rows;
    

      if($result->num_rows > 0)
      {
          while($row=$result->fetch_assoc())
          {
              $fname= $row["fname"];
              $lname= $row["lname"]; 
              $nic= $row["nic"];
              $dob= $row["dob"];
              $gender= $row["gender"];
              $email= $row["email"];
			  $mobile= $row["mobile_no"];
			  $password1= $row["password"];

             
              if("$password"== "$password1"){
                  echo "SIGNED IN : ";
                  $_SESSION['nic']= $nic;
                  echo $_SESSION['nic'];

              }
              else{
                  echo "INVALIID PASSWORD";
              }

          }

      }else{
          echo "NIC is not matching";
      }

$sql = "SELECT fname,lname,dob,gender,email FROM signup WHERE nic='$nic'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
echo " fname: " . $row["fname"].
     " lname: " . $row["lname"].  
     " nic: " . $row["nic"]. 
     " dob:" . $row["dob"].
	 " gender:" . $row["gender"].
	 " email:" . $row["email"].
	 " mobile:" . $row["mobile_no"].
     "<br>";
}
}
 else {
echo "0 results";
}
$conn->close();

?>