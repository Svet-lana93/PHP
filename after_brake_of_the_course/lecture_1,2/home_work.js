//First task
let firstNumber = 10;
let secondNumber = 12;

let sum = firstNumber + secondNumber;
let multiplication = firstNumber * secondNumber;
console.log('Sum is ' + sum);
console.log('Multiplication is ' + multiplication);

//Second task
let sumOfNumbersSquares = firstNumber ** 2 + secondNumber ** 2;
console.log('Sum of numbers squares is ' + sumOfNumbersSquares);

//Third task
let thirdNumber = 11;
let averageNumber = (firstNumber + secondNumber + thirdNumber) / 3;
console.log('Average number is ' + averageNumber);

//Fourth task
let x = 5;
let y = 3;
let z = 2;
let solutionOfEquation = (x + 1) - 2 * (z - 2 * x + y);
console.log('Solution of equation is ' + solutionOfEquation);

//Fifth task
let number = prompt('You need to enter the number');

if (number >= 1) {
    let divisionRemainderByThree = number % 3;
    let divisionRemainderByFive = number % 5;
    console.log('Division remainder by three is - ' + divisionRemainderByThree);
    console.log('Division remainder by five is - ' + divisionRemainderByFive);
} else {
    console.log('The number is not natural')
}
console.log('Number increased by 30% - ' + number * 1.3);
console.log('Number increased by 120% - ' + number * 2.2);

//Sixth task
let numberOne = 5;
let numberTwo = 7;
console.log('Sum of numbers is - ' + (numberOne * 0.4 + numberTwo * 0.84));

let threeDigitNumber = String(665);
let strLen = threeDigitNumber.length;
let sumOfNumbers = 0;
for (let i = 0; i < strLen; i++) {
    sumOfNumbers += Number(threeDigitNumber[i]);
}
console.log('Sum of numbers of the three digit number is - ' + sumOfNumbers);

//Seventh task
let array = Array.from(threeDigitNumber);
array[1] = 0;
let newNumber = '';
let arrayLength = array.length;
for (let i = arrayLength - 1; i >= 0; i--) {
    newNumber += Number(array[i]);
}
console.log(newNumber);

//Eighth task
let inputNumber = 6;
console.log((!(inputNumber % 2)) ? 'Even number' : 'Odd number');
