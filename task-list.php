<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Task List</title>
    </head>
    <body>
    <?php
    // 1. Connect to the db.  Host: 172.31.22.43, DB: dbNameHere, Username: usernameHere, PW: passwordHere
    $user = 'Brieanna1158732';
    $database = 'Brieanna1158732';
    $passw = 'xz0PV1TNW9O';

    try {
        $db = new PDO('mysql:host=172.31.22.43;dbname=Brieanna1158732', 'Brieanna1158732', 'z0PV1TNW9O');
    } catch (PDOException $e) {
        echo "Error when connecting to database: " . $e->getMessage();
        die();
    }

    $sql = "SELECT * FROM tasks";

    $cmd = $db->prepare($sql);
    $cmd->execute();

    $tasks = $cmd->fetchAll();

    echo '<table class= "table-striped table-primary"><thead><th>Task</th><th>Class</th><th>Due Date</th></thead>';

    foreach ($tasks as $indTasks)
    {
        echo '<tr><td>' . $indTasks['task'] . '</td>
        <td>' . $indTasks['class'] . '</td>
        <td>'. $indTasks['duedate'].'</td></tr>';
    }

    echo '</table>';

    $db = null;
    ?>
    </body>
</html>
