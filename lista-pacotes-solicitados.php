<?php

//puxando a conexao do arquivo conexao.php
require 'conexao.php';



if (isset($_POST['solicitar'])) {
    $id_usuario = $_SESSION['idUsuario'];
    $id_pacote = $_POST['id_pacote'];
var_dump($id_pacote);
    // Preparar a consulta SQL
    $sql = "INSERT INTO pedidos (aluno, pacote, status)
    VALUES ('$id_usuario', '$id_pacote','ocupado')";

    // Executar a consulta e verificar se foi bem-sucedida
    if (mysqli_query($conn, $sql)) {
      echo "<script> alert('Pedido realizado com sucesso!');
            </script>";
      header("Location: area-aluno.php");
    }
  }




?>
