<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location: index.html"); 
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            background: url("https://dynamic-media-cdn.tripadvisor.com/media/photo-o/26/38/c8/99/the-peninsula-istanbul.jpg?w=1400&h=-1&s=1") no-repeat center center fixed;
            background-size: cover; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .dialog {
            background-color: rgba(255, 255, 255, 0.9); /* White background with some transparency */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            text-align: center;
            width: 300px; /* Set a width for the dialog */
        }
        h1 {
            margin: 0;
        }
        p {
            margin: 10px 0;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #007BFF; /* Bootstrap primary color */
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="dialog">
    <h1>Welcome</h1>
    <p>Hi, <?php echo htmlspecialchars($_SESSION["username"]); ?>. Welcome to our site.</p>
    <a href="home.html">Home</a><br>
    <a href="logout.php">Sign Out of Your Account</a></b>
</div>

</body>
</html>
