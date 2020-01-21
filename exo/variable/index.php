<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        $hello = "Hello"; 
        //Afficher la variable $hello//
        $world = "World";

        echo gettype($hello), "<br>";

        $hw=$hello.', '.$world.' !';
        echo '<h1>';
        echo $hw;
        echo '</h1>';

        $montantHt=15.2;
        $montantHt=15.2*20/100;
        echo "TVA est égale à".' '.$montantHt;

    ?>
</body>
</html>