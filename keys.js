<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<script type="text/javascript">
	
	window.addEventListener('keyup', function(event) {
		event.preventDefault();
		console.log(event.keyCode);

		switch(event.keyCode) {
			case 37:
				alert('Вы нажали на клавишу влево');
			break;
			case 38:
				alert('Вы нажали на клавишу вверх');
			break;
			case 39:
				alert('Вы нажали на клавишу вправо');
			break;
			case 40:
				alert('Вы нажали на клавишу вниз');
			break;
		}
	})

</script>
</body>
</html>