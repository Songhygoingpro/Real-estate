<?php
session_start();

include('../config/db_config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = sanitize_input($_POST['name']);
    $phone = sanitize_input($_POST['phone']);
    $location = $_SESSION['location'];

    $errors = validate_inputs($name, $phone);

    if (empty($errors)) {

        $stmt = $conn->prepare("INSERT INTO inquiries (name, phone, location) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $phone, $location);

        if ($stmt->execute()) {
            echo "Your inquiry has been submitted successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();

        session_unset();
        session_destroy();
    } else {
        
        foreach ($errors as $error) {
            echo "<p>Error: $error</p>";
        }
    }
}

function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data); 
    $data = strip_tags($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8'); 
    return $data;
}

function validate_inputs($name, $phone) {
    $errors = [];

    if (empty($name)) {
        $errors[] = "Name is required.";
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $errors[] = "Name should only contain letters and spaces.";
    }

    if (empty($phone)) {
        $errors[] = "Phone number is required.";
    } elseif (!preg_match("/^[0-9]{9,15}$/", $phone)) {
        $errors[] = "Phone number should only contain digits and be between 10 and 15 characters long.";
    }

    return $errors;
}
?>
