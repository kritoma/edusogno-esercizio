<?php
require_once('config.php');

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="assets/styles/style.css">
    <title>Edusogno</title>
</head>

<body>
    <header>
        <img class="logo" src="assets/img/logo.png" alt="">
    </header>
    <main>

        <div class="form" >
        <h2 class="form-title">Crea il tuo account</h2>
        <form action="register.php" method = "POST" onSubmit="return validate();">

            <div class="input-box">
                <label for="nome">Inserisci il nome</label>
                <input type="text" name="nome" id="nome" placeholder="Mario" required>
            </div>

            <div class="input-box">
                <label for="cognome">Inserisci il cognome</label>
                <input type="text" name="cognome" id="cognome" placeholder="Rossi" required>
            </div>

            <div class="input-box">
                <label for="email">Inserisci la email</label>
                <input type="email" name="email" id="email" placeholder="name@example.com" required>
            </div>

            <div class="input-box">
                <div>
                    <label for="password">Inserisci la password</label>
                </div>
                <div class="password">
                    <input type="password" name="password" id="password" placeholder="Scrivila qui" required>
                    <i class="fa-solid fa-eye " id="eye"></i>
                </div>
            </div>

            <input class="btn" type="submit" value = "registrati">
            <p class="account">Hai già un account? <a href="login.html"><strong>Accedi</strong></a> </p>
        
        </form>
        
        </div>
    </main>

    
    <script src="assets/js/script.js"></script>
</body>

</html>