<main>

    <section>
    <a href="index.php">
        <button class="btn btn-success">Voltar</button>
    </a>
</section>

    <h2 class="mt-3">Cadastrar Vaga </h2>

    <form method="post">
        <div class="form-group">
        <label>Título</label>
        <input type="text" class="form-control" name="titulo" value="<?=$obVaga->descricao?>">
    </div>

    <div class="form-group">
        <label>Descrição</label>
        <textarea class="form-control" name="descricao" rows="5"></textarea>
    </div>

    <div class="form-group">
        <label>Status</label>
        <div>
            <div class="form-check form-check-inline">
                <label class="form-control">
                  <input type="radio" name="ativo" value="s" checked >ATIVO  
                </label>
            </div>

            <div class="form-check form-check-inline">
                <label class="form-control">
                  <input type="radio" name="ativo" value="n" <?=$obVaga->ativo == 'n' ? 'checked' : ''?>>INATIVO
                </label>
            </div>
        </div>    
    </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">ENVIAR</button>
        </div>

    </form>
</main>