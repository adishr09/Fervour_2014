<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
	<div id="wrapper">
		<div id="news">
		<p>The</p>
		<p>news</p>
		<p>for</p>
		<p>the</p>
		<p>hour</p>
		<p>here</p>
		</div>
		<div id="border">
		</div>
		<div id="stock">
			<div id="sub_stock">
				<?php
					$con=mysqli_connect("sandbox.ieee.org","delhibvce","hdb32wb98","delhibvce");
					if (mysqli_connect_errno())
					{
						echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}
					echo 'Connected successfully';
					$result = mysqli_query($con,"SELECT * FROM fervour_2014_shares");
					while($row = mysqli_fetch_array($result))
					{
						echo $row['sno'] . " " . $row['company']. " " . $row['initialprice'];
					}
					mysqli_close($con);
				?>
			</div>
			<div id="border_v">
			</div>
			<div id="sub_stock">
				<p>User</p>
				<p>Stock</p>
				<p>Tally</p>
				<p>Here</p>
				<p>User</p>
				<p>Stock</p>
				<p>Tally</p>
				<p>Here</p>
				<p>User</p>
				<p>Stock</p>
				<p>Tally</p>
				<p>Here</p><p>User</p>
				<p>Stock</p>
				<p>Tally</p>
				<p>Here</p>
			</div>
		</div>
		<div id="border">
		</div>
		<div id="submit">
			<div id="sub_submit">
				<form action="demo_form.asp" style="margin-top:5%;">
				<select name="stocks">
					<option value="volvo">Volvo</option>
					<option value="saab">Saab</option>
					<option value="fiat">Fiat</option>
					<option value="audi">Audi</option>
				</select>
				<br><br>
				Quantity<input type="text" name="Answer" value=""><br><br>
				Current Credit<input type="text" name="Answer" value="" disabled><br><br>
				Credit after purchase<input type="text" name="Answer" value="" disabled><br><br>
				<input type="submit" value="Purchase Stock">
				</form>
			</div>
			<div id="border_v">
			</div>
			<div id="sub_submit">
				<form action="demo_form.asp" style="margin-top:5%;">
				<select name="stocks">
					<option value="volvo">Volvo</option>
					<option value="saab">Saab</option>
					<option value="fiat">Fiat</option>
					<option value="audi">Audi</option>
				</select>
				<br><br>
				Quantity<input type="text" name="Answer" value=""><br><br>
				Current Credit<input type="text" name="Answer" value="" disabled><br><br>
				Credit after Sell<input type="text" name="Answer" value="" disabled><br><br>
				<input type="submit" value="Sell Stock">
			</form>
			</div>
		</div>
	</div>
	</body>
</html>
