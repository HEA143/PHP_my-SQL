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
    $result = mysqli_query($conn, $sql);
    if( $result === false ) {
        echo mysqli_error($conn);
    }
?>