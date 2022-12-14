<?php
    $conn = mysqli_connect('localhost', 'root', 'koreait', 'opentutorials');

    $sql = "SELECT * FROM topic";   
    $result = mysqli_query($conn, $sql);
    $list = '';

    while( $row = mysqli_fetch_array($result) ) {
        $escaped_title = htmlspecialchars($row['title']);
        $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
    }

    $article = array(
        'title' => 'Welcome',
        'description' => 'Hello, web'
    );

    $update_link = '';
    if( isset($_GET['id'])) {
        $filtered_id = mysqli_real_escape_string($conn, $_GET['id']);
        $sql = "SELECT * FROM topic WHERE id={$_GET['id']}";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $article['title'] = htmlspecialchars($row['title']);
        $article['description'] = htmlspecialchars($row['description']);

        $update_link = '<a href="update.php?id='.$_GET['id'].'">update</a>';
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
    <form action="process_create.php" method="POST">
        <p><input type="text" name="title" placeholder="title"></p>
        <p><textarea name="description" placeholder="description"></textarea></p>
        <p><input type="submit"></P>
    </form>
    </body>
</html>