<?php
$dbConfig = [
    'servername' => 'localhost',
    'username' => 'root',       
    'password' => '',           
    'dbname' => 'hotel_db'        
];


$conn = new mysqli($dbConfig['servername'], $dbConfig['username'], $dbConfig['password']);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "CREATE DATABASE IF NOT EXISTS hotel_db";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}


$conn->select_db($dbConfig['dbname']);


$sql = "CREATE TABLE IF NOT EXISTS book_db (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    id_number VARCHAR(15) NOT NULL,
    aadhaar_card VARCHAR(255) NOT NULL UNIQUE,
    checkin DATE NOT NULL,
    checkout DATE NOT NULL,
    phn_number VARCHAR(13) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'book_db' created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Name'];
    $id_number = $_POST['id_number'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $phn_number = $_POST['phn_number'];

    $stmt = $conn->prepare("SELECT id FROM book_db WHERE id_number = ? AND checkin = ? AND checkout = ?");
    $stmt->bind_param("sss", $id_number, $checkin, $checkout);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "Booking already exists for this ID number during the selected dates.";
    } else {

        if (isset($_FILES['aadhaar_card']) && $_FILES['aadhaar_card']['error'] == 0) {
            $aadhaar_card = $_FILES['aadhaar_card']['name'];
            $target_dir = "uploads/";
            if (!is_dir($target_dir)) {
                mkdir($target_dir, 0755, true);
            }

            $target_file = $target_dir . basename($aadhaar_card);

        
            if (move_uploaded_file($_FILES['aadhaar_card']['tmp_name'], $target_file)) {
        
                $stmt = $conn->prepare("INSERT INTO book_db (name, id_number, aadhaar_card, checkin, checkout, phn_number) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("ssssss", $name, $id_number, $target_file, $checkin, $checkout, $phn_number);

                
                if ($stmt->execute()) {
        
                    session_start();
                    $_SESSION['name'] = $name;
                    header("Location: payment.php");
                    exit();
                } else {
                    echo "Error: " . $stmt->error . "<br>";
                }
                
                $stmt->close();}
             else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "File upload error.";
        }
        
    }
}

$conn->close();
?>