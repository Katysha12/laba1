<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1 style="margin-top: 60; text-align: center;">Ошкина Екатерина 18 вариант</h1></br>
	<h2 style="margin-top: 0; margin-bottom: 0px; text-align: center; ">Текст задачи:</h2></br>
	<p style="margin-top: 0; text-align: center; font-size: 30px;">Вычислить объем треугольной пирамиды.</p></br>
	<p style="margin-top: 10; text-align: center; font-size: 20px;"> Для решения задачи по формуле(V = ha² / 4√3) были взяты тестовые числа как а = 5 и h =  10
	</p></br>
	<p style="margin-top: 60; text-align: center; font-size: 30px;">
<?php

$a = 5;
$h = 10;
$v = $h*pow($a, 2)/4*sqrt(3);
$v = number_format($v, 2);
echo "Ответ:".'</br>';
echo $v;
?>
</p>
</body>
</html>
