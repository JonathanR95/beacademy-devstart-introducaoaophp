

<?php


$alunos = [
    $aluno1 = [
        'nome' => 'Francisco',
        'email' => 'francisco@email.com',
        'telefone' => '11 98745-5454'
    ],
    
    $aluno2 = [
        'nome' => 'Rafaela',
        'email' => 'Rafaela@email.com',
        'telefone' => '11 98745-5454'
    ],
];

?>
<style>
    body{
        background-color: #EFEFEF;
    }

    h1{
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: 500;
        margin: 10px 0px 50px 0px;
    }

    .container{
        width: 960px;
        display: flex;
        justify-content: center;
    }

    .container table{
        width: 100;
        border:1px solid black;
    }

</style>

<h1>Criando Tabela com Foreach</h1>

<div class="container">
    <table>
        <thead>
            <tr>
                <td><strong>Nome</strong></td>
                <td><strong>email</strong></td>
                <td><strong>telefone</strong></td>
            </tr>
        </thead>
        <tbody>
    
            <?php
                foreach($alunos as $cadaAluno){
                    echo "<tr>";
                        echo '<td>'.$cadaAluno['nome']. '</td>';
                        echo '<td>'.$cadaAluno['email']. '</td>';
                        echo '<td>'.$cadaAluno['telefone']. '</td>';
                    echo "<tr>";
                }
    
            ?>
    
        </tbody>
</div>



</table>