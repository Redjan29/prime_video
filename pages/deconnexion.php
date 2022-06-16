<?php 
    session_start(); // demarrage de la session
    $_SESSION = arrray();
    session_destroy(); // on détruit la/les session(s), soit si vous utilisez une autre session, utilisez de préférence le unset()
    header('Location:login.php'); // On redirige
    die();
