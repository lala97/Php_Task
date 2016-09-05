<?php
//1.Ededin faktorialini hesablayan Class yazin//

class fakt
{
  public $fakt;
  public function faktorial($fakt)
  {
     $this->fakt=$fakt;
     $factorial = 1;
     for ($x=$fakt; $x>=1; $x--)
     {
       $factorial = $factorial * $x;
      }
      echo $factorial;

  }
}
$b=new fakt;
$b->faktorial(4);



?>
