<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>loto</title>
    <style>
        body {
            display: flex;
            flex-flow: row wrap;
            justify-content: center;
        }

        article {
            width: 22%;
            display: flex;
            flex-flow: column;
            margin: auto;
            text-align: center;
            background: #dfdfdf;
            margin: 10px;
        }

        div,
        h1 {

            margin: 10px;
            width: 94%;
            text-align: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-left: 10px;
            padding-right: 10px;

        }

        .res {
            background: black;
            color: white;
            width: 50%;
        }

        h1 {
            background: black;
            color: white;
            width: 90%;
        }

        section {
            width: 90%;
            display: flex;
            flex-flow: column;
            align-items: center;
            margin: auto;
            margin: 10px;
            text-align: center;
        }

        h2 {
            color: yellow;
        }

        .perdu {
            color: red;
        }
    </style>
</head>

<body>

    <?php
    echo "<section><h1>Mes combinaisons</h1><div>";
    $myNumber = [1, 16, 21, 28, 30];
    var_dump($myNumber);
    echo "</div></section>";

    // une fonction pour remplir un tableau associatif de 1 à 49
    function fill()
    {
        $tab = [];
        $i = 1;
        while ($i < 50) {
            $tab += array($i => $i);
            $i++;
        }
        return $tab;
    }

    // une fonction qui va choisir 5 numéros aliatoires 'n' fois
    function tirage($n, $combinaison)
    {

        $all = [];
        for ($i = 1; $i <= $n; $i++) {
            // on appelle la fonction fill()
            $t = fill();
            // on choisit 5 numéros aliatoire et on les met dans tableau
            $r = (array_rand($t, 5));
            // chaque fois qu'on crée un tableau de 5, on l'ajoute à un autre tableau
            array_push($all, $r);
            echo "<article>";
            echo "<h1>Tirage numero $i </h1>";
            echo "<div>";
            var_dump($r);
            echo "</div>";
            echo "</article>";
        }
        $merge = [];
        for ($i = 0; $i < count($all); $i++) {
            $resultat = [];
            for ($k = 0; $k < count($all[$i]); $k++) {
                // on fusionne les sous tableaux de 5 dans un seul tableau
                array_push($merge, $all[$i][$k]);
                if (($combinaison[$k]) == $all[$i][$k]) {
                    array_push($resultat, $all[$i][$k]);
                }
            }
            $count = count($resultat);
            echo "<section><div class='res'>Vous avez $count numéros";
            for ($k = 0; $k < $count; $k++) {
                echo "<h3> $resultat[$k] <h3>";
            }
            if ($count >= 2) {
                echo "<h2> vous avez gagné</h2>";
            } else {
                echo "<h2 class='perdu'> vous avez perdu</h2>";
            }
            echo "</div></section>";
        }


        echo "<section><h1>les statistiques des numéros les plus sortis</h1><div>";
        var_dump($merge);
        $countValue = array_count_values($merge);
        
        sort($countValue);
        var_dump($countValue);

        echo "</div></section>";
    }

    $tabTirage = tirage(8, $myNumber);

    ?>

</body>

</html>