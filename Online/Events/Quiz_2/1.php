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
$q="SELECT * FROM `maths_fervour_2014` WHERE pass='".$p."'";

$q_run=mysql_query($q) or die("<br/>error_run");
$q_row=mysql_fetch_assoc($q_run);
echo '<br>'.$q_row['uname']; 
$uname=$q_row['uname'];
$end = $q_row['done'];
if($uname==$u && $end == 0 ){$_SESSION['uname']=$u; 
header( 'Location: index_new.php' ) ;
}
else if ($end != 0 ){header( 'Location: end.php' ) ;}
}
?>
<div id="login">
<form action="1.php" method="POST" style="background:#e74c3c;">
 Enter your Username here : <input type="text" name="user" id="a" />
       <br/>
 Enter your Password <input type="password" name="pass"/>
		<br/>
 <input type="submit" value="Login"/>
 
 <h3><strong>NOTE </strong>Once you login you need to finish the quiz in 20 mins. else the session will close and your response wont be recorded </h3>
 <p>Click <a href="3.php">HERE </a> to register.</p>
</form>
</div>

</html>