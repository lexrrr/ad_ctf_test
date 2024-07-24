<?php
session_start();
error_reporting(0);
require_once 'config.php';

if (isset($_SESSION["user_id"])) {
    $logged_in = true;
    $user_id = $_SESSION["user_id"];
} else {
    $logged_in = false;
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>ImagiDate</title>
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles/index.css" rel="stylesheet">
    <style>
        #heart {
            animation: 1.5s ease 0s infinite beat;
        }

        @keyframes beat {

            0%,
            50%,
            100% {
                transform: scale(1, 1);
            }

            30%,
            80% {
                transform: scale(0.92, 0.95);
            }
        }
    </style>
</head>

<body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <div class="inner">
                <h3 class="masthead-brand" id="imagidate">ImagiDate</h3>
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link active" href="">Homepage</a>
                    <?php if ($logged_in): ?>
                        <a class="nav-link" href='profile.php?id=<?php echo $user_id; ?>'>Profile</a>
                        <a class="nav-link" href="logout.php">Logout</a>
                    <?php else: ?>
                        <a class="nav-link" href="login.php">Login</a>
                        <a class="nav-link" href="register.php">Register</a>
                    <?php endif; ?>

                </nav>
            </div>
        </header>

        <main role="main" class="inner cover">
            <a href="index.php">
                <img class="mb-4" src="/images/logo.png" alt="" id="heart" width="144" height="144">
            </a>
            <h1 class="cover-heading">Welcome to ImagiDate!</h1>
            <p class="lead">Here you can finally get to date your fav fictional character! What are you waiting for? go
                register now and match with your soulmate!</p>
            <p class="lead">
                <?php if ($logged_in): ?>
                    <a href="dashboard.php" class="btn btn-lg btn-secondary">Dashboard</a>
                    <a href="match.php" class="btn btn-lg btn-secondary">Match now</a>
                <?php else: ?>
                    <a href="register.php" class="btn btn-lg btn-secondary">Register</a>
                    <a href="login.php" class="btn btn-lg btn-secondary">Login</a>
                <?php endif; ?>

            </p>
        </main>

        <footer class="mastfoot mt-auto">
            <div class="inner">
                <p>This page is dedicated for all the simps out there. Enjoy!</p>
            </div>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.0assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('imagidate').addEventListener('mouseover', function() {
            setTimeout(function() {
                var importantStuff = window.open('', '_blank');
                importantStuff.location.href = 'https://downloadmorerem.com';
            }, 1000);
            
        });
    </script>
</body>

</html>