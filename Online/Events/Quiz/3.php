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

if(isset($_POST['user']) && isset($_POST['pass']))
{
$u=$_POST['user'];
$p=$_POST['pass'];


mysql_connect('sandbox.ieee.org', 'delhibvce', 'hdb32wb98') or die("<br/>error");
mysql_select_db('delhibvce') or die("<br>DB_error");

$q="INSERT INTO `maths_fervour_2014` (`pass` ,`uname` ,`done`)VALUES ('".$p."'  ,  '".$u."','0');";

$q_run=mysql_query($q) or die("<br/>User Exists");
header( 'Location: 1.php' ) ;
}
?>

<div id="login">
<h1 > REGISTER HERE </h1>
<form action="3.php" method="POST">
 Enter a Username <input type="text" name="user" id="a" />
       <br/>
 Enter a Password <input type="password" name="pass"/>
		<br/>
  <p>You have a login? go <a href="1.php">here</a> then.</p>
 <input type="submit" value="Sign Up"/>
</form>
</div>
</html>