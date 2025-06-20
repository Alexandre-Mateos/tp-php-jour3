<?php
var_dump($_GET['item'][0]);
?>

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
<ul>
      <?php foreach ($_GET['item'] as $fruts) : ?>
            <?php if (isset($_GET['item']) && strlen($fruts) > 0) : ?>
                  <li> <?php echo $fruts ?></li>
            <?php endif; ?>
      <?php endforeach; ?>
</ul>
</body>
</html>