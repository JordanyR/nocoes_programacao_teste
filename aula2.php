<?php
print_r($_POST);
// echo "Olá a todos !";
if(isset($_POST['nome'])){

}
?>
<center>
    <a> Oie </a><br>
    <h1> Oie2</h1><br>
    <h2> Oie3 </h2><br>
    <a href="aula3.php"> Voltar </a> 
<form action="" method="POST">
    <label> 
        <b style="color:red;">Informe o seu Nome: </b> 
    <input type="text" name="nome"> <br><br>

    <label> 
        <b> Informe o seu <b style="color:blue;"> Sobrenome: </b>
    <input type="text" name="sobrenome"><br><br>

    <label> 
        <b> <b style="color:orange;" > Informe a sua idade: </b>
    <input type="number" name="idade"> <br><br>

    <label>
      <b> Informe sua data de nascimento: </b>
    <input type="date" name="data de nascimento"> <br><br>

    <button type="submit"> Gravar </button> <br><br>
</form>
<img src="imagens/Natureza.png"width="160px" height="160px">
<img src="imagens/praia.png"width="60%" height="60%">
</center>