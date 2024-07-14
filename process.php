<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display Selected Option</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selectedText = htmlspecialchars($_POST['selectedText']);
        echo "<h1>You selected: $selectedText</h1>";
    }
    ?>
</body>
</html>
