<?php

class Template{

    function load_template($template,$file){
        include $_SERVER['DOCUMENT_ROOT']."/whatso/htdocs/$template/$file.php";
    }

    function gettitle(){
        $current_page= basename($_SERVER['PHP_SELF']);

        switch($current_page){
            case 'blog.php':
                return "Blog page";
            
            default:
                return "Whatso";
        }
    }

}

?>