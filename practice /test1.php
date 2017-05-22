<?php
class basecalc
{
    public $num1 = 25;
    public $num2 = 5;

    public function calculate()
    {
       echo $this->num1;
        echo "<br>";
       return $this->num2;
        echo "<br>";

    }
}




class addcalc extends basecalc
{
   public function calculate()
   {
       return $this->num1 + $this->num2;
       echo "<br>";


   }

}

class minuscalc extends basecalc
{
    public function calculate()
{
    return $this->num1 - $this->num2;
    echo "<br>";
}

}

$objshow= new basecalc();
$abc = $objshow->calculate();
 print_r($abc);
echo "<br>";

$objadd= new addcalc;
$def=$objadd->calculate();
print_r($def);
echo "<br>";


$objminus= new minuscalc;
$ghi=$objminus->calculate();
print_r($ghi);



?>