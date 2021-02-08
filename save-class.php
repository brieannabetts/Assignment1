<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task List</title>
</head>
<body>
<?php
//class post
$class = $_POST['class'];
//make a boolean flag
$ok = true;
// if the input of the class is empty
if (empty($class)) {
    // say this
    echo 'Class is required';
    // flag is false
    $ok = false;
}
// if input is there
if ($ok) {
    // connect
    $db = new PDO('mysql:host=172.31.22.43;dbname=Brieanna1158732', 'Brieanna1158732', 'z0PV1TNW9O');
    // insert class table
    $sql = "INSERT INTO class (class) VALUES (:class)";

    $cmd = $db->prepare($sql);
    $cmd->bindParam(':class', $class, PDO::PARAM_STR, 100);
    // execute
    $cmd->execute();
    // disconnect
    $db = null;

    echo "<h1>Class Saved</h1>";
}

?>
    </body>
</html>
