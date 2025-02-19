<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practical 3: Current tasks</title>
    <meta charset="UTF-8" />
    <meta name="author" content="step0268" />
    <link rel = "stylesheet" type="text/css" href = "styles/style.css">
    <script src="scripts/script.js" defer></script>
</head>
<body>
    <?php require_once "inc/menu.inc.php"; ?>
    <h1>Current</h1>
    <?php
    require_once "inc/dbconn.inc.php";

    $sql = "SELECT id, name FROM Task WHERE completed = 0;";
    if($result = mysqli_query($conn, $sql)){
        if (mysqli_num_rows($result) > 0){
            echo "<ul id = 'list'>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li><a href='complete.php?id=".$row["id"]."'>" . $row["name"] . "</li></a>";
            }
            echo "</ul>";
        }
        mysqli_free_result($result);
    }
    mysqli_close($conn);

    ?>
</body>
</html>
