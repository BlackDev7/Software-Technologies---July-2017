function solve(inputArr) {
    let keyValuePairs = new Map();
    for (let i = 0; i < inputArr.length - 1; i++) {
        let line = inputArr[i].split(' ');
        let keyPP = line[0];
        let value = line[1];
        if (keyValuePairs.hasOwnProperty(keyPP)) {
            keyValuePairs[keyPP].push(value);
        } else {
            keyValuePairs[keyPP] = new Array(value);
        }
    }
    let keyToCheck = inputArr[inputArr.length - 1];
    if (keyValuePairs.hasOwnProperty(keyToCheck)) {
        for (value of keyValuePairs[keyToCheck]) {
            console.log(value);
        }
    } else {
        console.log("None");
    }

}

solve(['key value', 'key eulav', 'test tset', 'key']);