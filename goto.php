<?php

goto a;
echo "hello world" . PHP_EOL;

a:
echo "hello A" . PHP_EOL;

$counter = 1;

while (true){
    echo "ini adalah for while ke-$counter" . PHP_EOL;
    $counter++;

    if ($counter > 10 ){
        goto end;
    }
}

end:
echo "end Loop";

?>
