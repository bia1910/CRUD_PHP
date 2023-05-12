<?php
session_start();

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
require('conexao.php');

try {
    $stmt = $pdo->prepare('INSERT INTO `lojaphp`.`produto` (`nome`, `descricao`, `preco`) VALUES (:nome, :descricao, :preco)');
    $stmt -> execute (array(
        ':nome' => $nome,
        ':descricao' => $descricao,
        ':preco' => $preco
    ));

    echo $stmt->rowCount();
    
    if($stmt->rowCount()>0){
        $_SESSION['nome'] = $nome;
        $_SESSION['descricao'] = $descricao;
        $_SESSION['preco'] = $preco;
        header('location:indexProduto.php');
    }
}

catch (PDOException $e){
    echo 'Error: ' . $e->getMessage();
}
?>