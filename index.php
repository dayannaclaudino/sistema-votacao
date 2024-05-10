<?php
    include("db/conexao.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Votos</title>

    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

    

<nav class="navbar navbar-expand-lg navbar-dark bg-success px-0 py-3">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand">
      <img src="./img/logo.png" alt="logo" width="70" height="60" class="d-inline-block align-text-top">
      Sistema de Votação
    </a>
    <!-- Navbar toggle -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <!-- Nav -->
      <div class="navbar-nav mx-lg-auto">
        <a type="button" href="index.php?menuop=cadastroChapa" class="btn btn-outline-light mx-1" aria-current="page">Cadastra Chapa</a>
        <a type="button" href="index.php?menuop=consultaChapa" class="btn btn-outline-light mx-1">Consulta Chapa</a>
        <a type="button" href="index.php?menuop=votacao" class="btn btn-outline-light mx-1">Votação</a>
        <a type="button" href="index.php?menuop=relatorioVotacao" class="btn btn-outline-light mx-1">Relatório de Votação</a>
      </div>
    </div>
  </div>
</nav>
<main>
    <?php
    $menuop = (isset($_GET["menuop"]))?$_GET["menuop"]:"home";
    switch ($menuop) {
        case 'cadastroChapa':
            include("./cadastroChapa.php");
            break;
        case 'votacao':
            include("./votacao.php");
            break;
        case 'inserirChapa':
            include("./inserirChapa.php");
            break;
        case 'processarVoto':
            include("./processarVoto.php");
            break; 
        case 'consultaChapa':
            include("./consultaChapa.php");
            break;
        case 'relatorioVotacao':
            include("./relatorioVotacao.php");
            break;
        default:
            include("./home.php");
            break;
    }
    ?>
</main>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
