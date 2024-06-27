<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "import_export_db";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$driver = $_POST['driver'];
$vehicle = $_POST['vehicle'];
$material = $_POST['material'];
$weight = $_POST['weight'];
$action = $_POST['action'];

if ($action == 'import') {
    $sql = "INSERT INTO import_data (driver, vehicle, material, weight)
    VALUES ('$driver', '$vehicle', '$material', '$weight')";
} else if ($action == 'export') {
    $sql = "INSERT INTO export_data (driver, vehicle, material, weight)
    VALUES ('$driver', '$vehicle', '$material', '$weight')";
}

if (!empty($sql)) {
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
       
        echo '<script>alert("Form submitted successfully!"); window.location.href = "index.html";</script>';
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "No action specified or invalid action.";
}

$conn->close();
?>
