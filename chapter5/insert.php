<?php
    $mysqli = mysqli_connect("localhost", "root", "koreait", "tutorials");
    //var_dump($mysqli);
    $res = mysqli_query($mysqli, "SHOW TABLES");
    //var_dump($res);
    if(!$res) {
        echo mysqli_error($mysqli);
        exit;
    }

    $row = mysqli_fetch_assoc($res);
    var_dump($row); 
    //$res = $mysqli->query("SHOW TABLES");
?>