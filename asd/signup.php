<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
h4 		{
		font-family: Monospace;
		}
body {
	
	background-image: url("login.jpg");
	background-repeat:no-repeat;
	background-size:cover;
	
}
        a{
        	 position:relative;
    top: 20px;
    left: 670px;
        }
       input {
    border: 5px solid white; 
    -webkit-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    -moz-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    padding: 15px;
    background: rgba(255,255,255,0.5);
    margin: 0 0 10px 0;
}
</style>

<html>
<head>
	<title>Register</title>
</head>
<body>
	<center>
		<u><a href='login.php'">Log out</a></u>
	
	<form method="post" action="">
		
		<input type = "hidden" name = "database" value="login">
		<input type = "hidden" value="users" name = "table">
		<br><br><br>
		<input type="text" placeholder="Username" name = "username" required></input>
		
		<input type="password" placeholder="Password" name = "password" required></input>

		<input type="number" placeholder="Student Number"minlength="8" maxlength="8" name = "snum" required></input><br>

		<input type="text" name = "fname" placeholder="First Name" required></input>

		<input type="text" name = "mname" placeholder="Middle Name"required></input>

		<input type="text" name = "lname" placeholder="Last Name"required></input>

		<h4><b>Birthday</h4></b>
		<input type="date" placeholder="Birthday" name = "bday" required></input>

		<h4><b>Student Gender</b></h4>
			<input type="radio" name="gender" value="Male" ></input> Male
			<input type="radio" name="gender" value="Female" ></input>Female<br>

		<input type="text" name = "nation" placeholder="Nationality" required></input>

		<input type="text" name = "college" placeholder="College" required></input>

		<input type="number" minlength="1" maxlength="1" name = "ylevel" placeholder="Year Level"required></input><br>

		<input type="text" name = "program" placeholder="Program" required></input><br>

		<textarea name="achievements" placeholder="Achievements" rows="17" cols="115"></textarea> </b></h4>

		<br>
		
		<button type="submit" name="submit" value="Submit">Submit</button>
	</form>
	<form action="settings.php" method="post">
		<button type="submit" name="back" value="back">Back</button></form>
	<?php 
		$con = mysqli_connect("localhost","root","","");
		if(isset($_POST['submit']))
		{	
			$db = mysqli_real_escape_string($con,$_POST['database']);
			$con = mysqli_connect("localhost","root","","$db");
			$tb = mysqli_real_escape_string($con,$_POST['table']);
			$username = mysqli_real_escape_string($con,$_POST['username']);
			$password = mysqli_real_escape_string($con,$_POST['password']);
			$bday = mysqli_real_escape_string($con,$_POST['bday']);
			$snum = mysqli_real_escape_string($con,$_POST['snum']);
			$fname = mysqli_real_escape_string($con,$_POST['fname']);
			$mname = mysqli_real_escape_string($con,$_POST['mname']);
			$lname = mysqli_real_escape_string($con,$_POST['lname']);
			$gender = mysqli_real_escape_string($con,$_POST['gender']);
			$nation = mysqli_real_escape_string($con,$_POST['nation']);
			$college = mysqli_real_escape_string($con,$_POST['college']);
			$ylevel = mysqli_real_escape_string($con,$_POST['ylevel']);
			$program = mysqli_real_escape_string($con,$_POST['program']);
			$achievements = mysqli_real_escape_string($con,$_POST['achievements']);

			
			$sql = "INSERT INTO `users`(`username`, `password`, `bday`, `snum`, `fname`, `lname`, `gender`, `nationality`, `mname`, `College`, `Year_Level`, `Program`, `Achievements`)
					VALUES ('$username','$password', '$bday', '$snum', '$fname', '$lname', '$gender', '$nation', '$mname', '$college', '$ylevel', '$program', '$achievements')";
			$query = mysqli_query($con,$sql);
		}
		
$con = mysqli_connect("localhost","root","","login");
$query = mysqli_query($con,"select * from users");
$result = mysqli_num_rows($query);?>	

</body>
</html>
