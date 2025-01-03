<?php 

    $validacoes = [];

    if(count($_POST) > 0){
        $validacoes = [];

        if($_POST['nome'] === "") {
            $validacoes[] = "Por favor, preencha o nome do usário!";
        }
        
        if($_POST['nome'] === "") {
            $validacoes[] = "Por favor, preencha o e-mail do usário!";
        }

        if($_POST['senha'] != $_POST['confirmacao']) {
            $validacoes[] = "As semnhas devem ser iguais!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(count($validacoes)): ?>
        <ul>
            <?php foreach($validacoes as $validacao): ?>
            <li><?=$validacao?></li>
            <?php endforeach;?>
        </ul>
    <?php endif; ?>
        
    <form action="index.php" method="post">
        <div>
            <input type="text" name="nome" placeholder="Digite o seu nome">
        </div>
        <div>
            <input type="text" name="email" placeholder="Digite o seu email">
        </div>
        <div>
            <input type="password" name="senha" placeholder="Digite o seu senha">
        </div>
        <div>
            <input type="password" name="confirmacao" placeholder="Confirme a sua senha">
        </div>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>