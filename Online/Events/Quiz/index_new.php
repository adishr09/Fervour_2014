<html style="overflow-x:hidden;">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>BVPIEEE | Passion To Perfection</title>
		<link rel="stylesheet" href="css/body.css" type="text/css">
	</head>
<body>
<script>setTimeout(function(){window.location.href='2nd_homepage/home_page.html'},1200000);</script>
			<div id="wrapper">
				<div id="myTimer"></div>
				<button type="button" id="myBtn" class="btnDisable" disabled onclick="parent.location=''">Time Until quiz finishes</button>
			</div>
		<script>
			var sec = 1200;
			var min = sec/60;
			var myTimer = document.getElementById('myTimer');
			var myBtn = document.getElementById('myBtn');
			window.onload = countDown;
			function countDown() {
				if (sec < 10) {
					myTimer.innerHTML = "0" + sec + " seconds";
				} 
				else if (sec <= 60){
					myTimer.innerHTML = sec + " seconds";
				}
				else 
				{
					myTimer.innerHTML = min + " minutes";
				}
				if (sec <= 0) {
					$("#myBtn").removeAttr("disabled");
					$("#myBtn").removeClass().addClass("btnEnable");
					$("#myTimer").fadeTo(2500, 0);
					myBtn.innerHTML = "Quiz is Over!!";
				return;
			}
			sec -= 1;
			window.setTimeout(countDown, 1000);
		}</script>
<div id="wrapper" >
	<div id="container">
		<p>Hello Iframe</p>
	</div>
</div>
</body>
</html>