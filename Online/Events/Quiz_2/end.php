<html>
<head>
<link rel="stylesheet" href="css/body.css" type="text/css">
</head>

<?php

/**
 * @author 
 * @copyright 2014
 */
 $link = mysql_connect('sandbox.ieee.org', 'delhibvce', 'hdb32wb98');
   mysql_select_db(delhibvce);
   if (!$link) {
       die('Could not connect: ' . mysql_error());
   }
 
 session_start();
  $ses =  $_SESSION['uname'];
  
  $sql_query= "UPDATE maths_fervour_2014 SET done = '1' WHERE  uname = "."'".$ses."'";
 
 $q_run=mysql_query($sql_query) or die("<br/>User Exists");


?>
<div id="login">

<h1>THANKYOU FOR PARTICIPATING </h1>
</div>
</html>