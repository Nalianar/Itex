<body>
<?php
 echo  "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>";
	$vote = $_POST['vote']; 
	$name = htmlentities($_POST['name']);
	$filename = "results.txt";
	if (is_writable($filename)) {
		if (!$handle = fopen($filename, 'a')) {
			echo "не могу открыть файл ($filename)";
			exit;
		}
		 if (!fwrite($handle, "{$name} - {$vote}".PHP_EOL)) {
			echo "не могу произвести запись в файл ($filename)";
			 exit;
		}
		
		 echo "<p align='center'>Спасибо за голос, {$name}. ваш результат записан в {$filename}</p>";
		 fclose($handle);

	} else {
	echo "файл $filename недоступен для записи";
	}
?>
</body>