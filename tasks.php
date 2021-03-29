<?php $pageTitle = 'Create a New Task';
include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Tasks</title>
    </head>
    <body>
        <h1>Tasks</h1>
<!--       move to save-task php page-->
        <form method="post" action="save-task.php">
            <fieldset>
<!--                label and input for task-->
                <label for="task">Task: </label>
                <input name="task" id="task" required />
            </fieldset>
            <fieldset>
<!--                label and input for duedate-->
                <label for="duedate">Due Date: </label>
                <input name="duedate" id="duedate">
            </fieldset>
            <fieldset>
<!--                label and dropdown selection for class-->
                <label for="class">Class: </label>
                <select name="class" id="class" required />
                <?php
                //connect
                $db = new PDO('mysql:host=172.31.22.43;dbname=Brieanna1158732', 'Brieanna1158732', 'z0PV1TNW9O');
                //select data
                $sql = "SELECT * FROM class";
                // store and collect data
                $cmd = $db->prepare($sql);
                $cmd->execute();
                $class = $cmd->fetchAll();
                //make a drop down option
                foreach ($class as $c) {
                    echo '<option value="' . $c['class'].'"</option>';
                }
                ?>
             </fieldset>
            //save button
            <button>Save</button>
        </form>
    </body>
</html>
