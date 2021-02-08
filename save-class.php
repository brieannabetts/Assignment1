<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task List</title>
</head>
<body>
<?php
$class = $_POST['class'];
$ok = true;

if (empty($class)) {
    echo 'Class is required';
    $ok = false;
}

if ($ok) {
    $db = new PDO('mysql:host=172.31.22.43;dbname=Brieanna1158732', 'Brieanna1158732', 'z0PV1TNW9O');

    $sql = "INSERT INTO class (class) VALUES (:class)";

    $cmd = $db->prepare($sql);
    $cmd->bindParam(':class', $class, PDO::PARAM_STR, 100);

    $cmd->execute();

    $db = null;

    echo "<h1>Class Saved</h1>";
}

?>
</body>
</html>
