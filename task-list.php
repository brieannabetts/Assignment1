<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Task List</title>
    </head>
    <body>
    <?php
    $db = new PDO('mysql:host=172.31.22.43;dbname=Brieanna1158732', 'Brieanna1158732', 'z0PV1TNW9O');
    if (!$db)  {
        echo 'could not connect';
    }
    else {
        echo 'connected to the database';
    }
    $db = null;
    ?>
    </body>
</html>
