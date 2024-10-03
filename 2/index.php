<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discriminant of a quadratic equation</title>
</head>
<body>
    <form action="" method="POST">
        <p>Username <input type="text" name="username" <?php if (isset($_SESSION['loggedInUser'])) echo 'disabled'; ?>></p>
        <p>Password <input type="password" name="password" <?php if (isset($_SESSION['loggedInUser'])) echo 'disabled'; ?>></p>
        <p><input type="submit" value="Login" name="submitBtn"></p>
        <p><input type="submit" value="Logout" name="submitBtn"></p>
    </form>

    <?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_POST['submitBtn'] == 'Login') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            if (!isset($_SESSION['loggedInUser'])) {
                $_SESSION['loggedInUser'] = $username;
                $_SESSION['hashedPassword'] = $hashedPassword;

                echo "<p>User logged in: " . htmlspecialchars($username) . "</p>";
                echo "<p>Password: " . htmlspecialchars($hashedPassword) . "</p>";
            } else {
                echo "<p>User " . htmlspecialchars($_SESSION['loggedInUser']) . " is already logged in. Please wait for them to log out first.</p>";
            }
        } elseif ($_POST['submitBtn'] == 'Logout') {
            if (isset($_SESSION['loggedInUser'])) {
                echo "<p>User " . htmlspecialchars($_SESSION['loggedInUser']) . " has logged out.</p>";
                session_unset();
                session_destroy();
            } else {
                echo "<p>No user is logged in.</p>";
            }
        }
    }
    ?>
</body>
</html>
