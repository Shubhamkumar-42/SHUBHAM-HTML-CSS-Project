<?php include "db.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Submitted Data</title>
</head>
<body>

<h2>Submitted Data</h2>

<table border="1">
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>Age</th>
    <th>DOB</th>
    <th>Gender</th>
    <th>Hobbies</th>
    <th>Course</th>
    <th>Address</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM students");

while($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>******</td>
        <td>{$row['age']}</td>
        <td>{$row['dob']}</td>
        <td>{$row['gender']}</td>
        <td>{$row['hobbies']}</td>
        <td>{$row['course']}</td>
        <td>{$row['address']}</td>
    </tr>";
}
?>

</table>

</body>
</html>