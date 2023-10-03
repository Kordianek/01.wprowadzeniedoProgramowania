<?php
for($liczba = 1; $liczba <=100; $liczba++) {
  $licznik = 0;
    for ( $i = 2; $i <= sqrt($liczba); $i++ ) {
      if($liczba%$i == 0 ) {
      $licznik++;
      break;
      }
}
  if( $licznik == 0 && $liczba != 1 ) {
    echo $liczba."\n"; }
}
?>
