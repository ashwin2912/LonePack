<?php
	error_reporting(E_ALL ^ E_WARNING); 
	include("connection.php");
	
		$Name = mysqli_real_escape_string($conn,$_POST['chara']);
		$mail = mysqli_real_escape_string($conn,$_POST['mail']);
		$pass = mysqli_real_escape_string($conn,$_POST['Password']); 
		$phno = mysqli_real_escape_string($conn,$_POST['phno']);
		$aa_no = mysqli_real_escape_string($conn,$_POST['aa_no']);
		$dl_no = mysqli_real_escape_string($conn,$_POST['dl_no']);
		$pp_no = mysqli_real_escape_string($conn,$_POST['pp_no']); 
		$pan_no = mysqli_real_escape_string($conn,$_POST['pan_no']);
     
	
	
			
	$sql = "INSERT INTO lonewolf(`Name`,`Username`,`Password`,`Ph No.`,`Aadhar`,`DLno`,`Passport No`,`PAN No`)
				VALUES('$Name','$mail','$pass','$phno','$aa_no','$dl_no','$pp_no','$pan_no')";
	
	$retval = mysqli_query($conn,$sql);
            
            if(! $retval ) {
				die('Could not enter data: ' . mysqli_connect_error());
            }
           // else{	      
			//	header('Location: http://localhost/login/lnhome.html');
			//}
?>
<html>
<head></head>
<center><h1>Welcome</h1></center>
<h3 align="center">Your Account has been created and your Information has been stored.<br> Login anytime from the home page to access your information</h1><br><br>
<p>To go the home page: <a href="lnhome.html">Home</a>
</html>

  

