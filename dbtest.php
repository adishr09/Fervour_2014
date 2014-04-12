<?
$link = mysql_connect('sandbox.ieee.org', 'delhibvce', 'hdb32wb98');
mysql_select_db('delhibvce');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
$sql_query="update ieee_users set privilige=5 where uid = 'PREMSINGH'";
mysql_query($sql_query) or die ($sql_query.mysql_error());

?>