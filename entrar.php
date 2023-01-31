<?php


if (isset($_POST['cadastrar'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $tipo = $_POST['tipo'];

    // Criando conexão com o banco de dados
    $conn = mysqli_connect('localhost', 'root', '', 'destrava');

    // Verificando se houve erro de conexão
    if (!$conn) {
        die("Conexão falhou: " . mysqli_connect_error());
    }
    if (empty($tipo)) {
        echo "Você precisa escolher uma opção!";
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
                <form action="#" class="entrar-form">
                    <h2 class="title">Entrar</h2>
                    <p class="descricao">Entre com seus dados</p>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="email" placeholder="Email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="senha" placeholder="Senha" />
                    </div>
                    <button class="btn">
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