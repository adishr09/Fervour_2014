<?php 
session_start();

// Global Variable Declarations  
$p_dlf = 7;
$p_itc = 4;
$p_airtel = 8;
$p_dabur = 5;
$p_maruti = 7.5;
$p_ongc = 3;
$p_pnb = 2.5;
$credits = 1000; 
	

//PUTTING USER DATA IN SESSIONS 
$_SESSION['$p_dlf'] = $p_dlf;
$_SESSION['$p_itc'] = $p_itc;
$_SESSION['$p_airtel'] = $p_airtel;
$_SESSION['$p_dabur'] = $p_dabur;
$_SESSION['$p_maruti'] = $p_maruti;
$_SESSION['$p_ongc'] = $p_ongc;
$_SESSION['$p_pnb'] = $p_pnb;
// GETING AND STORING USER DATA
mysql_connect('mysql1.freehosting.com', 'bvpieeec_lol', 'hdb32wb98') or die("<br/>error");
		mysql_select_db('bvpieeec_delhibvce') or die("<br>DB_error");
		$q="SELECT * FROM `bnb` WHERE email='".$uname."'";
$q_run=mysql_query($q) or die("<br/>error_run");
$q_row=mysql_fetch_assoc($q_run);

$a=$q_row['creds'];
$s=$q_row['dlf'];
$d=$q_row['itc'];
$f=$q_row['airtel'];
$g=$q_row['dabur'];
$h=$q_row['maruti'];
$j=$q_row['ongc'];
$k=$q_row['pnb'];
// STORING USER DATA IN SESSION 
$_SESSION['u_dlf'] = $s;
$_SESSION['u_itc'] = $d;
$_SESSION['u_airtel'] = $f;
$_SESSION['u_dabur'] = $g;
$_SESSION['u_maruti'] = $h;
$_SESSION['u_ongc'] = $j;
$_SESSION['u_pnb'] = $k;
$_SESSION['credits'] = $a;
	
		


?>

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
				<p>Stock</p>
				<p>Tally</p>
				<p>Here</p>
			</div>
			<div id="border_v">
			</div>
			<div id="sub_stock">
				<p>User</p>
				<p>Stock</p>
				<p>Tally</p>
				<p>Here</p>
			</div>
		</div>
		<div id="border">
		</div>
		<div id="submit">
			<div id="sub_submit">
			<form action="buy.php" style="margin-top:5%;" method="POST">
				<select name="stocks">
					<option value="DLF">DLF</option>
					<option value="ITC">ITC </option>
					<option value="Airtel">Airtel  </option>
					<option value="Dabur">Dabur </option>
                    <option value="Maruti">Maruti  </option>
					<option value="ONGC">ONGC  </option>
					<option value="PNB">PNB </option>
				</select>
				<br><br>
				Quantity<input type="number" name="answer" min="1"><br><br>
				Current Credit<?php session_start();echo $_SESSION['credits']; ?> <br><br><br><br>
				<input type="submit" value="Purchase Stock">
                </form>
			</div>
			<div id="border_v">
			</div>
			<div id="sub_submit">
				<form action="sell.php" method="POST" style="margin-top:5%;">
				<select name="stocks">
					<option value="DLF">DLF</option>
					<option value="ITC">ITC </option>
					<option value="Airtel">Airtel  </option>
					<option value="Dabur">Dabur </option>
                    <option value="Maruti">Maruti  </option>
					<option value="ONGC">ONGC  </option>
					<option value="PNB">PNB </option>
				</select>
				<br><br>
				Quantity<input type="number" name="answer" min="1"><br><br>
				Current Credit:<?php session_start(); $a= $_SESSION['credits']; echo $a;?> <br><br>
				
				<input type="submit" value="Sell Stock">
			</form>
			</div>
		</div>
	</div>
	</body>
</html>
