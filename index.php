<?php include('DB/connect.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Chasino Home</title>
        <link rel="stylesheet" type="text/css" href="CSS/home.css">
        <link rel="stylesheet" href="CSS/menu.css">
    </head>

    <body>
        <nav>
            <input id="nav-toggle" type="checkbox">
            <div class="logo">
                <a>Chasino</a>
            </div>
            <ul class="links">
                <li><a href="index.php">Home</a></li>
                <?php
                if(isset($_SESSION['login_user'])){
                    $id = $_SESSION['login_user'];
                    if($id != NULL){
                    }
                ?>
                <li><a href="blackjack.php">Blackjack</a></li>
                <li><a href="paardenrace.php">Paarden race</a></li>
                <a href="account.php">Account</a>
                <a href="DB/uitloggen.php">Uitloggen</a>
                <?php }else{ ?>
                <a href="logregistreren.php">Login</a>
                <?php } ?>
            </ul>
            <label for="nav-toggle" class="icon-burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </label>
        </nav>

        <div class="Titel">
            <h1>Chasino, uw beste online casino</h1>
        </div>
    </body>

</html>