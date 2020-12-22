<?php
session_start();
include("db.php");

if(isset($_POST["submit"]))
{

	  $fname=$_POST["fname"];
	  $lname=$_POST["lname"];
	  $fulname=$fname.$lname;
	  $m_id1=$_POST["e1"];
	  $dob=$_POST["dob"];
	  $mob=$_POST["mob"];
	  $desig=$_POST["desig"];
	  $gen=$_POST["gender"];
	  $hby1=$_POST["hobby"];
	 $hoby=implode(",",$hby1);
  
$query="INSERT INTO user_info(name,email,d_o_b,mob,desgnation,gen,hobby) VALUES('$fulname','$m_id1','$dob','$mob','$desig','$gen','$hoby')";
	 
	 if(mysqli_query($conn,$query)) 
	 {
      	$_SESSION["success"]="Add Data Successfully";
	 header('location: userinfo.php');
	 }
	 else
	 {
	 echo "error";
	 }
}
$conn->close();
?>