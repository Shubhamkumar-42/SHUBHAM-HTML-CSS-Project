function saveData() {

    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let age = document.getElementById("age").value;
    let dob = document.getElementById("dob").value;
    let course = document.getElementById("course").value;
    let address = document.getElementById("address").value;

    if(name === "" || email === "" || password === "") {
        alert("Fill required fields!");
        return;
    }

    let gender = document.querySelector('input[name="gender"]:checked');
    gender = gender ? gender.value : "N/A";

    let hobbies = document.querySelectorAll('input[name="hobby"]:checked');
    let hobbyList = [];
    hobbies.forEach(h => hobbyList.push(h.value));

    let student = {
        name, email, password, age, dob, gender,
        hobbies: hobbyList.join(" "),
        course, address
    };

    let data = JSON.parse(localStorage.getItem("students")) || [];
    data.push(student);

    localStorage.setItem("students", JSON.stringify(data));

    window.location.href = "display.html";
}


function loadData() {
    let data = JSON.parse(localStorage.getItem("students")) || [];
    let table = document.getElementById("outputTable");

    data.forEach(student => {
        let row = table.insertRow();

        row.insertCell(0).innerText = student.name;
        row.insertCell(1).innerText = student.email;
        row.insertCell(2).innerText = "******";
        row.insertCell(3).innerText = student.age;
        row.insertCell(4).innerText = student.dob;
        row.insertCell(5).innerText = student.gender;
        row.insertCell(6).innerText = student.hobbies;
        row.insertCell(7).innerText = student.course;
        row.insertCell(8).innerText = student.address;
    });
}


function downloadCSV() {
    let data = JSON.parse(localStorage.getItem("students")) || [];

    let csv = "Name,Email,Password,Age,DOB,Gender,Hobbies,Course,Address\n";

    data.forEach(s => {
        csv += `${s.name},${s.email},******,${s.age},${s.dob},${s.gender},${s.hobbies},${s.course},${s.address}\n`;
    });

    let blob = new Blob([csv], { type: "text/csv" });
    let a = document.createElement("a");

    a.href = URL.createObjectURL(blob);
    a.download = "students.csv";
    a.click();
}


function copyTable() {
    let data = JSON.parse(localStorage.getItem("students")) || "";
    navigator.clipboard.writeText(JSON.stringify(data, null, 2));
    alert("Copied!");
}