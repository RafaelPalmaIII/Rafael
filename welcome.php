<?php

session_start();

// display session from the file "index.php"
if (isset($_SESSION['success_message'])) {
    echo $_SESSION['success_message'];
    unset($_SESSION['success_message']);
}

?>

<!DOCTYPE html>

<html>

    <head>
        <title>Welcome</title>
        <!-- includes Bootstrap CSS library-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container">
            <form method="post" class="mt-5">
                <h2>WELCOME</h2>
                <a href="Loginform.php" class="btn btn-primary">Logout</a>
            </form>
        </div>
    </body>

</html>
