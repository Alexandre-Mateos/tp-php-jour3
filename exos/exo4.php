<?php
$sum = 0;

if(
      ((isset($_GET['a']) && strlen($_GET['a']) > 0)
      && (isset($_GET['b']) && strlen($_GET['b']) > 0))
){
      switch ($_GET['op']){
      case 'add':
            $sum = $_GET['a'] + $_GET['b'];
            break;
      case 'sub':
            $sum = $_GET['a'] - $_GET['b'];
            break;
      case 'mul':
            $sum = $_GET['a'] * $_GET['b'];
            break;
      case 'div':
            if($_GET['b'] === 0 ){
                  $sum = $_GET['a'] / $_GET['b'];
            }else{
                  $sum = "division par 0 impossible";
            }

            break;}
}else{
      $sum = "somme impossible";
}

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
      <p> Nombre 1 : <?php echo $_GET['a']?></p>
      <p> Nombre 2 : <?php echo $_GET['b']?></p>
      <p><?php echo $sum ?></p>
</body>
</html>