<?php
$pageTitle = "Deleting";
include 'header.php';


if (is_numeric($_GET['taskId'])) {
    // read the taskId from the URL parameter using the $_GET collection
    $itemId = $_GET['taskId'];

    try {
        // connect
        $db = new PDO('mysql:host=172.31.22.43;dbname=Brieanna1158732', 'Brieanna1158732', 'z0PV1TNW9O');

        // set up & run the SQL DELETE command
        $sql = "DELETE FROM task WHERE taskId = :taskId";
        $cmd = $db->prepare($sql);
        $cmd->bindParam(':taskId', $taskId, PDO::PARAM_INT);
        $cmd->execute();

        // disconnect
        $db = null;
    }
    catch (exception $e) {
        header('location:error.php');
    }
}

// redirect to the updated items.php page. if no numeric itemId URL param, just reload anyway
header('location:task-list.php');
?>

</body>
</html>
