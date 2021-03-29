<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SCHOOL SCHEDULE || <?php echo $pageTitle; ?></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

    <!-- link to custom js file to use delete confirmation function -->
    <script type="text/javascript" src="js/scripts.js"></script>

    <!-- bootstrap js for css animations -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<!-- Bootstrap navbar from https://getbootstrap.com/docs/5.0/components/navbar/#nav -->
<nav class="navbar navbar-expand-lg navbar-dark custom-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="home-page.php">HOME PAGE</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="task-list.php">TASK List</a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class = "navbar-nav">
                <li class="nav-tasks">
                    <a class ="nav-link" aria-current ="page" href="tasks.php">ADD to Task List</a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class = "navbar-nav">
                <li class="nav-tasks">
                    <a class ="nav-link" aria-current ="page" href="class-dropdown.php">ADD Classes</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

