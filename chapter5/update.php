<?php
    $conn = mysqli_connect('localhost', 'root', 'koreait', 'opentutorials');

    $sql = "SELECT * FROM topic";   
    $result = mysqli_query($conn, $sql);
    $list = '';

    while( $row = mysqli_fetch_array($result) ) {
        $escaped_title = htmlspecialchars($row['title']);
        $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>WEB</title>
    </head>
    <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol><?= $list ?></ol>
    <form action="process_update.php" method="POST">
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
        <p><input type="text" name="title" placeholder="title" value="<?= $article['title']?>"></p>
        <p><textarea name="description" placeholder="description"><?= $article['description']?></textarea></p>
        <p><input type="submit"></P>
    </form>
    </body>
</html>