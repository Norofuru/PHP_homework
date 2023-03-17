<?php
    session_start();
    session_destroy();
    header("Location:week5index.php");
?>