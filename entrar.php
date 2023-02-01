<?php

session_start();

//puxando a conexao do arquivo conexao.php
require 'conexao.php';

if (isset($_POST['cadastrar'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $tipo = $_POST['tipo'];


    if (empty($tipo)) {
        echo "<script> alert('Voce precisa escolher uma opção!');
        window.location.href='entrar.php';
        </script>";
        exit();
    } else if ($tipo == "aluno") {
        $query = "INSERT INTO alunos (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "<script> alert('Aluno cadastrado com sucesso!');
            window.location.href='entrar.php';
            </script>";
        } else {
            echo "<script> alert('Não foi possível realizar o cadastro!');
            window.location.href='entrar.php';
            </script>";
        }
    } else if ($tipo == "professor") {
        $query = "INSERT INTO professores (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "<script> alert('Professor cadastrado com sucesso!');
            window.location.href='entrar.php';
            </script>";
        } else {
            echo "<script> alert('Não foi possível realizar o cadastro!');
            window.location.href='entrar.php';
            </script>";
        }
    }
    mysqli_close($conn);
}


if (isset($_POST['submit'])) {

    // Recebe os dados do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Consulta a tabela "professores"
    $sql = "SELECT * FROM professores WHERE email='$email' AND senha='$senha'";
    $result = mysqli_query($conn, $sql);

    // Verifica se encontrou algum resultado na tabela "professores"
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $_SESSION['idUsuario'] = $row['id'];
            $_SESSION['tipo'] = 'professor';
            $_SESSION['nome'] = $row['nome'];
            header("Location: area-professor.php");
        }
        //   exit();
    } else {
        // Consulta a tabela "alunos"
        $sql = "SELECT * FROM alunos WHERE email='$email' AND senha='$senha'";
        $result = mysqli_query($conn, $sql);

        // Verifica se encontrou algum resultado na tabela "alunos"
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $_SESSION['idUsuario'] = $row['id'];
                $_SESSION['tipo'] = 'aluno';
                $_SESSION['nome'] = $row['nome'];
                header("Location: area-aluno.php");
            }
            // exit();
        } else {
            echo "<script> alert('Dados incorretos ou usuario inexistente');
        window.location.href='entrar.php';
        </script>";
        }
    }
}





?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Destrava</title>
    <link rel="stylesheet" href="css/entrar.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="formularios-container">
            <div class="entrar-cadastrar">
                <form action="" method="post" class="entrar-form">
                    <h2 class="title">Entrar</h2>
                    <p class="descricao">Entre com seus dados</p>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="email" name="email" placeholder="Email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="senha" name="senha" placeholder="Senha" />
                    </div>
                    <button class="btn" name="submit">
                        Entrar <i class="fa-solid fa-arrow-right-to-bracket"></i>
                    </button>
                    <a class="nav-link active" aria-current="page" href="index.php">voltar para página inicial</a>

                </form>

                <form action="" method="post" class="cadastrar-form"> <!-- action e o method -->
                    <h2 class="title">Junte-se a nós</h2>
                    <p class="descricao">Faça seu cadastro</p>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="nome" name="nome" placeholder="Nome" /> <!-- atribui nome ao botao pra usar php -->
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="senha" name="senha" placeholder="Senha" />
                    </div>
                    <div class="inline-form" for="inline-form">Você é aluno ou professor?
                        <select class="custom-select" name="tipo">
                            <option class="inline-option-escolher">escolher</option> <!-- adicionar erro -->
                            <option class="inline-option" value="aluno">aluno</option>
                            <option class="inline-option" value="professor">professor</option>
                        </select>
                    </div>

                    <a class="nav-link active" aria-current="page" href="index.php">voltar para página inicial</a>
                    <input type="submit" name="cadastrar" class="btn" value="Cadastrar">

                </form>
            </div>
        </div>

        <div class="paineis-container">
            <div class="painel painel-esquerdo">
                <div class="conteudo">
                    <h2>Novo aqui?</h2>
                    <p class="texto">
                        Junte-se a nós e faça seu cadastro.
                    </p>
                    <button class="btn transparente" id="sign-up-btn">
                        Cadastre-se
                    </button>
                </div>
                <img src="img/professoras.svg" class="imagem" alt="" height=500px />
            </div>
            <div class="painel painel-direito">
                <div class="conteudo">
                    <h3>Destrava!</h3>
                    <p>
                        Já possui uma conta?
                        Faça seu login
                    </p>
                    <button class="btn transparente" id="sign-in-btn">
                        Entrar
                    </button>
                </div>
                <img src="img/professor-aluno.svg" class="imagem" alt="" />
            </div>
        </div>
    </div>
    <!-- Importação kit de icones fontawesome -->
    <script src="https://kit.fontawesome.com/84532cf285.js" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
</body>

</html>