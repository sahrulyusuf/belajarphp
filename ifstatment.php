<?php

$nilai = 60;
$absen = 90;

if ($nilai >= 90 && $absen >= 90){
    echo "Nilai anda A" . PHP_EOL;
}else if($nilai >= 70 && $absen >= 70){
    echo "nilai anda B" . PHP_EOL;
}else if($nilai >= 70 && $absen >= 70){
    echo "nilai anda c" . PHP_EOL;
}else if($nilai >= 60 && $absen >= 60){
    echo "nilai anda D" . PHP_EOL;  
}else {
    echo "Nilai anda E" . PHP_EOL;
}

?>