<?php include 'config/config.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pierre, Paul et Jacquot</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?=css;?>/style.css">
</head>

<body>
   

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a id="logo" class="navbar-brand" href="index.html"><img src="<?=photo;?>/bird.jpg" alt="logo" width="50px;"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="index.php?page=accueil">ACCUEIL</a>
                </li>
                <li>
                    <a href="produit.php?page=produit">NOS PRODUITS</a>
                </li>
                <li>
                    <a href="blog.php?page=blog">BLOG</a>
                </li>
                <li>
                    <a href="contact.php?page=contact">CONTACT</a>
                </li>
                <li>
                    <a href="about.php?page=about">A PROPOS</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

