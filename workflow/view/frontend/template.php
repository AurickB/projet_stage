<?php 
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style3.css">
    <title>Site du stage</title>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <section id="top">
        <div class="content-wrapper">
            <nav class="navbar navbar-fixed-top">
                <h1 class="logo"><a href="index.php?page=main">
                        <div>centre <br>paramédical <br><i>les pyrénées - Muret</i></div>
                    </a></h1>
                <ul class="content">
                    <li class="">
                        <a href="index.php?page=actualite"><h1>actualités</h1> </a></li>
                    <li class="">
                        <a href="#osteopathe" class="js-scrollTo"><h1>ostéopathe</h1>
                            </a></li>
                    <li class="">
                        <a href="#infirmier" class="js-scrollTo"><h1>infirmiers libéraux</h1>
                            </a></li>
                    <li class="">
                        <a href="#sage-femme" class="js-scrollTo"><h1>sage femme</h1></a></li>
                    <li class="">
                        <a href="#psychologue" class="js-scrollTo"><h1>psychologue</h1></a></li>
                    <li class="">
                        <a href="#reflexologue" class="js-scrollTo"><h1>reflexologue</h1></a></li>
                    <li class="">
                        <a href="index.php?page=contact">contact</a></li>
                </ul>
            </nav>
            <button role="button" type="button" class="menu-toggle" aria-label="navigation">&#9776</button>
        </div>
    </section>
    <?= $content;?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</body>

</html>