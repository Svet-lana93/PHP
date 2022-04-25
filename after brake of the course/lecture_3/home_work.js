const user = {
    name: 'John',
    surname: 'Smith'
}
user.name = 'Pete';
console.log(user.name);

function isEmpty(obj)
{
    for (let key in obj) {
        return false;
    }
    return true;
}
console.log(isEmpty(user));

let salaries = {
    Ivan: 1000,
    Dmitriy: 1600,
    Anton: 1300
}

let sum = 0;
for (let key in salaries) {
    if (key) {
        sum += salaries[key];
    } else {
        sum = 0;
    }
}
console.log(sum);

function multiplyNumeric(obj)
{
    for (let key in obj) {
        if (typeof obj[key] !== 'number') {
            continue;
        }
        obj[key] *= 2;
    }
}
multiplyNumeric(salaries);
console.log(salaries);

class Transport {
    constructor(maxSpeed, wheelAmounts, wheelSize)
    {
        this.maxSpeed = maxSpeed;
        this.wheelAmounts = wheelAmounts;
        this.wheelSize = wheelSize;
    }
    ride()
    {
        console.log('We are riding')
    };
}

class Car extends Transport {
    engineVolume = 4;
    gasTankVolume = 70;
    fuelAmount = 50;
    consumeFuel()
    {
        this.fuelAmount -= 5;
        console.log('We are consuming fuel');
    }
    ride()
    {
        this.consumeFuel();
        super.ride()
    }
}

class Motorbike extends Transport {
    engineVolume = 2;
    gasTankVolume = 20;
    fuelAmount = 15;
    consumeFuel()
    {
        this.fuelAmount -= 2;
        console.log('We are consuming fuel');
    }
    ride()
    {
        this.consumeFuel();
        super.ride();
    }
}

class Bicycle extends Transport {
    pushPedal()
    {
        console.log('we are pushing pedals')
    }
    ride()
    {
        this.pushPedal();
        super.ride();
    }
}

let car = new Car(180, 4, 16);
let motorbike = new Motorbike(100, 2, 14);
let bicycle = new Bicycle(40, 2, 13);
console.log(car);
car.ride();
console.log(motorbike);
console.log(bicycle);
bicycle.ride();

let car1 = new Car(140, 4, 17);
let motorbike1 = new Motorbike(90, 2, 12);
let bicycle1 = new Bicycle(30, 2, 10);
let arrayOfTransport = [car, car1, motorbike, motorbike1, bicycle, bicycle1];

arrayOfTransport.sort((prev, next) => prev.maxSpeed - next.maxSpeed);
console.log(arrayOfTransport);

Transport.prototype.turnSteeringWheel = function () {
    console.log('Ability to turn left and right');
}
car.turnSteeringWheel();
