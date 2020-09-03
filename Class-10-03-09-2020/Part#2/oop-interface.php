<?php 

    interface Calculation{
        public function sum($a,$b);
        public function sub($a,$b);
    }

  class Calculator implements Calculation
  {
       public function sum($a,$b)
       {
        return  $a + $b;
       }

        public function sub($a,$b)
        {

        }
        public function div($a,$b)
        {
          return $a / $b;
        }
  }
  
  $calculator = new Calculator();
  echo $calculator->sum(25,5);
  echo "<br/>";
  echo $calculator->div(25,5);

?>