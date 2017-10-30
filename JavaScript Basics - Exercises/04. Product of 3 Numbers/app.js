function solve(inputArr) {
    let negativeCount = 0;
    for (let i = 0; i < inputArr.length; i++) {
        if (inputArr[i] < 0) {
            negativeCount++;
        }
    }
    if (inputArr.includes(0) || negativeCount % 2 === 0) {
        console.log("Positive");
    }
    else {
        console.log("Negative");
    }
}

solve([2, 3, -1]);
