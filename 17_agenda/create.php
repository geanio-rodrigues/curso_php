<?php 
    include_once("templates/header.php");
?>

<div class="container">
    <?php include_once("templates/backbtn.html")?>
    <form action="<?=$BASE_URL?>config/process.php" id="create-form" method="POST">
        <input type="hidden" name="type" value="create">
        <div class="form-group">
            <label for="name">Nome do contato:</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Digite o nome" require>
        </div>
        <div class="form-group">
            <label for="phone">Telefone do contato:</label>
            <input type="text" name="phone" id="phone" class="form-control" placeholder="Digite o telefone" require>
        </div>
        <div class="form-group">
            <label for="observations">Observações:</label>
            <textarea name="observations" id="observations" class="form-control" placeholder="Insira as observações" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>

<?php 
    include_once("templates/footer.php");
?>