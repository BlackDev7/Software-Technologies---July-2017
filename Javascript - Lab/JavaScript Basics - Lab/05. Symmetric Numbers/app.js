
function symetricNumbers(input) {
    let endNumber = Number(input[0]);
    for (let i = 1; i <= endNumber; i++) {
        if (isSymmetrick("" + i)) {
            console.log(i);
        }
    }
    function isSymmetrick(numberToCheck) {
        for (let i = 0; i < numberToCheck.length; i++) {
            if (numberToCheck[i] != numberToCheck[numberToCheck.length - 1 - i]) {
                return false;
            }
        }
        return true;
    }
}

