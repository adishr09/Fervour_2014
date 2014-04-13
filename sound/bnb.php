<?php
function asdf(){
$link = mysql_connect('sandbox.ieee.org', 'delhibvce', 'hdb32wb98');
mysql_select_db('delhibvce');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
$i = 1;
$sql_query="SELECT * FROM fervour_2014_day1";

$res = mysql_query($sql_query) or die ($sql_query.mysql_error());
$pwRow = mysql_fetch_array($res);
while($i<3)
    {
    
	$eid = $pwRow['q'.$i];
    echo $eid."<hr>";
    $i++;
    } 
    }
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
	<div id="wrapper">
		<div id="news">
	          <?php asdf(); ?>
		</div>
		<div id="border">
		</div>
		<div id="stock">
			<div id="sub_stock">
				<p>Stock</p>
				<p>Rates</p>
				<p>Here</p>
				<p>Stock</p>
				<p>Rates</p>
				<p>Here</p>
				<p>Stock</p>
				<p>Rates</p>
				<p>Here</p>
				<p>Stock</p>
				<p>Rates</p>
				<p>Here</p>
				<p>Stock</p>
				<p>Rates</p>
				<p>Here</p>
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
