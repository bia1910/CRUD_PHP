<?php
session_start();

$nome = $_POST['nome'];
$senha = $_POST['senha'];
require('conexao.php');

try {
    $stmt = $pdo->prepare('INSERT INTO `lojaphp`.`usuario` (`nome`, `senha`) VALUES (:nome, :senha)');
    $stmt -> execute (array(
        ':nome' => $nome,
        ':senha' => md5($senha)
    ));

    echo $stmt->rowCount();
    
    if($stmt->rowCount()>0){
        $_SESSION['nome'] = $nome;
        $_SESSION['senha'] = $senha;
        header('location:indexUsuario.php');
    }
}

catch (PDOException $e){
    echo 'Error: ' . $e->getMessage();
}
?>