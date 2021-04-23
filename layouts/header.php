<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Restaurante</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><i class="bi bi-house-door"></i>Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="productos.php"><i class="bi bi-cart-check"></i>Productos</a>
      </li>
      <?php
      if (!isset($_SESSION['usuario'])) {
      ?>
        <li class="nav-item">
          <a class="nav-link" href="login.php"><i class="bi bi-people"></i>Iniciar Sessión</a>
        </li>
      <?php
      }
      ?>

      <?php
      if (!isset($_SESSION['usuario'])) {
      } else {
      ?>
        <li class="nav-item">
          <a class="nav-link" href="loginPage.php"><i class="bi bi-person-circle"></i><?php echo $_SESSION['usuario']; ?></a>
        </li>
        <form method="post">
          <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" name="CerrarSession">Cerrar Sessión</button>
        </form>
      <?php
      }
      ?>
      <?php
        if(isset($_POST['CerrarSession'])){
          include_once 'php/functions.php';
          cerrarSession();
        }
      ?>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>