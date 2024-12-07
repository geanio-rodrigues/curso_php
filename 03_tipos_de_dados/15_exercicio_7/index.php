<?php 

    $pessoa = [
        'nome'=> "Carlos",
        'sobrenome'=> "Fonseca",
        'idade'=> "19",
        'sexo'=> "Masculino",
        'profissão'=> "Estudante",
    ];

    $nome = $pessoa['nome'];
    $idade = $pessoa['idade'];

    if($idade >= 18) {
        echo "$nome é maior de idade.<br>";
    }

    // Aula

    $pessoa2 = [
        'nome' => 'Matheus',
        'idade' => 11,
        'profissao' => 'Programador',
        'graduacao' => 'Sistemas da Informação'
    ];

    $maioridade = 18;

    // desafio
    if($pessoa2['idade'] >= $maioridade) {
        echo "A pessoa é maior de idade!";
    }
?>