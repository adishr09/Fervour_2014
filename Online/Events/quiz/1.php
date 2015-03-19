<html>
<head>
<link rel="stylesheet" href="css/body.css" type="text/css">
</head>
<?php
	session_start();
	if(isset($_POST['user']) && isset($_POST['pass']))
	{
		mysql_connect('mysql1.freehosting.com', 'bvpieeec_lol', 'hdb32wb98') or die("<br/>error");
		mysql_select_db('bvpieeec_delhibvce') or die("<br>DB_error");
		$u=$_POST['user'];
		$p=$_POST['pass'];
	
		$q="SELECT * FROM `vsq_15` WHERE pass='".$p."'";
		
		$q_run=mysql_query($q) or die("<br/>error_run");
		$q_row=mysql_fetch_assoc($q_run);
		echo '<br>'.$q_row['uname']; 
		$uname=$q_row['uname'];
		$end=$q_row['done_2'];
		if($uname==$u && $end==0){$_SESSION['uname']=$u; 
		$_SESSION['time']=time(); 
		header( 'Location: quiz/index.php' ) ;
		}
		else if ($end != 0 ){header( 'Location: exit.php' ) ;}
		}
?>
<body style="margin:0;">
<div class="main_div">
<div class="content">
	<center><h3> Tech Quiz</h3></center>
<p>Do you think you are a TECH WIZ??<br>
Are you a superstar among your friends when it comes to technical stuff ?? If yes then this is the place to show off your skills.<br>
FERVOUR'15 brings to you a TECH Quiz. Here we fire a series of technical questions to you.<br>
You have to answer as many as you can. <br>
Whosoever answers the maximum no. Of questions wins.<br>
So gear up and get ready to face the real challenge.<br>
Loads of EXCITING PRIZES and goodies to be won.<br><br>
A quiz About all things in the technical universe.</p>
<br><br>
IMPORTANT: There is a Time Limit of 30 minutes. If you exceed, a penalty of 10 points is given.
</div>
<div style="border-left:solid 2px;border-color:white;height:100%;position:inherit;float:left;margin-top:8%;"></div>
<div id="login">
	<div class="head">
	<p>LOGIN</p>
	</div>
	<form action="1.php" method="POST" style="margin:0;">
	<div class="box">
	Username:<br/> <input type="text" name="user" class="text_box" />
		<br/><br/>
	Password:<br/> <input type="password" name="pass" class="text_box"/>
			<br/><br/>
	</div>
	<div class="tail">
		<input type="submit" value="Login" class="but_ton"/>
		<center><p style="font-size:12px;">NOTE: Once you login, you need to finish the quiz in 20 minutes.</p>
		<p style="font-size:30px;  margin-top:20px"><a href="3.php" style="color:rgb(11, 148, 247); text-decoration:none;"><b>Sign Up</b></a></p></center>
	</div>
	
	</form>
</div>
</div>

</html>