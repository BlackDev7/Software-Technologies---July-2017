function solve(inputArr) {
    let lenghtOfArray = Number(inputArr[0]);
    let array = Array.apply(null, Array(lenghtOfArray)).map(x => x = 0);
    for (let i = 1; i < inputArr.length; i++) {
        let indexNumber = inputArr[i].split(' - ');
        let index = indexNumber[0];
        let number = indexNumber[1];
        array[index] = number;
    }
    for (number of array) {
        console.log(number);
    }
}

solve([3, '0 - 5', '1 - 6', '2 - 7']);

