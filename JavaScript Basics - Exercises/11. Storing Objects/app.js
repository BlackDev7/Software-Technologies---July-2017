function solve(inputArr) {
   function parseStudent(str) {
       
       let tokens = str.split(' -> ');
       console.log(tokens);
        let [name, surname, age, grade, date, town] = tokens;
        let obj = { name: name, surname: surname, age: age, grade: grade, date: date, town: town };
        return obj;
   }

    let students = inputArr.map(parseStudent);
    students.forEach(student => {
        console.log(JSON.stringify(student));
    });
}

solve("[ 'name -> Angel', 'surname -> Georgiev', 'age -> 20', 'grade -> 6.00', 'date -> 23/05/1995', 'town -> Sofia' ]");