<?php
echo "<br>";
echo"<p style='color:red'> Вариант 5:</p> ";
$n=rand(1,500);
echo "<br> N= ".$n."<br>";
for ($i = 0; $i < (sqrt($n)+1); $i++) {
for ($j = 0; $j < (sqrt($n)+1); $j++) {
if (($i*$i + $j*$j) == $n)
echo "Числа $i , $j ;";
}
}
?>