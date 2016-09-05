<?php
/*PHP OOP yaxinlasmasinnan istifade ederek iki tarix arasindaki ferqi tapin.
Qeyd: Uzun hesablamalar aparmaga ehtiyac yoxdur. maksimum 4 setirle hell edin*/

class date{

  function __construct()
  {
    $datetime1 = new DateTime('1995-11-22');
   $datetime2 = new DateTime('2016-09-05');
   $interval = $datetime1->diff($datetime2);
    echo $interval->format('%a day');
  }
}

$a=new date;
?>
