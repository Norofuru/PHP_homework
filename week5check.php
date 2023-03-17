<?php
    session_start();

    $priID = "principal";
    $priPWD = "123";
    $teaID = "teacher";
    $teaPWD = "456";
    $stuID = "student";
    $stuPWD = "789";

    $id = $_POST["id"];
    $pwd = $_POST["pwd"];

    if($id == $priID && $pwd == $priPWD){
        $_SESSION["login"] = "principal";
        header("Location:week5Pri.php");
    } elseif ($id == $teaID && $pwd == $teaPWD) {
        $_SESSION["login"] = "teacher";
        header("Location:week5Tea.php");
    } elseif ($id == $stuID && $pwd == $stuPWD) {
        $_SESSION["login"] = "student";
        header("Location:week5Stu.php");
    } else {
        $_SESSION["login"] = "No";
        header("Location:week5fail.php");
    }

?>