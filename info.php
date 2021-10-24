<?php
    require_once './assets/php/db.php';
    require_once './assets/php/functions.php';
?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Portfolio</title>
        
        <link rel="Shortcut Icon" type="image/x-icon" href="./assets/images/ico.ico" />
        
        <meta property="og:image" content="https://i.imgur.com/e9GZaP4.png">

        <link rel="stylesheet" href="./assets/css/index_style.css" />
        <link rel="stylesheet" href="./assets/css/style.css" />

        <!-- jquery-3.6.0.min.js -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
        <!-- clipboard.js v1.7.1 -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.7.1/clipboard.min.js"></script>
        <style></style>
    </head>
    <body>
        <?php include_once './assets/pages/datawrap.php'?>
        
        <script src="./assets/js/main.js"></script>
        <?php if($_GET['category']=='portfolio'):?>
            <script src="./assets/js/portfolio.js"></script>
            <script type="text/javascript">
                window.onload=function(){
                    setplace();
                    setTimeout(() => {
                        setplace();
                    }, 50);
                }
            </script>
        <?php endif?>
    </body>
</html>