<?php
$handle = fopen('/home/svetlana/PhpstormProjects/new_project/lecture 6/numbers.txt', 'r');

while (!feof($handle)) {
    $line = trim(fgets($handle));
    $array = explode(';', $line);
    $firstPartArray = explode(' ', $array[0]);
    $calculatedAverageNumber = floor(array_sum($firstPartArray) / count($firstPartArray));
    $secondPartArray = explode(' ', $array[1]);
    $remainder = array_sum($firstPartArray) % $calculatedAverageNumber;

    $result = implode(' ', $firstPartArray) . ';' . $calculatedAverageNumber  . ' '. $remainder;

    if (($secondPartArray[0] == $calculatedAverageNumber) && ($secondPartArray[1] == $remainder))  {
        echo $line . ' - True' . PHP_EOL;
    } else {
        echo $result . ' - False' . PHP_EOL;
    }
}
fclose($handle);