<?php

for ($counter = 1; $counter <= 10; $counter++){
    echo "ini adalah for loop ke-$counter" . PHP_EOL;
}

for ($counter = 10; $counter >= 1; $counter--){
    echo "ini adalah for loop ke-$counter" . PHP_EOL;
}

for ($counter = 1; $counter >= 10; $counter++):
    echo "ini adalah for loop ke-$counter" . PHP_EOL;
endfor;

for ($counter = 10; $counter >= 1; $counter--):
    echo "ini adalah for loop ke-$counter" . PHP_EOL;
endfor;

?>