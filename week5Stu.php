<?php
    session_start();
    if($_SESSION["login"] == "student" || $_SESSION["login"] == "teacher"){

    } else {
        header("Location:week5error.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學生畫面</title>
</head>
<body>
    學生畫面
    <hr/>
    <a href="week5logout.php">登出</a>
</body>
</html>