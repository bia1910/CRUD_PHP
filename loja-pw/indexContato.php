
<div class="header">

<h3 class="date"><?php echo date('H:i:s d-m-Y');?></h3>
<a class="img" href="menu.html"><img src="https://cdn-icons-png.flaticon.com/512/60/60817.png" alt="ft_usuario"><br> </a>
</div>
<div class="lista">
<?php
require('conexao.php'); 

$stmt = $pdo->query('SELECT idcontato, nome, telefone, email FROM lojaphp.contato;');

//fetch é um array simples, que retorna uma linha da tabela
while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<p><font color='#ffffff'> ID: {$linha['idcontato']} - Nome: {$linha['nome']} - Telefone: {$linha['telefone']} - Email: {$linha['email']}  </font>";
    //echo('<input method="post" name="btnAtualizar" type="submit" value="CADASTRAR " /> <br />');
    
    echo('<input class="btn-select"  type="submit" value="alterar" name="alterar"> ');
    echo('<input class="btn-select"  type="submit" value="deletar" name="alterar"> <br/>');
}

?>
</div>

<!--$novoBotao = "<button > SELECIONAR </button>";
echo $novoBotao -->


<!--CADASTRAR CONTATO-->
<!--contato-->


<br>
<div class="tudo">

<form class= "form-cadastro" method="post" action="cad_contato.php" id="formCad" name="formCad">
    <!--<fieldset id= "fie">-->
    <div  class="cad-form" align="center" > <!-- align="center" -->
        
        <table>
                <h3>Cadastro de contato</h3>
                
            <tr>
                <td>
                    <div >NOME :</div>
                </td>
                <td> <input type="text" name="nome" id="nome2" /></td>
            </tr>
            <tr>
                <td>
                    <div >TELEFONE:</div>
                </td>
                <td><input type="text" name="telefone" id="telefone" /></td>
            </tr>
            <tr>
                <td>
                    <div>EMAIL :</div>
                </td>
                <td><input type="text" name="email" id="email" /></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input class="btn-form" name="submit" type="submit" value="CADASTRAR" /></td>
            </tr>
        </table>
    </div>
    <!--</fielset>-->
</form>

<!--FORMULARIO ALTERAR-->

<form class="form-update" method="post" action="update_contato.php" id="formCad" name="formCad">

    <div align="center">
        <legend></legend>
        <label></label>
        <label></label>

     
        <table >
        <h3>Atualizar contato</h3>

            <tr>
                <td>
                    <div >ID :</div>
                </td>
                <td><input type="text" name="idCont" id="idCont" /></td>
            </tr>

            <tr>
                <td>
                    <div >NOME :</div>
                </td>
                <td> <input type="text" name="nome" id="nome"></td>
                <!-- value= ?php echo $nome["nome"]?-->
            </tr>
            <tr>
                <td>
                    <div >TELEFONE :</div>
                </td>
                <td><input type="text" name="telefone" id="telefone" /></td>
            </tr>
            <tr>
                <td>
                    <div >Email :</div>
                </td>
                <td><input type="text" name="email" id="email" /></td>
            </tr>
          
            <td>&nbsp;</td>
            <td><input class="btn-form" name="submit" type="submit" value="ATUALIZAR" /></td>
            </tr>
        </table>
    </div>

</form>



<!--FORMULARIO DELETAR-->


<!--user-->
<form class="form-delete" method="post" action="del_contato.php" id="formDel" name="formDel">

    <div align="center">
        <legend></legend>
        <label></label>
        <label></label>

       
        <table >
                 <h3>Deletar de contato</h3>
            <tr>
                <td>
                    <div >ID :</div>
                </td>
                <td> <input  type="text" name="idcontato" id="idcontato" /></td>
            </tr>

            <td>&nbsp;</td>
            <td><input class="btn-form" name="submit" type="submit" value="DELETAR" /></td>
            </tr>
        </table>
    </div>
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
  background: rgb(253, 253, 253);       
}

.lista::-webkit-scrollbar{
            width: 12px;
            background-color: rgb(241, 19, 19);
}
 .lista::-webkit-scrollbar-thumb {
  background-color: rgb(99, 96, 91);   
   
  border: 1px solid rgb(99, 96, 91);  
}
.tudo{
    display: flex;
    flex-direction: row;

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