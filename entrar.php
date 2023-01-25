<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Entrar</title>
    <link rel="stylesheet" href="css/entrar.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="conteudo primeiro-conteudo">
            <div class="primeira-coluna">
                <h2 class="titulo primeiro-titulo">Destrava!</h2>
                <p class="descricao primeira-descricao">Já tem uma conta?</p>
                <p class="descricao primeira-descricao">Faça seu login</p>
                <button id="signin" class="btn btn-primary">Entrar</button>
            </div>
            <div class="segunda-coluna">
                <h2 class="titulo segundo-titulo">Cadastre-se</h2>
                <p class="descricao segunda-descricao">Junte-se a nós!</p>
                <form class="form">
                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" placeholder="Nome">
                    </label>

                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" placeholder="Email">
                    </label>

                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" placeholder="Senha">
                    </label>


                    <label class="inline-form" for="inline-form">Você é aluno ou professor?
                        <select class="custom-select">
                            <option class="inline-option-escolher" value="aluno">escolher</option> <!-- adicionar erro -->
                            <option class="inline-option" value="aluno">aluno</option>
                            <option class="inline-option" value="professor">professor</option>
                        </select>
                    </label>



                    <button class="btn btn-second">Cadastrar</button>
                </form>
            </div><!-- second column -->
        </div><!-- first content -->
        <div class="conteudo segundo-conteudo">
            <div class="primeira-coluna">
                <h2 class="titulo primeiro-titulo">Junte-se a nós!</h2>
                <p class="descricao primeira-descricao">Faça seu cadastro</p>
                <button id="signup" class="btn btn-primary">Cadastrar</button>
            </div>
            <div class="segunda-coluna">
                <h2 class="titulo segundo-titulo">Entre com seus dados</h2>
                <form class="form">

                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" placeholder="Email">
                    </label>

                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" placeholder="Senha">
                    </label>

                    <a class="password" href="#">forgot your password?</a>
                    <button class="btn btn-second">sign in</button>
                </form>
            </div><!-- second column -->
        </div><!-- second-content -->
    </div>
    <script src="js/app.js"></script>
</body>

</html>