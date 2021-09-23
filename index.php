<?php


// Выяснить, есть ли в записи натурального числа N две одинаковые цифры.

$n = 12345;
$result = false;
$m = 0;

while ($n > 0) {

  $NumA = $n % 10;
  $m = $n;

  while ($m > 0) {
    $m = floor(($m/10));

    $NumB = $m % 10;

    if ($NumA == $NumB) {
      $result = true;
      exit('в числе N есть две одинаковые цифры');
    }
  }
  $n = floor(($n/10));
}

if (!$result) {
  echo 'в числе нет одинавковых цифр';
}
