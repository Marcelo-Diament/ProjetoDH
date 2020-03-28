<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>SurfWin</title>

</head>

<body>

  <!--Inicio do NAV MENU-->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="index.php">Home</a>
      <h3>| </h3>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="produtos.php"> Produtos</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="quem-somos.php">Quem somos</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="contato.php">Contato</a>
          </li>
        </ul>
        <!--Botão de login-->
        <form class="form-inline my-2 my-lg-0">
          <button class="btn my-2 my-sm-0" type="button"><img src="css/img/header/login.png" height="35" width="35" alt="botão de LogIn" data-toggle="modal" data-target="#exampleModal"></button>

          <!--Botões do carrinho de compra-->
          <button class="btn my-2 my-sm-0" type="submit"><img src="css/img/header/carrinho.png" height="35" width="35" alt="botão do carrinho"></button>
        </form>
      </div>
    </nav>
  </header>

  <!--Inicio do MAIN-->
  <main>
    <h1 id="BemVindo">Bem vindo(a) ao SurfWin!</h1>
  </main>

  <!--Inicio do FOOTER-->
  <footer class="fixed-bottom ">
    <img src="css/img/footer/logo-branco-footer.png" height="40px">
    <p class="Copyright">&copy; Copyright Surf Win - 2020</p>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </footer>

</body>

</html>