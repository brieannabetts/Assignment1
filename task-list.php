<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Task List</title>
    </head>
    <body>
    <h1>Task List</h1>
    <?php
        $db = new PDO('mysql:host=172.31.22.43;dbname=Brieanna1158732', 'Brieanna1158732', 'z0PV1TNW9O');

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
