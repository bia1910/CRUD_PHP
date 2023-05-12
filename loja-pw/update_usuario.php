<?php

      $idusuario = $_POST['idusuario'];
      $nome = $_POST['nome'];
      $senha = $_POST['senha'];
 
      require('conexao.php');
try{

    $stmt = $pdo->prepare('UPDATE `lojaphp`.`usuario` SET nome = :nome ,  senha = :senha  WHERE idusuario = :idusuario');



    $stmt->execute(array(
        ':idusuario' => $idusuario,
        ':nome' => $nome, 
        ':senha' => $senha
));



   
echo $stmt->rowCount();

header('location:indexUsuario.php');
  

}catch (PDOException $e){
    echo 'Error: '.$e->getMessage();
}
