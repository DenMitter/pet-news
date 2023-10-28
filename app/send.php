<?php
    require_once("../vendor/autoload.php");

    $data = [
        "title" => htmlspecialchars(trim($_POST["title"])),
        "text" => htmlspecialchars(trim($_POST["text"])),
    ];

    if(empty($data["title"])) {
        echo "Пустий заголовок";
        exit;
    }
    else if(empty($data["text"])) {
        echo "Пустий текст";
        exit;
    } else {
        $news = new App\News();
        $result = $news->createNews($data["title"], $data["text"]);

        if($result == 0) {
            echo "Така новина вже існує";
        } else{
            header("Location: /public/index.php");
        }
    }
?>