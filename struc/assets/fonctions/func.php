<?php

    function pageExist($page,$arr,$u){
        if (isset($page)){
            if (array_key_exists($page,$arr)){
                include $u.$page.'.php';
            }
        }
    }

?>