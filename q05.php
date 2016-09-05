<?php
	/*Asagidaki kodlar-ın outputu necə olacaq və nə üçün?*/


// 1-ci
$x = 5;
echo $x; //5
echo "<br />";
echo $x+++$x++;
//$x evvelden 5-di. $x++ + $x++  =5+6=11 normalda $x++=6 elemelidi ama echo $x=5 olur ve sonra +1 eliyr alinan deyeri 2 ci echoda nezere alir.
echo "<br />";
echo "cavab=".$x; //
echo "<br />";
echo $x---$x--; //
echo "<br />";
echo "son".$x;



//2-ci
var_dump(0123 == 123);
var_dump('0123' == 123);
var_dump('0123' === 123);


//3-cü
echo "necice";
$x = true and false;
var_dump($x);

 //result true esas mesele = operatoru uzerindedi = operatoru ilk gorduyu deyeri gotutur yebi true  eger false and true olsa cavab false
 //olacaq

//4-cü $x-in dəyəri nə olacaq?
$x = 3 + "15%" + "$25";

//dirnaq daxilinde ededden once herf ve iware olarsa php-convert edir onu 0-a eger herf ve ya iware ededden sonra gelerse hemin ededi
//goturur. netice $x=3+15+0=18


 ?>
