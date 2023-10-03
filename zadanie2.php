<?php
  $liczby= array(7,4,2,9,8,3,1,10,5,6);
    for($i=0; $i<count($liczby)-1; $i++)
    {
        for($j=0; $j<count($liczby)-1; $j++)
        {
            if($liczby[$j] > $liczby[$j+1]){
                $temp= $liczby[$j+1];
                $liczby[$j+1]= $liczby[$j];
                $liczby[$j]= $temp;
            }
        }

    }
    print_r($liczby);
    ?>