<?php

      $idCont = $_POST['idCont'];
      $nome = $_POST['nome'];
      $telefone = $_POST['telefone'];
      $email = $_POST['email'];
 
      require('conexao.php');
try{

    $stmt = $pdo->prepare('UPDATE `lojaphp`.`contato` SET nome = :nome ,  telefone = :telefone  WHERE idcontato = :idCont');

    


    $stmt->execute(array(
        ':idCont' => $idCont,
        ':nome' => $nome, 
        ':telefone' => $telefone
));



   
echo $stmt->rowCount();

header('location:indexContato.php');
  

}catch (PDOException $e){
    echo 'Error: '.$e->getMessage();
}
