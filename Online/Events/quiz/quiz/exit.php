<html>
<head>
<link rel="stylesheet" href="css/body.css" type="text/css">
</head>
<?php

 session_start();
   mysql_connect('mysql1.freehosting.com', 'bvpieeec_lol', 'hdb32wb98') or die("<br/>error");
   mysql_select_db('bvpieeec_delhibvce') or die("<br>DB_error");
	$ses =  $_SESSION['uname'];
	  $sql_query= "UPDATE `vsq_15` SET done_2 = 1 WHERE  uname ="."'". $ses."'";
		$res = mysql_query($sql_query) or die ($sql_query.mysql_error());

?>
<div id="login">
<h2>Thanks for playing the quiz.</h2>
</div>
</html>