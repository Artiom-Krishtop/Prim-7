<?php


// Выяснить, есть ли в записи натурального числа N две одинаковые цифры.

$n = 11233;

while ($n > 0) {

  $Numn = $n%10;

  $n = (int)($n/10);

  $Num1 = ($n/1000)%10;
  $Num2 = ($n/100)%10;
  $Num3 = ($n/10)%10;
  $Num4 = $n%10;

    if($Num1 == $Numn || $Num2 == $Numn || $Num3 == $Numn || $Num4 == $Numn)
    {
      echo "Есть две одинаковые цифры";
      break;
    }
}