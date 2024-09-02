<!doctype html>

<!--[if IE 7 ]><html lang="en" class="ie ie7 no-js"><![endif]-->
<!--[if IE 8 ]><html lang="en" class="ie ie8 no-js"><![endif]-->
<!--[if IE 9 ]><html lang="en" class="ie ie9 no-js"><![endif]-->
<!--[if gt IE 9]><!--><html lang="en" class="no-js"><!--<![endif]-->

<head>

	<meta charset="utf-8" />

	<title>Rulon Enterprises Events Calendar</title>

	<meta name="description" content="Rulon Enterprises is a family farm located in Arcadia, Indiana, which strives to continue a 142-year tradition of sustainable and responsible farming. We are continually looking for new business ventures that maximize our sustainability and profitability." />
	<meta name="keywords" content="rulon, enterprises, farm, arcadia, indiana, sustainable, responsible, farming, ventures" />

	<meta name="author" content="Saucepan Creative" />
	<meta name="Copyright" content="Copyright 2011 Rulon Enterprises. All Rights Reserved." />

	<meta name="DC.title" content="Rulon Enterprises" />
	<meta name="DC.subject" content="Sustainable and responsible farming." />
	<meta name="DC.creator" content="Saucepan Creative -- http://www.inthesaucepan.com" />

	<meta name="google-site-verification" content="" />

	<meta name="viewport" content="width=device-width; initial-scale=.9;" />

	<link rel="shortcut icon" href="/-/media/favicon.png" />
	<link rel="apple-touch-icon" href="/-/media/apple-touch-icon-precomposed.png" />

	<link rel="stylesheet" href="/-/css/master.css" />
	<link rel="stylesheet" href="/-/css/print.css" media="print" />

	<link rel="stylesheet" href="/-/css/fullcalendar.css" />
	<link rel="stylesheet" href="/-/css/fullcalendar.print.css" media="print" />

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

	<script type="text/javascript" src="http://use.typekit.com/bye8amb.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

	<script src="/-/script/functions.js"></script>

	<script src="/-/script/modernizr.js"></script>

	<script src="/-/script/cycle.js"></script>

	<script src="/-/script/select.js"></script>

	<script src="/-/script/weather.js"></script>

	<!-- Calendar -->

	<script src="/-/script/jquery-ui-1.8.11.custom.min.js"></script>
	<script src="/-/script/fullcalendar.js"></script>

	<script type='text/javascript'>
	
		$(document).ready(function() {
		
			var date = new Date();
			var d = date.getDate();
			var m = date.getMonth();
			var y = date.getFullYear();
			
			$('#calendar').fullCalendar({
				header: {
					left: 'prev,next today',
					center: 'title',
					right: 'month,agendaWeek,agendaDay'
				},
				firstDay: 1,
				editable: true,
				events: [
					{
						title: 'All Day Event',
						start: new Date(y, m, 1)
					},
					{
						title: 'Long Event',
						start: new Date(y, m, d-5),
						end: new Date(y, m, d-2)
					},
					{
						id: 999,
						title: 'Repeating Event',
						start: new Date(y, m, d-3, 16, 0),
						allDay: false
					},
					{
						id: 999,
						title: 'Repeating Event',
						start: new Date(y, m, d+4, 16, 0),
						allDay: false
					},
					{
						title: 'Meeting',
						start: new Date(y, m, d, 10, 30),
						allDay: false
					},
					{
						title: 'Lunch',
						start: new Date(y, m, d, 12, 0),
						end: new Date(y, m, d, 14, 0),
						allDay: false
					},
					{
						title: 'Birthday Party',
						start: new Date(y, m, d+1, 19, 0),
						end: new Date(y, m, d+1, 22, 30),
						allDay: false
					},
					{
						title: 'Click for Google',
						start: new Date(y, m, 28),
						end: new Date(y, m, 29),
						url: 'http://google.com/'
					}
				]
			});
			
		});
	
	</script>

	<!--[if (gte IE 6)&(lte IE 8)]>
		<script src="/-/script/selectivizr.js"></script>
	<![endif]-->

</head>

<body class="calendar" onload="setupZoom()">

<div class="page group">

	<p class="move"><a href="#content">Skip to main content &darr;</a></p>

	<!-- Primary Actions -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/primary.php");?>

	<!-- Header -->

	<header class="group">

		<h1><a href="/">Rulon Enterprises</a></h1>

		<nav>

			<ol>
				<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/navigation.php");?>
			</ol>

		</nav>

	</header>

	<!-- Body -->

	<section class="body group" id="content">

		<div class="main">

			<div id="calendar"></div>

		</div>

	</section>

	<!-- Secondary -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/secondary.php");?>

	<!-- Tertiary -->

	<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/tertiary.php");?>

</div>

<!-- Footer -->

<? include ($_SERVER['DOCUMENT_ROOT']."/-/includes/footer.php");?>

</body>

</html>