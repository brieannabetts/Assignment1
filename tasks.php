<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <title> Tasks </title>
    </head>
    <body>
    <h1>Tasks</h1>
    <form method = "post" action="task-list.php">
        <fieldset>
            <label for = "task" > Task: </label>
            <input name ="task" id ="task" required>
        </fieldset>
        <fieldset>
            <label for = "class"> Class: </label>
            <input name="class" id ="class" required>
        </fieldset>
        <fieldset>
            <label for = "duedate"> Due Date: </label>
            <input name = "duedate" id = "duedate" required>
        </fieldset>
        <button>Save</button>
    </body>
</html>
