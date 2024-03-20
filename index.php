<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>POO FORUM</title>
</head>

<body>
    <h1>POO Forum</h1>
    <?php

    spl_autoload_register(function ($class_name) {
        require 'classes/' . $class_name . '.php';
    });

    //===================== Categories =====================// 
    $c1 = new Category("Blabla");
    $c2 = new Category("Présentation");
    $c3 = new Category("Astuces et aides dev web");
    $c4 = new Category("Vos book Github");

    //===================== Members =====================// 
    $member1 = new Member("Flibouche", "MdP1", "flibouche@stagiaire-elan.fr");
    $member2 = new Member("Mikeheul", "MdP2", "mikeheul@elan-formation.fr");
    $member3 = new Member("Quentin", "MdP3", "quentinm@elan-formation.fr");

    //===================== Topics =====================// 
    $t1 = new Topic($member1, $c2, "Je suis nouveau !", "26-02-2024 14:00", false);
    $t2 = new Topic($member2, $c1, "Bonne journée !", "01-03-2024 08:30", false);
    $t3 = new Topic($member3, $c3, "Attention à l'héritage !", "20-03-2024 09:00", true);
    $t4 = new Topic($member2, $c3, "Pensez à bien commit !", "17-03-2024 10:30", true);

    //===================== Posts =====================// 

    $p1 = new Post($member1, $t1, "Bonjour, je suis nouveau stagiaire à Elan Formation et j'espère atteindre le titre !", "26-02-2024 14:00");
    $p2 = new Post($member2, $t2, "Puisse le code être avec vous !", "01-03-2024 08:30");
    $p3 = new Post($member3, $t3, "Si vous faites de la POO, ne mettez pas de l'héritage quand il n'en faut pas !", "20-03-2024 09:00");
    $p4 = new Post($member2, $t4, "Si coupure de courant = adieu !", "17-03-2024 10:30");
    $p5 = new Post($member3, $t1, "Bienvenue chez Elan Formation !", "26-02-2024 09:25");

    //===================== Actions =====================//
    echo $member1->getInfos();
    echo $member2->getInfos();
    echo $member3->getInfos();

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";


    echo $c1->getInfos();
    echo $c2->getInfos();
    echo $c3->getInfos();
    echo $c4->getInfos();

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo $t1->getInfos();
    echo $t2->getInfos();
    echo $t3->getInfos();

    ?>
</body>

</html>