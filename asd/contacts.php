<!DOCTYPE html>
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<html>
<head>
	<meta charset="ISO-8859-1">
	<title>News and Announcements</title>
</head>
<body id="body" background="background.png">

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
		<input type="textbox" name="s"/><input type="submit" value="Search" name="search"/>
		<span id="navLinks">
			<span><a href="index.html">HOME</a></span>
			<span><a href="news.html">NEWS AND ANNOUNCEMENTS</a></span>
			<span><a href="about.php">ABOUT</a></span>
			<span><a href="contacts.php">CONTACTS</a></span>
			<span><a href="uaap.html">GAMES SCHEDULE</a></span>
		</span>
		</form>
		<form action="login.php" method="post" style="position:absolute;right:70px;top:200px;"><input type="submit" value="LOGIN"/></form>
	</div>
		<div id="foot">

<table align="left" border=1s width="100%">
<tr>
<th>
<br>
<div align="center">
<font color="blue" size="5">
Telephone:</font><font color="black" size ="3"><br> <span style="background-color: 	#D8D8D8">Dindo Simpao (Head Coach): 09178266725 <br>          
                          	  	Gershon Bautista (Asst. Coach): 09178772863<br>
                           		Joaquin Mendoza (Team Captain): 09175773545/<br>
                                   		      09357531733
                               
                               
                               
                               
                                                        
</div>
</th>
<th>
<div align="left">
<font color="blue" size="5">Message Us</font><br>

<font color="black" size="3">
	<span style="background-color: 	#D8D8D8">
If you need assistance with something on this site or have a question, or<br>
if you want just to say hello, you can send your message through this<br>
form. Thanks.</span>
<font color="red">* label are REQUIRED</font><a href="aform.php"><font color = "blue">Application Form</a>
<form method="post" action="">
<input type="hidden" name="database" value="contacts">
<input type="hidden" name="table" value="mess"><font color="black">
<b>Name:*</b>
<input type="text" name="name" placeholder="Your Name"><br><br>
<b>E-mail*</b>
<input type="text" name="email" placeholder="Your Email"><br><br>
<b>Subject</b>
<input type="text" name="subject" placeholder="Subject"><br><br>
<b>Message*</b><br>
<textarea name="txt" placeholder="Message here" rows="17" cols="90z"></textarea><br>
<input type="submit"name="submit" value="submit"></form>
</div>
  <?php 
    $con = mysqli_connect("localhost","root","","");
    if(isset($_POST['submit']))
    { 
      $db = mysqli_real_escape_string($con,$_POST['database']);
      $con = mysqli_connect("localhost","root","","$db");
      $tb = mysqli_real_escape_string($con,$_POST['table']);
      $name = mysqli_real_escape_string($con,$_POST['name']);
      $email = mysqli_real_escape_string($con,$_POST['email']);
      $subject = mysqli_real_escape_string($con,$_POST['subject']);
      $txt = mysqli_real_escape_string($con,$_POST['txt']);
     
      
      $sql = "INSERT INTO `$tb` (`name`,`email`,`subject`,`message`) 
          VALUES ('$name','$email','$subject','$txt')";
      $query = mysqli_query($con,$sql);
    }
    
$con = mysqli_connect("localhost","root","","contacts");
$query = mysqli_query($con,"select * from mess");
$result = mysqli_num_rows($query);?>
</div>
</th>
</tr>
</table>
</pre>
</font>
</div>
	
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
		}th{
			background-image: url("sources/tkd.jpeg");
        background-size: 100%;
        background-repeat: no-repeat; 
			width: 50%;
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

		div#foot {
			position:relative;
			width:100%;
			background-color: white;
			text-align: center;
			color:white;
			padding-top:10px;
			padding-bottom:480px;
			font-size:12px;
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