<?php include_once 'config/config.php';?>
<?php
    include_once 'template/template-parts/header.php';
?>
<?php 
    if (isset($_GET['page'])){
        if ($_GET['page']=='accueil'){
            include 'accueil.php';
        }
        elseif ($_GET['page']=='produit'){
            include 'produit.php';
        }
        elseif ($_GET['page']=='blog'){
            include 'blog.php';
        }
        elseif ($_GET['page']=='contact'){
            include 'contact.php';
        }
        elseif ($_GET['page']=='about'){
            include 'about.php';
        }
        else{
            include 'index.php';
        }    
    }
?>


<?php
    include 'template/template-parts/footer.php';
?>
