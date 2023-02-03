<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">



    <title>Destrava</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://netdna.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/editar-professor.css">
    <!-- Importação kit de icones fontawesome -->
    <script src="https://kit.fontawesome.com/84532cf285.js" crossorigin="anonymous"></script>
    <script src="js/all.min.js"></script>
    <script src="js/jquery.js"></script>
</head>

<body>

    <body>
        <?php
        include_once 'header-logado.php';
        ?>

        <div class="container">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card mb-4 mb-xl-0">
                        <div class="card-header">Foto do perfil</div>
                        <div class="card-body text-center">

                            <img class="img-account-profile rounded-circle mb-2"
                                src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">

                            <div class="small font-italic text-muted mb-4">Alterar imagem de perfil</div>

                            <button class="btn-editar" type="button">nova imagem</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">

                    <div class="card mb-4">
                        <div class="card-header">Detalhes da conta</div>
                        <div class="card-body">
                            <form>

                                <div class="row gx-3 mb-3">

                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputFirstName">Nome</label>
                                        <input class="form-control" id="inputFirstName" type="text"
                                            placeholder="Digite seu nome">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputPhone">Telefone</label>
                                        <input class="form-control" id="inputPhone" type="tel"
                                            placeholder="(DDD) 00000-0000">
                                    </div>

                                    <!-- <div class="col-md-6">
                                        <label class="small mb-1" for="inputPrimeiroNome">Sobrenome</label>
                                        <input class="form-control" id="inputPrimeiroNome" type="text"
                                            placeholder="Digite seu sobrenome">
                                    </div> -->
                                </div>

                                <div class="mb-3">
                                    <label class="small mb-1" for="inputUsername">Biografia</label>
                                    <input class="form-control" id="inputUsername" type="text"
                                        placeholder="Fale subre sua formação, habilidades e competências">
                                </div>

                                <div class="row gx-3 mb-3">

                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputOrgName">Título (Técnico, Graduado, Mestre,
                                            Doutor)</label>
                                        <input class="form-control" id="inputOrgName" type="text"
                                            placeholder="Digite seu grau de formação">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputLocation">Curso</label>
                                        <input class="form-control" id="inputLocation" type="text"
                                            placeholder="Informe sua formação">
                                    </div>
                                </div>

                                <!-- <div class="mb-3">
                                    <label class="small mb-1" for="inputEmailAddress">Email</label>
                                    <input class="form-control" id="inputEmailAddress" type="email"
                                        placeholder="Alterar email">
                                </div> -->
                                <hr>
                                <div>Informações de endereço</div>
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputOrgName">Rua </label>
                                        <input class="form-control" id="inputOrgName" type="text"
                                            placeholder="Informe a rua">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputLocation">Bairro</label>
                                        <input class="form-control" id="inputLocation" type="text"
                                            placeholder="Informe seu bairro">
                                    </div>
                                </div>

                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputOrgName">Cidade </label>
                                        <input class="form-control" id="inputOrgName" type="text"
                                            placeholder="Informe a rua">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputLocation">Estado</label>
                                        <input class="form-control" id="inputLocation" type="text"
                                            placeholder="Informe seu bairro">
                                    </div>
                                </div>

                                <button class="btn-editar" type="button">Salvar</button>
                                <button class="btn-editar" type="button">Voltar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">

        </script>
    </body>

</html>