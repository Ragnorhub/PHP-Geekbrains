<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<h1>Такой страницы не существует</h1>
	<p>Через <span id="counter">5</span> секунд вы перейдете на главную страницу сайта</p>
	<script>
		var counter = document.getElementById('counter');
		var count = 4;
		setInterval(function () {
			if (count < 1) {
				window.location.href = '/';
			} else {
				counter.innerText = count;
				count--
			}
		}, 1000);
	</script>
</body>
</html>