<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Medcussion</title>
        <meta charset="UTF-8">
        <meta name="description" contens="Medcussion">
        <link rel="stylesheet" href="style.css" type="text/css">
        <link href='https://fonts.googlelapis.com/css?family=Blinker' rel='stylesheet'>
    </head>
    <body>
        <nav id="navigation">
            <ul>
                <li><a href="index.php?page=home" img src="">Home</a></li>
                <li><a href="index.php?page=forum" img src="">Home</a></li>
                <li><a href="index.php?page=about" img src="">Home</a></li>
                <li><a class="login" href="index.php?page=login" img src="">Login</a></li>
            </ul>
        </nav>
        <header>
            <h1 class="title">Medcussion</h1>
            <h3 class="desc">Diskusikan Kesehatanmu Dengan Ahlinya!</h3>
            <img class="logo" src="">
        </header>
        <div id="contents">
            <?php
            if(isset($_GET['page'])){
                $page = $_GET['page'];

                switch($page){
                    case 'home':
                        include "home.php";
                        break;
                    case 'list':
                        include "forum.php";
                        break;
                    case 'about':
                        include "about.php";
                        break;
                    case 'login':
                        include "login.php";
                        break;
                }
            } else {
                include "home.php";
            } ?>
        </div>
        <footer>
            &copy Copyright
        </footer>
    </body>
</html>