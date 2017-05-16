<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
        .container {
  margin: 50px auto;
  width: 640px;
}
 
.login {
  position: relative;
  margin: 0 auto;
  padding: 20px 20px 20px;
  width: 310px;
}



.container {
  margin: 50px auto;
  width: 640px;
}
.login:before {
  content: '';
  position: absolute;
  top: -8px;
  right: -8px;
  bottom: -8px;
  left: -8px;
  z-index: -1;
  background: rgba(0, 0, 0, 0.08);
  border-radius: 4px;
}
 
.login h1 {
  margin: -20px -20px 21px;
  line-height: 40px;
  font-size: 15px;
  font-weight: bold;
  color: #555;
  text-align: center;
  text-shadow: 0 1px white;
  background: #f3f3f3;
  border-bottom: 1px solid #cfcfcf;
  border-radius: 3px 3px 0 0;
  background-image: -webkit-linear-gradient(top, whiteffd, #eef2f5);
  background-image: -moz-linear-gradient(top, whiteffd, #eef2f5);
  background-image: -o-linear-gradient(top, whiteffd, #eef2f5);
  background-image: linear-gradient(to bottom, whiteffd, #eef2f5);
  -webkit-box-shadow: 0 1px whitesmoke;
  box-shadow: 0 1px whitesmoke;
}
 
.login p {
  margin: 20px 0 0;
}
 
.login p:first-child {
  margin-top: 0;
}
 
.login input[type=text], .login input[type=password] {
  width: 278px;
}
 
.login p.remember_me {
  float: left;
  line-height: 31px;
}
 
.login p.remember_me label {
  font-size: 12px;
  color: #777;
  cursor: pointer;
}
 
.login p.remember_me input {
  position: relative;
  bottom: 1px;
  margin-right: 4px;
  vertical-align: middle;
}

input {
  font-family: 'Lucida Grande', Tahoma, Verdana, sans-serif;
  font-size: 14px;
}
 
input[type=text], input[type=password] {
  margin: 5px;
  padding: 0 10px;
  width: 200px;
  height: 34px;
  color: #404040;
  background: white;
  border: 1px solid;
  border-color: #c4c4c4 #d1d1d1 #d4d4d4;
  border-radius: 2px;
  outline: 5px solid #eff4f7;
  -moz-outline-radius: 3px;
  -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);
}
 
input[type=text]:focus, input[type=password]:focus {
  border-color: #7dc9e2;
  outline-color: #dceefc;
  outline-offset: 0;
}
 
input[type=submit] {
  padding: 0 18px;
  height: 29px;
  font-size: 12px;
  font-weight: bold;
  color: #527881;
  text-shadow: 0 1px #e3f1f1;
  background: #cde5ef;
  border: 1px solid;
  border-color: #b4ccce #b3c0c8 #9eb9c2;
  border-radius: 16px;
  outline: 0;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  background-image: -webkit-linear-gradient(top, #edf5f8, #cde5ef);
  background-image: -moz-linear-gradient(top, #edf5f8, #cde5ef);
  background-image: -o-linear-gradient(top, #edf5f8, #cde5ef);
  background-image: linear-gradient(to bottom, #edf5f8, #cde5ef);
  -webkit-box-shadow: inset 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.15);
  box-shadow: inset 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.15);
}

input[type=submit]:active {
  background: #cde5ef;
  border-color: #9eb9c2 #b3c0c8 #b4ccce;
  -webkit-box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.2);
  box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.2);
}

input[type=checkbox],
input[type=radio] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));
 
-webkit-appearance: none;
-webkit-box-shadow: 1px 1px 1px #fff;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
 
}
 
input[type=radio] {
-webkit-border-radius: 2em; /* Make radios round */
}
 
body {
    
    background-image: url("sources/login.jpg");
    background-repeat:no-repeat;
    background-size:cover;
    
}

button {
    background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;
    outline:none;
}
            table,tr,th,td
            {
                border: 1px solid black;
            }
                    </style>
    </head>
    <body>
