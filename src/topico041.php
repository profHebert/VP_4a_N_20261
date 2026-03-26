
<?php
$a=10;
$b=2;
echo "Adição:".($a + $b);#Adição: 12
echo "<br>Subtração:".($a - $b);//8
echo "<br>Multiplicação:".($a * $b);//20
echo "<br>Divisão:".($a / $b);//5
echo "<br>Módulo:".($a % $b);//0
echo "<br>Exponenciação:".($a ** $b);//100
?>
<hr>
<?php
$a=10;
$b=2;
$a+=$b;//$a=$a+$b//$a=10+2//$a=12
$b-=5;//$b=2-5//$b=-3
echo "a = ".$a;//a = 12
echo "<br>b = ".$b;//b = -3
$c=11;
$d=6;
$c%=$d;//$c=11%6//$c=5
$d+=$a;//$d=6+12//$d=18
echo "<br>c = ".$c;//c = 5
echo "<br>d = ".$d;//d = 18
echo "<hr>";
$nome="Bete";
echo $nome.$d;
$c.="cinco";//c = 5."cinco"//c="5cinco"
echo "<br> c = $c";//c =
echo "<hr>";
$x = 100;
echo "x = ".$x++;//x = 100
echo "<br>x final = ".$x;//x final = 101
$i=10;
echo "<br>i = $i";//i = 10
$i++;//11
$i++;//12
++$i;//13
echo "<br>i = $i";//i = 13
$i--;//12
--$i;//11
echo "<br>i = $i";//i = 11




?>
