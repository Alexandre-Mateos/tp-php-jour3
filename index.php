<?php
// superglobal

//SUPERGLOBAL

//$_SERVER
//$_SERVER => sert à avoir des infos sur la requetes en cours (ip du user, le navigateur etc)...
// comme remote ADDR qui récupère l'adresse IP

//var_dump($_SERVER);

//$_GET
//avec get je peux récupérer les variables passé en URL comme ceci: /?toto=allo&name=jules (à mettre
//après localhost dans notre cas).
//Là je viens de passer en url deux variables tote et jules avec les valeurs 'allo' & 'jules
//var_dump($_GET) me renvois n tableau clé => valeur de toto et jules.
var_dump($_GET);
//si j'essaye de récupérer une variable qui n'existe pas j'aurais une erreur:
//echo ($_GET['name']);

// je peux utiliser le mot clé isset pour vérifier si ma variable à la clé 'name' existe
//permet de vérifier si la variable name est bien passé dans l'url
//http://localhost:8080/?toto=allo => non
//http://localhost:8080/?name=jules => oui
if(isset($_GET['name'])){
      echo $_GET['name'];
}
if(isset($_GET['name'])){
      echo ($_GET['name']);
}


?>