<?php
  session_start();
  $nome = $_POST['nome'];
  $telefone = $_POST['telefone'];
  $email = $_POST['email'];
  require('conexao.php');
try {
     
    
     $stmt = $pdo->prepare('INSERT INTO `lojaphp`.`contato` (`nome`, `telefone`, `email`) VALUES (:nome, :telefone, :email)');
     $stmt -> execute (array(
         ':nome' => $nome,
         ':telefone' => $telefone,
         ':email' => $email

     ));

     echo $stmt->rowCount();
    
     if($stmt->rowCount()>0){


    
        $_SESSION['nome'] = $nome;
        $_SESSION['telefone'] = $telefone;
        $_SESSION['email'] = $email;
        header('location:indexContato.php');
    }
    
    
}
catch (PDOException $e){
    echo 'Error: ' . $e->getMessage();
   

}

?>