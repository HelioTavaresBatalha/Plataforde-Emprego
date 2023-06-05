<?php

    // informações de conexão com o banco de dados
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "cadastro_utilizadores";
    //$tablename = "cadastro";
    // conectar ao banco de dados
    $conexao = mysqli_connect($host, $username, $password, $database);

    // verificar se houve erro de conexão
    if (!$conexao) {
        die("Falha na conexão: " . mysqli_connect_error());
        echo "Falha na ligação a base de dados";
}

// função para cadastrar um novo usuário
function cadastrar_usuario($nome, $apelido, $email, $senha) {
    global $conexao;
    // verificar se o email já está cadastrado
    $query = "SELECT * FROM cadastro WHERE email = '$email'";
    $result = mysqli_query($conexao, $query);
    if (mysqli_num_rows($result) > 0) {
        return false;
    } else {
        // inserir o novo usuário na tabela cadastro
        $query = "INSERT INTO cadastro (nome, apelido, email, senha) VALUES ('$nome', '$apelido', '$email', '$senha')";
        $result = mysqli_query($conexao, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}

// função para verificar se o email e a senha correspondem a um usuário cadastrado
function verificar_login($email, $senha) {
    global $conexao;
    // verificar se o email e a senha correspondem a um usuário cadastrado
    $query = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'";
    $result = mysqli_query($conexao, $query);
    if (mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }
}

?>
