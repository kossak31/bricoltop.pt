<div class="bg-dark col-sm pb-4">
    <h3 class="text-danger text-uppercase"> Peça um orçamento</h3>
    <form action="phpmailer/email.php" method="POST">
        <div class="form-group">
            <input class="form-control" placeholder="nome" type="text" name="nome">
        </div>
        <div class="form-group">
            <input class="form-control" placeholder="telefone" type="text" name="telefone">
        </div>
        <div class="form-group">
            <input class="form-control" placeholder="email" type="email" name="email">
        </div>
        <div class="form-group">
            <textarea class="form-control" rows="3" placeholder="Mensagem" type="text" name="mensagem"></textarea>
        </div>

        <button type="submit" class="btn btn-default btn-block">Enviar</button>
    </form>
</div>

<?php 