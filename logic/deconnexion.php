<?php
if (isset($_POST['deconnexion'])) {
    session_start();

    session_destroy();
    header("location: login.php");
    exit;
}elseif (isset($_POST['login'])) {
    header('location: modification.php');
}

?>
