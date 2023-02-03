<?php
if (!isset($_SESSION)) {
    session_start();
}

  // Receber dados do formulário
  if (isset($_SESSION['idUsuario'])) {
    $logado = $_SESSION['nome'];
    echo "Olá, ".$logado;
    echo "[
        <a href='logout.php'>Sair</a>
      ]";
}
?>
