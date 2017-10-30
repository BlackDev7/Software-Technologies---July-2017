function solve(inputArr) {
    let keyValuePairs = Array();
    for (let i = 0; i < inputArr.length - 1; i++) {
        let line = inputArr[i].split(' ');
        let key = line[0];
        let value = line[1];
        keyValuePairs[key] = value;
    }
    let keyToCheck = inputArr[inputArr.length - 1];
    if (keyToCheck in keyValuePairs) {
        console.log(keyValuePairs[keyToCheck]);
    }
    else {
        console.log("None");
    }

}

solve(['key value', 'key eulav', 'test tset', 'key']);