<nav class="navbar fixed-top navbar-expand-md navbar-dark bg-danger pt-1 pb-1 shadow">
  <a class="navbar-brand " href="index.php?action=exibeReceitas.php"><i class="fas fa-cookie-bite"></i> Share Recipes</a>
  <ul class="navbar-nav mr-auto">
    <li class="nav-item">
      <?php if ($_SESSION): ?>
      <a href="index.php?action=cadastrarReceita.php" class="btn btn-sm btn-outline-light"><i class="fas fa-plus"></i> Escrever Nova Receita</a>
    <?php endif; ?>
    </li>
  </ul>

  <?php if($_SESSION && $_SESSION['id_perfil'] == 1):?>
    <a class="btn btn-sm btn-outline-light mr-sm-2" href="index.php?action=admin/index_admin.php"><i class="fas fa-user-ninja"></i> Admin</a>
  <?php endif;  ?>
  <?php if ($_SESSION): ?>
    <a href="index.php?action=editarUsuario.php" class="btn btn-sm btn-outline-light mr-sm-2"><i class="fas fa-user"></i> Perfil</a>
  <a class="btn btn-sm btn-outline-light mr-sm-2" href="sair.php"><i class="fas fa-sign-out-alt"></i> Sair</a>
<?php endif; ?>
<?php if (!$_SESSION): ?>
  <a class="btn btn-sm btn-outline-light mr-sm-2" href="login.php"><i class="fas fa-user"></i> Login</a>
<?php endif; ?>
</nav>
