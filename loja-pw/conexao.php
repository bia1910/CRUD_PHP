<?php
try{
    $pdo = new PDO ('mysql:host=localhost;dbname=lojaphp','root','ana123');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   // echo("conectado conexao");
       
}catch(PDOException $e){
    echo 'Error:' . $e->getMessage();
    echo("Não conectado ao banco");
}
?>


