<?php
    $conn = mysqli_connect("localhost", "root", "koreait", "tutorials");
    $sql = "
        INSERT INTO topic (
            title,
            description,
            created
        ) VALUES (
            'My SQL',
            'My SQL is...',
            NOW()
        )";
    mysqli_query($conn, $sql); 
?>