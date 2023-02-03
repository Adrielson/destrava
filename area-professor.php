<?php

//puxando a conexao do arquivo conexao.php
require 'conexao.php';



session_start();

  // Receber dados do formulário
  if (isset($_POST['criar'])) {
  $titulo = $_POST['titulo'];
  $descricao = $_POST['descricao'];
  $valor = $_POST['valor'];

  // Preparar a consulta SQL
  $sql = "INSERT INTO pacotes (produto, descricao, preco, professor)
VALUES ('$titulo', '$descricao', '$valor', '".$_SESSION['idUsuario']."')";

  // Executar a consulta e verificar se foi bem-sucedida
  if (mysqli_query($conn, $sql)) {
    echo "<script> alert('Pacote cadastrado com sucesso!');
            </script>";
  }
  }

?>





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
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/area-professor.css">
    <!-- Importação kit de icones fontawesome -->
    <script src="https://kit.fontawesome.com/84532cf285.js" crossorigin="anonymous"></script>
    <script src="js/all.min.js"></script>
    <script src="js/jquery.js"></script>
</head>

<body>

    <body>
        <?php
        include_once 'header.php';
        ?>

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <div class="container">
            <div class="profile-wrapper">
                <div class="profile-section-user">
                    <div class="profile-info-brief p-3"><img class="img-fluid user-profile-avatar"
                            src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
                        <div class="text-center">
                            <h5 class="text-uppercase mb-4">Adrielson</h5>
                            <p class="text-muted fz-base">Graduando em Bacharelado em Ciência da Computação pelo
                                Instituto de Engenharia e Geociências da Universidade Federal do Oeste do Pará (UFOPA),
                                em Santarém, PA, Brasil (2017-2022). Bolsista do Programa de Educação Tutorial (PET) do
                                Ministério da Educação (MEC). Atualmente é membro no Grupo de Estudo e Pesquisa do
                                Laboratório de Computação Aplicada (LACA-UFOPA) desenvolvendo projetos de análise de
                                redes sociais. </p>
                        </div>
                    </div>

                    <hr class="m-0">
                    <div class="hidden-sm-down">
                        <hr class="m-0">
                        <div class="profile-info-contact p-4">
                            <h6 class="mb-3">Informações de Contato</h6>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td><strong>Email:</strong></td>
                                        <td>
                                            <p class="text-muted mb-0"><a href="/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="e59784918d80888096a58288848c89cb868a88">[email&#160;protected]</a>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Telefone:</strong></td>
                                        <td>
                                            <p class="text-muted mb-0">9399199-9999</p>
                                        </td>
                                    </tr>
                                    <tr>
                                </tbody>
                            </table>
                        </div>

                        <hr class="m-0">
                        <div class="profile-info-general p-4">
                            <h6 class="mb-3">Informações Gerais</h6>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td><strong>Título:</strong></td>
                                        <td>
                                            <p class="text-muted mb-0">Bacharel</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Curso</strong></td>
                                        <td>
                                            <p class="text-muted mb-0">Ciência da computação</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Intituição</strong></td>
                                        <td>
                                            <p class="text-muted mb-0">Ufopa</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Cidade</strong></td>
                                        <td>
                                            <p class="text-muted mb-0">Santarém</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <hr class="m-0">
                    </div>

                </div>

                <div class="profile-section-main">
                    <div class="tab-content profile-tabs-content">
                     <form action="" method="post">
                        <div class="card mb-3">
                            <h5 class="titulos-area-anuncios">Criar anúncio</h5>
                            <div class="post-editor">
                                <h6 class="form-cria-anuncio">Título da aula</h6>
                                <label class="label-input" for="">
                                    <input type="titulo" name="titulo" placeholder="Título">
                                </label>
                                <h6 class="form-cria-anuncio">Descrição</h6>
                                <textarea name="descricao" id="post-field" class="post-field"
                                    placeholder="O que seu aluno irá aprender?"></textarea>
                                <h6 class="form-cria-anuncio">Valor</h6>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">R$</span>
                                    </div>
                                    <input type="text" class="form-control" name="valor" aria-label="Amount (to the nearest dollar)">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <button class="btn btn-success px-4 py-1" type="submit" name="criar">Criar anúncio</button>
                                </div>

                            </div>
                        </div>
                     </form>

                        <div class="meus-anuncios">
                            <div class="card mb-3">
                            <h5 class="titulos-area-anuncios">Meus anúncios</h5>
                            <?php
                              $id_usuario = $_SESSION['idUsuario'];
                                $sql = "SELECT * FROM pacotes pac
                                JOIN usuarios pro ON pac.professor = pro.id WHERE pac.professor ='$id_usuario'";

                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                                                    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                                                foreach ($rows as $row) { ?>
                                                                                            <div class="aula">
                                                                                                <div class="sp-author">
                                                                                                <a href="#" class="sp-author-avatar">
                                                                                                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
                                                                                                </a>
                                                                                                <p><?php echo $row["nome"]; ?></p>
                                                                                                </div>
                                                                                                <div class="sp-content">
                                                                                                <div class="titulo-anuncio"><?php echo $row["produto"]; ?></div>
                                                                                                <p class="sp-paragraph mb-0"><?php echo $row["descricao"]; ?></p>
                                                                                                <div class="valor-anunc">R$ <?php echo $row["preco"]; ?></div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <?php
                                                                                        }
                                                            } else {
                                        ?>
                                        <div>
                                        <div class="aula">
                                                <div class="sp-author">
                                                <a href="#" class="sp-author-avatar">
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
                                                </a>
                                                <p>- - -</p>
                                                </div>
                                                <div class="sp-content">
                                                <div class="titulo-anuncio">Você não possui anúncios cadastrados</div>
                                                <p class="sp-paragraph mb-0">- - -</p>
                                                <div class="valor-anunc">R$ - - -</div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script type="text/javascript">

        </script>
    </body>

</html>








