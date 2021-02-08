<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Tasks</title>
    </head>
    <body>
        <h1>Tasks</h1>
        <form method="post" action="save-task.php">
            <fieldset>
                <label for="task">Task: </label>
                <input name="task" id="task" required />
            </fieldset>
            <fieldset>
                <label for="duedate">Due Date: </label>
                <input name="duedate" id="duedate">
            </fieldset>
            <fieldset>
                <label for="class">Class: </label>
                <select name="class" id="class" required />
                <?php
                $db = new PDO('mysql:host=172.31.22.43;dbname=Brieanna1158732', 'Brieanna1158732', 'z0PV1TNW9O');

                $sql = "SELECT * FROM dropdown";

                $cmd = $db->prepare($sql);
                $cmd->execute();
                $dropdown = $cmd->fetchAll();

                foreach ($dropdown as $c) {
                    echo '<option value="' . $c['class'].'"</option>';
                }
                ?>
             </fieldset>
            <button>Save</button>
        </form>
    </body>
</html>
