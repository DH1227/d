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
    echo "<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}


$conn->select_db('hotel_db');


$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $loginData = [
        'username' => $_POST['username'],
        'password' => $_POST['password']
    ];

   
    $hashed_password = password_hash($loginData['password'], PASSWORD_DEFAULT);


    $stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
    $stmt->bind_param("s", $loginData['username']);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        
        //echo "Username already exists. Please choose another one."."<br>";
    } else {
        
        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $loginData['username'], $hashed_password);

    if ($stmt->execute()) {
        
        session_start();
        $_SESSION['username'] = $loginData['username'];
        header("Location: welcome.php");
        exit();
    } else {
        echo "Error: " . $stmt->error . "<br>";
    }
    }
    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #f0f0f0; /* Light background color */
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: url("https://i.pinimg.com/originals/57/32/1b/57321b3fca7242ba52da622d3b079b35.jpg") no-repeat center center fixed;
            background-size: cover; /* Ensures the image covers the entire viewport */
        
        }
        .container {
            background-color: rgba(255, 255, 255, 0.9); 
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px; /* Fixed width for the box */
        }
        h2 {
            text-align: center;
            color: #333;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .btn {
            background-color: #007bff; /* Button color */
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        .btn:hover {
            background-color: #0056b3; /* Darker button color on hover */
        }
        .alert {
            color: red;
            text-align: center;
            margin: 10px 0;
        }
    </style>
</head>
<body>
<div class="container">
    <h4>User already exist.
      Please choose another one.<h4>
    <h2>Sign In</h2>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" class="btn">Sign In</button>
    </form>
</div>

</body>
</html>