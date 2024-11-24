<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $team = $_POST['team'];

    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['team'] = $team;
    $_SESSION['session_start_time'] = date("Y-m-d H:i:s");
    $_SESSION['last_request_time'] = date("Y-m-d H:i:s");

    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Tela de login</title>
</head>

<body>
    <h2>Tela Login</h2>
    <form method="POST" action="">
        <label for="username">Login:</label>
        <input type="text" id="username" name="username" required>
        <br><br>
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <label for="team">Time:</label>
        <input type="text" id="team" name="team" required>
        <br><br>
        <button type="submit">Entrar</button>
    </form>
    <p>Preencha todos os campos</p>
</body>

</html>