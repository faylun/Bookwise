<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $database->query(
        query:"insert into usuarios (nome, email, senha) values ( :nome, :email, :senha )",
        params: [
            "nome" => $_POST["name"],
            "email" => $_POST["email"],
            "senha" => $_POST["password"]
        ]
        );
}

header("location: /login?mensagem=Registrado com sucesso.");
exit();

?>