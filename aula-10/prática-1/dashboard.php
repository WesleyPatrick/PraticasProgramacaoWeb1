<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$_SESSION['last_request_time'] = date("Y-m-d H:i:s");

$session_start_time = strtotime($_SESSION['session_start_time']);
$last_request_time = strtotime($_SESSION['last_request']);
$total_session_time = gmdate("H:i:s", $last_request_time - $session_start_time);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Pratica 1 - dashboard</title>
</head>

<body>
    <div>
        <h2>Bem-vindo, <?php echo htmlspecialchars($_SESSION['username']); ?> !</h2> <a href="logout.php">Sair</a>
    </div>

    <p><strong>Login:</strong> <?php echo htmlspecialchars($_SESSION['username']); ?></p>
    <p><strong>Senha:</strong> <?php echo htmlspecialchars($_SESSION['password']); ?></p>
    <p><strong>Início da Sessão:</strong> <?php echo $_SESSION['session_start_time']; ?></p>
    <p><strong>Última Requisição:</strong> <?php echo $_SESSION['last_request']; ?></p>
    <p><strong>Tempo Total de Sessão:</strong> <?php echo $total_session_time; ?></p>
</body>

</html>