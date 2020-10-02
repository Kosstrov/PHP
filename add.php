<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practical 3: Add</title>
    <meta charset="UTF-8" />
    <meta name="author" content="step0268" />
    <link rel = "stylesheet" type="text/css" href = "styles/style.css">
    <script src="scripts/script.js" defer></script>
</head>
<body>
    <?php require_once "inc/menu.inc.php"; ?>
    <h1>Add a new task</h1>

    <form method="POST" action="add-task.php">  
            <input type = "text" id="task" name ="task" autofocus placeholder="Enter the task name" required/>
            <input type = "submit" id="submit" value="Add task"/>
        </form>    

</body>
</html>
