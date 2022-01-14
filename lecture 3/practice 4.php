<?php
$handle = fopen('php://stdin', 'r');
$num = fgets($handle);

$arr = str_split($num);
array_pop($arr);

$maxPower = count($arr) - 1;

$result = [];
foreach($arr as $key => $value) {
    $result[] = $value . ' * 10^' . ($maxPower - $key);
}

echo implode(' + ', $result);