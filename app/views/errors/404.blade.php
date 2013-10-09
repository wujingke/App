<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>{{ Lang::get('page.not_found') }}</title>
	<style>
		@charset "UTF-8";

		@import url(//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|Alegreya:400,700);
		body {
			margin: 0;
			padding: 0;
		}
		p {
			margin: 0;
			font-family: 'Alegreya', 'Open Sans', sans-serif;
			color: #5c648c;
			font-size: 32px;
		}
		.wrapper {
			text-align: center;
		}
		._404 {
			font-size: 100px;
			position: relative;
			top: -40px;
		}
		img {
			opacity: 0.3;
		}
	</style>
</head>
<body>
	<div class="wrapper">
		{{ HTML::image('img/404.png') }}
		<p class="_404">404</p>
		<p>Sorry this page can not be found.</p>
	</div>
</body>
</html>
