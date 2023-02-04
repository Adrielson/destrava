<?php

//puxando a conexao do arquivo conexao.php
require 'conexao.php';

session_start();


// exibir as informações de contato do usuario na pagina professor
$id_usuario = $_SESSION['idUsuario'];




// cadastrando dados do professor
if (isset($_POST['cadastrar'])) {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $bio = $_POST['bio'];
    $titulo = $_POST['titulo'];
    $curso = $_POST['curso'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $conn->autocommit(false);

try {
   // Executar a primeira consulta para salvar dados na tabela usuarios
    if ($nome != null) {
      $stmt = $conn->prepare("UPDATE usuarios SET nome = ? WHERE id = ?");
      $stmt->bind_param("si", $nome, $id_usuario);
      $stmt->execute();
   }
    if ($telefone != null) {
      $stmt = $conn->prepare("UPDATE usuarios SET telefone = ? WHERE id = ?");
      $stmt->bind_param("si", $telefone, $id_usuario);
      $stmt->execute();
   }

   // Executar a segunda consulta para salvar dados na tabela usuariosProfessor
    if ($bio != null) {
      $stmt = $conn->prepare("UPDATE usuariosprofessor SET bio = ? WHERE id = ?");
      $stmt->bind_param("si", $bio, $id_usuario);
      $stmt->execute();
   }
    if ($titulo != null) {
      $stmt = $conn->prepare("UPDATE usuariosprofessor SET titularidade = ? WHERE id = ?");
      $stmt->bind_param("si", $titulo, $id_usuario);
      $stmt->execute();
   }
    if ($curso != null) {
      $stmt = $conn->prepare("UPDATE usuariosprofessor SET formacao_curso = ? WHERE id = ?");
      $stmt->bind_param("si", $curso, $id_usuario);
      $stmt->execute();
   }

   // Executar a terceira consulta para salvar dados na tabela enderecos
    if ($rua != null) {
      $stmt = $conn->prepare("UPDATE enderecos SET rua = ? WHERE id = ?");
      $stmt->bind_param("si", $rua, $id_usuario);
      $stmt->execute();
   }
    if ($bairro != null) {
    $stmt = $conn->prepare("UPDATE enderecos SET bairro = ? WHERE id = ?");
    $stmt->bind_Param('si', $bairro, $id_usuario);
    $stmt->execute();
 }
    if ($cidade != null) {
    $stmt = $conn->prepare("UPDATE enderecos SET cidade = ? WHERE id = ?");
    $stmt->bind_Param('si', $cidade, $id_usuario);
    $stmt->execute();
 }
    if ($cep != null) {
    $stmt = $conn->prepare("UPDATE enderecos SET cep = ? WHERE id = ?");
    $stmt->bind_Param('si', $cep, $id_usuario);
    $stmt->execute();
 }

 // Comit a transação
 $conn->commit();

 // Redirecionar o usuário para a página de perfil
 echo "<script> alert('Seus dados foram cadastrados com sucesso!'); </script>";
 header("Location: area-professor.php");

  } catch (Exception $e) {
    // Caso algum erro ocorra, desfazer todas as modificações
    $conn->rollBack();
    echo "Erro: " . $e->getMessage();
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
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/editar-perfil.css">
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

                            <button class="btn-nova-foto" type="button">nova imagem</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">

                    <div class="card mb-4">
                        <div class="card-header">Detalhes da conta</div>
                        <div class="card-body">
                            <form action="" method="post">

                                <div class="row gx-3 mb-3">

                                    <div class="col-md-6">
                                        <label  class="small mb-1" for="inputFirstName">Nome</label>
                                        <input  class="form-control" name="nome" id="inputFirstName" type="text"
                                            placeholder="Digite seu nome">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputPhone">Telefone</label>
                                        <input class="form-control" name="telefone" id="inputPhone" type="tel"
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
                                    <input class="form-control" name="bio" id="inputUsername" type="text"
                                        placeholder="Fale sobre sua formação, habilidades e competências">
                                </div>

                                <div class="row gx-3 mb-3">

                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputOrgName">Título (Técnico, Graduado, Mestre,
                                            Doutor)</label>
                                        <input class="form-control" name="titulo" id="inputOrgName" type="text"
                                            placeholder="Digite seu grau de formação">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputLocation">Curso</label>
                                        <input class="form-control" name="curso" id="inputLocation" type="text"
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
                                        <input class="form-control" name="rua" id="inputOrgName" type="text"
                                            placeholder="Informe a rua">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputLocation">Bairro</label>
                                        <input class="form-control" name="bairro"  id="inputLocation" type="text"
                                            placeholder="Informe seu bairro">
                                    </div>
                                </div>

                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputOrgName">Cidade </label>
                                        <input class="form-control" name="cidade" id="inputOrgName" type="text"
                                            placeholder="Informe a rua">
                                    </div>

                                    <div class="col-md-6">
                                        <label  class="small mb-1" for="inputLocation">Estado</label>
                                        <input class="form-control" name="estado" id="inputLocation" type="text"
                                            placeholder="Informe seu bairro">
                                    </div>
                                </div>

                                <input type="submit" name="cadastrar" class="btn" value="Cadastrar">
                                <button class="btn-voltar" type="button">Voltar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">

        </script>

        <script>
            $('.btn-voltar').click(function () {
                window.location = 'area-professor.php'
            })
        </script>
    </body>

</html>
