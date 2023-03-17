<?php
    session_start();
    if($_SESSION["login"] == "principal"){

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
    <title>校長畫面</title>
</head>
<body>
    校長畫面
    <a href="week5Tea.php">教師畫面</a>
    <hr/>
    <a href="week5logout.php">登出</a>
</body>
</html>