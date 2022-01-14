<?php
$handle = fopen("php://stdin", "r");
$num = fgets($handle);

for($i = 1; $i <= $num; $i++) {
    if(!($num % $i)) {
        echo $i . ' ';
    }
}