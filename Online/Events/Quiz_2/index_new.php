<html style="overflow-x:hidden;">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>BVPIEEE | Passion To Perfection</title>
		<link rel="stylesheet" href="css/body.css" type="text/css">
	</head>
<body>
<script>setTimeout(function(){window.location.href='end.php'},1320000);</script>
			<div id="wrapper">
				<div id="myTimer"></div>
				<button type="button" id="myBtn" class="btnDisable" disabled onclick="parent.location=''">Time Until quiz finishes</button>
			</div>
		<script>
			var sec = 1320;
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
					var min = sec/60;
					var min1 = Math.ceil(min);
					myTimer.innerHTML = min1 + " minutes";
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
	<iframe src="https://docs.google.com/forms/d/1IP2pEdwyKrev3VZ28MyKmV-BFULzKn0JsZ5cNtk7DfQ/viewform?embedded=true" width="760" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
	</div>
</div>
</body>
</html>