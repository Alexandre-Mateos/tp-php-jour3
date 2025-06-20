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
      <?php if((isset($_GET['a']) && strlen($_GET['a']))
            && (isset($_GET['b'])) && strlen($_GET['b'])) : ?>
            <p> Nombre 1 : <?php echo ($_GET['a']) ?></p>
            <p> Nombre 2 : <?php echo ($_GET['b']) ?></p>
            <p> Somme : <?php echo ($_GET['a'])+($_GET['b']) ?></p>
      <?php else : ?>
            <p> Somme impossible il manque une donnée</p>
      <?php endif ?>
</body>
</html>