<?php
 
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `users` WHERE CONCAT(`username`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);

                    ?>

                <?php 
                if($_POST['valueToSearch'] == 'admin' && $_POST['password'] == 'admin' ){
                                        echo "<div align='right'";
                    echo "<u><a href='login.php'>Log out</a></u>";
                    echo "</div>";
                    echo "<div align='center'>";
                    echo "<form method='post' action='aindex.html'><input type='submit' value='Home'></form>";
                    echo "<form method='post' action='signup.php'><input type='submit' value='Register Player'></form>";
                    echo "<form method='post' action='delete.php'><input type='submit' value='Delete Player'></form>";
            }
                while($row = mysqli_fetch_array($search_result)):
                if($_POST['valueToSearch'] == $row['username'] && $_POST['password'] == $row['password'] ){
                    echo "<div align='right'";
                    echo "<u><a href='login.php'>Log out</a></u>";
                    echo "</div>";
                     echo "<h1><font color='blue'>Profile</font></h1>";
                    echo "<h2><font color='red'>Personal Information</font></h2>";
                    echo "Student number: ";
                    echo  $row['snum'] ;
                    echo "<br>";
                    echo "Last Name: "; 
                    echo $row['lname'];
                    echo "<br>";
                    echo "First Name: ";
                    echo  $row['fname'];
                    echo "<br>";
                    echo "Middle Name: ";
                    echo  $row['mname'];
                    echo "<br>";
                    echo "Birthdate: ";
                    echo $row['bday'];
                    echo "<br>";
                    echo "Gender: " ;
                    echo $row['gender'];
                    echo"<br>";
                    echo "Nationality: ";echo $row['nationality'];
                    echo "<br>";
                    echo "<br><br><br><center>";
                    echo "<table>";
                    echo "<tr>";
                    echo "<th><font color='white'>Sunday</th>";
                    echo "<th><font color='white'>Monday</th>";
                    echo "<th><font color='white'>Tuesday</th>";
                    echo "<th><font color='white'>Wednesday</th>";
                    echo "<th><font color='white'>Thursday</th>";
                    echo "<th><font color='white'>Friday</th>";
                    echo "<th><font color='white'>Saturday</th>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td><font color='white'>30 minutes jogging<br>";
                    echo "<font color='white'>Push up 10-15 repetitions 3 sets<br>";
                    echo "<font color='white'>sit ups 50-70 repetitions 3 sets<br>";
                    echo "<font color='white'>squats 1 minute - 1:30 minutes 3 sets<br>";
                    echo "<font color='white'>stretching for 10-15 minutes";
                    echo "</td>";
                    echo "<td><font color='white'>30 minutes jogging before training<br>";
                    echo "<font color='white'>Go train in UST</td>";
                    echo "<td><font color='white'>30 minutes jogging<br>";
                    echo "<font color='white'>squat jumps 30 repetitions 3 sets<br>";
                    echo "<font color='white'>push up 10-15 repetitions 3 sets<br>";
                    echo "<font color='white'>sit ups 50-70 repetitions 3 sets<br>";
                    echo "<font color='white'>planks 1 minute 3 sets<br></td>";
                    echo "<td><font color='white'>30 minutes jogging before training<br>";
                    echo "<font color='white'>Go train in UST</td>";
                    echo "<td><font color='white'>30 minutes jogging before training<br>";
                    echo "<font color='white'>Go train in UST</td>";
                    echo "<td><font color='white'>30 minutes jogging<br>";
                    echo "<font color='white'>Push up 10-15 repetitions 3 sets<br>";
                    echo "<font color='white'>sit ups 50-70 repetitions 3 sets<br>";
                    echo "<font color='white'>squats 1 minute - 1:30 minutes 3 sets<br>";
                    echo "<font color='white'>stretching for 10-15 minutes";
                    echo "</td>";
                    echo "<td><font color='white'>30 minutes jogging<br>";
                    echo "<font color='white'>squat jumps 30 repetitions 3 sets<br>";
                    echo "<font color='white'>push up 10-15 repetitions 3 sets<br>";
                    echo "<font color='white'>sit ups 50-70 repetitions 3 sets<br>";
                    echo "<font color='white'>planks 1 minute 3 sets<br></td>";
                    echo "</tr>";
                    echo "</table>";
                    echo "<br>";
                    echo "<form method='post' action='cpass.php'>";
                    echo"<input type='submit' value='Change Password'></form>";
                }

                else{
                    echo "<br>";
    echo "<button type='submit' onclick='location.href='index.html';' style='font-size:16pt;color:white;border:'><u><a href='index.html'><font color='white'>Home</u></a></button>";
    echo"<br><br><br><br><br><br><br>";
    echo"<div align='center'>";
    echo"<img src='sources/header.png' >";
    echo"</div>";
  echo"<div class='container'>";
  echo"<div class='login'>";
  echo"<br><br>";
  echo"  <form method='post' action='training.php'>";
  echo"    <p><input type='text' name='valueToSearch' value='' placeholder='Username' required></p>";
  echo"    <p><input type='password' name='password' value='' placeholder='Password' required></p>";
  echo"<font color='red'> Invalid Username or Password. Try Again.</font>";
  echo"  <br>";
  echo"    <div align='right'><p class='submit'><input type='submit' name='search' value='Login'></p></div>";
  echo"  </form>";
  echo"</div>";
  echo"<div class='login-help' align='center'>";
  echo"  <p>Forgot your password? <a href='rpass.php'>Click here to reset it</a>.</p>";
  echo"</div>";
echo"</div>";
               
       }         ?>
                <?php endwhile;?>
                <?php
    
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

<!DOCTYPE html>


    

            
        </form>
        
    </body>
</html>

