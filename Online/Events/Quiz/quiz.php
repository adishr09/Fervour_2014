<?php
$link = mysql_connect('sandbox.ieee.org', 'delhibvce', 'hdb32wb98');
mysql_select_db('delhibvce');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
$sql_query="SELECT * FROM fervour_2014_hunt";
echo $sql_query;
$res = mysql_query($sql_query) or die ($sql_query.mysql_error());
while($pwRow = mysql_fetch_array($res))
    {
    
	$eid = $pwRow['question'];
    echo $eid."<br>";
    } 
?>