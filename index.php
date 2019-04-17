<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- My font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- My css -->
    <link rel="stylesheet" href="style.css">
    <title>Googlefaq by Emanuele</title>
  </head>
  <body>
    <div class="container">
      <header>
        <div class="logo">
          <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_74x24dp.png" alt="">
          <h1>Privacy e Termini</h1>
        </div>
        <div class="menu">
          <ul>
            <li>Introduzione</li>
            <li>Norme sulla privacy</li>
            <li>Termini di servizio</li>
            <li>Tecnologie</li>
            <li class="selected">Domande frequenti</li>
            <li>Account Google</li>
          </ul>
        </div>
      </header>
      <div class="content">
        <?php
          include("print.php");
         ?>
      </div>
    </div>
  </body>
</html>
