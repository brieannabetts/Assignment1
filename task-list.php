<?php $pageTitle = 'Updated School Schedule';
include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Task List</title>
    </head>
    <body>
    <h1>Task List</h1>
    <script>src="js/js.js</script>
    <?php
//     connect
        $db = new PDO('mysql:host=172.31.22.43;dbname=Brieanna1158732', 'Brieanna1158732', 'z0PV1TNW9O');
    // select everything from table
    $sql = "SELECT * FROM tasks";
    // execute
    $cmd = $db->prepare($sql);
    $cmd->execute();
    // collect all data
    $tasks = $cmd->fetchAll();
    //create columns
    echo '<table class= "table-striped table-primary"><thead><th>Task</th><th>Class</th><th>Due Date</th></thead>';

    foreach ($tasks as $indTasks)
    {
        // have columns show on page
        echo '<tr><td>' . $indTasks['task'] . '</td>
        <td>' . $indTasks['class'] . '</td>
        <td>'. $indTasks['duedate'].'</td></tr>';
    }

    echo '</table>';
    //disconnect
    $db = null;
    ?>
    </body>
</html>
