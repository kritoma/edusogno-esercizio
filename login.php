<?php

require_once('config.php');

$email = $connessione->real_escape_string($_POST['email']);
$password = $connessione->real_escape_string($_POST['password']);
$result_event = [];
$i = 0 ;

$sql_select = "SELECT * FROM utenti WHERE email = '$email' "; 
$sql_select_event = "SELECT * FROM `eventi` WHERE attendees LIKE '%$email%';";
        $result = $connessione->query($sql_select_event);
        if ($result && $result->num_rows > 0){
            while($row = $result ->fetch_assoc()){
                $result_event[$i]['nome_evento']  = $row['nome_evento'] ;
               
                $result_event[$i]['data_evento']  = $row['data_evento'] ;
                $i++;
                } 
            }
        

if($_SERVER["REQUEST_METHOD"] === "POST"){
    if($result = $connessione->query($sql_select)){
        
        if($result->num_rows == 1){
            $row = $result->fetch_array(MYSQLI_ASSOC);
            if(password_verify($password, $row['password'])){
                session_start();
                $_SESSION['logged'] = true;
                $_SESSION['id'] = $row['id'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['nome'] = $row['nome'];
                $_SESSION['cognome'] = $row['cognome'];
                $_SESSION['result_event'] = $result_event;
                header("location: private-area.php");
            }else{
                echo "la password non è corretta";
            }
        }else{
            echo "non ci sono account con quell'username";
        }
    } else {
        echo "errore in fase di login";
    }
    $connessione ->close();
}
?>