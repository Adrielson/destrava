<header id="header" class="">
  <!-- Imagem e texto -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid col-11 m-auto">
      <a class="navbar-brand" href="index.php"><img src="img/logo2.png" width="30" />destrava</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <?php include_once 'verificaLogin.php'; ?>
          <!-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link active" href="area-professor.php">Professor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="area-aluno.php">Aluno</a>
          </li>
          <li class="nav-item">
            <button class="btn-entrar">
              Entrar <i class="fa-solid fa-arrow-right-to-bracket"></i>
            </button>
          </li>
          <li class="nav-item">
            <button class="btn-cadastrar">
              Cadastre-se <i class="fa-solid fa-user-plus"></i>
            </button>
          </li>
      </div>
    </div>
  </nav>
</header>
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