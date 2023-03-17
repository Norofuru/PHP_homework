<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>非法入侵</title>
</head>
<body>
    非法入侵！請從正常管道進入！
    將於3秒後返回登入畫面，或
    <a href="week5index.php">點擊這裡</a>
    <?php
        header("Refresh:3; url=week5index.php");
    ?>
</body>
</html>