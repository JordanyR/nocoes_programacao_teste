<html>
<head>
    <title> Nosso primeiro Sistema </title>
</head>
<body bgcolor="grey">
<form action="" method="POST">

<center>
<h1 style="color:white;"> Formulário dos alunos </h1><br>

<label> 
        <b style="color:white;"> Nome completo: </b><br>
    <input type="text" name="nome"> <br><br>

    <label>
      <b style="color:white;"> Data de nascimento: </b><br>
    <input type="date" name="data de nascimento"> <br><br>
    
    <label>
    <b style="color:white;"> Endereço: </b><br> 
    <input type="text" name="nome"> <br><br>
    
    <label>
    <b style="color:white;"> Bairro: </b><br> 
    <input type="text" name="nome"> <br><br>
    
    <label>
    <b style="color:white;"> N°: </b><br> 
    <input type="text" name="nome"> <br><br>
    
    <label>
    <b style="color:white;"> RG: </b><br> 
    <input type="text" name="nome"> <br><br>
   
    <label>
    <b style="color:white;"> CPF: </b><br> 
    <input type="text" name="nome"> <br><br>
   
    <label>
    <b style="color:white;"> Nome da Mãe: </b><br> 
    <input type="text" name="nome"> <br><br>
   
    <label>
    <b style="color:white;"> Nome do Pai: </b><br> 
    <input type="text" name="nome"> <br><br>

    <button type="submit"> Salvar </button>
    
</center>
  </form>
 </body>
</html>
<?php
if (isset($_POST['nome']) && isset($_POST['rg'])){
    echo "<h2 style='color:white;'>Seu cadastro foi efetuado com Sucesso!</h>";

}
?>