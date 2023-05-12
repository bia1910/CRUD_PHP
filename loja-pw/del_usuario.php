<?php
session_start();

$id = $_POST['idusuario'];

try {require('conexao.php');}
catch  (PDOException $e) {
    echo 'Error:' . $e->getMessage();
    echo ("Não conectado bd");
}
try {

    $stmt = $pdo->query("DELETE FROM `lojaphp`.`usuario` WHERE `idusuario` = $id");
    echo $stmt->rowCount();
     
     header('location:indexUsuario.php');

} catch (PDOException $e) {
    echo 'Error:' . $e->getMessage();
    echo ("Erro ao deletar");
}
?>