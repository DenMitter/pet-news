<?php 
    require_once "../vendor/autoload.php"; 
    use App\Database; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <form action="/app/send.php" method="post">
        <input type="text" name="title">
        <input type="text" name="text">
        <input type="submit" value="Добавить">
    </form>

    <?php
        $db = new Database();
        $stmt = $db->conn->prepare("SELECT * FROM `news`");
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        if(count($results) > 0) {
            foreach($results as $result) {
                ?>
                    <div class="news__card">
                        <h3 class="news__title"><?= $result['title'] ?></h3>
                        <p class="news__text"><?= $result['text'] ?></p>
                    </div>
                <?php
            }
        } else {echo "Новин немає";}
    ?>    
</body>
</html>