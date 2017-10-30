function solve(inputArr) {
    let nNumber = Number(inputArr[0]);
    let xNumber = Number(inputArr[1]);
    if (xNumber >= nNumber) {
        console.log(nNumber * xNumber);
    }
    else {
        console.log(nNumber / xNumber);
    }
}

solve([3, 2]);
