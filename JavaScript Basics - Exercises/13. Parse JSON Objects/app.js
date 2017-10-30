function solve(inputArr) {
    function parseStudent(str) {

        let tokens = JSON.parse(str);
        let name = tokens.name;
        let age = tokens.age;
        let date = tokens.date;
        let obj = { Name: name, Age: age, Date: date };
        return obj;
    }

    let students = inputArr.map(parseStudent);
    students.forEach(student => {
        let studentStr = `Name: ${student.Name}\nAge: ${student.Age}\nDate: ${student.Date}`;
        console.log(studentStr);
    });
}

solve(['{"name":"Gosho","age":10,"date":"19/06/2005"}']);
