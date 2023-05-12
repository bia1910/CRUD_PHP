<?php
session_start();

$id = $_POST['idproduto'];

try {require('conexao.php');}
catch  (PDOException $e) {
    echo 'Error:' . $e->getMessage();
    echo ("Não conectado bd");
}
try {

    $stmt = $pdo->query("DELETE FROM `lojaphp`.`produto` WHERE `idproduto` = $id");
    echo $stmt->rowCount();
     
     header('location:indexProduto.php');

} catch (PDOException $e) {
    echo 'Error:' . $e->getMessage();
    echo ("Erro ao deletar");
}
?>