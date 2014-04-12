<?php
$con=mysqli_connect("sandbox.ieee.org","delhibvce","hdb32wb98","information_schema");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
echo 'Connected successfully';
$result = mysqli_query($con,"SELECT * FROM ieee_users");

while($row = mysqli_fetch_array($result))
  {
  echo $row['uid'] . " " . $row['name']. " " . $row['institution']. " " . $row['roll'];
  echo "<br>";
  }
  mysqli_close($con);
?>