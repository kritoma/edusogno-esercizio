<?php

session_start();
if(!isset($_SESSION['logged']) || $_SESSION['logged'] !== true){
    header("location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/style.css">
    <title>Area Privata</title>
</head>
<body>

    <header>
        <img class="logo" src="assets/img/logo.png" alt="">
    </header>
    <div class="form">
        <h2 class="form-title">
            Ciao 
        <?php echo $_SESSION['nome'] ;
            ?> ecco i tuoi eventi
        </h2>
        <div class="event-box">

        <?php
            foreach ($_SESSION['result_event'] as $value) {?>
            <div class="card">
                <div class="event-name">
                    <?php echo $value['nome_evento']; ?> 
                </div>
                <div class="event-data">
                <?php echo $value['data_evento']; ?> 
                </div>
                <div class="btn">join</div>
            </div>
                
        <?php }?>


        </div>
      
    </div>

</body>
</html>