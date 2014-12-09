<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
	<div class="welcome">
		{{ Form::open(array('method' => 'post', 'files' => true, 'id' => 'uploadForm')) }}
		{{ Form::textarea('captions[]', '',array('class' => 'caption')) }}
		{{ Form::file('assets[]', array('onchange' => 'anotherUpload(this)', 'class' => 'upload')) }}
		{{ Form::submit('complete') }}
		{{ Form::close() }}
	</div>
	{{ HTML::script('https://code.jquery.com/jquery-1.11.1.min.js') }}
	<script>

		function anotherUpload ($this) {

			var captionHtml = $('.caption').clone();
			var fileHtml = $('.upload').clone();

			$(captionHtml).text('');
			$('#uploadForm input[type="submit"]').before(captionHtml);
			$('#uploadForm input[type="submit"]').before(fileHtml);
		}
	</script>
</body>
</html>
