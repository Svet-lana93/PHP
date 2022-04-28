<?php
$handle = fopen("php://stdin", "r");
$num = fgets($handle);

if($num < 1) {
    echo "Less than 1";
} elseif(!($num % 2) && !($num % 10)) {
    echo 'Divisible by 2 and 10';
} elseif($num % 3) {
    echo 'Not divisible by 3';
} elseif($num % 5) {
    echo 'Not divisible by 5';
} else {
    echo 'Divisible by 3 and 5, not divisible by 2 and 10';
}