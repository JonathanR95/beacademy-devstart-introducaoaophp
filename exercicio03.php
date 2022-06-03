<h1>Criar uma tabela com informações de uma array</h1>

<?php


$banda1 = [
    'banda' => "SOAD",
    'musicas_conhecidas' => 10,
    'conheci_em' => 2010,
];
$banda2 = [
    'banda' => 'Norvana',
    'musicas_conhecidas' => 7,
    'conheci_em' => 2008,
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
            <td> <?php echo $banda1['banda'] ?> </td>
            <td> <?php echo $banda1['musicas_conhecidas'] ?> </td>
            <td> <?php echo $banda1['conheci_em'] ?> </td>
        </tr>
        <tr>
            <td> <?php echo $banda2['banda'] ?> </td>
            <td> <?php echo $banda2['musicas_conhecidas'] ?> </td>
            <td> <?php echo $banda2['conheci_em'] ?> </td>
        </tr>
    </tbody>
</table>