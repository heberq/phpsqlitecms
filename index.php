<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hospedar Site</title>
    </head>
    
    <body>
        <header>
            <?php
              include_once("header.php");  
            ?>
        </header>

        <nav>
            <?php
                include_once("menu.php");
            ?>
        </nav>
        
        <?php

            $page = "";
            if(isset($_GET['page']) && !empty($_GET['page'])){
            $page = addslashes($_GET['page']);
            }

            switch($page){
                case 'home': require 'home.php'; break;
                case 'sobre': require 'sobre.php'; break;
                case 'contato': require 'contato.php'; break;
                default: require 'home.php';
            }

        ?>

        <footer>
            <?php
                include_once("footer.php");
            ?>
       
            <nav>
                <?php
                    include_once("menu.php");
                ?>
            </nav>
        </footer>

    </body>
</html>