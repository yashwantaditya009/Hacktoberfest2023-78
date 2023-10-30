<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Information Form</title>
</head>

<body>
    <h2>Employee Information Form</h2>
    <form action="process.php" method="post">
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" required><br><br>

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" required><br><br>

        <label for="department">Department:</label>
        <input type="text" id="department" name="department" required><br><br>

        <label for="designation">Designation:</label>
        <input type="text" id="designation" name="designation" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>


php code(process.php)
<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "employee";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the form
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$department = $_POST['department'];
$designation = $_POST['designation'];

// SQL query to insert data into the emp_details table
$sql = "INSERT INTO emp_details (first_name, last_name, department, designation) VALUES ('$firstName', '$lastName', '$department', '$designation')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
