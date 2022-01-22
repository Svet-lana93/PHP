<?php
$handle = fopen ("php://stdin","r");
$number = fgets($handle);

if ($number % 2) {
    for ($j = 0; $j <= $number; $j++) {
        if ($j % 2) {
            echo str_repeat(' ', ($number - $j) / 2) . str_repeat('*', $j) . PHP_EOL;
        }
    }
    for ($i = $number; $i > 0; --$i) {
        if (!($i % 2)) {
            echo str_repeat(' ', floor(($number - $i) / 2 + 1)) . str_repeat('*', $i - 1) . PHP_EOL;
        }
    }
}
