<?php
    $conn = mysqli_connect('localhost', 'root', 'koreait', 'opentutorials');
    
    echo "<h1>single row</h1>";
    $sql = "SELECT * FROM topic WHERE id = 5";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    echo '<h2>'.$row['title'].'</h2>';
    echo $row['description'];

    echo "<h1>multi row</h1>";
    $sql = "SELECT * FROM topic";
    $result = mysqli_query($conn, $sql);
    
    while ( $row = mysqli_fetch_array($array)) {
        echo '<h2>'.$row['title'].'</h2>';
        echo $row['description'];
    }
?>