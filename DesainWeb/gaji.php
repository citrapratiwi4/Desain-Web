<?php
$gajiperhari = 50000;
$uangmakanperhari=5000;
$Lemburjam1= 25000;
$Lemburjam2=35000;
$harikerja=22;
$totaljamkerja=22;
$totaljamlembur=3;
$totalgaji=0;
$totalgaji = $gajiperhari * $harikerja;
$gajilembur=0;
if ($totaljamlembur > 0 && $totaljamlembur <=2){
    $gajilembur = $totaljamlembur * $Lemburjam1;
}else if ($totaljamlembur >=3){
    $gajilembur=(2*$Lemburjam1) + (($totaljamlembur - 2) * $Lemburjam2);
}
$totalgaji += $gajilembur;
if($totaljamkerja>=20){
    $Totaluangmakan = $uangmakanperhari * $harikerja;
    $totalgaji += $Totaluangmakan;
}
echo("Total Uang Makan:" . $Totaluangmakan);
echo("<br>");
echo("Total Gaji Lembeur:" . $gajilembur);
echo("<br>");
echo("Total Gaji:" . $totalgaji);
?>