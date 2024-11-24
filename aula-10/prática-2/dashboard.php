<?php
session_start();

if (!isset($_SESSION['username']) || !isset($_SESSION['time'])) {
    echo "<script>alert('Conexão perdida, tente novamente!'); window.location.href = 'login.php';</script>";
    exit();
}

$_SESSION['last_request_time'] = date("Y-m-d H:i:s");

$session_start_time = strtotime($_SESSION['session_start_time']);
$last_request_time = strtotime($_SESSION['last_request_time']);
$total_session_time = gmdate("H:i:s", $last_request_time - $session_start_time);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>

<body>
    <div>
        <h2>Bem-vindo, <?php echo htmlspecialchars($_SESSION['username']); ?> !</h2> <a href="logout.php">Sair</a>
    </div>
    <p><strong>Nome:</strong> <?php echo htmlspecialchars($_SESSION['username']); ?></p>
    <p><strong>Senha:</strong> <?php echo htmlspecialchars($_SESSION['password']); ?></p>
    <p><strong>Time:</strong> <?php echo htmlspecialchars($_SESSION['time']); ?></p>
    <p><strong>Inicio da sessão:</strong> <?php echo $_SESSION['session_start_time']; ?></p>
    <p><strong>Ultima requisição:</strong> <?php echo $_SESSION['last_request_time']; ?></p>
    <p><strong>Duração da sessão:</strong> <?php echo $total_session_time; ?></p>
    <br>
    <a href="logout.php">Logout</a>
    <br>
</body>

</html>