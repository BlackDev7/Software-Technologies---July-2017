function solve(inputArr) {
    let stringArray = inputArr;
    let stopIndex = stringArray.indexOf('Stop');
    let LinesToPrint = stringArray.slice(0, stopIndex);
    for (line of LinesToPrint) {
        console.log(line);
    }
}

solve(['Line 1', 'Line 2', 'Line 3', 'Stop']);
