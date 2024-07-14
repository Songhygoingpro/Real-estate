<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display Selected Option</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selectedOption = htmlspecialchars($_POST['selectedOption']);
        echo "<h1>You selected: $selectedOption</h1>";
    }
    ?>
</body>
</html>
