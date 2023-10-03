<?php
function lpierwsza($liczba){
    if ($liczba<=1)
    return false;
     
    for ($i = 2; $i <= sqrt($liczba); $i++){
        if ($liczba % $i == 0)
            return false;
    }
    return true;
}
$liczba = 7;
$lp = lpierwsza($liczba);
if ($lp == 1)
    echo $liczba." jest pierwsza";
else
    echo $liczba." nie jest pierwsza";
?>
