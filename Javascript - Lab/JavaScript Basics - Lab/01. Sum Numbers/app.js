let submitBtn = document.getElementById("submit_btn");

submitBtn.onclick = function sumButtn(e) {
    e.preventDefault();

    let firstNumber = Number(document.getElementById('number1').value);
    let secondNumber = Number(document.getElementById('number2').value);
    let result = firstNumber + secondNumber;

    document.getElementById('result').value = result;
}