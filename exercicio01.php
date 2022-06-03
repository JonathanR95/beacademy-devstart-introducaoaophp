
<form method="post">
    <input type="text" name="n1" placeholder="Insira um número">
    <input type="text" name="n2" placeholder="Insira outro número"><br>
 
    <label><input type="radio" name="soma"> Somar</label><br>
    <label><input type="radio" name="subtracao"> Subtrair</label><br>
    <label><input type="radio" name="multiplicacao"> Multiplicar</label><br>
    <label><input type="radio" name="divisao"> Dividir</label><br>

    <button>Enviar</button>

</form>

<?php
 
if($_POST) {
    if (isset($_POST['soma'])){
        echo  "A soma é: ". $_POST['n1'] +  $_POST['n2'];
    
    }
    if (isset($_POST['subtracao'])){
        echo  "A subtração é: ". $_POST['n1'] -  $_POST['n2'];
    
    }
    if (isset($_POST['multiplicacao'])){
        echo  "A multiplicação é: ". $_POST['n1'] *  $_POST['n2'];
    
    }
    if (isset($_POST['divisao'])){
        echo  "A divisão é: ". $_POST['n1'] /  $_POST['n2'];
    }
}
?>