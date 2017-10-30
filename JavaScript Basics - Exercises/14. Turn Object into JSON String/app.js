function solve(inputArr) {
    function parseStudent(str) {

        let tokens = str.split(' -> ');
        let [name, age, grade] = tokens;
        let obj = { Name: name, Age: age, Grade: grade };
        return obj;
    }

    let students = inputArr.map(parseStudent);
    students.forEach(student => {
        let studentStr = `Name: ${student.Name}\nAge: ${student.Age}\nGrade: ${student.Grade}`;
        console.log(studentStr);
    });
}