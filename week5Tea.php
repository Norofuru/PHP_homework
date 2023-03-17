<?php
    session_start();
    if($_SESSION["login"] == "principal" || $_SESSION["login"] == "teacher"){

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
    <title>教師畫面</title>
</head>
<body>
    教師畫面
    <?php
        if($_SESSION["login"] == "principal"){
            echo "<a href=\"week5Stu.php\" style=\"display: none\">學生畫面</a></p>";
        } else {
            echo "<a href=\"week5Stu.php\">學生畫面</a></p>";
        }
    ?>
    <hr/>
    <a href="week5logout.php">登出</a>
</body>
</html>