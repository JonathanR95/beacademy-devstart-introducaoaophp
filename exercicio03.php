<h1>Criar uma tabela com informações de uma array</h1>

<?php


$banda1 = [
    "SOAD",
    10,
    2010,
];
$banda2 = [
    'Norvana',
    7,
    2008,
];




?>

<style>
    table, thead, tbody, tr, td{
        border: 1px solid black;
    }
</style>

<table>
    <thead>
        <tr>
            <td>banda</td>
            <td>musicas conhecidas</td>
            <td>ano que conheci</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td> <?php echo $banda1[0] ?> </td>
            <td> <?php echo $banda1[1] ?> </td>
            <td> <?php echo $banda1[2] ?> </td>
        </tr>
        <tr>
            <td> <?php echo $banda2[0] ?> </td>
            <td> <?php echo $banda2[1] ?> </td>
            <td> <?php echo $banda2[2] ?> </td>
        </tr>
    </tbody>
</table>