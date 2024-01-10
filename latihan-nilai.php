<?php

$NilaiHarian = 100 * 30 / 100;
$NilaiUts = 100 * 30 / 100;
$NilaiUas = 100 * 40 / 100;
$NilaiAkhir = $NilaiHarian + $NilaiUts + $NilaiUas;

//output
echo "<h1/>Afrizal Dwi Handika</h1>";
echo "==================================================== <br/>";
echo "Nilai Hariann : $NilaiHarian <br/>";
echo "Nilai UTS : $NilaiUts <br/>";
echo "Nilai UAS : $NilaiUas <br/>";
echo "Nilai Akhir : $NilaiAkhir <br/>";

// menentukan nilai predikat
$NilaiPredikat = $NilaiAkhir;
if($NilaiPredikat >=90 && $NilaiPredikat <=100){
    echo "Predikat : A+";
}
else if($NilaiPredikat >=85 && $NilaiPredikat <=89){
    echo "Predikat : A";
}
else if($NilaiPredikat >=80 && $NilaiPredikat <=84){
    echo "Predikat : B+";
}
else if($NilaiPredikat >=76 && $NilaiPredikat <=79){
    echo "Predikat : B";
}
else if($NilaiPredikat >=60 && $NilaiPredikat <=75){
    echo "Predikat : C";
}
else if($NilaiPredikat >=40 && $NilaiPredikat <=59){
    echo "Predikat : D";
}
else if($NilaiPredikat >=0 && $NilaiPredikat <=39){
    echo "Predikat : E";
}
else if($NilaiPredikat >=0 && $NilaiPredikat <=39){
    echo "Predikat : E";
}else {
    echo "Pilihan tidak tersedia";
}


?>