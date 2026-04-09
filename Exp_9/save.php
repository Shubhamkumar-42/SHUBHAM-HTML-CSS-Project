<?php
include "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$age = $_POST['age'];
$dob = $_POST['dob'];
$gender = $_POST['gender'] ?? "N/A";
$course = $_POST['course'];
$address = $_POST['address'];

$hobbies = "";
if(isset($_POST['hobbies'])) {
    $hobbies = implode(" ", $_POST['hobbies']);
}

$sql = "INSERT INTO students 
(name, email, password, age, dob, gender, hobbies, course, address)
VALUES 
('$name', '$email', '$password', '$age', '$dob', '$gender', '$hobbies', '$course', '$address')";

if ($conn->query($sql) === TRUE) {
    header("Location: display.php");
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>