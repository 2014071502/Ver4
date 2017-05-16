<!DOCTYPE html>
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<html>
<head>
	<meta charset="ISO-8859-1">
	<title>News and Announcements</title>
</head>
<body id="body">

	<div id="banner">
		<img src="sources/ust.png" style="margin-left:50px;">
		<div id="bannerTITLE">
			<span style="font-size:60px;">UST TAEKWONDO</span><br>
			<span style="font-size:27px;">INSTITUTE OF PHYSICAL EDUCATION & ATHLETICS</span><br>
			<span style="font-size:17px;font-weight:bold;">PONTIFICAL AND ROYAL UNIVERSITY OF SANTO TOMAS THE <br>CATHOLIC UNIVESITY OF THE PHILIPPINES</span><br>
		</div>
		<img src="sources/taekwondo.png" style="margin-right:50px;right:0;">
	</div>

	<div id="navBar">
		<form action="search.php" method="post">
		<input type="textbox" name="s"/><input type="submit" value="Search" name="search" required/>
		<span id="navLinks">
			<span><a href="index.html">HOME</a></span>
			<span><a href="news.html">NEWS AND ANNOUNCEMENTS</a></span>
			<span><a href="about.html">ABOUT</a></span>
			<span><a href="contacs.php">CONTACTS</a></span>
			<span><a href="uaap.html">GAMES SCHEDULE</a></span>
		</span>
		</form>
		<form action="login.php" method="post" style="position:absolute;right:70px;top:200px;"><input type="submit" value="LOGIN"/></form>
	</div>
<?php
 
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['s'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `users` WHERE CONCAT(`username`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `users`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "login");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
                <?php while($row = mysqli_fetch_array($search_result)):?>

                <?php 

                if($valueToSearch == $row['username'] || $valueToSearch == $row['snum'] ){
                	echo "<div align='center'><img src='", $row['username'], ".png' height='300' width='300'></div>";
                	echo "<h1>";
                	echo "Information</h1>";
                	echo "Name: ";
                	echo $row['fname']," ", $row['mname']," ", $row['lname'];
                	echo "<br><br>Achievements";
                	echo "<pre>";
                	echo $row['Achievements'];
                	echo "<h2>", "<font color='blue'>College</font></h2>";
                	echo "</pre>";
                	echo "<br>";
                	echo "<pre>";
                	echo "<h3><font color='red'>Program                                                         College                                                         Year Level</h3></font>";
                	echo $row['Program'], "                                                         ", $row['College'], "                                                                 ", $row['Year_Level'];
                }else{
                    echo "<font color='red'> Player not found! </font>";
                }
                ?>
                  <?php endwhile;?>


	
	<div id="footer">
		<span style="color:blue;"> <a href="http://sportsinstitute.ust.edu.ph/">2017 @ Institute of Physical Education and Athletics</a></span> | Powered by: UST SANTO TOMAS E- SERVICE PROVIDERS |<br><a href="contacts.php">Contact Us</a><br>
		Photo credits to: Mr. Lennard Perez
	</div>

</body>

	<style>
		body{
			margin:0;
			font-family:century gothic;
			
		}

		div#banner{
			height:200px;
			background-color: rgb(252,249,8);
			color:black;
		}

		div#banner > img {
			position:absolute;
			display:inline-block;
			height:150px;
			margin-top:10px;
		}

		div#bannerTITLE {
			width:80%;
			position:absolute;
			left:10%;
			text-align: center;
			margin-top:25px;
		}

		input {
			display:inline-block;
			margin-left: 7px;
		}

		div#navBar {
			height:40px;
			background-color: rgba(0,0,0,0.9);
		}

		form {
			padding-top: 9px;
		}

		span#navLinks {
			display:inline-block;
			width:70%;
			position:absolute;
			left:15%;
			text-align: center;
			font-size:0px;
		}

		a {
			font-size:13px;
			color:white;
			padding-top: 10px;
			padding-bottom: 15px;
			padding-left: 10px;
			padding-right:10px;
			transition: background-color 0.5s ease;
		}
		a:hover {
			color:black;
			background-color: white;
		}

		div#SS {
			height:400px;
			overflow:hidden;
			width:50%;
			margin:auto;
			box-shadow: 0px 0px 75px #322e2e;
		}

		div#SScon {
			width:200%;
			position:relative;
			left:0%;
			font-size:0;
			height:100%;
			animation-name: boxesAnimationRL;
    		animation-duration: 7s;
    		animation-iteration-count:infinite;
		}

		div#SScon > img{
			width:49.9%;
			display:inline-block;
			position:relative;
			font-size:0px;
			margin:0;
			padding:0;
			vertical-align: top;
		}

		@keyframes boxesAnimationRL {
		  	0%{left:0%;}
		  	45%{left:0%;}
		  	55%{left:-99.9%;}
		  	100%{left:-99.9%;}
		}

		@-moz-keyframes boxesAnimationRL {
		    0%{left:0%;}
		  	45%{left:0%;}
		  	55%{left:-99.9%;}
		  	100%{left:-99.9%;}
		}
		@-webkit-keyframes boxesAnimationRL {
		    0%{left:0%;}
		  	40%{left:0%;}
		  	60%{left:-99.9%;}
		  	100%{left:-99.9%;}
		}

		div#footer {
			position:relative;
			width:100%;
			background-color: black;
			text-align: center;
			color:white;
			padding-top:6px;
			padding-bottom:6px;
			font-size:12px;
		}

	</style>

</html>