<?php

//puxando a conexao do arquivo conexao.php
require 'conexao.php';

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
                <p>
                    <?php echo $row["nome"]; ?>
                </p>
            </div>
            <div class="sp-content">
                <div class="titulo-anuncio">
                    <?php echo $row["produto"]; ?>
                </div>
                <p class="sp-paragraph mb-0">
                    <?php echo $row["descricao"]; ?>
                </p>
                <div class="valor-anunc">R$
                    <?php echo $row["preco"]; ?>
                </div>
            </div>
            <hr>
            <div class="sp-content">
                <h4 class="subtitulo-anuncio">Número de solicitações</h4>
                <div class="valor-anunc">
                    0 aulas solicitadas
                </div>
                <button class="btn-solicitar">
                    Liberar <i class="fa-solid fa-plus"></i>
                </button>
            </div>
        </div>
        <?php
    }
} else {
    ?>
    <div>
        <div class="titulo-anuncio">Você não possui anúncios cadastrados</div>
    </div>
    <?php
}
?>

<head>
    <link rel="stylesheet" href="css/area-professor2.css">
</head>