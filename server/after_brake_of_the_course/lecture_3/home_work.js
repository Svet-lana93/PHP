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
    #maxSpeed;
    constructor(wheelAmounts, wheelSize) {
        this.wheelAmounts = wheelAmounts;
        this.wheelSize = wheelSize;
    }
    getMaxSpeed () {
        return this.#maxSpeed;
    }
    setMaxSpeed (value) {
        this.#maxSpeed = value;
    }
    ride () {
        console.log('We are riding')
    };
}

class Car extends Transport {
    engineVolume = 4;
    gasTankVolume = 70;
    fuelAmount = 50;
    setMaxSpeed (value) {
        super.setMaxSpeed(value < 300 ? value : 300);
    }
    consumeFuel () {
        this.fuelAmount -= 5;
        console.log('We are consuming fuel');
    }
    ride () {
        this.consumeFuel();
        super.ride()
    }
}

class Motorbike extends Transport {
    engineVolume = 2;
    gasTankVolume = 20;
    fuelAmount = 15;
    setMaxSpeed (value) {
        super.setMaxSpeed(value < 150 ? value : 150);
    }
    consumeFuel () {
        this.fuelAmount -= 2;
        console.log('We are consuming fuel');
    }
    ride () {
        this.consumeFuel();
        super.ride();
    }
}

class Bicycle extends Transport {
    pushPedal () {
        console.log('We are pushing pedals')
    }
    ride () {
        this.pushPedal();
        super.ride();
    }
}

let car = new Car(4, 16);
car.setMaxSpeed(200);
console.log(car.getMaxSpeed());
console.log(car);

let motorbike = new Motorbike(2, 14);
motorbike.setMaxSpeed(100);
console.log(motorbike.getMaxSpeed());
console.log(motorbike);

let bicycle = new Bicycle(2, 13);
bicycle.setMaxSpeed(45);
console.log(bicycle.getMaxSpeed());
console.log(bicycle);

car.ride();
bicycle.ride();

let car1 = new Car(4, 17);
car1.setMaxSpeed(400);
let motorbike1 = new Motorbike(2, 12);
motorbike1.setMaxSpeed(200);
let bicycle1 = new Bicycle(2, 10);
bicycle1.setMaxSpeed(55);
let arrayOfTransport = [car, car1, motorbike, motorbike1, bicycle, bicycle1];

arrayOfTransport.sort((prev, next) => prev.getMaxSpeed() - next.getMaxSpeed());
console.log(arrayOfTransport);

Transport.prototype.turnSteeringWheel = function () {
    console.log('Ability to turn left and right');
}
car.turnSteeringWheel();
