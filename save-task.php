<?php $pageTitle = 'Task Saved';
include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Save Task</title>
</head>
<body>
<?php
// store variables
$task = $_POST['task'];
$duedate = $_POST['duedate'];
$class= $_POST['class'];
// make a flag
$ok = true;

// make sure everything has been filled in
//if the  task is empty
if (empty(trim($task))) {
    //let the user know the task is required
    echo 'Task is required<br />';
    // set flag to false
    $ok = false;
}
// if the due date is empty
if (empty($duedate)) {
    // let user know due date is required
    echo 'Due Date is required<br />';
    // set flag to false
    $ok = false;
}
// if the class is empty
if (empty($class)) {
    //let user know class is required
    echo 'Class is required<br />';
    // set flag to false
    $ok = false;
}
// if flaq is true
if ($ok) {
    // connect
    $db = new PDO('mysql:host=172.31.22.43;dbname=Brieanna1158732', 'Brieanna1158732', 'z0PV1TNW9O');

    // insert and merge into one table
    $sql = "INSERT INTO task (task, duedate, class) VALUES (:task, :duedate, :class)";
    $cmd = $db->prepare($sql);
    $cmd->bindParam(':task', $task, PDO::PARAM_STR, 40);
    $cmd->bindParam(':duedate', $duedate, PDO::PARAM_STR, 8);
    $cmd->bindParam(':class', $class, PDO::PARAM_STR, 40);

    //execute
    $cmd->execute();

    // disconnect
    $db = null;

    echo "<h1>Item Saved</h1>";
}
?>
</body>
</html>
