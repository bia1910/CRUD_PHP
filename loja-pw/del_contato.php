<?php
session_start();
$id = $_POST['idcontato'];

try {require('conexao.php');}
catch  (PDOException $e) {
    echo 'Error:' . $e->getMessage();
    echo ("   Não conectado bd");
}
try {

    $stmt = $pdo->query("DELETE FROM `lojaphp`.`contato` WHERE `idcontato` = $id");
    echo $stmt->rowCount();
    

     
     header('location:indexContato.php');

} catch (PDOException $e) {
    echo 'Error:' . $e->getMessage();
    echo (" Erro ao deletar");
}
//botao excluir

?>









