<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practical 3: History</title>
    <meta charset="UTF-8" />
    <meta name="author" content="step0268" />
    <link rel = "stylesheet" type="text/css" href = "styles/style.css">
    <script src="scripts/script.js" defer></script>
</head>
<body>
    <?php require_once "inc/menu.inc.php"; ?>
    <h1>History</h1>
    <?php
    require_once "inc/dbconn.inc.php";

    $sql1 = "SELECT name FROM Task WHERE completed=1 ORDER BY updated DESC;";
    if($result = mysqli_query($conn, $sql1)){
        if (mysqli_num_rows($result) > 0){
            echo "<ul id = 'list2'>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li>" . $row["name"] . "</li>";
            }
            echo "</ul>";
        }
        mysqli_free_result($result);
    }
    mysqli_close($conn);

    ?>
</body>
</html>