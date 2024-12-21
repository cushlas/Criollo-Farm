<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criollo Farm</title>
    <link rel="stylesheet" href="public/styles.css">

</head>
<body>
<header>
    <h1>Criollo Farm</h1>
    <nav>
        <ul>
            <li><a href="index.php?page=home">Home</a></li>
            <li><a href="index.php?page=about">About</a></li>
            <li><a href="index.php?page=meet_the_team">Meet the Team</a></li>
            <li><a href="index.php?page=meet_the_horses">Meet the Horses</a></li>
            <li><a href="index.php?page=login">Login</a></li>
        </ul>
    </nav>
</header>
<main>
    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case 'home':
                include 'pages/home.php';
                break;
            case 'about':
                include 'pages/about.php';
                break;
            case 'meet_the_team':
                include 'pages/meet_the_team.php';
                break;
            case 'meet_the_horses':
                include 'pages/meet_the_horses.php';
                break;
            case 'login':
                include 'pages/login.php';
                break;
            default:
                echo '<h2>Page not found</h2>';
        }
    } else {
        include 'pages/home.php';
    }
    ?>
</main>
<footer>
    <p>&copy; 2024 Criollo Farm. All rights reserved.</p>
</footer>
</body>
</html>
