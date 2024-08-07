<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
</head>

<body>
    <?php
    session_start();
    if ($_SESSION['status'] == 'login' && $_SESSION['role'] == 'user') {
        echo '<h1> Hai ' . $_SESSION['username'] . '</h1><br>';
        echo '<a href="sessionLogout.php">Logout</a>';
    } else {
        echo "Anda gagal login ";
        echo "<a href='sessionLoginForm.html'>Login Form</a>";
    }

    ?>
</body>

</html>