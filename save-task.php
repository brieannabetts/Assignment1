<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Save Task</title>
</head>
<body>
<?php
// 1. store the form inputs in variables (optional but reduces syntax errors)
$task = $_POST['task'];
$duedate = $_POST['duedate'];
$class= $_POST['class'];
$ok = true;

// 1a. validate inputs before saving
if (empty(trim($task))) {
    echo 'Task is required<br />';
    $ok = false;
}

if (empty($duedate)) {
    echo 'Due Date is required<br />';
    $ok = false;
}

if (empty($class)) {
    echo 'Class is required<br />';
    $ok = false;
}

if ($ok) {
    $db = new PDO('mysql:host=172.31.22.43;dbname=Brieanna1158732', 'Brieanna1158732', 'z0PV1TNW9O');


    $sql = "INSERT INTO task (task, duedate, class) VALUES (:task, :duedate, :class)";

    // 4. populate the INSERT with our variables using a Command variable to prevent SQL Injection
    $cmd = $db->prepare($sql);
    $cmd->bindParam(':task', $task, PDO::PARAM_STR, 40);
    $cmd->bindParam(':duedate', $duedate, PDO::PARAM_STR, 8);
    $cmd->bindParam(':class', $class, PDO::PARAM_STR, 40);

    // 5. execute the INSERT to save the data
    $cmd->execute();

    // 6. disconnect
    $db = null;

    // 7. show confirmation message to user
    echo "<h1>Item Saved</h1>";
}
?>
</body>
</html>
