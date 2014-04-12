<?php
$con=mysqli_connect("ewh.ieee.org/php/Admin","delhibvce","hdb32wb98","delhibvce");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$j = 5;
$k = "SSS";
$l = 3;
$sql="INSERT INTO test (uid, nme, level)
VALUES ('$j', '$k', '$l')";

if (!mysqli_query($con,$sql))
{
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";
$result = mysqli_query($con,"SELECT * FROM test");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>level</th>

</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['uid'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
      echo "<td>" . $row['level'] . "</td>";

  echo "</tr>";
  }
echo "</table>";

$result = mysqli_query($con,"SELECT * FROM test
WHERE name='sss'");

while($row = mysqli_fetch_array($result))
  {
  echo $row['name'] . " " . $row['level'];
  echo "<br>";
  }
mysqli_close($con);
?>
