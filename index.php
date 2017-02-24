<!doctype html>
<html>
<head>
	<meta charset="windows-1251">
	<title>Sidorov Leonid | Space-Ship.xyz</title>
    
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<meta name="viewport" content="width=1024px, user-scalable=no">

	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>

</head>

<body>

	<!--<div id="rotate">
		Пожалуйста, поверните своё устройство!
	</div>-->

	<div id="info">
		<h1>Sidorov Leonid</h1>
		<a href="mailto:info@space-ship.xyz"><h3>info@space-ship.xyz</h3></a>
	</div>

	<div id="loading"></div>

	<div id="parallax">
		<div class="layer spaceship" data-depth="0.60">
			<img src="images/space-ship.png" />
		</div>
		<div class="layer clouds2" data-depth="0.55">
			<img style="opacity: 0.9;" src="images/clouds2.png" />
		</div>
		<div class="layer clouds1" data-depth="0.30">
			<div class="clouds"></div>
			<div class="bg"></div>
		</div>
		<div class="layer cloud" data-depth="0.90">
			<div style="position: absolute; left: 30%; top: 20%; opacity: 0.8;">
				<span>PHP</span>
				<img src="images/cloud1.png" />
			</div>
		</div>
		<div class="layer cloud" data-depth="0.70">
			<div style="position: absolute; left: 50%; top: 45%; opacity: 0.9;">
				<span>Java</span>
				<img src="images/cloud2.png" />
			</div>
		</div>
		<div class="layer cloud" data-depth="0.80">
			<div style="position: absolute; left: 60%; top: 30%; opacity: 0.6;">
				<span>SQL</span>
				<img src="images/cloud3.png" />
			</div>
		</div>
		<div class="layer cloud" data-depth="0.60">
			<div style="position: absolute; left: 80%; top: 70%; opacity: 0.8;">
				<span>C++</span>
				<img src="images/cloud2.png" />
			</div>
		</div>
		<div class="layer cloud" data-depth="0.30">
			<div style="position: absolute; left: 10%; top: 70%; opacity: 0.7;">
				<span>JavaScript</span>
				<img src="images/cloud1.png" />
			</div>
		</div>
		<div class="layer cloud" data-depth="0.80">
			<div style="position: absolute; left: 40%; top: 80%; opacity: 0.9;">
				<span>CSS</span>
				<img src="images/cloud2.png" />
			</div>
		</div>
		<div class="layer cloud" data-depth="0.50">
			<div style="position: absolute; left: 20%; top: 50%; opacity: 0.8;">
				<span>HTML</span>
				<img src="images/cloud3.png" />
			</div>
		</div>
	</div>

	<div id="copyright">
		Space-Ship.xyz &copy; All rights reserved
	</div>

	<script src="js/parallax.js"></script>
	<script>

	// Pretty simple huh?
	var scene = document.getElementById('parallax');
	var parallax = new Parallax(scene);

	</script>

</body>
</html>