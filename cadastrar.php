<?php
    require_once 'app/Entity/Projeto.php';
    use \App\Entity\Projeto;

    define('TITLE', 'Cadastrar Cliente');

    $objProjeto = new Projeto();

    //validação do post
    if( isset($_POST['nome'], $_POST['endereco'], $_POST['telefone'], $_POST['rg'], $_POST['datanascimento'], $_POST['ativo']) ){
        $objProjeto->nome = $_POST['nome'];
        $objProjeto->endereco = $_POST['endereco'];
        $objProjeto->telefone = $_POST['telefone'];
        $objProjeto->rg = $_POST['rg'];
        $objProjeto->datanascimento = $_POST['datanascimento'];
        $objProjeto->ativo =  $_POST['ativo'];

        $objProjeto->cadastrar();
        
        header('location: index.php?status=success');
    }


    include 'includes/header.php';
    include 'includes/formulario.php';
    include 'includes/footer.php';    
?>
    