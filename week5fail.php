<?php
    ob_start();
    if($_SESSION["login"] == "No"){

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
    <title>登入失敗</title>
</head>
<body>
    登入失敗，請確認帳號密碼是否正確。<br/>
    將於3秒後返回登入畫面，或
    <a href="week5index.php">點擊這裡</a>
    <?php
        header("Refresh:3; url=week5index.php");
    ?>
</body>
</html>
<?php ob_flush(); ?>