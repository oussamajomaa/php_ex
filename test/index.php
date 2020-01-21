
<?php


    $pdo = new PDO ('mysql:host=localhost;dbname=gens;charset=utf8', 'step25', 'step25');
    if ($pdo){
        echo "<h1>","hi","</h1>";
    }
    $req=$pdo->prepare('SELECT * FROM personne');
    $req->execute();
    // $responses=$req->fetchAll();
    // $req->CloseCursor();

    // foreach($responses as $response){
    //     echo "<h1>",$resposne['prenom'],"</h1>";
    //     echo"<br>";
    //     echo "$responses";
    // }

    while ($row = $req->fetch()){
        echo "<h1>",$row['prenom'],"</h1>";
        echo "<h1>",$row['nom'],"</h1>";
    }
?>
