<?php
//First task
$firstNumber = 5;
$secondNumber = 6;
$sum = $firstNumber + $secondNumber;
$multiplication = $firstNumber * $secondNumber;
echo 'Sum is - ' . $sum . PHP_EOL;
echo 'Multiplication is - ' . $multiplication . PHP_EOL;

//Second task
$sumOfNumbersSquares = $firstNumber ** 2 + $secondNumber ** 2;
echo 'Sum of numbers squares is - ' . $sumOfNumbersSquares . PHP_EOL;

//Third task
$thirdNumber = 3;
$averageNumber = ($firstNumber + $secondNumber + $thirdNumber) / 3;
echo 'Average number is - ' . $averageNumber . PHP_EOL;

//Fourth task
$x = 1;
$y = 2;
$z = 3;
$solutionOfEquation = ($x + 1) - 2 * ($z - 2 * $x + $y);
echo 'Solution of equation is - ' . $solutionOfEquation . PHP_EOL;

//Fifth task
echo 'You need to enter the number and press ENTER: ';
$handle = fopen('php://stdin', 'r');
$number = fgets($handle);
if ($number >= 1) {
    $divisionRemainderByThree = $number % 3;
    $divisionRemainderByFive = $number % 5;
    echo 'Division remainder by three is - ' . $divisionRemainderByThree . PHP_EOL;
    echo 'Division remainder by five is - ' . $divisionRemainderByFive . PHP_EOL;
} else {
    echo 'The number is not natural';
}

echo ('Number increased by 30% - ' . $number * 1.3) . PHP_EOL;
echo ('Number increased by 120% - ' . $number * 2.2) . PHP_EOL;

//Sixth task
$numberOne = 4;
$numberTwo = 3;
echo ('Sum of numbers is - ' . $numberOne * 0.4 + $numberTwo * 0.84) . PHP_EOL;

$threeDigitNumber = strval(117);
$array = str_split($threeDigitNumber);
echo 'Sum of numbers of the three digit number is - ' . array_sum($array) . PHP_EOL;

//Seventh task
$strLen = strlen($threeDigitNumber);
$newNumber = '';
for ($i = $strLen - 1; $i >= 0; $i--) {
    $newNumber .= $threeDigitNumber[$i];
}
$middleNumber = (int)floor($strLen / 2);
$newNumber[$middleNumber] = '0';
echo 'Reverse number is - ' . $newNumber . PHP_EOL;

//Eighth task
$inputNumber = 3;
echo (!($inputNumber % 2)) ? 'Even number' : 'Odd number';
