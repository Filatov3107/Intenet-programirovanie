<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/reset.css">
	<title>Филатов Игорь</title>
</head>
<body>
	
		<FORM method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
		Введите Логин(например Игорь)
		<INPUT type="text" name="a" size="3">
		

		<P> <INPUT type="submit" name="obr" value="Проверить">
	</FORM>
	<?
		if (isset($_POST["obr"])) {
			$s1 = $_POST["a"];
			$logitn = array("Игорь", "Анастасия", "Олег", "Михаил");
			$answer;
			for ($i=0; $i < count($logitn) ; $i++) { 
				if ($s1 == $logitn[$i]) {
					$answer = "Здравствуйте," . $logitn[$i];
					break;
				} else {
					$answer = "Вы не зарегестрированный пользователь";
				}
			}
			echo $answer;
	}
	?>
</body>
</html>