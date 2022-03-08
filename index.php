<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hospedar Site</title>
    </head>
    
    <body>
        <?php

            $page = "";
            if(isset($_GET['page']) && !empty($_GET['page'])){
            $page = addslashes($_GET['page']);
            }

            switch($page){
                case 'home': require 'home.html'; break;
                case 'sobre': require 'sobre.html'; break;
                case 'contato': require 'contato.html'; break;
                default: require 'home.html';
            }

        ?> 

    </body>
</html>