<main>
    <section>
        <a href="index.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>
    
    <h2 class="mt-3"><?=TITLE?></h2>

    <form method="post">
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" value="<?=$objProjeto->nome?>">
        </div>
        <div class="form-group">
            <label>Endereço</label>
            <textarea class="form-control" name="endereco"><?=$objProjeto->endereco?></textarea>
        </div>
        <div class="form-group">
            <label>Telefone</label>
            <textarea class="form-control" name="telefone"><?=$objProjeto->telefone?></textarea>
        </div>
        <div class="form-group">
            <label>RG</label>
            <textarea class="form-control" name="rg"><?=$objProjeto->rg?></textarea>
        </div>
        <div class="form-group">
            <label>Data de nascimento</label>
            <textarea class="form-control" name="datanascimento"><?=$objProjeto->datanascimento?></textarea>
        </div>
        <div class="form-group">
            <label>Status</label>
            <div>
                <div class="form-check form-check-inline">
                    <label class="form-group">
                        <input type="radio" name="ativo" value="s" checked> Ativo
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-group">
                        <input type="radio" name="ativo" value="n" <?=$objProjeto->ativo == 'n' ? 'checked' : ''?>> Inativo
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </form>
</main>