<?php

$nilai= "E";

switch ($nilai){
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":    
    case "c":
        echo "anda lulus" . PHP_EOL;   
        break;
    case "D":
        echo "Anda Tidak Lulus" . PHP_EOL;
        break;
    default:
        echo"mungkin anda salah jurusan" . PHP_EOL;
        
}


?>