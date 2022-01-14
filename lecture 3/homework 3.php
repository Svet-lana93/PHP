<?php
$handle = fopen('php://stdin', 'r');
$fizz = fgets($handle);
$buzz = fgets($handle);
$limit = fgets($handle);

$numbers = range(1, $limit);
$result = [];

foreach($numbers as $value) {
    if (!($value % $fizz) && !($value % $buzz)) {
        echo 'FB' . ' ';
    } elseif (!($value % $fizz)) {
        echo 'F' . ' ';
    } elseif (!($value % $buzz)) {
        echo 'B'. ' ';
    } else {
        echo $value . ' ';
    }
}