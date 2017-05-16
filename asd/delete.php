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
		
		<h4><b>Username: </b></h4><input type="text" name = "username"></input>
		
		
		
		
		<input type="submit" name="delete" value="delete"></input>
	</form>
	
	<button type="submit" onclick="location.href='settings.php'">back</button>

	<?php 
		$con = mysqli_connect("localhost","root","","");
		if(isset($_POST['delete']))
		{	
			$db = mysqli_real_escape_string($con,$_POST['database']);
			$con = mysqli_connect("localhost","root","","$db");
			$tb = mysqli_real_escape_string($con,$_POST['table']);
			$username = mysqli_real_escape_string($con,$_POST['username']);
			
			$sql = "DELETE FROM `users` WHERE username = '$username'";
			$query = mysqli_query($con,$sql);
		}
		
$con = mysqli_connect("localhost","root","","login");
$query = mysqli_query($con,"select * from users");
$result = mysqli_num_rows($query);?>		
<table border = "2">

	</center>
</body>
</html>
