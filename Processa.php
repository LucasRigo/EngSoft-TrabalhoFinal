<?php
    session_start();
    include_once("Conexao.php");

    $nome = $_POST['prodNome'];
    $preco = $_POST['prodPreco'];

    $result_produtos = "INSERT INTO produtos (nome, preco) VALUES ('$nome','$preco')";
    mysqli_query($conecta, $result_produtos);

    if(mysqli_insert_id($conecta)){
        $_SESSION['msg'] = "<p style='color:green;'>Cadastrado com sucesso!!</p>";
        header("Location: Cadastro.php");
    }else{
        header("Location: Cadastro.php");
        $_SESSION['msg'] = "<p style='color:red;'>Falha no cadastro!</p>";
    }
?>