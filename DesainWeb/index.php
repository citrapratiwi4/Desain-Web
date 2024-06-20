latihan1

<?php
echo ("menghitung gaji total <br>");
$gapok=200000;
$tunjangan=500000;
$total=$gapok + $tunjangan;

echo 'total gaji =' .$total;
 ?>

latihan2
 <?php
  $x =100;
  $y =150;
  if($x>$y)
          echo("x > y");
   elseif($y>$x) 
         echo("y > x");
   else
         echo("x = y");
    ?>   


   < latihan3

    <?php
    $x=10;
    while($x<=100)
    {
        echo($x. "<br>");
        $x+=10;

    }
    ?>

    latihan4

    <?php
    $x=0;
    for($x==0;$x=10;$x++)
    {
        echo("Bilangan genap:$x");
        $x++;
        echo("<br>");
    }
    ?>