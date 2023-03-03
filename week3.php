<?php
    if(isset($_POST["meal"])){
        $id = $_POST["id"];
        $name = $_POST["name"];
        echo "你的學號是：" .$id. "<br/>";
        echo "你的姓名是：" .$name. "<br/>";

        $gender = $_POST["gender"];
        if($gender == "male"){
            echo "你的性別是：男<br/>";
        } if($gender == "female"){
            echo "你的性別是：女<br/>";
        }

        $email = $_POST["email"];
        echo "你的e-mail是：" .$email. "<br/>";

        echo "你選擇的可行時間為：<br/>";
        if(isset($_POST["monAM"])){
            echo "一 11~14<br/>";
        }
        if(isset($_POST["tuePM"])){
            echo "二 17~20<br/>";
        }
        if(isset($_POST["wesAM"])){
            echo "三 11~14<br/>";
        }
        if(isset($_POST["thuPM"])){
            echo "四 17~20<br/>";
        }
        if(isset($_POST["monAM"])){
            echo "五 11~14<br/>";
        }
        if(isset($_POST["satPM"])){
            echo "六 17~20<br/>";
        }
        if(isset($_POST["sunAM"])){
            echo "日 11~14<br/>";
        }
        if(isset($_POST["sunPM"])){
            echo "日 17~20<br/>";
        }

        echo "你選擇的套餐是：";
        $meal = $_POST["meal"];
        foreach ($meal as $a) {
            if($a == "economy"){
                echo "經濟套餐 ";
            }
            if($a == "petite"){
                echo "小資套餐 ";
            }
            if($a == "luxury"){
                echo "豪華套餐 ";
            }
            if($a == "lobster"){
                echo "特選龍蝦 ";
            }
            if($a == "kingCrab"){
                echo "特選帝王蟹 ";
            }
        }
        echo "<br/>";

        echo "<hr/><br/>感謝你的參與！！！期待與你的相遇！";

    } else {
        echo "資料填寫錯誤！";
    }


?>