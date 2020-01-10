<body>
<?php echo  "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>" ?>
<h1 align='center'>4 лаба 4 Вариант</h1>
<form action="allOK.php" method="POST">
	<input type="text" name="name" required placeholder="Ваше имя"><br>
	<p><b>Ваш любимый язык программирования:</b></p>
	<input type="Radio" name="vote" value="js" checked>js<br>
	<input type="Radio" name="vote" value="php">php<br>
	<input type="Radio" name="vote" value="Python">Python<br>

	<input type="submit" value="Голосовать"/>
</form>

</body>