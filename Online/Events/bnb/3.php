<html>
<head>
<link rel="stylesheet" href="css/body.css" type="text/css">
</head>
<?php
/*
CREATE TABLE user
(
uid int NOT NULL AUTO_INCREMENT,
pass varchar(25) NOT NULL,
uname varchar(25),
PRIMARY KEY (uid)
)
*/
session_start();

if(isset($_POST['user']) && isset($_POST['pass'])&& isset($_POST['first'])&& isset($_POST['last'])&& isset($_POST['clg'])&& isset($_POST['email']))
{
mysql_connect('mysql1.freehosting.com', 'bvpieeec_lol', 'hdb32wb98') or die("<br/>error");
mysql_select_db('bvpieeec_delhibvce') or die("<br>DB_error");
$u=$_POST['user'];
$p=$_POST['pass'];
$fname=$_POST['first'];
$lname=$_POST['last'];
$clg=$_POST['clg'];
$email=$_POST['email'];

$q="INSERT INTO `bnb` (fname,lname,clg,user,pass,email,creds,dlf,itc,airtel,dabur,maruti,ongc,pnb)VALUES ('$fname','$lname','$clg','$u','$p','$email',1000,0,0,0,0,0,0,0)";
$q_run=mysql_query($q) or die("Register error");
header( 'Location: index.php' ) ;
}
?>
<div class="main_div">
<div class="content">
	<center><h3> Tech Quiz</h3></center>
<p>Do you think you are a TECH WIZ??<br>
Are you a superstar among your friends when it comes to technical stuff ?? If yes then this is the place to show off your skills.<br>
FERVOUR'15 brings to you a TECH Quiz. Here we fire a series of technical questions to you.<br>
You have to answer as many as you can. <br>
Whosoever answers the maximum no. Of questions wins.<br>
So gear up and get ready to face the real challenge.<br>
Loads of EXCITING PRIZES and goodies to be won.<br><br>
A quiz About all things in the technical universe.</p>
<br><br>
IMPORTANT: There is a Time Limit of 30 minutes. If you exceed, a penalty of 10 points is given.
</div>
<div style="border:groove;border-color:grey;height:75%;position:inherit;float:left;margin-top:5%;"></div>
<div id="login">
	<div class="head">
	<p>REGISTER</p>
	</div>
	<form action="3.php" method="POST" style="margin:0;">
	<div class="box_l">
	First Name:<br/> <input type="text" name="first" class="text_box" />
		<br/><br/>
	Last Name:<br/> <input type="text" name="last" class="text_box"/>
			<br/><br/>
	College:<br/> <input type="text" name="clg" class="text_box"/>
			<br/><br/>
	</div>
	<div class="box_r">
	Username:<br/> <input type="text" name="user" class="text_box" />
		<br/><br/>
	Email:<br/> <input type="text" name="email" class="text_box"/>
			<br/><br/>
	Password:<br/> <input type="password" name="pass" class="text_box"/>
			<br/><br/>
	
	</div>
	<div class="tail">
		<input type="submit" value="Register" class="but_ton"/>
		<center><p style="font-size:20px;"><a href="index.php">Login Here!</a></p></center>
	</div>
	</form>
</div>

</div>	
</html>