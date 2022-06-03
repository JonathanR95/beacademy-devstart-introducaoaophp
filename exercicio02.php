<h1>Criar uma tabela com dados do PHP</h1>

<?php

$nome = 'Jonathan';
$idade = 26;
$cidade = 'Guarulhos';

$nome2 = 'Rafaela';
$idade2 = 23;


?>

<style>
    table, thead, tbody, tr, td{
        border: 1px solid black;
    }
</style>

<table>
    <thead>
        <tr>
            <td>Nome</td>
            <td>Idade</td>
            <td>cidade</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td> <?php echo $nome ?> </td>
            <td> <?php echo $idade ?> </td>
            <td> <?php echo $cidade ?> </td>
        </tr>
        <tr>
            <td> <?php echo $nome2 ?> </td>
            <td> <?php echo $idade2 ?> </td>
            <td> <?php echo $cidade ?> </td>
        </tr>
    </tbody>
</table>