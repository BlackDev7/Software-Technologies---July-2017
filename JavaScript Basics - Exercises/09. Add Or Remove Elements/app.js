function solve(inputArr) {
    let numbersArray = Array();
    for (line of inputArr)
    {
        let commandNumber = line.split(' ');
        let command = commandNumber[0];
        let number = Number(commandNumber[1]);
        if (command === "add") {
            numbersArray.push(number);
        }
        else
        {
            numbersArray.splice(number, 1);
        }
    }
    for (number of numbersArray) {
        console.log(number);
    }
}

solve(['add 3', 'add 5','remove 1', 'add 2']);

