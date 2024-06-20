<?php
    $harga= 1000;
    $beli= 1;
    $diskon = 0.1 * $harga;
    $bayar;
    if($beli > 3 ) 
    $bayar=($harga * $beli) - $diskon;
    else
        $bayar=($harga * $beli);
    if($beli > 3)
    echo("Total bayar dengan diskon = " + $bayar);
    else
    echo($bayar);

    ?>