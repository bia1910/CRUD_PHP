
<?php
    session_start();
    $login = $_POST['login'];
    $senha = $_POST['senha'];
      require('conexao.php');
 try{

    echo("Conectado");

    $stmt = $pdo->query("SELECT idusuario,nome,senha FROM `lojaphp`.`usuario` WHERE nome = '$login' AND senha = '$senha'");
    echo $stmt->rowCount();

    if($stmt->rowCount()>0){
    
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        
        header('location:menu.html');
    }
    else{
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        header('location:login.php');
    };
}catch(PDOException $e){
    echo 'Error:' . $e->getMessage();
    echo("Não conectado");
}   
?>

