<?php
    require('lib/print.php');
?>    
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            <?php
               print_title();
            ?>
        </title>
    </head>
    <body>
        <h1><a href="index.php">WEB</a></h1>
        <ol>
            <?php
                print_list();
            ?>     
        </ol>
        <a href="create.php">create</a> 
        <?php if(isset($_GET['id'])) { ?>
            <a href="update.php?id=<?= $_GET['id']; ?>">update</a>
            <form action="delete_process.php" method="post">
                <input type="hidden" name="id" value="<?= $_GET['id'] ?>" />
                <input type="submit" value="delete" />
            </form>
        <?php } ?>
        <h2>
            <?php
                print_title();
            ?>
        </h2>
        <?php
            print_description();
        ?>
    </body>
</html>