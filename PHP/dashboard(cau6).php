<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>This is dashboard</h1>
    <?php
    if (isset($_SESSION['user'])) {
        $now = time();

        if ($now > $_SESSION['expire']) {
            session_destroy();
            echo "<p align='center'>Session has been destroyed!!";
            header("Location: index.php");
        }

        echo 'Welcome to Dashboard page <br>';
        echo 'User:' . $_SESSION['user'] . '<br>';
        echo '<a href="./logout.php" > Logout </a>';
    } else {
        echo 'Welcome guest to Dashboard page';
        echo '<a href="./cau6.php" > Back to login </a>';
    }
    ?>
</body>

</html>