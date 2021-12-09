<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">

  <title>Estrutura de Dados</title>
</head>




<body class="fontemukta">
  <header>
    <nav class="navbar navbar-expand-lg navbar-light navcor">
      <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mobile_nav" aria-controls="mobile_nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="mx-2 logo" href="index.php"><i class="bi bi-terminal-fill"></i></a>
        <div class="collapse navbar-collapse sublinhado p-3 p-sm-0" id="mobile_nav">
          <a class="navbar-brand" href="index.php">Estrutura de Dados</a>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'dados.php') ? "disabled" : ''; ?>" href="dados.php">Estrutura de Dados</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'lista.php') ? "disabled" : ''; ?>" href="lista.php">Conceito de Lista</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'fila.php') ? "disabled" : ''; ?>" href="fila.php">Conceito de Fila</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'pilha.php') ? "disabled" : ''; ?>" href="pilha.php">Conceito de Pilha</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'arvore.php') ? "disabled" : ''; ?>" href="arvore.php">Conceito de Árvore</a>
            </li>

          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
            <button class="btn btn-outline-light" type="submit">Buscar</button>
          </form>
        </div>
      </div>
    </nav>
  </header>


  <br>