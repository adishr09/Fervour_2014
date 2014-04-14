
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
echo $u;
echo $p."<br><br>";

mysql_connect('sandbox.ieee.org', 'delhibvce', 'hdb32wb98') or die("<br/>error");
mysql_select_db('delhibvce') or die("<br>DB_error");
$q="SELECT * FROM `user` WHERE pass='".$p."'";

$q_run=mysql_query($q) or die("<br/>error_run");
$q_row=mysql_fetch_assoc($q_run);
echo '<br>'.$q_row['uname']; 
$uname=$q_row['uname'];
if($uname==$u){$_SESSION['uname']=$u;
header( 'Location: treasure_hunt.php' ) ;
}
else echo "invalid user";
}
?>
<div id="login">
<form action="1.php" method="POST">
 Enter your Username here : <input type="text" name="user" id="a" />
       <br/>
 Enter your Password <input type="password" name="pass"/>
		<br/>
 <input type="submit" value="Login"/>
 <p>Click <a href="3.php">HERE </a> to register.</p>
</form>
</div>
</html>
