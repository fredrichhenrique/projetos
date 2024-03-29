<?php
    $mensagem = '';
    if(isset($_GET['status'])){
        switch($_GET['status']){
            case 'success':
                $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
                break;
            case 'error':
                $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
                break;
        }
    }

    $resultados = '';
    foreach($projetos as $projeto){
        $resultados .=  '<tr>
                            <td>'.$projeto->id.'</td>
                            <td>'.$projeto->nome.'</td>
                            <td>'.$projeto->endereco.'</td>
                            <td>'.$projeto->telefone.'</td>
                            <td>'.$projeto->rg.'</td>
                            <td>'.$projeto->datanascimento.'</td>
                            <td>'.($projeto->ativo == 's' ? 'Ativo' : 'Inativo').'</td>
                            <td>'.date('d/m/Y à\s H:i',strtotime($projeto->data)).'</td>
                            <td>
                                <a href="editar.php?id='.$projeto->id.'" class="btn btn-primary">
                                    Editar                                    
                                </a>
                                <a href="excluir.php?id='.$projeto->id.'" class="btn btn-danger">
                                    Excluir                                    
                                </a>
                            </td>
                         </tr>';
    } 
    
    $resultados = strlen($resultados) ? $resultados : '<tr><td colspan="6" class="text-center">Não há projetos cadastrados!</td></tr>';
    
?>

<main>
    <?=$mensagem?>
    <section>
        <a href="cadastrar.php">
            <button class="btn btn-success">Novo Cliente</button>
        </a>
    </section>
    <section>
        <table class="table bg-light mt-3">
            <head>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th>RG</th>
                    <th>Data de nascimento</th>
                    <th>Status</th>
                    <th>Data</th>
                    <th>Ações</th>
                </tr>
            </head>
            <tbody>
                <?=$resultados?>
            </tbody>
        </table>
    </section>
</main>
