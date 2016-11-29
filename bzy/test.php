<!DOCTYPE html>
<html>
<head>

	<!--Meta tags-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!--Title-->
	<title>Как создать модальное окно для сайта с помощью jQuery | Демонстрация для сайта RUDEBOX</title>
		
	<!--Stylesheets-->
	<link rel="stylesheet" href="css/styles.css">

	<!--HTML5 Shiv-->
	<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
</head>
<body>

<a href="#" id="button">Жми меня!</a>


<div id="modal">
	<div id="heading">
		Первый раз у нас на сайте?
	</div>

	<div id="content">
		<p>На нашем сайте ты найдешь много<br> полезной информации для создания своего сайта!</p>

		<a href="#" class="button green close"><img src="images/tick.png">Да, уже нашел!</a>

		<a href="#" class="button red close"><img src="images/cross.png">Не, еще ищу!</a>
	</div>
</div>



	<!--jQuery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="js/jquery.reveal.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#button').click(function(e) { // Button which will activate our modal
			   	$('#modal').reveal({ // The item which will be opened with reveal
				  	animation: 'fade',                   // fade, fadeAndPop, none
					animationspeed: 600,                       // how fast animtions are
					closeonbackgroundclick: true,              // if you click background will modal close?
					dismissmodalclass: 'close'    // the class of a button or element that will close an open modal
				});
			return false;
			});
		});
	</script>

</body>
</html>



