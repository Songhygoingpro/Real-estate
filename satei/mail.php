<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//required files
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Database configuration
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "real_estate";
$port = 3307; 

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();

    // Collect and sanitize form data 
    $物件の種別 = htmlspecialchars($_SESSION['物件の種別']);
    $物件の所在地 = htmlspecialchars($_SESSION['selectBox1']) . htmlspecialchars($_SESSION['selectBox2']) . htmlspecialchars($_SESSION['selectBox3']);
    $間取り = htmlspecialchars($_SESSION['間取り']);
    $email = htmlspecialchars($_POST['email']);
    $floorArea = htmlspecialchars($_POST['floorArea']);
    $yearBuilt = htmlspecialchars($_POST['yearBuilt']);
    $currentState = htmlspecialchars($_POST['currentState']);
    $relationship = htmlspecialchars($_POST['relationship']);
    $loanBalance = htmlspecialchars($_POST['loanBalance']);
    $name = htmlspecialchars($_POST['name']);
    $phoneticName = htmlspecialchars($_POST['phoneticName']);
    $phoneNumber = htmlspecialchars($_POST['phoneNumber']);
    $preferredContact = htmlspecialchars($_POST['preferredContact']);
    $preferredContact1 = htmlspecialchars($_POST['preferredContact1']);

    // Prepare the email content

    if (isset($_POST["send"])) {
    $mail = new PHPMailer(true);


        //Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  // Your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'songhy994@gmail.com'; // SMTP username
        $mail->Password = 'synawxawlelpzreg'; // SMTP password
        $mail->SMTPSecure = 'ssl'; // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465; // TCP port to connect to

        //Recipients
        $mail->setFrom( $_POST["email"], $_POST["name"]); // Sender Email and name
        $mail->addAddress('songhy994@gmail.com');     //Add a recipient email  
        $mail->addReplyTo($_POST["email"], $_POST["name"]); // reply to sender email

        //Content
        $mail->isHTML(true);
        $mail->Subject = 'お問い合わせ｜売却査定';
        $mail->Body    = "
            <html>
            <head>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        line-height: 1.6;
                    }
                    .property-info {
                        margin-bottom: 10px;
                    }
                    .property-info strong {
                        display: inline-block;
                        width: 200px;
                    }
                </style>
            </head>
            <body>
                <div class='property-info'>
                    <strong>物件の種別:</strong> $物件の種別<br>
                </div>
                <div class='property-info'>
                    <strong>物件の所在地:</strong> $物件の所在地<br>
                </div>
                <div class='property-info'>
                    <strong>間取り:</strong> $間取り<br>
                </div>
                <div class='property-info'>
                    <strong>Floor Area:</strong> $floorArea<br>
                </div>
                <div class='property-info'>
                    <strong>Year Built:</strong> $yearBuilt<br>
                </div>
                <div class='property-info'>
                    <strong>Current State:</strong> $currentState<br>
                </div>
                <div class='property-info'>
                    <strong>Relationship to Property:</strong> $relationship<br>
                </div>
                <div class='property-info'>
                    <strong>Loan Balance:</strong> $loanBalance<br>
                </div>
                <div class='property-info'>
                    <strong>Name:</strong> $name<br>
                </div>
                <div class='property-info'>
                    <strong>Phonetic Name:</strong> $phoneticName<br>
                </div>
                <div class='property-info'>
                    <strong>Phone Number:</strong> $phoneNumber<br>
                </div>
                <div class='property-info'>
                    <strong>Email:</strong> $email<br>
                </div>
                <div class='property-info'>
                    <strong>Preferred Contact Method:</strong> $preferredContact$preferredContact1<br>
                </div>
            </body>
            </html>
        ";

        // $mail->send();
        // header("Location: success.php");
        // exit();
         // Send email
    if ($mail->send()) {
        // Insert data into the database
        $stmt = $conn->prepare("INSERT INTO inquiries (type_of_property, location, email) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $物件の種別, $物件の所在地, $email);

        if ($stmt->execute()) {
            header("Location: success.php");
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Failed to send email.";
    }

    // Close database connection
    $conn->close();
}
?>
