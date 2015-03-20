<html>
<head>
<link rel="stylesheet" href="css/body.css" type="text/css">
</head>
<?php
session_start();
$i=1;
mysql_connect('mysql1.freehosting.com', 'bvpieeec_lol', 'hdb32wb98') or die("<br/>error");
mysql_select_db('bvpieeec_delhibvce') or die("<br>DB_error");
$sql = "CREATE TABLE `bnb`
		(
		user VARCHAR(30) NOT NULL,
		pass VARCHAR(30) NOT NULL,
		email VARCHAR(50) NOT NULL PRIMARY KEY,
		fname VARCHAR(30) NOT NULL,
		lname VARCHAR(30) NOT NULL,
		clg VARCHAR(30) NOT NULL,
		creds INT(100) NOT NULL DEFAULT 100,
		dlf INT(100) NOT NULL,
		itc INT(100) NOT NULL,
		airtel INT(100) NOT NULL,
		dabur INT(100) NOT NULL,
		maruti INT(100) NOT NULL,
		ongc INT(100) NOT NULL,
		pnb INT(100) NOT NULL
		);";
$sql_run = mysql_query($sql) or die(mysql_error());
if (mysql_num_rows($sql_run) > 0) {
    // output data of each row
	echo "<table border=\"1\" style=\"width:auto\">";
	echo "<tr><td><b>S.No.</b></td><td><b>First Name</b></td><td><b>Last Name</b></td><td><b>College</b></td><td><b>Score Round 1</b></td><td><b>Score round 2</b></td><td><b>Total</b></td></tr>";
	$t = $row["done"]+$row["done_2"];
    while($row = mysql_fetch_assoc($sql_run)) {
        echo "<tr><td>" . $i. ".</td><td>" . $row["fname"]. "</td><td>" . $row["lname"]. "</td><td>" . $row["clg"]. "</td><td>". $row["done"]. "</td><td>". $row["done_2"]. "</td><td>". $row["total"]. "</td></tr><br>";
		$i=$i+1;
    }
	echo "</table>";
} else {
    echo "0 results";
}

?>
</html>