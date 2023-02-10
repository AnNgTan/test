<?php
session_start();
$strUserPW = "admin:21232f297a57a5a743894a0e4a801fc3";

if (isset($_POST['submit'])) {
    $user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = md5($_POST['password']);
    $input = $user . ":" . $password;
    if ($input == $strUserPW) {
        $_SESSION['user'] = $user;

        $_SESSION['start'] = time();

        $_SESSION['expire'] = $_SESSION['start'] + (5 * 10);

        header('Location: ./dashboard(cau6).php');
    } else {
        echo 'Incorrect email/password';
    }
}
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
    <!-- PHP_SELF la file goc' -->
    <h1>Login to your account</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div>
            <label for="name">User:</label>
            <br>
            <input type="text" name="user">
        </div>
        <div>
            <label for="password">Password:</label>
            <br>
            <input type="password" name="password">
        </div>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>