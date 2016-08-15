<?php $inBrazil = false; ?>
<!DOCTYPE html>
<html>
<head>
	<title>#Voltavavo!</title>


	<meta property="og:url"           content="http://www.your-domain.com/your-page.html" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="Your Website Title" />
	<meta property="og:description"   content="Your description" />
	<meta property="og:image"         content="http://www.your-domain.com/path/image.jpg" />

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"   integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="   crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment-with-locales.min.js"></script>	
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center">
				<?php if (!$inBrazil): ?>
					<h1 class="bold">Atualmente, o Vavo está na:</h1>
					<h3> Argentina :(</h3>
				<?php else: ?>
				<?php endif; ?>
			</div>
		</div>

		<div class="row" style="margin-top: 5%;">
			<div class="col-md-12 text-center">
				<h2>Faltam: <span class="days"></span> dias, <span class="hours"></span> horas, <span class="minutes"></span> minutos e <span class="seconds"></span> segundos para o Vavo voltar</h2>
			</div>
		</div>
	</div>
	<div class="bg argentina"></div>

	<footer class="text-center">
		#voltavavo
	</footer>
	<script>
		$(document).ready(function(){
			countdown();

			setInterval(function(){countdown();}, 1000);

			function countdown(){
				var now = moment(new Date()); //todays date
				var end = moment("2017-01-01", "YYYY-MM-DD"); // another date
				var duration = moment.duration(end.diff(now));

				$(".days").html(parseInt(duration.asDays()));
				$(".hours").html(duration.hours());
				$(".minutes").html(duration.minutes());
				$(".seconds").html(duration.seconds());				
			}
		});
	</script>
</body>
</html>