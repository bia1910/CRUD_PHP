<?php

      $idproduto = $_POST['idproduto'];
      $nome = $_POST['nome'];
      $descricao = $_POST['descricao'];
      $preco = $_POST['preco'];
      require('conexao.php');
try{

    $stmt = $pdo->prepare('UPDATE `lojaphp`.`produto` SET nome = :nome ,  descricao = :descricao, preco = :preco  WHERE idproduto = :idproduto');
    

   
    $stmt->execute(array(
        ':idproduto' => $idproduto,
        ':descricao' => $descricao, 
        ':preco' => $preco
));

   
echo $stmt->rowCount();

header('location:indexProduto.php');
  

}catch (PDOException $e){
    echo 'Error: '.$e->getMessage();
}
