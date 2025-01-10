<?php 

    session_start();

    include_once("connection.php");
    include_once("url.php");

    $id;
    if(!empty($_GET)) {
        $id = $_GET['id'];
    }

    if(!empty($id)) { // Retorna o dado de um contato

        $query = "SELECT * FROM contacts WHERE id = :id";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        $contato = $stmt->fetch();

    } else { // Retorna o dado de todos os contatos
        
            $contacts = [];
        
            $query = "SELECT * FROM contacts";
        
            $stmt = $conn->prepare($query);
            $stmt->execute();
        
            $contacts = $stmt->fetchAll();
    }
?>