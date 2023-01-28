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
                    <!-- <input type="submit" value="Entrar" class="btn solid" /> -->
                    <!-- <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div> -->
                </form>
                <form action="#" class="cadastrar-form">
                    <h2 class="title">Junte-se a nós</h2>
                    <p class="descricao">Faça seu cadastro</p>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="nome" placeholder="Nome" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="senha" placeholder="Senha" />
                    </div>
                    <div class="inline-form" for="inline-form">Você é aluno ou professor?
                        <select class="custom-select">
                            <option class="inline-option-escolher" value="aluno">escolher</option> <!-- adicionar erro -->
                            <option class="inline-option" value="aluno">aluno</option>
                            <option class="inline-option" value="professor">professor</option>
                        </select>
                    </div>
                    <button class="btn">
                        Cadastre-se <i class="fa-solid fa-user-plus"></i>
                    </button>
                    <a class="nav-link active" aria-current="page" href="index.php">voltar para página inicial</a>
                    <!-- <input type="submit" class="btn" value="Cadastrar" /> -->
                    <!-- <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div> -->
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