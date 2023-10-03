<?php
    session_start();

    if(isset($_SESSION['USUARIO'])){
        $usuario = $_SESSION['USUARIO'];
    }
    else{
        header("location:login.php");
    }

    if(isset($_POST['log-out'])){
        session_destroy();
        header("location:login.php");
    }
?>