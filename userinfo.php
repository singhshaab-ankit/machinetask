<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Form</title>

</head>
<body>
	<button onclick="document.location='viewdata.php'">View User Record</button>
	<br>
	<?php
   //       if ( isset($_GET['success']) && $_GET['success'] == 1 )
			// {
			     
			//      echo "<script> alert('Data Add Successfully')</script>";
			// }
	    if(isset($_SESSION['success']))
	    {
	    	echo "<script> alert ('data add success')</script>";
	    	unset($_SESSION['success']);
	    }
   
	?>

	<form   action="query.php" method="post" onsubmit="return validateForm();">
		<table border="1" cellpadding="5px" >
			<tr>
				<td>First Name</td>
			<td>
				<input type="text" name="fname" placeholder="abc" id="fname">
		   </td>
          </tr>
          <tr>
				<td>Last Name</td>
			<td>
				<input type="text" name="lname" placeholder="singh/sharma" id="lname">
		   </td>
          </tr>
          <tr>
				<td>Email Id</td>
			<td>
				<input type="text" name="e1" id="mailid">
		   </td>
          </tr>
          <tr>
				<td>Date Of Birth</td>
			<td>
				<input type="Date" id="Dob" name="dob">
		   </td>
          </tr>
          <tr>
				<td>Mobile</td>
			<td>
				<input type="number" name="mob" id="contact">
		   </td>
          </tr>
           <tr>
				<td>Designation</td>
			<td>
				<input type="text" name="desig" id="desgn1">
		   </td>
          </tr>
          <tr>
				<td>Gender</td>
			<td colspan="2">
				<input type="radio" id="gender" name="gender" checked value="Male">Male
				<input type="radio" id="gender" name="gender" value="Female">Female
		   </td>
          </tr>
          <tr>
				<td>Hobby</td>
			<td>
				<input type="checkbox" id="Hobby1" name="hobby[]" value="Playing Sports">
				<label for="Hobby1">Playing Sports</label><br>
				<input type="checkbox" id="Hobby2" name="hobby[]" value="Reading ">
				<label for="Hobby2"> Reading </label><br>
				<input type="checkbox" id="Hobby3" name="hobby[]" value="Travelling">
				<label for="Hobby3">Travelling</label><br>
				<input type="checkbox" id="Hobby4" name="hobby[]" value="Coding">
				<label for="Hobby3">Coding</label><br>
		   </td>
          </tr>
          <tr>
          	<td colspan="2" align="center">
          		<input type="submit" name="submit" value="Submit">
          	</td>
          </tr>
    
</table>
</form>
<script type="text/javascript">
	function validateForm() 
	{
		var f_name=document.getElementById('fname').value;
		var l_name=document.getElementById('lname').value;
		var mail=document.getElementById('mailid').value;
		var dateofbith=document.getElementById('Dob').value;
		var mob=document.getElementById('contact').value;
		var desig=document.getElementById('desgn1').value;
		 
		var hobby1=document.getElementById('Hobby1').checked;
		var hobby2=document.getElementById('Hobby2').checked;
		var hobby3=document.getElementById('Hobby3').checked;
		var hobby4=document.getElementById('Hobby4').checked;
    
   
       if (f_name == "") { 
            alert("Please enter your Firstname."); 
           return false;
        } 
         if (l_name == "") { 
            alert("Please enter your Lastname."); 
            return false;
        } 
  
        if (mail == "") { 
           alert( 
              "Please enter a valid e-mail address."); 
           return false;
        } 
  
        if (dateofbith == "") { 
        alert( 
              "Please enter your dateofbith."); 
            return false;
        } 
         if (mob == "") { 
            alert("Please enter your mobile number."); 
           return false;
        } 
  
        if (desig == "") { 
            alert("Please enter your Designation."); 
            return false;
        } 
  
         
  
        if (hobby1 == "" || hobby2=="" || hobby3=="" || hobby4=="") { 
            alert("Please enter your hobby."); 
           return false;
        } 
        


}
</script>


</body>
</html>