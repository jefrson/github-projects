<?php $this->load->view('./cabecalho'); ?>

<h4 class="card-header">Alteração de Usuário</h4>
<div class="card-body">
    <?php if($usuario): ?>
    <form action="<?php echo site_url('alterar_usuarios'); ?>" method="post">
        <?php foreach ($usuario as $us ): ?>        
        <div class="form-row">    
            <div class="form-group col-2">
                <label for="id" class="form-control-label">
                    ID
                </label>
                <input type="text" class="text-info form-control-plaintext" id="id" name="id_usuario" value="<?php echo $us->id_usuario; ?>" readonly>
            </div>
            <div class="form-group col">
                <label for="nome" class="form-control-label">
                    Nome
                </label>
                <input type="text" class="form-control" id="nome" name="nome" maxlength="30" value="<?php echo $us->nome; ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col">
                <label for="setor" class="form-control-label">
                    Setor
                </label>
                <input type="number" class="form-control" id="setor" name="id_setor" value="<?php echo $us->id_setor; ?>">
            </div>
            <div class="form-group col">
                <label for="cargo" class="form-control-label">
                    Cargo
                </label>
                <input type="number" class="form-control" id="cargo" name="id_cargo" value="<?php echo $us->id_cargo; ?>">
            </div>
            <div class="form-group col">
                <label for="secretaria" class="form-control-label">
                    Secretaria                          
                </label>
                <input type="number" class="form-control" id="secretaria" name="id_secretaria" value="<?php echo $us->id_secretaria; ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col">
                <label for="matricula" class="form-control-label">
                    Matricula
                </label>
                <input type="text" class="form-control" id="matricula" name="matricula" value="<?php echo $us->matricula; ?>">
            </div>
            <div class="form-group col">
                <label for="cpf" class="form-control-label">
                    CPF
                </label>
                <input type="text" class="form-control" id="cpf" name="cpf" maxlength="14" value="<?php echo $us->cpf; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="form-control-label">
                E-mail
            </label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $us->email; ?>">
        </div>
        <div class="form-check">
            <label for="usuario" class="form-check-label"> 
                <?php 
                    if($us->nivel == 1){
                        echo "<input class='form-check-input' type='checkbox' name='nivel' checked='checked'>";
                    }else{
                        echo "<input class='form-check-input' type='checkbox' name='nivel'>";
                    }
                ?>
                Usuário
            </label>
        </div>
        <?php endforeach; ?>
        <div class="controls">
            <button class="btn btn-primary" type="submit">Salvar</button>
            <a href="<?php echo site_url('buscar_usuarios'); ?>" class="btn btn-light">Cancelar</a>
        </div>
    </form>
    <?php else: ?>
        <p>Nenhum dado encontrado para este usuário!</p>
        <a href="<?php echo site_url('buscar_usuarios'); ?>">Clique aqui para voltar</a>
    <?php endif; ?>
</div>
<div class="card-footer">
    
</div>
<?php $this->load->view('./rodape'); ?>