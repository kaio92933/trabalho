<?php
// Inicia uma nova sessão ou retoma a sessão existente
session_start();

// Inclui o arquivo de conexão com o banco de dados
include_once('connection.php');

// Verifica se o formulário de login foi submetido
if (isset($_POST['login'])) {

    // Captura os dados enviados pelo formulário de login e armazena em variáveis
    $username = $_POST['username'];
    $password = md5($_POST['password']);  // Criptografa a senha usando MD5 (nota: MD5 não é mais seguro para senhas)

    // Monta a consulta SQL para verificar se o usuário e a senha estão corretos
    $sql = "SELECT * FROM `tbl_user` WHERE `username`='$username' AND `password`='$password'";
    $result = mysqli_query($conn, $sql);  // Executa a consulta SQL

    // Verifica se o campo username e password estão vazios
    if (empty($_POST['username']) && empty($_POST['password'])) {
        echo "<script>alert('Please Fill Username and Password');</script>";
        exit;  // Interrompe a execução do script
    } elseif (empty($_POST['password'])) {
        echo "<script>alert('Please Fill Password');</script>";
        exit;
    } elseif (empty($_POST['username'])) {
        echo "<script>alert('Please Fill Username');</script>";
        exit;
    } else {
        // Se ambos os campos estão preenchidos, verifica se a consulta SQL retornou algum resultado
        if (mysqli_num_rows($result) > 0) {
            // Extrai os dados do usuário da resposta da consulta SQL
            $row = mysqli_fetch_array($result);
            $name = $row['name'];
            $username = $row['username'];
            $password = $row['password'];

            // Verifica se o username e o password da sessão correspondem aos valores no banco de dados
            if ($username == $username && $password == $password) {
                // Armazena os dados do usuário na sessão
                $_SESSION['name'] = $name;
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;

                // Redireciona o usuário para a página inicial
                header('location:index.html');
                exit;  // Interrompe a execução do script para garantir que o redirecionamento ocorra
            }
        } else {
            // Se a consulta SQL não encontrou nenhum resultado, exibe uma mensagem de erro
            echo "<script>alert('Invalid Username or Password');</script>";
            exit;
        }
    }
}
?>
