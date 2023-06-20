<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = 'User';
    $password = '1234'; 


    if ($_POST['username'] === $username && $_POST['password'] === $password) {
        $_SESSION['loggedin'] = true;
        header('Location: content.php');
        exit;
    } else {
        $loginError = 'Incorrect user or password. Please try again.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title> Login System </title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 300px;
            margin: 0 auto;
            margin-top: 100px;
        }

        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            display: block;
            width: 100%;
            margin-bottom: 10px;
            padding: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2> Login Page </h2>
        <?php if (isset($loginError)): ?>
            <p><?php echo $loginError; ?></p>
        <?php endif; ?>
        <form method="POST">
            <input type="text" name="username" placeholder="Usuário" required>
            <input type="password" name="password" placeholder="Senha" required>
            <input type="submit" value="Entrar">
        </form>
    </div>
</body>
</html>
