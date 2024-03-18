<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO FORUM</title>
</head>
<body>
    <h1>POO Forum</h1>
<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});

//===================== Members =====================// 
$member1 = new Member("Flibouche", "MdP1", "flibouche@stagiaire-elan.fr"); 
$member2 = new Member("Mikeheul", "MdP2", "mikeheul@elan-formation.fr");
$member3 = new Member("Quentin", "MdP3", "quentinm@elan-formation.fr");

//===================== Topics =====================// 


//===================== Posts =====================// 



//===================== Actions =====================//
echo $member1->getInfos();
echo $member2->getInfos();
echo $member3->getInfos();




?>
</body>
</html>