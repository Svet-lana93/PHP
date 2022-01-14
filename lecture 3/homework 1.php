<?php
echo 'Give it to me!' . "\n";
$handle = fopen('php://stdin', 'r');
$number = fgets($handle);

if ($number >= 100) {
    echo 'Thanks man!';
} elseif(($number > 10) && ($number < 100)) {
    echo 'OK :(';
} else
    echo 'WHAAAAT????';

echo "\n";
if ($number > 1000) echo "\n" . '!!!WOOOWWW!!!' . "\n";

echo 'Give me the mark!' . "\n";
$handle = fopen('php://stdin', 'r');
$mark = fgets($handle);

switch($mark) {
    case 2:
        echo 'I am better';
        break;
    case 3:
        echo 'OK :(';
        break;
    case 4:
        echo 'I am good';
        break;
    case 5:
        echo 'YeeeWhaaa!!!!!';
        break;
}
echo "\n";

echo 'If you are a man, press 1!' . "\n";
$handle = fopen('php://stdin', 'r');
$input = fgets($handle);

echo ($input == 1) ? 'MAAAN!' : 'Hey, girl';
echo "\n";