<!DOCTYPE html>
    <html lang="pt-pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MP3 em PHP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <?php

            if (isset($_GET['page'])) {
                if(file_exists("pages/{$_GET['page']}.php")) {
                    include_once "pages/{$_GET['page']}.php";
                } else {
                    include_once 'pages/error404.php';
                }
                
                
            } else {
                include_once 'pages/albums.php';

            }
            
            ?>
        </div>
        
    </body>
</html>