<?php
include '../../Core/Model.php';

?>

<!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="styles/css/bootstrap.min.css">
      <link rel="stylesheet" href="styles/css/styles.css">
      <link rel="stylesheet" href="styles/fontawesome/css/all.css">
      <script type="text/javascript" src="styles/fontawesome/js/all.js"/></script>
      <script type="text/javascript" src="styles/js/gamers.js"/></script>
      <style>
        body{
          padding-top: 4em;
          font-family: ubuntu, sans-serif;
        }
      </style>
      <title>Gamers Club</title>
    </head>
    <body>
      <header>
        <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark pt-1 pb-1 shadow">
            <a class="navbar-brand " href="login.php"><i class="fas fa-gamepad" aria-hidden="true"></i> Gamer Store</a>
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
              </li>
            </ul>
            <a class="btn btn-sm btn-outline-warning"href="sair.php"><i class="fas fa-sign-out-alt"></i> Sair</a>
          </nav>
      </header>
