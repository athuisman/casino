<!DOCTYPE html>
<html>
    <head>
        <title>Casi uitloggen</title>
        <link rel="stylesheet" href="../CSS/uitloggen.css">
    </head>
    <body>
        <div class="uitlogform">
            <div class="box">
            <div class="container">
                    <?php
                        /* Include in elke php pagina gebruiken */
                        include_once 'connect.php';

                        session_destroy();

                        $id = $_SESSION['login_user'];
                        if($id != NULL){
                    ?>
                        <div class="grid-text"><h1>U bent uitgelogd</h1>
                    <?php }else{ ?>
                        <div class="grid-text"><h1>Er is iets fout gegaan!</h1>
                    <?php } ?>
                        <br>
                        <br>
                    <div class="grid-item"><a href="../index.php" class="homebtn">Home</a>
                </div>
            </div>
        </div>
    </body>
</html>