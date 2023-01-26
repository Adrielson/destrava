<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- responsividade -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Destrava</title>

  <!-- Importação da fonte Work Sans do Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;500;800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="./css/styles.css">
  <link rel="stylesheet" href="css/header.css">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>


</head>

<body>
<?php
include_once 'header.php';
?>

  <content>
    <div class="apresentacao borda">Apresentação</div>
    <div class="area-aluno borda">Área do aluno</div>
    <div class="area-professor borda">Professores</div>
  </content>

  <footer class="borda">
    footer
  </footer>
</body>

<!-- Importação kit de icones fontawesome -->
<script src="https://kit.fontawesome.com/84532cf285.js" crossorigin="anonymous"></script>
<script src="js/all.min.js"></script>
<script src="js/jquery.js"></script>

<script>
  $('.btn-entrar').click(function () {
    window.location = 'entrar.php'
  })
</script>

<script>
  $('.btn-cadastrar').click(function () {
    window.location = 'entrar.php'
  })
</script>

</html>