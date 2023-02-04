<?php

//puxando a conexao do arquivo conexao.php
require 'conexao.php';


// verificando se existe a variavel "query"
if (isset($_POST['query'])) {
    $query = $_POST['query'];

    // montando a consulta sql para buscar pela palavra chave no banco
    $sql = "SELECT pacotes.*, usuarios.nome as nome_professor
    FROM pacotes
    JOIN usuarios ON pacotes.professor = usuarios.id
    WHERE NOT EXISTS (
    SELECT *
    FROM pedidos
    WHERE pedidos.pacote = pacotes.idPacote AND pedidos.status = 'ocupado')
    AND (pacotes.nome LIKE '%$query%')";

    $result = mysqli_query($conn, $sql);

     // verificando se existe algum resultado na consulta realizada
if (mysqli_num_rows($result) > 0) {
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    foreach ($rows as $row) { ?>
        <div class="aula">
        <form action="lista-pacotes-solicitados.php" method="post">
        <input type="hidden" name="id_pacote" value='<?php echo $row['idPacote']; ?>'>
            <div class="sp-author">
                <a href="#" class="sp-author-avatar">
                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
                </a>
                <p>
                    <?php echo $row["nome_professor"]; ?>
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
        <div class="sp-content">
        <input type="submit" name="solicitar" class="btn-solicitar" value="Solicitar">
                    <i class="fa-solid fa-plus"></i>
            </div>
          </form>
        <?php
    }
  } else {
    ?>
    <div class="sp-content">
        <div class="titulo-anuncio">Nenhum pacote encontrado para sua busca</div>
    </div>
    <?php
   }
 }




if (!isset($_POST['query'])){
    $sql = "SELECT pacotes.*, usuarios.nome as nome_professor
    FROM pacotes
    JOIN usuarios ON pacotes.professor = usuarios.id
    WHERE NOT EXISTS (
    SELECT *
    FROM pedidos
  WHERE pedidos.pacote = pacotes.idPacote AND pedidos.status = 'ocupado')";


 $result = mysqli_query($conn, $sql);
 if (mysqli_num_rows($result) > 0) {
     $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
     foreach ($rows as $row) { ?>
         <div class="aula">
         <form action="lista-pacotes-solicitados.php" method="post">
         <input type="hidden" name="id_pacote" value='<?php echo $row['idPacote']; ?>'>
             <div class="sp-author">
                 <a href="#" class="sp-author-avatar">
                     <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
                 </a>
                 <p>
                     <?php echo $row["nome_professor"]; ?>
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
             <div class="sp-content">
                    <input type="submit" name="solicitar" class="btn-solicitar" value="Solicitar">
                    <i class="fa-solid fa-plus"></i>
            </div>
            </form>
        </div>
         <?php
     }
 } else {
     ?>
     <div>
         <div class="titulo-anuncio">Não há pacotes cadastrados</div>
     </div>
     <?php
 }









}

 ?>
<head>
    <link rel="stylesheet" href="css/area-aluno2.css">
</head>
