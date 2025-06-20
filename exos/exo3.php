<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
      <?php if(isset($_GET['couleur']) && strlen($_GET['couleur'])) : ?>
      <p style=" color :<?php echo $_GET['couleur'] ?>">Ceci est un texte coloré</p>
      <?php else : ?>
      <p style="color : black">Ceci est un texte coloré</p>
      <?php endif; ?>
</body>
</html>