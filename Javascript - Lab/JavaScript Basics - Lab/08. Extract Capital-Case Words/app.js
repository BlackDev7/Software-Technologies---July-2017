function solve(input) {
    let regex = /(?!XYZ)\b[A-Z]+\b/g;
    let str = input;
    let endStr = "";
    while ((m = regex.exec(str)) !== null) {
        m.forEach(match => {
            endStr += match + ", ";
        });
    }
    endStr = endStr.slice(0, -2);
    console.log(endStr);
}


