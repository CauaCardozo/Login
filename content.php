<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title> Content Page</title>
</head>
<body>
    <h2> Welcome to the content page </h2>
    <p> Welcome to the content page. </p>
    <a href="athentication.php"> Go Out </a>
</body>
</html>