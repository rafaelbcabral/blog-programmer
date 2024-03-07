<!-- Helpers e  Posts -->
<?php
include_once("../helpers/url.php");
include_once("../data/posts.php");
include_once("../data/categorias.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Programming</title>
  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- CSS Aplicação -->
  <link rel="short icon" href="img/logo.svg" />
  <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
</head>

<body>
  <header>
    <a href="<?= $BASE_URL ?>" id="logo">
      <img src="<?= $BASE_URL ?>/img/logo.svg" alt="Blog Codar">
    </a>
    <nav>
      <ul id="navbar">
        <li><a href="index.php" class="nav-link">Home</a></li>
        <li><a href="https://www.w3schools.com/" class="nav-link">Categorias</a></li>
        <li><a href="https://www.linkedin.com/in/rafael-b-cabral/" class="nav-link">Sobre</a></li>
        <li><a href="contact.php" class="nav-link">Contato</a></li>
      </ul>
    </nav>
  </header>