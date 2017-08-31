<?php $this->load->view('./cabecalho') ?>
<div class="header">
    <h1>Em Andamento</h1>
</div>
<div class="cad_andamento">
    <form action="<?php echo site_url('andamento/adicionarAndamento'); ?>" method="post">
        <label>
            Ticket:
            <?php $tickets = $this->andamento_model->listarTickets(); ?>
            <select name="id_ticket">
                <option value="0"></option>
                <?php foreach($tickets as $t): ?>
                    <option value="<?php echo $t->id_ticket; ?>"><?php echo $t->id_ticket; ?></option>
                <?php endforeach; ?>
            </select>
        </label>
        <br>
        <label>
            Mensagem:
            <textarea name="mensagem">
            </textarea>
        </label>
        <br>
        <label>
            Data/Hora:
            <input type="datetime-local" name="data_hora">
        </label>
        <br>
        <button type="submit">Adicionar</button>
        <button type="reset">Limpar</button>
    </form>
</div>
<?php $this->load->view('./rodape') ?>