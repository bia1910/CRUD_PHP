<div class="header">

<h3 class="date"><?php echo date('H:i:s d-m-Y');?></h3>
<a class="img" href="menu.html"><img src="https://cdn-icons-png.flaticon.com/512/60/60817.png" alt="ft_usuario"><br> </a>
</div>

<div class="lista">
<?php

require('conexao.php');

$stmt = $pdo->query('SELECT idproduto, nome, descricao, preco, foto FROM lojaphp.produto;');

while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
   

    echo "<p><font color='#ffffff'> ID: {$linha['idproduto']} - Nome: {$linha['nome']} - Descrição: {$linha['descricao']} - Preço: {$linha['preco']} - Foto: {$linha['foto']}  </font>";}
?>
</div> 

<div class="tudo">
<!--CADASTRAR PRODUTO-->
<!--produto-->
<form  class= "form-cadastro"  method="post" action = "cad_produto.php" id= "formCad" name = "formCad">
<!--<fieldset id= "fie">-->
    <div class="cad-form" align="center">
        
        <table >
        <h3>Cadastro de contato</h3>
            <tr>
                <td> <div >NOME :</div></td>
                <td> <input type="text" name="nome" id="nome"/></td>
            </tr>
            <tr>
                <td><div>DESCRIÇÃO:</div></td>
                <td><input type="text" name="descricao" id="descricao"/></td>
            </tr>
            <tr>
                <td><div >PREÇO:</div></td>
                <td><input type="text" name="preco" id="preco"/></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input class="btn-form" name="submit" type="submit" value="CADASTRAR"/></td>
            </tr>
</table>
</div>
<!--</fielset>-->
</form>

       <!--FORMULARIO ALTERAR-->

       <form class="form-update"  method="post" action="update_produto.php" id="formCad" name="formCad">
  
        <div align="center">
            
         
            <table >
            <h3>Atualizar produto</h3>

                <tr>
                    <td>
                        <div >ID :</div>
                    </td>
                    <td><input type="text" name="idproduto" id="idproduto" /></td>
                </tr>

                <tr>
                    <td>
                        <div NOME:></div>
                    </td>
                    <td> <input type="text" name="nome" id="nome"  ></td>
                   <!-- value= ?php echo $nome["nome"]?-->
                   <tr>
                <td><div >DESCRIÇÃO:</div></td>
                <td><input type="text" name="descricao" id="descricao"/></td>
            </tr>
            <tr>
                <td><div >PREÇO:</div></td>
                <td><input type="text" name="preco" id="preco"/></td>
            </tr>
            
                    <td>&nbsp;</td>
                    <td><input class="btn-form"  name="submit" type="submit" value="ATUALIZAR" /></td>             
                </tr>
            </table>
        </div>
     
</form>





<!--FORMULARIO DELETAR-->

<!--user-->
<form class="form-delete" method="post" action="del_produto.php" id="formDel" name="formDel">
    
        <div align="center">
           

            <table >
            <h3>Deletar de produto</h3>
                <tr>
                    <td>
                        <div >ID :</div>
                    </td>
                    <td> <input type="text" name="idproduto" id="idproduto" /></td>
                </tr>

                <td>&nbsp;</td>
                <td><input class="btn-form" name="submit" type="submit" value="DELETAR" /></td>
                </tr>
            </table>
        </div>
        
</form>
 
<style>
 body{
    background-color: #7faabe;
    font-family: Georgia, 'Times New Roman', Times, serif;

 }
 .form-cadastro{
    background-color:#747474;
    width: 25%;
    padding:20px;
    border:solid 1px black;
    margin-left: auto;
     margin-right: auto;

     
 }
 .form-update{ 
    background-color:#747474;
    width: 25%;
    padding:20px;
    border:solid 1px black;
    flex-wrap: row nowrap;
    margin-left: auto;
     margin-right: auto;
 }
 .form-delete{
    background-color:#747474;
    width: 25%;
    padding:20px;
    border:solid 1px black;
    flex-wrap: row nowrap;
    margin-left: auto;
     margin-right: auto;
 }
.btn-select{
    background-color: #747474;
    color:#000000;
    border:solid 2px #747474;
    border-radius:20px;
    padding: 2px;
    width: 5%;
}
.btn-select:hover{
    
    background-color: #bcbcc0;
}
.date{
    margin-top:20px;
    width: max-content;
    padding: 10px;
    border-bottom: solid 2px black;

    margin-left: auto;
     margin-right: auto;

}
.black{
            height: 2px;
            background-color: black;
            border: none;
}
.lista{
    position: relative;
    left:-10px;
    height: 250px;
    padding: 10px;
    padding-left:25px ;
    scroll-snap-type: y ;
    overflow-y: scroll;
    background-color: #000000;
}
.lista::-webkit-scrollbar-track {
  background: rgb(253, 253, 253);        /* color of the tracking area */
}

.lista::-webkit-scrollbar{
            width: 12px;
            background-color: rgb(241, 19, 19);
}
 .lista::-webkit-scrollbar-thumb {
  background-color: rgb(99, 96, 91);    /* color of the scroll thumb */
 /* border-radius: 20px;       /* roundness of the scroll thumb */
  border: 1px solid rgb(99, 96, 91);  /* creates padding around scroll thumb */
}
.tudo{
    display: flex;
    flex-direction: row;
    margin-top:40px;

}
.tudo input{
    width: 90%;
}
.btn-form{
    
    background-color: #000000;
    color:#ffffff;
    max-width: 100px;
    border:solid 2px #000000;
    border-radius:100px;
    padding: 8px;
   
}
.btn-form:hover{
    
    border:solid 2px #000000;
    border-radius:100px;
    padding: 8px;
    
    box-shadow: 0 0 2px rgb(0, 0, 0);
 
   
}
.img img{
    width: 50px;
    height: 40px;
    margin-right: 20px ;
    margin-top:10px;

}
.header{
    display: flex;
    
    flex-direction: row;
}
    </style> 