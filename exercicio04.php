

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
        width: 100vw;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }

    .container .tabela{
        width: 50%;
        border:1px solid black;
        border-radius: 5px;
        text-align: center;
        
    }

    .container .tabela .tabela-cabecalho tr td{
        background-color: darkgrey;  
    }

</style>

<h1>Criando Tabela com Foreach</h1>

<div class="container">
    <table class="tabela" cellspacing="0">
        <thead class="tabela-cabecalho">
            <tr>
                <td><strong>Nome</strong></td>
                <td><strong>email</strong></td>
                <td><strong>telefone</strong></td>
            </tr>
        </thead>
        <tbody class="tabela-conteudo">
    
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