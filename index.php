<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sydorov Leonid | Space-Ship.xyz</title>
    
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<meta name="viewport" content="width=1024px, user-scalable=no">

	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css" />

</head>

<body>

	<div id="info" class="glitch">
		<h1>Sydorov Leonid</h1>
		<a href="mailto:info@space-ship.xyz"><h2>info@space-ship.xyz</h2></a>
		<h3>+38 (099) 04-09-624</h3>
		<h4>+7 (911) 001-61-45</h4>
		<a href="https://t.me/Serpanok" target="_blank"><h3>t.me/Serpanok</h3></a>
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
			<div style="position: absolute; left: 30%; top: 20%; opacity: 0.9;">
				<span>PHP</span>
				<img src="images/cloud1.png" />
			</div>
		</div>
		<div class="layer cloud" data-depth="0.70">
			<div style="position: absolute; left: 50%; top: 45%; opacity: 0.7;">
				<span>SQL</span>
				<img src="images/cloud2.png" />
			</div>
		</div>
		<div class="layer cloud" data-depth="0.80">
			<div style="position: absolute; left: 60%; top: 30%; opacity: 0.8;">
				<span>React<i style="font-size: 60%; font-style: normal;">Native</i></span>
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
			<div style="position: absolute; left: 10%; top: 70%; opacity: 0.9;">
				<span>JavaScript</span>
				<img src="images/cloud1.png" />
			</div>
		</div>
		<div class="layer cloud" data-depth="0.80">
			<div style="position: absolute; left: 40%; top: 80%; opacity: 0.8;">
				<span>CSS</span>
				<img src="images/cloud2.png" />
			</div>
		</div>
		<div class="layer cloud" data-depth="0.50">
			<div style="position: absolute; left: 20%; top: 50%; opacity: 0.7;">
				<span>HTML</span>
				<img src="images/cloud3.png" />
			</div>
		</div>
	</div>

	<div id="copyright">
		Space-Ship.xyz &copy; All rights reserved
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<script src="js/parallax.js"></script>
	<script type="text/javascript">
		const scene = document.getElementById('parallax');
		const parallax = new Parallax(scene);

		// Yandex.Metrika counter
		(function (d, w, c) {
			(w[c] = w[c] || []).push(function() {
				try {
					w.yaCounter36772575 = new Ya.Metrika({
						id:36772575,
						clickmap:true,
						trackLinks:true,
						accurateTrackBounce:true
					});
				} catch(e) { }
			});

			var n = d.getElementsByTagName("script")[0],
				s = d.createElement("script"),
				f = function () { n.parentNode.insertBefore(s, n); };
			s.type = "text/javascript";
			s.async = true;
			s.src = "https://mc.yandex.ru/metrika/watch.js";

			if (w.opera == "[object Opera]") {
				d.addEventListener("DOMContentLoaded", f, false);
			} else { f(); }
		})(document, window, "yandex_metrika_callbacks");
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/36772575" style="position:absolute; left:-9999px;" alt="" /></div></noscript>

</body>
</html>