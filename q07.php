<?php
//sort() funksiyasindan istifade ederek tam ededlerden ibaret array-in elementlerini sort eden Class yazin.//

class a
{
    public $sort;
public  function b($array)
  {
      $this->sort=$array;
     sort($this->sort);
      foreach ($this->sort as $key => $val)
      echo "fruits[" . $key . "] = " . $val . "\n";

   }
}
$a=new a;
$a->b([6,8,1]);

?>
