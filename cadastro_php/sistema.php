<?php
    session_start();
    if((!isset($_SESSION['email']) == true) and  (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: telaLogin.php');
    }
    $logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Sistema</title>
    <style>
        body{
            margin: 0;
            height: 100vh;

            background-image: url("imagens/fundosistema.jpg");
            background-size: cover;       
            background-repeat: no-repeat; 
            background-position: center;

            font-family: 'Times New Roman', Times, serif;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: pink;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sistema</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <a href="sair.php" class="btn btn-danger me-5">Sair</a>
    </div>
  </div>
</nav>
<br><br>
    <?php
    echo "<h1> Bem vindo <u>$logado</u><h1>";
    ?>
</body>
</html>