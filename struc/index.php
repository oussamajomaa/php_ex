<?php include_once 'config/config.php';


    include_once 'template/template-parts/header.php';

    // if (isset($_GET['page'])){
    //    if (array_key_exists($_GET['page'],file)) {
    //         include url.$_GET['page'].'.php';
    //    }
    // }
    include 'assets/fonctions/func.php';
    pageExist($_GET['page'],file,url);



    include 'template/template-parts/footer.php';
?>
