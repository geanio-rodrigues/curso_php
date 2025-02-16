<?php 

    require_once("globas.php");
    require_once("db.php");
    require_once("models/Movie.php.php");
    require_once("models/Message.php.php");
    require_once("dao/UserDAO.php.php");
    require_once("dao/MovieDAO.php.php");

    $message = new Message($BASE_URL);
    $userDao = new UserDAO($conn, $BASE_URL);
    $movieDao = new MovieDAO($conn, $BASE_URL);

    // Recebendo dados do usuário
    $userData = $userDao->verifyToken();

    // Recebendo o tipo do formulário
    $type = filter_input(INPUT_POST, "type");

    if($type === "create") {

    }
?>