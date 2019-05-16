<?php
	error_reporting(E_ALL ^ E_WARNING); 
	include("connection.php");
	
	
	$mail = mysqli_real_escape_string($conn,$_POST['mail']);
    $pass = mysqli_real_escape_string($conn,$_POST['Password']); 
	
	
	  $sql = "SELECT * FROM lonewolf WHERE Username='$mail' and Password='$pass' ";
	  //echo(".$sql.");
      $result = mysqli_query($conn,$sql);
	  if(!result)
		echo "Failure";
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
	  //echo ".$count.";
	  
	    if($count == 1) {
		//session_start();
			echo "Success";
			//echo ("Name:".$row["Name"]."\n");
			//$row = $result->fetch_assoc();
			//echo nl2br("Name: " . $row["Name"]. "\nUsername: " . $row["Username"]. "\nPhone Number " . $row["Ph No."]. "\nAadhar Number" . $row["Aadhar"]. "\n DL No:" .$row["DLno"]. "\nPassport No" .$row["Passport No"]. "\nPAN No:" .$row["PAN No"]."\n");
			
		//$_SESSION['sessionmail'] = $myemail;
		//	header('Location: ../profile.php');
		}
		else {
			echo "Invalid Email & Password";
	}
	
	
?>
<html>
<style>
<style>
body{
		Background: url("/home.jpg");}
	h1{ color: #D3D3D3 ;
		align: left;
		font-family: sans-serif;
		font-style: bold;}
	
	form {
		width: 30%;
		height: 40%;
		align: center;
		padding: 12px 20px;
		box-sizing: border-box;
		border-style: 10px dottesolid #ccc;
		border-radius: 4px;
		background-color: #D3D3D3;
		}
</style>
<body>
	<center><h1>User Information</h1></center>
	<center>
	<form name="infoform" align="left" action="lnhome.html">
	Name:<input type="text" name="name" value="<?php echo $row["Name"]?>"></input><br>
	PhoneNo:<input type="text" name="phno" value="<?php echo $row["Ph No."]?>"></input><br>
	Aadhar Number:<input type="text" name="aa_no" value="<?php echo $row["Aadhar"]?>"></input><br>
	Driving License Number:<input type="text" name="dl_no" value="<?php echo $row["DLno"]?>"></input><br>
	Passport Number:<input type="text" name="pp_no" value="<?php echo $row["Passport No"]?>"></input><br>	
	PAN Number:<input type="text" name="pan_no" value="<?php echo $row["PAN No"]?>"></input><br>
	<input type="submit" value="Logout/HomePage" label="Logout"><br>
	</form>
	
	
</body>
</html>