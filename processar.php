<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ls_photo";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão foi estabelecida com sucesso
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tele = $_POST['tele'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM login WHERE tele = '$tele' AND senha = '$senha'";
    $result = $conn->query($sql);

    // Verifica se a consulta retornou algum resultado
    if ($result->num_rows > 0) {
        echo "Acesso permitido!";
    } else {
        echo "Dados incorretos. Acesso negado.";
    }
}

$conn->close();
