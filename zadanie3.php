<?php
$liczba = -4;
$n = 0;

for($i = 2; $i<=$liczba; $i++) {
  if($liczba % $i == 0){
    $n++;
    break;
  }
}
if ($n == 0 && $liczba<=0){
  echo $liczba." jest liczbą pierwszą.";
} else {
  echo $liczba." nie jest liczbą pierwszą.";
}
?>