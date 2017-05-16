<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<style>
body {
	
	background-image: url("login.jpg");
	background-repeat:no-repeat;
	background-size:cover;
	
}

</style>
<title>Application Form</title>
</head>
    
<body>
 <div align=center>
  <h1><font color="blue">Application Form</font></h1><br>
 </div>

  <h2><pre>   PERSONAL INFORMATION</h2><br>
  
  <form action="" method = "POST">
    <font color = "white">Lastname: <input type=text name="Lname" /><br><br>
  	Firstname: <input type=text name="Fname" /><br><br>
  	Middlename: <input type=text name="Mname" /><br><br>
	Birthdate: Month <input type=text name="Month" size="1" />/
	Day <input type=text name="Day" size="1" />/
	Year <input type=text name="Year" size="3" /><br><br>
	Age: <input type="text" name = "age" maxlength="25" required></input><br><br>
	Home Address: <input type=text name="HomeAddress" size="60"/><br><br>
	Provincial Address (if any): <input type=text name="Provincial" size="60"/><br><br>

	Height:<input type="number" name = "height" maxlength="25" required></input><br><br>
		
	Weight: <input type="number" name = "weight" maxlength="25" required></input><br><br>

	<h4><b><textarea name="awards" placeholder="Award" rows="17" cols="80"></textarea> </b></h4>

	</font>
	
	<h3>Contact Details</h3><br>
	 <font color = "white">Phone Number: <input type="number" name="cnum" /><br><br>
	Email Address: </font><input type=text name="Email" /><br><br>

  	
  	<div align=center> <input type=submit value="submit" /><br><br><br><br> </div>
  	
  </form>

  <?php 
		$con = mysqli_connect("localhost","root","","");
		if(isset($_POST['submit']))
		{	
			$db = mysqli_real_escape_string($con,$_POST['database']);
			$con = mysqli_connect("localhost","root","","$db");
			$tb = mysqli_real_escape_string($con,$_POST['table']);
			$name = mysqli_real_escape_string($con,$_POST['name']);
			$age = mysqli_real_escape_string($con,$_POST['age']);
			$cnum = mysqli_real_escape_string($con,$_POST['cnum']);
			$height = mysqli_real_escape_string($con,$_POST['height']);
			$weight = mysqli_real_escape_string($con,$_POST['weight']);
			$awards = mysqli_real_escape_string($con,$_POST['awards']);
			
			$sql = "INSERT INTO `$tb` (`Name`,`Age`,`Contact_Number`,`Height`,`Weight`,`Awards`) 
					VALUES ('$name','$age','$cnum','$height','$weight','$awards')";
			$query = mysqli_query($con,$sql);
		}
		
$con = mysqli_connect("localhost","root","","aform");
$query = mysqli_query($con,"select * from form");
$result = mysqli_num_rows($query);?>	

</body>
</html>