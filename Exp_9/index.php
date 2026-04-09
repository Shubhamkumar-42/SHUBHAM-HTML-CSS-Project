<!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
</head>
<body>

<h2>Student Registration Form</h2>

<form action="save.php" method="POST">

    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    Age: <input type="number" name="age"><br><br>
    DOB: <input type="date" name="dob"><br><br>

    Gender:
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <br><br>

    Hobbies:
    <input type="checkbox" name="hobbies[]" value="Reading"> Reading
    <input type="checkbox" name="hobbies[]" value="Sports"> Sports
    <input type="checkbox" name="hobbies[]" value="Music"> Music
    <br><br>

    Course:
    <select name="course">
        <option>B.Tech</option>
        <option>BCA</option>
        <option>MCA</option>
    </select>
    <br><br>

    Address:<br>
    <textarea name="address"></textarea><br><br>

    <button type="submit">Submit</button>

</form>

</body>
</html>