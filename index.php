<?php
session_start();

if (!isset($_SESSION['visitor_count'])) {
    $_SESSION['visitor_count'] = 0;
}
$_SESSION['visitor_count']++;
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Landed by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Landed</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php?page=about">About</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php?page=contact">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php?page=register">Register</a></li>
        </ul>
    </div>
</nav>

<div class="container mt-4">
<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'home':
        include 'content/home.php';
        break;
    case 'about':
        include 'content/about.php';
        break;
    case 'contact':
        include 'content/contact.php';
        break;
    case 'register':
        include 'content/register.php';
        break;
    default:
        include 'content/home.php';
}
?>
</div>

<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <span class="text-muted">Visitor count: <?php echo $_SESSION['visitor_count']; ?></span>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>